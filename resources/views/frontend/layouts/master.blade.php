<!DOCTYPE html>
<html>
<head>
<meta charsrt="utf-8">
<title>
@yield('title','Laravel Ecommerce Project')
</title>

@include('frontend.partials.styles')

</head>
<body>

       <div class="wrapper">
            <!--Navigation-->

        @include('frontend.partials.nav')
        @yield('content')



@include('frontend.partials.footer')


@include('frontend.partials.scripts')
</body>
</html>
