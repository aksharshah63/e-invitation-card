@extends('admin.layouts.admin')
@section('title')
        Gallery List
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <p >{{ $message }}</p>
                    </div>
                @endif
                <div class="alert alert-danger" id="success" style="display:none"></div>
            </div>
            <div class="title_left">
                <h3>Gallery List</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form method="post" action="{{ route('store.gallery', $id) }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                            @csrf
                            <input type="hidden" class="id" value="{{$id}}">
                        </form>  
                        <div class="gallery-sec" id="sorting" >
                            @if(count($images) > 0)
                                @foreach ($images as $image)
                                    <div id="{{ $image->id}}" data-id="{{ $image->id }}" class="dh-container sort" style="position: relative; overflow: hidden;">
                                        <div class="dh-overlay" style="position: absolute; top: 0px; left: 389px;">
                                        </div>
                                            <img id="{{ $image->id}}" src="{{asset('/gallery/images/' . $id. '/' . $image->image)}}" alt="" class="gallery">
                                            <a id="{{ $image->id}}" class="delete_image"><i class="fa fa-close" style="color:white;cursor: pointer;font-size: 20px;"></i></a>
                                    </div>
                                @endforeach
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery( "#sorting" ).sortable({
          items: ".sort",
          cursor: 'move',
          opacity: 0.6,
          update: function() {
              sendOrderToServer();
          }
});
function sendOrderToServer() {
          var order = [];
          var token = $('meta[name="csrf-token"]').attr('content');
          $('.sort').each(function(index,element) {
            order.push({
              id: $(this).attr('data-id'),
              position: index+1
            });
          });
          $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ url('admin/gallery_sorting') }}",
                data: {
              order: order,
              _token: token
            },
            success: function(response) {
                if (response.status == "success") {
                  console.log(response);
                } else {
                  console.log(response);
                }
            },
            error: function(e){
                
            }
          });
        }
});
    Dropzone.options.dropzone =
     {
        maxFilesize: 15,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file) 
        {
            var id = $('.id').val();
            var name = file.upload.filename;
            $.ajax({
                type: 'POST',
                url: '{{ url("admin/delete/gallery") }}',
                data: {'_token': "{{ csrf_token() }}",filename: name,'id':id},
                success: function (data){
                    console.log("File has been successfully removed!!");
                    
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ? 
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
   
        success: function(file, response) 
        {
            console.log(response);
            location.reload();
        },
        error: function(file, response)
        {
           return false;
        }
};

jQuery(document).on('click','.delete_image',function(){
    var id = $('.id').val();
    var test = $(this).attr('id');
    var src =  document.getElementById(test).children[1].src;
    var arr = src.split('/');
    var file = arr[arr.length - 1];
    

    $.ajax({
            type: 'POST',
            url: '{{ url("admin/delete/gallery") }}',
            data: {'_token': "{{ csrf_token() }}",filename: file,'id':id},
            success: function (data){
                console.log("File has been successfully removed!!");
                location.reload();
                
            },
            error: function(e) {
                console.log(e);
            }});
});



</script>

@endsection
