@inject('menu', 'App\Services\TypesMenuService')
@extends('adminlte::page')
@section('title', 'Add food')


@section('content_header')
    <section class="content-header">
        <h1>
            Add food
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('admin-menu') }}"><i class="fa fa-dashboard"></i> Menu</a></li>
            <li class="active">Add menu item</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add Menu Item</h3>
                </div>
                <form role="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nameInput">Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name"
                                   placeholder="Enter name" required>
                        </div>

                        <div class="form-group">
                            <label for="iconInput">Icon</label>
                            <input type="text" class="form-control" id="iconInput" name="icon"
                                   placeholder="Enter icon class" required>
                        </div>

                        <div class="form-group">
                            <label for="slugInput">Slug</label>
                            <input type="text" class="form-control" id="slugInput" name="key"
                                   placeholder="Enter slug" required>
                        </div>

                        <div class="form-group">
                            <label for="orderInput">Order</label>
                            <input type="number" class="form-control" id="orderInput" name="order"
                                   placeholder="Enter order" required>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop