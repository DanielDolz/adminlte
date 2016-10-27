<!doctype html>
<html lang="en">

@section('htmlheader')
    @include('partials.htmlheader')
@show

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper" id="app">
    @include('partials.mainheader')

    @include('partials.sidebar')

    <div class="content-wrapper">
        @include('partials.contentheader')
        <section class="content">
            @yield('content')
        </section>
    </div>

    @include('partials.controlsidebar')

    @include('partials.footer')
</div>


@section('scripts')
    @include('partials.scripts')
@show

</body>

</html>