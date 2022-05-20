<!DOCTYPE html>
@if (App::getLocale() == 'fr')
    <html lang="en">
@else
    <html lang="ar" dir="rtl">
@endif


<head>
    <base href="/public">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog - Home Page</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->



    <link href="assets/frontEnd/css/myStyle.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- arb --}}
    @if (App::getLocale() == 'fr')
        <link href="assets/frontEnd/css/styles.css" rel="stylesheet" />
        @else
        <link href="assets/frontEnd/css/bootstrap_rtl.css" rel="stylesheet" />
        <link href="assets/frontEnd/css/styles.css" rel="stylesheet" />
        <link href="assets/frontEnd/css/rtl.css" rel="stylesheet" />

    @endif
    {{-- end arb --}}





</head>
