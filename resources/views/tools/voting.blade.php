@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
    <h1>Qredit Voting Calculator</h1>
</div>
<p class="text-small text-muted text-left">Text about Voting Calculator </p>

<div class="separator-breadcrumb border-top"></div>
    </section>





@endsection

@section('page-js')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/javascripts/socket.io.slim.js"></script>
    <script src="/javascripts/calendar.js"></script>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
    <script src='https://cdn.rawgit.com/admsev/jquery-play-sound/master/jquery.playSound.js'></script>
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
