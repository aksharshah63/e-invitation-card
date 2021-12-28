<?php

namespace App\Http\Controllers\admin;

use App\Utility;
use App\Wedding;
use App\Occasion;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use File;
use Auth;
use Symfony\Component\Console\Input\Input;
use Redirect;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->type=="Superadmin")
        {
            $weddings = Wedding::get();
            return view('admin.wedding.index',compact('weddings'));
        }
        else
        {
            $weddings = Wedding::where('user_id',Auth::user()->id)->get();
            return view('admin.wedding.index',compact('weddings'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wedding.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'boy_name' => 'required',
            'boy_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'girl_name' => 'required',
            'girl_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'wedding_date' => 'required',
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'invited_by_address'=> 'required',
            'country_code' => 'required',
            'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
        ]);
        

        if(strtotime($request->wedding_date) <= strtotime(date("Y-m-d")))
        {
            return redirect()->back()->with('error', 'Please Add Wedding Date is Future Date'); 
        }

        if(empty($request->boy_image1) || $request->boy_image1=='')
        {
            return redirect()->back()->with('error', 'Please Set Preview or Crop Boy Image.'); 
        }

        if(empty($request->girl_image2) || $request->girl_image2=='')
        {
            return redirect()->back()->with('error', 'Please Set Preview or Crop Girl Image.'); 
        }

        if($request->invited_by_name[0]==null && $request->invited_by_phone[0]==null)
        {
            return redirect()->back()->with('error', 'Please Add Invited Name and Invited Phone.'); 
        }
        if($request->invited_by_name[0]==null)
        {
            return redirect()->back()->with('error', 'Please Add Invited Name.'); 
        }
        if($request->invited_by_phone[0]==null)
        {
            return redirect()->back()->with('error', 'Please Add Invited Phone.'); 
        }
       
        $randomid = mt_rand(100000000000000,999999999999999);
        $wedding=new Wedding();
        $wedding->boy_name = str_replace(' ','-',$request->boy_name);
        $folderPath = base_path('public/wedding/images/');
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        
        $boy_name = $request->boy_image1;

            list($type, $boy_name) = explode(';', $boy_name);
            list(, $boy_name)      = explode(',', $boy_name);
            $image = base64_decode($boy_name);
            $ImageName1= uniqid() .'.png';
            $path = $folderPath.$ImageName1;
            file_put_contents($path, $image);

        $wedding->boy_image=$ImageName1;
        $wedding->boy_instagram = $request->boy_instagram;
        $wedding->boy_facebook = $request->boy_facebook;
        $wedding->boy_twitter = $request->boy_twitter;
        $wedding->boy_pinterest = $request->boy_pinterest;
        
        $wedding->girl_name = str_replace(' ','-',$request->girl_name);
        //$girl_name = Utility::uploadFile($request->file('girl_image'));

        // $image_parts2 = explode(";base64,", $request->girl_image1);
        // $image_type_aux2 = explode("image/", $image_parts2[0]);
        // $image_type2 = $image_type_aux2[1];
        // $image_base642 = base64_decode($image_parts2[1]);
        
        // $girl_name = uniqid() . '.png';
        // $imageFullPath2 = $folderPath.$girl_name;
        // file_put_contents($imageFullPath2, $image_base642);
        $girl_image = $request->girl_image2;

            list($type, $girl_image) = explode(';', $girl_image);
            list(, $girl_image)      = explode(',', $girl_image);
            $girl_image = base64_decode($girl_image);
            $ImageName2= uniqid() .'.png';
            $path = $folderPath.$ImageName2;
            file_put_contents($path, $girl_image);

        $wedding->girl_image=$ImageName2;
        $wedding->girl_instagram = $request->girl_instagram;
        $wedding->girl_facebook = $request->girl_facebook;
        $wedding->girl_twitter = $request->girl_twitter;
        $wedding->girl_pinterest = $request->girl_pinterest;
        

        $wedding->wedding_date = $request->wedding_date;
        $wedding->uuid = ucfirst($wedding->boy_name).'-'.'Weds'.'-'.ucfirst($wedding->girl_name);
        $wedding->random_number = $randomid;

        $banner_image = Utility::uploadFile($request->file('banner_image'));
        $wedding->banner_image=$banner_image;


        // $wedding->invited_by_name = str_replace(' ','-',$request->invited_by_name);
        $wedding->invited_by_name = $request->invited_by_name[0];

        $wedding->invited_by_address = $request->invited_by_address;
        $wedding->country_code = $request->country_code;
        $wedding->invited_by_phone = $request->invited_by_phone[0];
        $wedding->user_id = Auth::user()->id;
        $audio = Utility::audiouploadFile($request->file('audio'));
        $wedding->audio=$audio;
        $wedding->save();

        return redirect()->route('weddings.index')->with('success', 'Wedding created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function show(Wedding $wedding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function edit(Wedding $wedding)
    {
        return view('admin.wedding.edit', compact('wedding'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wedding $wedding)
    {
        $request->validate([
            'boy_name' => 'required',
            'boy_image' => 'mimes:jpeg,png,jpg,gif,svg|max:15360',
            'girl_name' => 'required',
            'girl_image' => 'mimes:jpeg,png,jpg,gif,svg|max:15360',
            'wedding_date' => 'required',
            'banner_image' => 'mimes:jpeg,png,jpg,gif,svg|max:15360',
            'invited_by_address'=> 'required',
            'country_code' => 'required',
            'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
        ]);

        if(empty($request->boy_image1) && isset($request->boy_image1)){
            return redirect()->back()->withInput($request->input())->withErrors('Please Select Boy Image.');
        }
        if(empty($request->girl_image1) && isset($request->girl_image1)){
            return redirect()->back()->withInput($request->input())->withErrors('Please Select Girl Image.');
        }
        if(empty($request->banner_image) && isset($request->banner_image)){
            return redirect()->back()->withInput($request->input())->withErrors('Please Select Banner Image.');
        }
        if(strtotime($request->wedding_date) <= strtotime(date("Y-m-d")))
        {
            return redirect()->back()->with('error', 'Please Add Wedding Date is Future Date'); 
        }

        // if(empty($request->boy_image1) || $request->boy_image1=='')
        // {
        //     return redirect()->back()->with('error', 'Please Set Preview or Crop Boy Image.'); 
        // }

        // if(empty($request->girl_image2) || $request->girl_image2=='')
        // {
        //     return redirect()->back()->with('error', 'Please Set Preview or Crop Girl Image.'); 
        // }

        if(in_array(null,$request->invited_by_name) && in_array(null,$request->invited_by_phone))
        {
            return redirect()->back()->with('error', 'Please Add Invited Name and Invited Phone.'); 
        }
        if(in_array(null,$request->invited_by_name))
        {
            return redirect()->back()->with('error', 'Please Add Invited Name.'); 
        }
        if(in_array(null,$request->invited_by_phone))
        {
            return redirect()->back()->with('error', 'Please Add Invited Phone.'); 
        }
        

        $boy_image_name = Wedding::find($wedding->id);
        
        $boyImageName = $boy_image_name->boy_image;
        if (null !== $request->boy_image1) {
            \File::delete(base_path('public/wedding/images/' . $boy_image_name->boy_image));
            //$boyImageName = Utility::uploadFile($request->file('boy_image'), $boy_image_name->created_at);
            $folderPath = base_path('public/wedding/images/');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }
            // $image_parts1 = explode(";base64,", $request->boy_image1);
            // $image_type_aux1 = explode("image/", $image_parts1[0]);
            // $image_type1 = $image_type_aux1[1];
            // $image_base641 = base64_decode($image_parts1[1]);
            
            // $boyImageName = uniqid() . '.png';
            // $imageFullPath1 = $folderPath.$boyImageName;
            // file_put_contents($imageFullPath1, $image_base641);
            $boy_name = $request->boy_image1;

            list($type, $boy_name) = explode(';', $boy_name);
            list(, $boy_name)      = explode(',', $boy_name);
            $image = base64_decode($boy_name);
            $boyImageName= uniqid() .'.png';
            $path = $folderPath.$boyImageName;
            file_put_contents($path, $image);
        }

        $girl_image_name = Wedding::find($wedding->id);
        
        $girlImageName = $girl_image_name->girl_image;
        if (null !== $request->girl_image1) {
            \File::delete(base_path('public/wedding/images/' . $girl_image_name->girl_image));
            //$girlImageName = Utility::uploadFile($request->file('girl_image'), $girl_image_name->created_at);

            $folderPath = base_path('public/wedding/images/');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }
            // $image_parts2 = explode(";base64,", $request->girl_image1);
            // $image_type_aux2 = explode("image/", $image_parts2[0]);
            // $image_type2 = $image_type_aux2[1];
            // $image_base642 = base64_decode($image_parts2[1]);
            
            // $girlImageName = uniqid() . '.png';
            // $imageFullPath2 = $folderPath.$girlImageName;
            // file_put_contents($imageFullPath2, $image_base642);
            $girl_image = $request->girl_image1;

            list($type, $girl_image) = explode(';', $girl_image);
            list(, $girl_image)      = explode(',', $girl_image);
            $girl_image = base64_decode($girl_image);
            $girlImageName= uniqid() .'.png';
            $path = $folderPath.$girlImageName;
            file_put_contents($path, $girl_image);
        }

        $banner_image_name = Wedding::find($wedding->id);
        
        $bannerImageName = $banner_image_name->banner_image;
        if (null !== $request->file('banner_image')) {
            \File::delete(base_path('public/wedding/images/' . $banner_image_name->banner_image));
            $bannerImageName = Utility::uploadFile($request->file('banner_image'));
        }
        $audio = $banner_image_name->audio;
        if (null !== $request->file('audio')) {
            \File::delete(base_path('public/wedding/audio/' . $banner_image_name->audio));
            $audio = Utility::audiouploadFile($request->file('audio'));
        }
        

        $wedding = Wedding::find($wedding->id);

        $wedding->boy_name = str_replace(' ','-',$request->boy_name);
        $wedding->boy_image=$boyImageName;
        $wedding->boy_instagram = $request->boy_instagram;
        $wedding->boy_facebook = $request->boy_facebook;
        $wedding->boy_twitter = $request->boy_twitter;
        $wedding->boy_pinterest = $request->boy_pinterest;
        
        $wedding->girl_name = str_replace(' ','-',$request->girl_name);
        $wedding->girl_image=$girlImageName;
        $wedding->girl_instagram = $request->girl_instagram;
        $wedding->girl_facebook = $request->girl_facebook;
        $wedding->girl_twitter = $request->girl_twitter;
        $wedding->girl_pinterest = $request->girl_pinterest;

        $wedding->wedding_date = $request->wedding_date;

        $wedding->banner_image=$bannerImageName;

         $wedding->invited_by_name = $request->invited_by_name[0];

        $wedding->invited_by_address = $request->invited_by_address;
        $wedding->country_code = $request->country_code;
        $wedding->invited_by_phone = $request->invited_by_phone[0];
        $wedding->uuid = ucfirst($wedding->boy_name).'-'.'Weds'.'-'.ucfirst($wedding->girl_name);
        $wedding->audio=$audio;
        
        $wedding->save();

        return redirect()->route('weddings.index')->with('success', 'Wedding updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wedding  $wedding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wedding $wedding)
    {
        $wedding->delete();

        //redirect()->route('occasions.index');
        return redirect()->route('weddings.index')->with('success', 'Wedding deleted successfully');
    }

    public function clone($id)
    {
        $wedding = Wedding::find($id);
        $newmember = $wedding->replicate();

        $randomid = mt_rand(100000000000000,999999999999999);
        $newmember->boy_name = str_replace(' ','-',$newmember->boy_name);
        $newmember->boy_instagram = $newmember->boy_instagram;
        $newmember->boy_facebook = $newmember->boy_facebook;
        $newmember->boy_twitter = $newmember->boy_twitter;
        $newmember->boy_pinterest = $newmember->boy_pinterest;
        $newmember->boy_image=null;
        
        $newmember->girl_name = str_replace(' ','-',$newmember->girl_name);
        $newmember->girl_instagram = $newmember->girl_instagram;
        $newmember->girl_facebook = $newmember->girl_facebook;
        $newmember->girl_twitter = $newmember->girl_twitter;
        $newmember->girl_pinterest = $newmember->girl_pinterest;
        $newmember->girl_image=null;

        $newmember->wedding_date = $newmember->wedding_date;
        $folderPath1 = base_path('public/wedding/images/');
        if (!file_exists($folderPath1)) {
            mkdir($folderPath1, 0777, true);
        }
        $getimage1 = base_path('public/wedding/images/' .$newmember->banner_image);
        File::copy($getimage1, $folderPath1.'banner_'.$newmember->banner_image);
        $newmember->banner_image = 'banner_'.$newmember->banner_image;
        $newmember->invited_by_name = $newmember->invited_by_name;
        $newmember->invited_by_address = $newmember->invited_by_address;
        $newmember->country_code = $newmember->country_code;
        $newmember->invited_by_phone = $newmember->invited_by_phone;
        $newmember->uuid = ucfirst($newmember->boy_name).'-'.'Weds'.'-'.ucfirst($newmember->girl_name);
        $newmember->random_number = $randomid;
        $newmember->user_id = $newmember->user_id;
        // $newmember->created_at=$wedding->created_at;
        $getimage2 = base_path('public/wedding/audio/' .$newmember->audio);
        $folderPath2 = base_path('public/wedding/audio/');
        if (!file_exists($folderPath2)) {
            mkdir($folderPath2, 0777, true);
        }
        File::copy($getimage2, $folderPath2.'audio_'.$newmember->audio);
        $newmember->audio = 'audio_'.$newmember->audio;
        $newmember->save();

        $occasions = Occasion::where('wedding_id',$wedding->id)->get();
        if(!empty($occasions))
        {
            foreach($occasions as $occasion)
            {
                $newmember1 = $occasion->replicate();

                $newmember1->name = $newmember1->name;
                $newmember1->date = $newmember1->date;  
                $newmember1->time = $newmember1->time;
                $newmember1->AM_PM = $newmember1->AM_PM;
                $newmember1->description = $newmember1->description;
                $newmember1->location = $newmember1->location;
                $image = array('dandiya-ras.jpg','ganesha.jpg','haldi.jpg','engage.jpg','hath-dhan.jpg','mayra.jpg','mehndi.jpg','reception.jpg','sangit.jpg','wedding.jpg');
                $folderPath = base_path('public/occasion/images/' . $newmember->id.'/');
                if (!file_exists($folderPath)) {
                    mkdir($folderPath, 0777, true);
                }
                if((in_array($occasion->image, $image)))
                {
                    $getimage = public_path('images/' . $occasion->image);
                }
                else
                {
                    $getimage = public_path('occasion/images/' . $wedding->id.'/'.$occasion->image);
                }
                File::copy($getimage, $folderPath.$newmember1->image);
                $newmember1->image=$newmember1->image;
                $newmember1->wedding_id=$newmember->id;
                
                $newmember1->save();
            }
        }
        
        

        return redirect()->route('weddings.index')->with('success', 'Clone successfully');
    }
}
