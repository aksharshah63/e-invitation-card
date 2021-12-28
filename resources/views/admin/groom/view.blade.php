@extends('admin.layouts.admin')
@section('title')
        Groom View
@endsection

@section('content')
<style>
    .wpo-testimonials-img {
      background-image: url({{asset('frontend/images/dots.png')}});
    }
   </style>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="team-leader">
                            <div class="row">
                                @foreach ($grooms as $groom)
                                <div class="col-md-6 col-lg-4">
                                
                                    <div class="main-team">
                                        <div class=" wpo-testimonials-img">
                                            

                                        </div>
                                        <div class="photos-box">
                                            <img src="{{ \App\Utility::groomgetImageUrl($groom->image, $groom->wedding_id)}}">
                                        </div>
                                    </div>
                                    <div class="team-box-text">
                                        <h1>{{ $groom->name }}</h1>
                                        <p>{{ $groom->relationship }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection