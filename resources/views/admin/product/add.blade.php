@extends('layouts.admin_master')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('frontend/css/add.css') }}">
    </head>

    <body>
        <div class="container">
            <div>
                <section class="section clearfix">
                    <div>
                        <div class="seccontactform">
                            <div class="margin-form">
                                <form action="{{ route('post.add.product') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="brand_id"
                                            placeholder="@lang('messages.brand_id')">
                                    </div>
                                    @if ($errors->has('brand_id'))
                                        <span style="color: red">{{ $errors->first('brand_id') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="category_id"
                                            placeholder="@lang('messages.cat_id')">
                                    </div>
                                    @if ($errors->has('category_id'))
                                        <span style="color: red">{{ $errors->first('category_id') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="name"
                                            placeholder="@lang('messages.pro_name')">
                                    </div>
                                    @if ($errors->has('name'))
                                        <span style="color: red">{{ $errors->first('name') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="file" name="image"
                                            placeholder="@lang('messages.pro_image')" accept="image/png, image/gif, image/jpeg"
                                            multiple>
                                    </div>
                                    @if ($errors->has('image'))
                                        <span style="color: red">{{ $errors->first('image') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="description"
                                            placeholder="@lang('messages.description')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="content"
                                            placeholder="@lang('messages.content')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="price"
                                            placeholder="@lang('messages.price')">
                                    </div>
                                    @if ($errors->has('price'))
                                        <span style="color: red">{{ $errors->first('price') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="qty"
                                            placeholder="@lang('messages.qty')">
                                    </div>
                                    @if ($errors->has('qty'))
                                        <span style="color: red">{{ $errors->first('qty') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="discount"
                                            placeholder="@lang('messages.dis')">
                                    </div>
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="weight"
                                            placeholder="@lang('messages.weight')">
                                    </div>
                                    @if ($errors->has('weight'))
                                        <span style="color: red">{{ $errors->first('weight') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="sku"
                                            placeholder="@lang('messages.sku')">
                                    </div>
                                    @if ($errors->has('sku'))
                                        <span style="color: red">{{ $errors->first('sku') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="tag"
                                            placeholder="@lang('messages.tag')">
                                    </div>
                                    @if ($errors->has('tag'))
                                        <span style="color: red">{{ $errors->first('tag') }}</span>
                                    @endif
                                    <div class="clearfix">
                                        <input type="submit" value="@lang('messages.add_new')">
                                        <a href="{{ route('get.view.product') }}" class="buttons">@lang('messages.back_admin')</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </body>
@stop
