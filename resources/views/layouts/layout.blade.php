<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Заказы :: @yield('title')</title>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('/css/front.css') }}">
<link rel="stylesheet" href="{{ asset('/css/admin.css') }}">

</head>
<body>

<div id="wrapper">
    @include('layouts.navbar')

    <section class="section lb @if(!Request::is('/')) m3rem @endif">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    @yield('content')
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
</div><!-- end wrapper -->

</body>
</html>
