<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/images/new/fav-hok.jpeg">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @livewireStyles
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="/assets/css/vendors.min.css"/>
    <link rel="stylesheet" href="/assets/css/icon.min.css"/>
    <link rel="stylesheet" href="/assets/css/style.css"/>
    <link rel="stylesheet" href="/assets/css/responsive.css"/>
    <link rel="stylesheet" href="/assets/demos/green-energy/green-energy.css"/>
    <link rel="stylesheet" href="/assets/demos/data-analysis/data-analysis.css"/>
    @yield('meta')

</head>
<body>
@livewire('section.navbar')
{{$slot}}

@livewire('section.footer')
@livewireScripts

<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/vendors.min.js"></script>
<script type="text/javascript" src="/assets/js/vendors/swiper-bundle.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>
</body>
</html>
