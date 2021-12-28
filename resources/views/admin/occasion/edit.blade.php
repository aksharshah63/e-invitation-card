@extends('admin.layouts.admin')
@section('title')
        Edit Occasion
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
                <h3>Edit Occasion</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                    @php
                        $image = array('dandiya-ras.jpg','ganesha.jpg','haldi.jpg','engage.jpg','hath-dhan.jpg','mayra.jpg','mehndi.jpg','reception.jpg','sangit.jpg','wedding.jpg');
                    @endphp
                        <form class="form-horizontal form-label-left" action="{{ route('occasions.update', $occasion->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="hidden" name="wedding_id" value="{{ $occasion->wedding_id }}">
                            <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="hidden" name="id" value="{{ $occasion->name }}">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Occasion Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="name" value="{{ $occasion->name }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Occasion Date <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-group">
                                        <input type="date" class="form-control" required="required" name="date" value="{{ $occasion->date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Occasion Time <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="input-group">
                                        <input type="time" class="form-control" class="form-control col-md-6 col-xs-6" required="required" name="time" value="{{ $occasion->time }}">
                                    </div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">AM/PM <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="am_pm" class="form-control col-md-6 col-xs-6" required="required" id="single">
                                        <option value="">Please Select</option>
                                        @foreach(\App\Occasion::$status as $k => $v)
                                            <option value="{{$k}}" {{ ($occasion->AM_PM == $k) ? 'selected' : ''}}>{{$v}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            @php
                                $address = explode(',',$occasion->location);
                                $arrlength = count($address);

                            @endphp
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Address <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="address" value="<?php for($x = 0; $x < $arrlength-3; $x++) {
                                        echo $address[$x];
                                    }?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="city" value="<?php echo $address[sizeof($address) - 3];?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">State <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="text" name="state" value="<?php echo $address[sizeof($address) - 2];?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pincode <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-6 col-xs-6" required="required" type="number" name="pincode" value="<?php echo $address[sizeof($address) - 1];?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="mytextarea" name="description" class="form-control col-md-7 col-xs-12">{{ $occasion->description }}</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="image" class="form-control col-md-6 col-xs-6" type="file" name="image">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 text-center">
                                        <div id="upload-demo"></div>
                                </div>
                                <div class="item form-group col-md-4" style="padding:5%;">
                                    <!-- <label for="name">Image</label>
                                        <input class="form-control col-md-6 col-xs-6" type="file" name="image" id="image"> -->
                                        <button class="btn btn-success upload-image" style="margin-top:2%" type="button">Generate Image</button>
                                </div>

                                <div class="col-md-4">
                                    <div id="preview-crop-image" style="width:418px;height:279px;"></div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <a id="btnShowPopup" style="cursor: pointer;" class="btn-lg" >Show Default Image</a><br>
                                    @if (in_array($occasion->image, $image))
                                    <img id="preview" src="{{asset('images/'. $occasion->image)}}" height="200px" width="200px">
                                    @else
                                    <img id="preview" src="{{ \App\Utility::occasiongetImageUrl($occasion->image, $occasion->wedding_id)}}" height="200px" width="200px">
                                    @endif
                                    <input type="text" name="preview2" id="preview2" style="display:none" value=""/>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="{{ route('occasions.show_occasion',$occasion->wedding_id) }}"><button type="button" class="btn btn-primary">Cancel</button></a>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                            <div id="MyPopup" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content popup">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                &times;</button>
                                            <h4 class="modal-title">Default Images
                                            </h4>
                                        </div>
                                        <a class="btnShowPopup">
                                            <img src="/images/dandiya-ras.jpg" style="width: 150px;
                                                height: 100px; padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/ganesha.jpg" style="width: 150px;
                                                height: 100px; padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/haldi.jpg" style="width: 150px;
                                                height: 100px;padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/engage.jpg" style="width: 150px;
                                                height: 100px;padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/hath-dhan.jpg" style="width: 150px;
                                                height: 100px;padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/mayra.jpg" style="width: 150px;
                                                height: 100px;padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/mehndi.jpg" style="width: 150px;
                                                height: 100px;padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/reception.jpg" style="width: 150px;
                                                height: 100px;padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/sangit.jpg" style="width: 150px;
                                                height: 100px;padding:5px;"/>
                                        </a>
                                        <a class="btnShowPopup">
                                            <img src="/images/wedding.jpg" style="width: 150px;
                                                height: 100px;padding:5px;"/>
                                        </a>
                                    </div>
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
    $("img").click(function(){
        var img_src = $(this).attr('src');
        var name =  img_src.slice(8);
        $('#preview2').attr('value',name);
        $('#preview').css('display','block');
        $(".preview2").css('display','none');
        $("#preview").attr('src',img_src);
        // $("#preview").attr('name',name);
        $("#MyPopup").modal("hide");
    });
        $(function () {
        $("#btnShowPopup").click(function () {
            $("#MyPopup").modal("show");
        });
    });
    </script>
    
    <script type="text/javascript">
var resize = $('#upload-demo').croppie({
    enableExif: true,
    enableOrientation: true,    
    viewport: { // Default { width: 100, height: 100, type: 'square' } 
        width: 418,
        height: 279,
        type: 'square' //square
    },
    boundary: {
        width: 450,
        height: 450
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