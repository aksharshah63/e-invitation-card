<?php

namespace App\Http\Controllers\admin;

use App\Utility;
use App\Occasion;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Redirect;

class OccasionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if ($request->ajax()) {
        //     //$occasions = Occasion::all();
        //     return datatables()->of($occasions)
        //         ->addColumn('action', function ($row) {
        //             $html = '<a href="occasions/' . $row->id . '/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a> ';
        //             $html .= '<button data-rowid="' . $row->id . '" class="btn btn-danger btn-xs btn-delete"><i class="fa fa-trash-o"></i> Delete </button>';
        //             return $html;
        //         })->toJson();
        // }
        $occasions = Occasion::orderBy('sort','ASC')->get();
         return view('admin.occasion.index',compact('occasions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.occasion.create',compact('id'));
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
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'am_pm' => 'required|not_in:0',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'image' => 'required_without:preview2|mimes:jpeg,png,jpg,gif,svg|max:15360',
            'preview2' => 'max:2048',
        ]);
        

        if(isset($request->image1) && isset($request->preview2)){
            return redirect()->back()->withInput($request->input())->withErrors('Please select only Image or Default Image.');
        }
        if(strtotime($request->date) <= strtotime(date("Y-m-d")))
        {
            return Redirect::back()->withErrors(['msg' => 'Please Add Future Date of Occasion Date.'])->withInput();
        }
        if(!isset($request->preview2) && empty($request->image1) && $request->image1=='')
        {
            return redirect()->back()->withInput($request->input())->withErrors('Please Crop the Image.');
        }
        $occasion=new Occasion();
        $occasion->name = $request->name;
        $occasion->date = date("Y-m-d H:i:s", strtotime($request->date));
        $occasion->time = $request->time;
        $occasion->AM_PM = $request->am_pm;
        $occasion->description = $request->description;
        $occasion->location = $request->address.','.$request->city.','.$request->state.','.$request->pincode;
        if(isset($request->image1)){
            //$name = Utility::occasionuploadFile($request->file('image'),$request->wedding_id);
            $folderPath = base_path('public/occasion/images/' . $request->wedding_id.'/');
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
        }else{
            $file = $request->preview2;
            $imageName = $file;
        }
        // $name = Utility::occasionuploadFile($request->file('image'),$request->wedding_id);
        $occasion->image=$imageName;
        $occasion->wedding_id=$request->wedding_id;
        $occasion->save();

        return redirect()->route('occasions.show_occasion',$occasion->wedding_id)->with('success', 'Occasion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Occasion  $occasion
     * @return \Illuminate\Http\Response
     */
    public function show(Occasion $occasion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Occasion  $occasion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occasion = Occasion::find($id);
        return view('admin.occasion.edit', compact('occasion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Occasion  $occasion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'am_pm' => 'required|not_in:0',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:15360',
            'preview2' => 'max:2048',
        ]);
        if(isset($request->image1) && isset($request->preview2)){
            return redirect()->back()->withInput($request->input())->withErrors('Please select only Image or Default Image.');
        }
        if(strtotime($request->date) <= strtotime(date("Y-m-d")))
        {
            return Redirect::back()->withErrors(['msg' => 'Please Add Future Date of Occasion Date.'])->withInput();
        }
        $wedding_id=$request->wedding_id;
        $image_name = Occasion::find($id);

        $ImageName = $image_name->image;
        if (null !== $request->image1) {
            \File::delete(base_path('public/occasion/images/' . $image_name->wedding_id . '/' . $image_name->image));
            //$ImageName = Utility::occasionuploadFile($request->file('image'), $image_name->wedding_id);
            $folderPath = base_path('public/occasion/images/' . $image_name->wedding_id.'/');
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
        elseif(null != $request->preview2){
            $file = $request->preview2;
            $ImageName = $file;
        }
        $occasion=Occasion::find($id);
        $occasion->name = $request->name;
        $occasion->date = date("Y-m-d H:i:s", strtotime($request->date));
        $occasion->time = $request->time;
        $occasion->AM_PM = $request->am_pm;
        $occasion->description = $request->description;
        $occasion->location = $request->address.','.$request->city.','.$request->state.','.$request->pincode;
        $occasion->image=$ImageName;
        $occasion->save();
        return redirect()->route('occasions.show_occasion',$wedding_id)->with('success', 'Occasion updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Occasion  $occasion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Occasion::where('id',$id)->delete();

        //redirect()->route('occasions.index');
        return redirect()->back()->with('success', 'Occasion deleted successfully');
    }

    public function occasion_sortable(Request $request)
    {
        $occasions = Occasion::all();

        foreach ($occasions as $occasion) {
            foreach ($request->order as $order) {
                if ($order['id'] == $occasion->id) {
                    $occasion->update(['sort' => $order['position']]);
                }
            }
        }
        
        return response('Update Successfully.', 200);
    }

    public function show_occasion($id)
    {
        $occasions=Occasion::where('wedding_id',$id)->orderBy('sort','ASC')->get();
        return view('admin.occasion.list',compact('occasions','id'));
    }
}
