<?php

namespace App\Http\Controllers\admin;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\File;

class GalleryController extends Controller
{
    public function add($id)
    {
        $images = Gallery::where('wedding_id',$id)->orderBy('sort','ASC')->get();
        return view('admin.gallery.gallery',compact('images','id'));
    }

    public function store(Request $request,$id)
    {
       // $path = storage_path('tmp/uploads/' . $id);
        $path = base_path('public/gallery/images/' . $id);

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = $file->getClientOriginalName();

        $file->move($path, $name);

        $gallery = new Gallery();
        $gallery->image = $name;
        $gallery->wedding_id = $id;
        $gallery->save();

        return response()->json([
                    'name' => $name,
                    'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function delete(Request $request) {
        $filename =  $request->get('filename');
        Gallery::where('image',$filename)->delete();
        $id = $request->get('id');
        $path = base_path('public/gallery/images/' . $id);
        if ($request->get('filename')) {
            \File::delete($path . '/' . $request->get('filename'));
        }
        return $filename;  
    }

    public function gallery_sorting(Request $request) {
        $gallery = Gallery::all();
        foreach ($gallery as $gallery_img) {
            foreach ($request->order as $order) {
                if ($order['id'] == $gallery_img->id) {
                    $gallery_img->update(['sort' => $order['position']]);
                }
            }
        }
        return response('Update Successfully.', 200);
    }
}
