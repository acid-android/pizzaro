@inject('menu', 'App\Services\TypesMenuService')
@inject('unit', 'App\Services\Unit')
@extends('adminlte::page')
@section('title', 'Update ' . $model->name)


@section('content_header')
    <section class="content-header">
        <h1>
            Update "{{ $model->name }}"
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('admin-food') }}"><i class="fa fa-dashboard"></i> Food</a></li>
            <li class="active">Update "{{ $model->name }}"</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Update "{{ $model->name }}"</h3>
                </div>
                <form role="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="menu" required>
                                <option value="" disabled selected="selected">Select one--</option>
                                @foreach($menu() as $item)
                                    <option value="{{ $item->id }}"
                                            @if($item->id == $model->menu_id) selected="selected" @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nameInput">Name</label>
                            <input type="text" class="form-control" value="{{ $model->name }}" id="nameInput"
                                   name="name"
                                   placeholder="Enter name" required>
                        </div>

                        <div class="form-group">
                            <label for="slugInput">Slug</label>
                            <input type="text" class="form-control" value="{{ $model->key }}" id="slugInput" name="key"
                                   placeholder="Enter slug" required>
                        </div>
                        <div class="form-group">
                            <label for="descriptionInput">Description</label>
                            <textarea type="email" class="form-control" id="descriptionInput"
                                      placeholder="Enter description"
                                      name="description">@if($model->description){{ $model->description }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="imageInput">Image</label>
                            <input type="file" id="imageInput" name="image" value="{{ asset($model->image) }}"
                                   data-preview-file-type="text">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>


            <div class="box">
                <div class="box-header">
                    <small style="margin-right: 10px">
                        <button onclick='setFormAttributes("{{ route('items-add') }}", "Add Item", {{ $model->id }})' class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-items">+ Add item</button>
                    </small>
                    <h3 class="box-title">"{{ $model->name }}" items</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped items-table">
                        <tr>
                            <th>ID</th>
                            <th>Size</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($model->items as $item)
                            <tr id="item-{{$item->id}}">
                                <td id="item-id-{{ $item->id }}">{{ $item->id }}</td>
                                <td id="item-size-{{ $item->id }}">{{ $item->size }}</td>
                                <td id="item-dimension-{{ $item->id }}">{{ $item->dimension }}</td>
                                <td id="item-price-{{ $item->id }}">${{ $item->price }}</td>
                                <td style="font-size: 16px; display: inline-flex; color: #3c8dbc;">
                                    <div onclick='renderUpdateModal({{ $item->id }}, "{{ route('items-update') }}", "Update item")' data-id="{{ $item->id }}" style="margin-right: 5px"><i class="fa fa-pencil" style="cursor: pointer" aria-hidden="true"></i></div>
                                    <div onclick='removeItem({{ $item->id }}, "{{ route('items-remove') }}")'><i class="fa fa-times" style="cursor: pointer" aria-hidden="true"></i></div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="modal fade" id="modal-items" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Add item</h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" id="modal-add-id-form" action="/">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $model->id }}" id="request-id">

                                    <div class="form-group">
                                        <label for="sizeInput">Size</label>
                                        <input type="number" class="form-control"  id="sizeInput"
                                               name="size"
                                               placeholder="Enter size..." required>
                                    </div>

                                    <div class="form-group">
                                        <label>Unit</label>
                                        <select class="form-control" name="dimension" required>
                                            <option value="" disabled selected="selected">Select one--</option>
                                            @foreach($unit->get() as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="priceInput">Price</label>
                                        <input type="number" class="form-control" id="priceInput" name="price"
                                               placeholder="Enter price" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" onclick="clearModalForm()" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="modal-add-id-form-submit">Add item</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--</div>--}}
    {{--</div>--}}
@stop

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/css/fileinput.min.css" media="all"
          rel="stylesheet" type="text/css"/>
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">--}}
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/plugins/piexif.min.js"
            type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/plugins/sortable.min.js"
            type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/plugins/purify.min.js"
            type="text/javascript"></script>

    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"--}}
            {{--crossorigin="anonymous"></script>--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>

    <script type="text/javascript">
        $("#imageInput").fileinput({
            initialPreview: ['{{ asset($model->image) }}'],
            initialPreviewAsData: true,
        });
        
        function clearModalForm() {
            document.getElementById("modal-add-id-form").reset();
            $('#modal-add-id-form').attr('action', '/');
        }

        function setFormAttributes(action, header, id){
            $('#request-id').val(id);
            $('#modal-add-id-form').attr('action', action);
            $('#modal-items .modal-title').html(header);
        }
        
        $('#modal-add-id-form-submit').on('click',function () {
            let request = $.ajax({
                url: $('#modal-add-id-form').attr('action'),
                method: "POST",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: $('#modal-add-id-form').serialize()
            });
            request.done(function (msg) {
                $('#modal-items').modal('hide');
                console.log(msg);

                clearModalForm();
                
                switch (msg.action) {
                    case 'add':
                        afterAdd(msg.model);
                        break;
                    case 'update':
                        afterUpdate(msg.model);
                        break;
                    default:
                        alert('Some Error');
                        break;
                }


            });

            request.fail(function (jqXHR, textStatus) {
                console.log("Request failed: " + textStatus);
            });
        });

        function renderUpdateModal(id, action, header) {
            setFormAttributes(action, header, id);
            $('#modal-items').modal('show');
            $('#modal-add-id-form #sizeInput').val(function () {
                return $('#item-size-'+id).html();
            });

            $('#modal-add-id-form select').val(function () {
                return $('#item-dimension-' +id).html();
            });

            $('#modal-add-id-form #priceInput').val(function () {
                return ($('#item-price-'+id).html()).replace('$', '');
            });
        }

        function afterAdd(model) {
            $('.items-table').append(`<tr id="item-${model.id}" class="success"><td id="item-size-${model.id}">${model.id}</td><td id="item-size-${model.size}">${model.size}</td><td id="item-dimension-${model.dimension}">${model.dimension}</td><td id="item-price-${model.price}">$${model.price}</td><td style="font-size: 16px; display: inline-flex; color: #3c8dbc;">
                                    <div onclick="renderUpdateModal(${model.id}, "{{ route('items-update') }}", "Update item")' data-id="${model.id}" style="margin-right: 5px"><i class="fa fa-pencil" style="cursor: pointer" aria-hidden="true"></i></div>
                                    <div onclick='removeItem(${model.id}, "{{ route('items-remove') }}")'><i class="fa fa-times" style="cursor: pointer" aria-hidden="true"></i></div>
                                </td></tr>`);
            setTimeout(function (){
                $(`#item-${model.id}`).removeClass('success');
            }, 5000);
        }

        function afterUpdate(model) {
            $(`#item-size-${model.id}`).html(model.size);
            $(`#item-dimension-${model.id}`).html(model.dimension);
            $(`#item-price-${model.id}`).html('$' + model.price);

            $(`#item-${model.id}`).addClass('success');
            setTimeout(function (){
                $(`#item-${model.id}`).removeClass('success');
            }, 5000);

        }

        function afterDelete(model) {
            $(`#item-${model.id}`).addClass('danger');
            setTimeout(function (){
                $(`#item-${model.id}`).removeClass('danger');
                $(`#item-${model.id}`).fadeOut('slow');

                setTimeout(function () {
                    $(`#item-${model.id}`).remove();
                }, 500);

            }, 5000);

        }

        function removeItem(id, url) {
            if(confirm('Do you want remove this item?')) {
                let request = $.ajax({
                    url: url,
                    method: "POST",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    data: {
                        id: id
                    }
                });
                request.done(function (msg) {
                    $('#modal-items').modal('hide');
                    console.log(msg);

                    clearModalForm();

                    afterDelete(msg.model);


                });

                request.fail(function (jqXHR, textStatus) {
                    console.log("Request failed: " + textStatus);
                });
            }
        }
    </script>
@stop