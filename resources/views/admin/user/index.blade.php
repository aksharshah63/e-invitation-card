@extends('admin.layouts.admin')
@section('title')
        Users List
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
                <h3>Users List</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <span class="input-group-btn text-right">
                            <a class="btn btn-default" href="{{ route('users.create') }}" title="Create a Region">Add New User</a>
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
                                <th class="column-title">Id </th>
                                <th class="column-title">Name </th>
                                <th class="column-title">Email </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span></th>
                            </tr>
                            </thead>

                            <tbody id="tablecontents">
                                @foreach ($user as $user)
                                    <tr class="even pointer">
                                        <td class=" ">{{ $user->id }}</td>
                                        <td class=" ">{{ ucwords($user->name) }} </td>
                                        <td class=" ">{{ ucwords($user->email) }} </td>
                                        <td class=" ">
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">
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
                    'targets': [3],
                    'orderable': false,
                }],
                "lengthMenu": a.split(',')
            });
    })
</script>
@endsection
