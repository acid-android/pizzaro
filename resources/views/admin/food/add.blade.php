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
            <li><a href="{{ route('admin-food') }}"><i class="fa fa-dashboard"></i> Food</a></li>
            <li class="active">Add food</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add Food</h3>
                </div>
                <form role="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="menu" required>
                                <option value="" disabled selected="selected">Select one--</option>
                                @foreach($menu() as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nameInput">Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name"
                                   placeholder="Enter name" required>
                        </div>

                        <div class="form-group">
                            <label for="slugInput">Slug</label>
                            <input type="text" class="form-control" id="slugInput" name="key"
                                   placeholder="Enter slug" required>
                        </div>
                        <div class="form-group">
                            <label for="descriptionInput">Description</label>
                            <textarea type="email" class="form-control" id="descriptionInput"
                                      placeholder="Enter description" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imageInput">Image</label>
                            <input type="file" id="imageInput" name="image" data-preview-file-type="text" required>

                            <p class="help-block">Example block-level help text here.</p>
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

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/css/fileinput.min.css" media="all"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/plugins/piexif.min.js"
            type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/plugins/sortable.min.js"
            type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/plugins/purify.min.js"
            type="text/javascript"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>
    <script type="text/javascript">
        $("#imageInput").fileinput();
    </script>
@stop