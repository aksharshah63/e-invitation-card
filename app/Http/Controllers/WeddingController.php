<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Wedding;
use App\Occasion;
use App\VideoGallery;
use App\BoyFamilyDetails;
use App\GirlFamilyDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class WeddingController extends Controller
{
    public function view($uuid,$random_number)
    {
        $test = Wedding::select('random_number')->where('random_number' ,$random_number)->get();
        if($test->isEmpty()){
            return view('error');
        }
        else
        {
            $weddings = Wedding::where('random_number' ,$random_number)->first();
            $occasion = Occasion::where('Wedding_id',$weddings->id)->orderBy('sort','Asc')->get();
            $gallery = Gallery::where('wedding_id',$weddings->id)->orderBy('sort','Asc')->get();
            $videos = VideoGallery::where('wedding_id',$weddings->id)->orderBy('sort','Asc')->get();
            $grooms = BoyFamilyDetails::where('wedding_id',$weddings->id)->orderBy('sort','Asc')->get();
            $brides = GirlFamilyDetails::where('wedding_id',$weddings->id)->orderBy('sort','Asc')->get();
            $weddings_date = Carbon::parse($weddings->wedding_date)->format('d M Y');
            return view('index',compact('weddings','occasion','gallery','weddings_date','grooms','brides','videos'));
        }
    }
}
