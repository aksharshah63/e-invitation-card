@extends('admin.layouts.admin')
@section('title')
        Edit Event
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
            </div>
            <div class="title_left">
                <h3>Edit Event</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <h3><b>Boy Information</b></h3>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" action="{{ route('weddings.update', $wedding->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Boy Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="boy_name" value="{{ $wedding->boy_name }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Boy Image<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    @if($wedding->boy_image)
                                        <input id="boy_image" class="form-control col-md-6 col-xs-6 image1" type="file" name="boy_image">
                                        {{-- <input class="form-control col-md-6 col-xs-6" type="file" name="boy_image" required="required" id="boy_image"> --}}
                                    @else
                                        <input id="boy_image" class="form-control col-md-6 col-xs-6 image1" type="file" name="boy_image" required="required">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                        <div id="upload-demo1"></div>
                                </div>
                                <div class="item form-group col-md-4" style="padding:5%;">
                                    {{-- <label for="name">Boy Image <span class="required">*</span></label>
                                        @if($wedding->boy_image)
                                        <input id="boy_image" class="form-control col-md-6 col-xs-6 image1" type="file" name="boy_image">
                                        @else
                                        <input id="boy_image" class="form-control col-md-6 col-xs-6 image1" type="file" name="boy_image" required>
                                        @endif --}}
                                        {{-- <input class="form-control col-md-6 col-xs-6" required="required" type="file" name="boy_image" id="boy_image"> --}}
                                        <button class="btn btn-success upload-image1" style="margin-top:2%" type="button">Generate Image</button>
                                        @if(!empty($wedding->boy_image))
                                            <img class="preview" src="{{ \App\Utility::postgetImageUrl($wedding->boy_image)}}" height="200px" width="200px">
                                        @endif
                                </div>

                                <div class="col-md-4">
                                    <div id="preview-crop-image1" style="width:400px;height:400px;"></div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Instagram</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" type="text" name="boy_instagram" value="{{ $wedding->boy_instagram }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Facebook</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" type="text" name="boy_facebook" value="{{ $wedding->boy_facebook }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Twitter</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" type="text" name="boy_twitter" value="{{ $wedding->boy_twitter }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pinterest</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" type="text" name="boy_pinterest" value="{{ $wedding->boy_pinterest }}">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <h3><b>Girl Information</b></h3>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Girl Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="girl_name" value="{{ $wedding->girl_name }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Girl Image<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    @if($wedding->girl_image)
                                        <input id="girl_image" class="form-control col-md-6 col-xs-6 image1" type="file" name="girl_image">
                                        {{-- <input class="form-control col-md-6 col-xs-6" type="file" name="boy_image" required="required" id="boy_image"> --}}
                                    @else
                                        <input id="girl_image" class="form-control col-md-6 col-xs-6 image1" type="file" name="girl_image" required="required">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                        <div id="upload-demo2"></div>
                                </div>
                                <div class="item form-group col-md-4" style="padding:5%;">
                                    {{-- <label for="name">Girl Image <span class="required">*</span></label>
                                        @if ($wedding->girl_image)
                                        <input id="girl_image" class="form-control col-md-6 col-xs-6 image2" type="file" name="girl_image">
                                        
                                        @else
                                        <input id="girl_image" class="form-control col-md-6 col-xs-6 image2" type="file" name="girl_image" required>
                                            
                                        @endif --}}
                                        <button class="btn btn-success upload-image2" style="margin-top:2%" type="button">Generate Image</button>
                                        @if(!empty($wedding->girl_image))
                                            <img class="preview" src="{{ \App\Utility::postgetImageUrl($wedding->girl_image)}}" height="200px" width="200px">
                                        @endif
                                </div>

                                <div class="col-md-4">
                                    <div id="preview-crop-image2" style="width:400px;height:400px;"></div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Instagram</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" type="text" name="girl_instagram" value="{{ $wedding->girl_instagram }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Facebook</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" type="text" name="girl_facebook" value="{{ $wedding->girl_facebook }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Twitter</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" type="text" name="girl_twitter" value="{{ $wedding->girl_twitter }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pinterest</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" type="text" name="girl_pinterest" value="{{ $wedding->girl_pinterest }}">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <h3><b>Wedding Date</b></h3>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Wedding Date <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-group">
                                        <input type="date" class="form-control col-md-6 col-xs-6" required="required" name="wedding_date" value="{{ $wedding->wedding_date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <h3><b>Banner Image</b></h3>
                            
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Banner Image<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="banner_image" class="form-control col-md-6 col-xs-6"  type="file" name="banner_image">
                                    <img id="preview3" src="{{ \App\Utility::postgetImageUrl($wedding->banner_image)}}" height="200px" width="200px" style="margin-top: 10px;">
                                    <div id="preview-crop-image3" ></div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <h3><b>Invited By</b></h3>
                            <div class="item form-group">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="invited_by_name">Name <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="invited_by_name" class="form-control col-md-6 col-xs-6" data-role="tagsinput" required="required" type="text" name="invited_by_name[]" value="{{ $wedding->invited_by_name }}" >
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="invited_by_address">Address <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="invited_by_address" class="form-control col-md-6 col-xs-6" required="required" type="text" name="invited_by_address" value="{{ $wedding->invited_by_address }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Country Code <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="country_code" class="form-control col-md-6 col-xs-6" required="required" id="single">
                                            <option value="">Please Select</option>
                                            @foreach(\App\Wedding::$county_codes as $k => $v)
                                                <option value="{{$k}}" {{ ($wedding->country_code == $k) ? 'selected' : ''}}>{{$v}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="invited_by_phone">Phone No.<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{-- <input id="invited_by_phone" class="form-control col-md-6 col-xs-6" required="required" type="text" data-role="tagsinput" name="invited_by_phone[]" > --}}
                                        <input id="invited_by_phone" class="form-control col-md-6 col-xs-6" data-role="tagsinput" required="required" type="text" name="invited_by_phone[]" value="{{ $wedding->invited_by_phone }}" >

                                        {{-- <input id="invited_by_phone" class="form-control col-md-6 col-xs-6" data-role="tagsinput" required="required" type="number" name="invited_by_phone" value="{{ $wedding->invited_by_phone }}"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <h3><b>MP3 Audio</b></h3>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Audio</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="audio" class="form-control col-md-6 col-xs-6" type="file" name="audio">
                                    @if(!empty($wedding->audio))
                                        <?php $audio = \App\Utility::audioImageUrl($wedding->audio, $wedding->created_at);?>
                                    @else
                                        <?php $audio='Not Availbale' ?>
                                    @endif
                                    <input class="form-control col-md-6 col-xs-6" type="text" value="{{$audio}}" readonly >
                                </div>

                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="{{ route('weddings.index') }}"><button type="button" class="btn btn-primary">Cancel</button></a>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var resize1 = $('#upload-demo1').croppie({
    enableExif: true,
    enableOrientation: true,    
    viewport: { // Default { width: 100, height: 100, type: 'square' } 
        width: 290,
        height: 390,
        type: 'square' //square
    },
    boundary: {
        width: 400,
        height: 400
    }
});
$('#boy_image').on('change', function () { 
  var reader1 = new FileReader();
    reader1.onload = function (e) {
      resize1.croppie('bind',{
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader1.readAsDataURL(this.files[0]);
});
$('.upload-image1').on('click', function (ev) {
  resize1.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (img) {
    html1 = '<img src="' + img + '" /><input id="name" class="form-control col-md-6 col-xs-6" required="required" type="hidden" name="boy_image1" value="' + img +'">';
        $("#preview-crop-image1").html(html1);
  });
});


var resize2 = $('#upload-demo2').croppie({
    enableExif: true,
    enableOrientation: true,    
    viewport: { // Default { width: 100, height: 100, type: 'square' } 
        width: 290,
        height: 390,
        type: 'square' //square
    },
    boundary: {
        width: 400,
        height: 400
    }
});
$('#girl_image').on('change', function () { 
  var reader2 = new FileReader();
    reader2.onload = function (e) {
      resize2.croppie('bind',{
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader2.readAsDataURL(this.files[0]);
});
$('.upload-image2').on('click', function (ev) {
  resize2.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (img) {
    html = '<img src="' + img + '" /><input id="name" class="form-control col-md-6 col-xs-6" required="required" type="hidden" name="girl_image1" value="' + img +'">';
        $("#preview-crop-image2").html(html);
  });
});

// $('#banner_image').on('click',function(){
//     $('.preview3').attr('src','zoltan-tasi-Q75aqX0wHHA-unsplash.jpg');
// })
banner_image.onchange = evt => {
  const [file] = banner_image.files
  if (file) {
    preview3.src = URL.createObjectURL(file)
  }
}
</script>
@endsection