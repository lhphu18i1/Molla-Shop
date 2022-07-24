<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('frontend/css/edit.css') }}">
    <title>@lang('messages.edit_cat_page')</title>
</head>

<body>
    <div class="container">
        <div>
            <section class="section clearfix">
                <div>
                    <div class="seccontactform">
                        <form action="{{ url('update-cat/' . $categories->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li style="color: red">{{ $error }}</li>
                                @endforeach
                            @endif
                            <div class="clearfix">
                                <input class="col2 first" type="text" name="name"
                                    placeholder="@lang('messages.name')" value="{{ $categories['name'] }}">
                            </div>
                            <div class="clearfix">
                                <input type="submit" value="@lang('messages.edit')">
                                <a href="{{ route('get.view.category') }}" class="buttons">@lang('messages.back_admin')</a>
                            </div>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
</body>

</html>
