@extends('layouts.admin_master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="" type="get" class="card-header">
                        <h3 class="card-title">@lang('messages.all_pro')</h3>
                        <div class="card-tools">
                            <div class="d-inline-block">
                                <div class="input-group input-group-sm" style="width: 150px">
                                    <input type="search" name="search" class="form-control float-right" placeholder="@lang('messages.search')" value="">
                                    <div class="input-group-append">
                                        <button type="get" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <a href="{{ route('get.add.product') }}"><button type="button" class="btn btn-success">@lang('messages.add_pro')</button></a>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>@lang('messages.brand_id')</th>
                                    <th>@lang('messages.cat_id')</th>
                                    <th>@lang('messages.pro_name')</th>
                                    <th>@lang('messages.pro_img')</th>
                                    <th>@lang('messages.description')</th>
                                    <th>@lang('messages.content')</th>
                                    <th>@lang('messages.price')</th>
                                    <th>@lang('messages.qty')</th>
                                    <th>@lang('messages.dis')</th>
                                    <th>@lang('messages.weight')</th>
                                    <th>@lang('messages.sku')</th>
                                    <th>@lang('messages.tag')</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->brand_id }}</td>
                                        <td>{{ $product->category_id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td><img src="/frontend/Images/{{ $product->image }}" width="100px"></td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->content }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->qty }}</td>
                                        <td>{{ $product->discount }}</td>
                                        <td>{{ $product->weight }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->tag }}</td>
                                        <td>
                                            <a href="{{ route('get.edit.product', $product->id) }}"><button class="btn btn-block btn-primary">@lang('messages.edit')</button></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('get.delete.product', $product->id) }}"><button class="btn btn-block btn-danger">@lang('messages.del')</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {!! $products->links() !!}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@stop
