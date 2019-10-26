@extends('layouts.main')





@include('layouts.partials._navigate')<!-- Our Schedule Area Start -->

<div class="spacer">

@include('layouts.partials._heading')







    <!-- Welcome Area Start -->
@yield('content')
    <!-- Welcome Area End -->
@include('layouts.partials._scripts')

<!-- Footer Area Start -->
@include('layouts.partials._footer')

<!-- Footer Area End -->

    <!-- **** All JS Files ***** -->



















