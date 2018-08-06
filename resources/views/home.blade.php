@extends('layout')
@section('head')
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
    <link rel="canonical" href="{{ config('app.url') }}" />
@endsection
@section('content')
<div class="home">
    <div class="row">
            <div class="row">
                <div class="col-12 ignore-screen">
                    <header class="header">
                        <h1 class="header-title">{{ $text }}</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection