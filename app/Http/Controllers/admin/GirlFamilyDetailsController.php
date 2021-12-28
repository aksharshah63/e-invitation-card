<?php

namespace App\Http\Controllers\admin;

use App\Utility;
use App\GirlFamilyDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GirlFamilyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $brides = GirlFamilyDetails::where('wedding_id',$id)->orderBy('sort','ASC')->get();
         return view('admin.bride.index',compact('brides','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.bride.create',compact('id'));
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
            'relationship' => 'required'
        ]);

        if(empty($request->image1) || $request->image1=='')
        {
            return redirect()->back()->withInput($request->input())->withErrors('Please Set Preview or Crop Image.');
        }
        
        $folderPath = base_path('public/bride/images/' . $request->wedding_id.'/');
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
        $image_name= uniqid() .'.png';
        $path = $folderPath.$image_name;
        file_put_contents($path, $image);
        $girlfamilydetails=new GirlFamilyDetails();
        $girlfamilydetails->name = $request->name;
        $girlfamilydetails->relationship = $request->relationship;
        $girlfamilydetails->image=$image_name;
        $girlfamilydetails->wedding_id=$request->wedding_id;
        $girlfamilydetails->save();

        return redirect()->route('bride.index',$girlfamilydetails->wedding_id)->with('success', 'Bride created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GirlFamilyDetails  $girlFamilyDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brides = GirlFamilyDetails::where('wedding_id',$id)->orderBy('sort','ASC')->get();
         return view('admin.bride.view',compact('brides','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GirlFamilyDetails  $girlFamilyDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $girlfamilydetails = GirlFamilyDetails::find($id);
        return view('admin.bride.edit', compact('girlfamilydetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GirlFamilyDetails  $girlFamilyDetails
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
        $image_name = GirlFamilyDetails::find($id);
        
        $ImageName = $image_name->image;
        if (null !== $request->image1) {
            \File::delete(base_path('public/bride/images/' . $image_name->wedding_id . '/' . $image_name->image));
            //$ImageName = Utility::brideuploadFile($request->file('image'), $image_name->wedding_id);
            $folderPath = base_path('public/bride/images/' . $image_name->wedding_id.'/');
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
        $girlfamilydetails=GirlFamilyDetails::find($id);
        $girlfamilydetails->image=$ImageName;
        $girlfamilydetails->name = $request->name;
        $girlfamilydetails->relationship = $request->relationship;
        $girlfamilydetails->save();
        return redirect()->route('bride.index',$wedding_id)->with('success', 'Bride updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GirlFamilyDetails  $girlFamilyDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GirlFamilyDetails::where('id',$id)->delete();

        //redirect()->route('occasions.index');
        return redirect()->back()->with('success', 'Bride deleted successfully');
    }

    public function bride_sortable(Request $request)
    {
        $brides = GirlFamilyDetails::all();

        foreach ($brides as $bride) {
            foreach ($request->order as $order) {
                if ($order['id'] == $bride->id) {
                    $bride->update(['sort' => $order['position']]);
                }
            }
        }
        
        return response('Update Successfully.', 200);
    }
}
