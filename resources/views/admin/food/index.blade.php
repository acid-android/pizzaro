@extends('adminlte::page')
@section('title', 'Food')


@section('content_header')
    <section class="content-header">
        <h1>
            Food
            <small><a href="{{ route('admin-food-add') }}" class="btn btn-block btn-success btn-flat">+ Add</a></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Food</li>
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
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Items</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td><img width="60" src="{{ asset($product->image) }}"></td>
                                <td>
                                    <ul>
                                        @foreach($product->items as $item)
                                            <li>{{ $item->size }} {{ $item->dimension }}, ${{ $item->price }} </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td style="font-size: 16px">
                                    <a href="{{ route('admin-food-update', ['id' => $product->id]) }}" style="margin-right: 5px"><i class="fa fa-pencil" style="cursor: pointer" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin-food-remove', ['id' => $product->id]) }}"><i class="fa fa-times" style="cursor: pointer" aria-hidden="true"></i></a>
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
