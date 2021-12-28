<?php

namespace App\Http\Controllers\admin;

use App\VideoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $videogallerys = VideoGallery::where('wedding_id',$id)->orderBy('sort','ASC')->get();
         return view('admin.video_gallery.index',compact('videogallerys','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.video_gallery.create',compact('id'));
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
            'link' => 'required'
        ]);
        
        $videogallery=new VideoGallery();
        $link = $request->link;
        $utube = preg_match('/[\\?\\&]v=([^\\?\\&]+)/',$link,$url_match);
        if($utube){
            $embed_url = 'https://www.youtube.com/embed/'.$url_match[1];
            $videogallery->link=$embed_url;
            $videogallery->wedding_id=$request->wedding_id;
            $videogallery->save();
        }
        else
        {
            return redirect()->back()->withInput($request->input())->withErrors('Please add youtube video channel link.');
        }
        

        return redirect()->route('video.index',$videogallery->wedding_id)->with('success', 'Video created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VideoGallery  $videoGallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videogallerys = VideoGallery::where('wedding_id',$id)->orderBy('sort','ASC')->get();
         return view('admin.video_gallery.view',compact('videogallerys','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VideoGallery  $videoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videogallery = VideoGallery::find($id);
        return view('admin.video_gallery.edit', compact('videogallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoGallery  $videoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'link' => 'required'
        ]);
        $wedding_id=$request->wedding_id;
        
        $videogallery=VideoGallery::find($id);
        $link = $request->link;
        $explode = explode('/',$link);

        if(isset($explode[4]))
        {
            if($link==='https://www.youtube.com/embed/'.$explode[4])
            {
                $videogallery->link=$link;
            }
            
        }
        else
        {
            $utube = preg_match('/[\\?\\&]v=([^\\?\\&]+)/',$link,$url_match);
            $embed_url = 'https://www.youtube.com/embed/'.$url_match[1];
            $videogallery->link=$embed_url;
        }
        $videogallery->save();
        
        return redirect()->route('video.index',$wedding_id)->with('success', 'Video updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoGallery  $videoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VideoGallery::where('id',$id)->delete();

        //redirect()->route('occasions.index');
        return redirect()->back()->with('success', 'Video deleted successfully');
    }

    public function video_sortable(Request $request)
    {
        $videogallerys = VideoGallery::all();

        foreach ($videogallerys as $videogallery) {
            foreach ($request->order as $order) {
                if ($order['id'] == $videogallery->id) {
                    $videogallery->update(['sort' => $order['position']]);
                }
            }
        }
        
        return response('Update Successfully.', 200);
    }
}
