@extends('adminlte::page')
@section('title', 'Food')


@section('content_header')
    <section class="content-header">
        <h1>
            Orders
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Orders</li>
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
                        <h3 class="box-title">Orders</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td>
                                <td>{{ $order->customer->email }}</td>
                                <td>{{ $order->customer->phone }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->updated_at }}</td>
                                <td style="font-size: 16px">
                                    <a href="{{ route('admin-food-update', ['id' => $order->id]) }}" style="margin-right: 5px"><i class="fa fa-pencil" style="cursor: pointer" aria-hidden="true"></i></a>
                                    <a href="{{ route('admin-food-remove', ['id' => $order->id]) }}"><i class="fa fa-times" style="cursor: pointer" aria-hidden="true"></i></a>
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
