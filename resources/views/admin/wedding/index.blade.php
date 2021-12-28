@extends('admin.layouts.admin')
@section('title')
        Events List
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
                <h3>Events List</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <span class="input-group-btn text-right">
                            <a class="btn btn-default" href="{{ route('weddings.create') }}" title="Create a Region">Add New Event</a>
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
                            @php
                                $randomid = mt_rand(100000000000000,999999999999999); 
                            @endphp
                        <table class="table table-striped responsive-utilities jambo_table bulk_action myTable">
                            <thead>
                            <tr class="headings">
                                <th class="column-title">Id </th>
                                <th class="column-title">Boy Name </th>
                                <th class="column-title">Boy Image </th>
                                <th class="column-title">Girl Name </th>
                                <th class="column-title">Girl Image </th>
                                <th class="column-title">Wedding Date </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span></th>
                            </tr>
                            </thead>

                            <tbody id="tablecontents">
                                @foreach ($weddings as $wedding)
                                    <tr class="even pointer">
                                        <td class=" ">{{ $wedding->id }}</td>
                                        <td class=" ">{{ str_replace('-',' ',ucwords($wedding->boy_name)) }} </td>
                                        <td class=" "> <img src="{{ \App\Utility::postgetImageUrl($wedding->boy_image)}}" height="100px" width="100px"> </td>
                                        <td class=" ">{{ str_replace('-',' ',ucwords($wedding->girl_name)) }} </td>
                                        <td class=" "> <img src="{{ \App\Utility::postgetImageUrl($wedding->girl_image)}}" height="100px" width="100px"> </td>
                                        @php
                                            $myDateTime = DateTime::createFromFormat('Y-m-d', $wedding->wedding_date);
                                            $formattedweddingdate = $myDateTime->format('d M Y');
                                        @endphp     
                                        <td class=" ">{{ $formattedweddingdate }} </td>
                                        <td class=" ">
                                            <form action="{{ route('weddings.destroy', $wedding->id) }}" method="POST">
                                                <a href="{{ route('occasions.show_occasion', $wedding->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-eye"></i>
                                                    Show Occasion
                                                </a>
                                                <a href="{{ route('add.gallery', $wedding->id) }}" class="btn btn-success">
                                                    <i class="fa fa-plus"></i>
                                                    Add Gallery
                                                </a>
                                                <a href="{{ route('groom.index', $wedding->id) }}" class="btn btn-success">
                                                    <i class="fa fa-plus"></i>
                                                    Add Groom
                                                </a>
                                                <a href="{{ route('bride.index', $wedding->id) }}" class="btn btn-success">
                                                    <i class="fa fa-plus"></i>
                                                    Add Bride
                                                </a>
                                                <a href="{{ route('video.index', $wedding->id) }}" class="btn btn-success">
                                                    <i class="fa fa-plus"></i>
                                                    Add Video
                                                </a>
                                                <a href="{{ route('weddings.edit', $wedding->id) }}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit
                                                </a>
                                                
                                                <a href="{{ route('view_wedding_invitation',$id=array($wedding->uuid,$wedding->random_number) ) }}" class="btn btn-dark">
                                                    <i class="fa fa-eye"></i>
                                                    View
                                                </a>
                                                <a href="{{ route('weddings.clone', $wedding->id) }}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>
                                                    Clone
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
    jQuery('.date').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'

});
    jQuery(document).ready(function() {
        const a="{{config('app.menu_length')}}"
       
        var table = jQuery('.myTable').DataTable({
                aaSorting:[[0,"desc"]],
                'columnDefs': [ {
                    'targets': [6],
                    'orderable': false,
                }],
                "lengthMenu": a.split(',')
            });
    })
</script>
@endsection
