@extends('admin.layouts.admin')
@section('title')
        Groom List
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
                <h3>Groom List</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <span class="input-group-btn text-right">
                            <a class="btn btn-dark" href="{{ route('groom.view',$id) }}" title="Create a Groom" target="_blank">View Groom</a>
                        </span>
                        <span class="input-group-btn text-right">
                            <a class="btn btn-default" href="{{ route('groom.create',$id) }}" title="Create a Groom">Add New Groom</a>
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
                                <th class="column-title">Image</th>
                                <th class="column-title">Name </th>
                                <th class="column-title">Relationship </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span></th>
                            </tr>
                            </thead>

                            <tbody id="tablecontents">
                                @foreach ($grooms as $groom)
                                    <tr class="even pointer row1" data-id="{{ $groom->id }}">
                                        <td class="pl-3"><i class="fa fa-arrows"></i></td>
                                        <td class=" ">{{ $groom->id }}</td>
                                        <td class=" "> <img src="{{ \App\Utility::groomgetImageUrl($groom->image, $groom->wedding_id)}}" height="100px" width="100px"> </td>
                                        <td class=" ">{{ $groom->name }} </td>
                                        <td class=" ">{{ $groom->relationship }} </td>
                                        <td class=" ">
                                            <form action="{{ route('groom.destroy', $groom->id) }}" method="POST">
                                                <a href="{{ route('groom.edit', $groom->id) }}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit
                                                </a>
                        
                                                @csrf
                                                @method('DELETE')
                        
                                                <button type="submit" title="delete" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-danger">
                                                    <i class="fa fa-trash-o">Delete</i>
                        
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
    jQuery(document).ready(function() {
        const a="{{config('app.menu_length')}}"
       
        var table = jQuery('.myTable').DataTable({
                aaSorting:[[0,"desc"]],
                'columnDefs': [ {
                    'targets': [5],
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
            url: "{{ url('admin/groom_sortable') }}",
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
    })
</script>
@endsection
