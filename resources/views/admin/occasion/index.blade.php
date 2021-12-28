@extends('admin.layouts.admin')
@section('title')
        Occasions List
@endsection
@section('content')
{{-- <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p >{{ $message }}</p>
                    </div>
                @endif
                <div class="alert alert-danger" id="success" style="display:none"></div>
            </div>
            <div class="title_left">
                <h3>Occasions List</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <span class="input-group-btn text-right">
                            <a class="btn btn-default" href="{{ route('occasions.create') }}" title="Create a Region">Add New Occasion</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <table class="table table-striped responsive-utilities jambo_table bulk_action myTable">
                            <thead>
                            <tr class="headings">
                                <th class="column-title">Occasion Id </th>
                                <th class="column-title">Occasion Name </th>
                                <th class="column-title">Occasion Date </th>
                                <th class="column-title">Occasion Time</th>
                                <th class="column-title">AM/PM</th>
                                <th class="column-title">Occasion Description</th>
                                <th class="column-title">Occasion Location</th>
                                <th class="column-title">Occasion Image</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

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
                <h3>Occasions List</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <span class="input-group-btn text-right">
                            <a class="btn btn-default" href="{{ route('occasions.create') }}" title="Create a Region">Add New Occasion</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <table class="table table-striped responsive-utilities jambo_table bulk_action myTable">
                            <thead>
                            <tr class="headings">
                                <th width="30px">#</th>
                                <th class="column-title">Id </th>
                                <th class="column-title">Name </th>
                                <th class="column-title">Date </th>
                                <th class="column-title">Time</th>
                                <th class="column-title">AM/PM</th>
                                <th class="column-title" style="width: 160px;">Description</th>
                                <th class="column-title">Location</th>
                                <th class="column-title">Image</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span></th>
                            </tr>
                            </thead>

                            <tbody id="tablecontents">
                                @foreach ($occasions as $occasion)
                                    <tr class="even pointer row1" data-id="{{ $occasion->id }}">
                                        <td class="pl-3"><i class="fa fa-sort"></i></td>
                                        <td class=" ">{{ $occasion->id }}</td>
                                        <td class=" ">{{ $occasion->name }} </td>
                                        <td class=" ">{{ $occasion->date }} </td>
                                        <td class=" ">{{ $occasion->time }} </td>
                                        <td class=" ">{{ $occasion->AM_PM }} </td>
                                        <td class=" ">{{ !empty($occasion->description) ? strip_tags($occasion->description) : '-' }} </td>
                                        <td class=" ">{{ $occasion->location }} </td>
                                        <td class=" "> <img src="{{ \App\Utility::postgetImageUrl($occasion->image, $occasion->created_at)}}" height="100px" width="100px"> </td>
                                        <td class=" ">
                                            <form action="{{ route('occasions.destroy', $occasion->id) }}" method="POST">
                                                <a href="{{ route('occasions.edit', $occasion->id) }}" class="btn btn-info btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit
                                                </a>
                        
                                                @csrf
                                                @method('DELETE')
                        
                                                <button type="submit" title="delete" style="border: none; background-color:transparent;" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-danger btn-xs btn-delete">
                                                    <i class="fa fa-trash-o text-danger">Delete</i>
                        
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// function htmlDecode(input) {
//   var doc = new DOMParser().parseFromString(input, "text/html");
//   return doc.documentElement.textContent;
// }
    jQuery(document).ready(function() {
        const a="{{config('app.menu_length')}}"
       
        var table = jQuery('.myTable').DataTable({
               // ajax: '',
               // serverSide: true,
               // processing: true,
                aaSorting:[[0,"desc"]],
                // columns: [
                //     {data: 'id', name: 'id'},
                //     {data: 'name', name: 'name'},
                //     {data: 'date', name: 'date'},
                //     {data: 'time', name: 'time'},
                //     {data: 'AM_PM', name: 'AM_PM'},
                //     {data: 'description', name: 'description',"render": function (data){
                //         return htmlDecode(data).replace( /(<([^>]+)>)/ig, '')
                //     }},
                //     {data: 'location', name: 'location'},
                //     {data: 'action', name: 'action',},
                // ],
                'columnDefs': [ {
                    'targets': [9],
                    'orderable': false,
                }],
                "lengthMenu": a.split(',')
            });

            $( "#tablecontents" ).sortable({
          items: "tr",
          cursor: 'move',
          opacity: 0.6,
          update: function() {
              sendOrderToServer();
          }
        });


        function sendOrderToServer() {
          var order = [];
          var token = $('meta[name="csrf-token"]').attr('content');
          $('tr.row1').each(function(index,element) {
            order.push({
              id: $(this).attr('data-id'),
              position: index+1
            });
          });

          $.ajax({
            type: "POST", 
            dataType: "json", 
            url: "{{ url('admin/occasion_sortable') }}",
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
            }
          });
        }
//         jQuery(document).on('click','.btn-delete',function(){
//             if(!confirm("Are you sure?")) return;
            
//             var rowid = jQuery(this).data('rowid')
//             var el = jQuery(this)
//             if(!rowid) return;

           
//             jQuery.ajax({
//                 type: "POST",
//                 dataType: 'JSON',
//                 url: "occasions/" + rowid,
//                 data: {_method: 'delete',_token: '{{ csrf_token() }}'},
//                 success: function (data) {
//                     if (data.success) {
//                         table.row(el.parents('tr'))
//                             .remove()
//                             .draw();
//                             jQuery("#success").css("display","block");
//                             jQuery('.alert-success').css("display","none");  
//                         jQuery("#success").html('<p><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+data.message+'</p>');
//                     }
//                 }
//              }); //end ajax
//         })
    })
</script>
@endsection
