<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<link rel="icon" type="image/png" href="{{ asset('assets/img/logo/16.png') }}" sizes="16x16">
<link rel="icon" type="image/png" href="{{ asset('assets/img/logo/32.png') }}" sizes="32x32">
<link rel="icon" type="image/png" href="{{ asset('assets/img/logo/96.png') }}" sizes="96x96">
<link rel="apple-touch-icon" href="{{ asset('assets/img/logo/76.png') }}" sizes="76x76">
<link rel="apple-touch-icon" href="{{ asset('assets/img/logo/120.png') }}" sizes="120x120">
<link rel="apple-touch-icon" href="{{ asset('assets/img/logo/152.png') }}" sizes="152x152">
<link rel="apple-touch-icon" href="{{ asset('assets/img/logo/180.png') }}" sizes="180x180">
{{--<link rel="stylesheet" href="{{ asset('../../../../public/assets/css/admin.css') }}">--}}
<link rel="stylesheet" href="{{ asset('./admin/css/all.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel='stylesheet' id='theme-style-css' href='{{ asset("./admin1/css/lite-purple.min.css") }}' type='text/css' media='all' />
<meta name="csrf-token" content="{{ csrf_token() }}">