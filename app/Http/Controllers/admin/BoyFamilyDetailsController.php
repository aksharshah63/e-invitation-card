<?php

namespace App\Http\Controllers\admin;

use App\Utility;
use App\BoyFamilyDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoyFamilyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $grooms = BoyFamilyDetails::where('wedding_id',$id)->orderBy('sort','ASC')->get();
         return view('admin.groom.index',compact('grooms','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.groom.create',compact('id'));
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
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:15360',
            'name' => 'required',
            'relationship' => 'required',
        ]);


        if(empty($request->image1) || $request->image1=='')
        {
            return redirect()->back()->withInput($request->input())->withErrors('Please Set Or Crop Image.');
        }
        
        $folderPath = base_path('public/groom/images/' . $request->wedding_id.'/');
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
        // $image_parts = explode(";base64,", $request->image1);
        // $image_type_aux = explode("image/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
        // $image_base64 = base64_decode($image_parts[1]);
        
        // $imageName = uniqid() . '.png';
        // $imageFullPath = $folderPath.$imageName;
        // file_put_contents($imageFullPath, $image_base64);
        $image = $request->image1;

        list($type, $image) = explode(';', $image);
        list(, $image)      = explode(',', $image);
        $image = base64_decode($image);
        $imageName= uniqid() .'.png';
        $path = $folderPath.$imageName;
        file_put_contents($path, $image);

        $boyfamilydetails=new BoyFamilyDetails();
        $boyfamilydetails->name = $request->name;
        $boyfamilydetails->relationship = $request->relationship;
        $boyfamilydetails->image=$imageName;
        $boyfamilydetails->wedding_id=$request->wedding_id;
        $boyfamilydetails->save();

        return redirect()->route('groom.index',$boyfamilydetails->wedding_id)->with('success', 'Groom created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoyFamilyDetails  $boyFamilyDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grooms = BoyFamilyDetails::where('wedding_id',$id)->orderBy('sort','ASC')->get();
         return view('admin.groom.view',compact('grooms','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoyFamilyDetails  $boyFamilyDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boyfamilydetails = BoyFamilyDetails::find($id);
        return view('admin.groom.edit', compact('boyfamilydetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoyFamilyDetails  $boyFamilyDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:15360',
            'name' => 'required',
            'relationship' => 'required',
        ]);
        $wedding_id=$request->wedding_id;
        $image_name = BoyFamilyDetails::find($id);
        
        $ImageName = $image_name->image;
        if (null !== $request->image1) {
            \File::delete(base_path('public/groom/images/' . $image_name->wedding_id . '/' . $image_name->image));
            //$ImageName = Utility::groomuploadFile($request->file('image'), $image_name->wedding_id);
            $folderPath = base_path('public/groom/images/' . $image_name->wedding_id.'/');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }
            // $image_parts = explode(";base64,", $request->image1);
            // $image_type_aux = explode("image/", $image_parts[0]);
            // $image_type = $image_type_aux[1];
            // $image_base64 = base64_decode($image_parts[1]);
            
            // $ImageName = uniqid() . '.png';
            // $imageFullPath = $folderPath.$ImageName;
            // file_put_contents($imageFullPath, $image_base64);
            $image = $request->image1;

            list($type, $image) = explode(';', $image);
            list(, $image)      = explode(',', $image);
            $image = base64_decode($image);
            $ImageName= uniqid() .'.png';
            $path = $folderPath.$ImageName;
            file_put_contents($path, $image);
        }
        $boyfamilydetails=BoyFamilyDetails::find($id);
        $boyfamilydetails->image=$ImageName;
        $boyfamilydetails->name = $request->name;
        $boyfamilydetails->relationship = $request->relationship;
        $boyfamilydetails->save();
        return redirect()->route('groom.index',$wedding_id)->with('success', 'Groom updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoyFamilyDetails  $boyFamilyDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BoyFamilyDetails::where('id',$id)->delete();

        //redirect()->route('occasions.index');
        return redirect()->back()->with('success', 'Groom deleted successfully');
    }

    public function groom_sortable(Request $request)
    {
        $grooms = BoyFamilyDetails::all();

        foreach ($grooms as $groom) {
            foreach ($request->order as $order) {
                if ($order['id'] == $groom->id) {
                    $groom->update(['sort' => $order['position']]);
                }
            }
        }
        
        return response('Update Successfully.', 200);
    }
}
