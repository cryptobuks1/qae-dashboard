@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
    <h1>404</h1>
</div>

<div class="separator-breadcrumb border-top"></div>






@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
