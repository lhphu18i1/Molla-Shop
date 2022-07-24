@extends('layouts.admin_master')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="" type="get" class="card-header">
                        <h3 class="card-title">@lang('messages.all_cat')</h3>
                        <div class="card-tools">
                            <div class="d-inline-block">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="search" name="search" class="form-control float-right" placeholder="Search"
                                        value="">
                                    <div class="input-group-append">
                                        <button type="get" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <a href="{{ route('get.add.category') }}"><button type="button" class="btn btn-success">@lang('messages.add_cat')</button></a>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>@lang('messages.cat_name')</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('get.edit.category', $category->id) }}"><button
                                                    class="btn btn-block btn-primary">@lang('messages.edit')</button></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('get.delete.category', $category->id) }}"><button
                                                    class="btn btn-block btn-danger">@lang('messages.del')</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $categories->links() !!}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@stop
