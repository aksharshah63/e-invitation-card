@extends('admin.layouts.admin')
@section('title')
        Edit Bride
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
            </div>
            <div class="title_left">
                <h3>Edit Bride</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" action="{{ route('bride.update', $girlfamilydetails->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="hidden" name="wedding_id" value="{{ $girlfamilydetails->wedding_id }}">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="image" class="form-control col-md-6 col-xs-6" type="file" name="image">
                                    <img class="preview" src="{{ \App\Utility::bridegetImageUrl($girlfamilydetails->image, $girlfamilydetails->wedding_id)}}" height="200px" width="200px">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-4 text-center">
                                        <div id="upload-demo"></div>
                                </div>
                                <div class="item form-group col-md-4" style="padding:5%;">
                                        <button class="btn btn-success upload-image" style="margin-top:2%" type="button">Generate Image</button>
                                </div>
                                <div class="col-md-4">
                                    <div id="preview-crop-image" style="width:400px;height:400px;"></div>
                                </div>
                            </div> 
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="name" value="{{ $girlfamilydetails->name }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Relationship <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="relationship" value="{{ $girlfamilydetails->relationship }}">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="{{ route('bride.index',$girlfamilydetails->wedding_id) }}"><button type="button" class="btn btn-primary">Cancel</button></a>
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
<script type="text/javascript">
var resize = $('#upload-demo').croppie({
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
$('#image').on('change', function () { 
  var reader = new FileReader();
    reader.onload = function (e) {
      resize.croppie('bind',{
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
});
$('.upload-image').on('click', function (ev) {
  resize.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (img) {
    html = '<img src="' + img + '" /><input id="name" class="form-control col-md-6 col-xs-6" required="required" type="hidden" name="image1" value="' + img +'">';
        $("#preview-crop-image").html(html);
  });
});
</script>
@endsection