@extends('layouts.admin_master')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('frontend/css/edit.css') }}">
    </head>

    <body>
        <div class="container">
            <div>
                <section class="section clearfix">
                    <div>
                        <div class="seccontactform">
                            <form action="{{ route('put.update.product', $products->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <li style="color: red">{{ $error }}</li>
                                    @endforeach
                                @endif
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="brand_id"
                                        placeholder="@lang('messages.brand_id')" value="{{ $products->brand_id }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="category_id"
                                        placeholder="@lang('messages.cat_id')" value="{{ $products->category_id }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="name"
                                        placeholder="@lang('messages.pro_name')" value="{{ $products->name }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="file" name="image"
                                        placeholder="@lang('messages.pro_image')" accept="image/png, image/gif, image/jpeg"
                                        multiple value="{{ $products->image }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="description"
                                        placeholder="@lang('messages.description')" value="{{ $products->description }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="content"
                                        placeholder="@lang('messages.content')" value="{{ $products->content }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="price"
                                        placeholder="@lang('messages.price')" value="{{ $products->price }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="qty"
                                        placeholder="@lang('messages.qty')" value="{{ $products->qty }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="discount"
                                        placeholder="@lang('messages.dis')" value="{{ $products->discount }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="weight"
                                        placeholder="@lang('messages.weight')" value="{{ $products->weight }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="sku"
                                        placeholder="@lang('messages.sku')" value="{{ $products->sku }}">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="text" name="tag"
                                        placeholder="@lang('messages.tag')" value="{{ $products->tag }}">
                                </div>
                                <div class="clearfix">
                                    <input type="submit" value="@lang('messages.edit')">
                                    <a href="{{ route('get.view.product') }}"
                                        class="buttons">@lang('messages.back_admin')</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </body>
@stop
