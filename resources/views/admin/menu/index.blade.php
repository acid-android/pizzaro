@extends('adminlte::page')
@section('title', 'Food')


@section('content_header')
    <section class="content-header">
        <h1>
            Menu
            <small><a href="{{ route('admin-menu-add') }}" class="btn btn-block btn-success btn-flat">+ Add</a></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Menu</li>
        </ol>
    </section>
@stop
@section('content')

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Menu Items</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Slug</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($model->getMenu() as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td><i class="po {{ $item->icon }}" style="font-size: 20px"></i></td>
                                <td>{{ $item->key }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td style="font-size: 16px">
                                    <a href="{{ route('admin-menu-update', ['id' => $item->id]) }}" style="margin-right: 5px"><i class="fa fa-pencil" style="cursor: pointer" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin-menu-remove', ['id' => $item->id]) }}"><i class="fa fa-times" style="cursor: pointer" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/font-pizzaro.css')}}" media="all"/>
@stop
