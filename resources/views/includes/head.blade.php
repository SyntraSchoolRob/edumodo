<!doctype html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('author')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="icon" type="image/png" href="{{asset('images/website/headerLogo.png')}}">
    <link rel="canonical" href="<?php echo url()->current(); ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="<?php echo url()->current(); ?>" />
    <meta property="og:site_name" content="Edumodo" />
    <link href="{{asset('front_end-app.css')}}" rel="stylesheet"></head>
</head>
