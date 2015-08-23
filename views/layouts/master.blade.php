<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        {{ Setting::get('core::site-name') }} | Admin
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @foreach($cssFiles as $css)
        <link media="all" type="text/css" rel="stylesheet" href="{{ $css }}">
    @endforeach
    {!! Theme::script('js/vendor/jquery.min.js') !!}
    @section('styles')
    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="{{ config('asgard.core.core.skin', 'skin-blue') }}" style="padding-bottom: 0 !important;">
<div class="wrapper">
    <header class="main-header">
        <a href="{{ URL::route('dashboard.index') }}" class="logo">
            <?php if (isset($sitename)): ?>
            {{ $sitename }}
            <?php endif; ?>
        </a>
        @include('partials.top-nav')
    </header>
    @include('partials.sidebar-nav')

    <aside class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">
            @include('flash::message')
            @yield('content')
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
    @include('partials.footer')
</div><!-- ./wrapper -->

@foreach($jsFiles as $js)
    <script src="{{ $js }}" type="text/javascript"></script>
@endforeach

@section('scripts')
@show
</body>
</html>
