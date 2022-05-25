<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body class="bg-slate-400">
    @section('header')
        <header class="h-20 w-11/12 m-2 p-2 bg-blue-600 border-2 border-teal-400 mx-auto  content-between text-white rounded-lg">
            <h2 class="text-center text-5xl">@yield('headerTitle')</h2>
        </header>
    @show