@extends('admin.layouts.admin')
@section('title')
        Video Gallery View
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <section class="sec-7">
                            <div class="slider-video">
                                <div class="slider">
                                    @foreach ($videogallerys as $videogallery)
                                    <div class="slide">
                                    <iframe width="100%" height="315" src="{{$videogallery->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                @endforeach
                                  </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection