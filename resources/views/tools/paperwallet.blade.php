@extends('layouts.master')
@section('main-content')
<div class="breadcrumb">
    <h1>Paper Wallet</h1>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="card">
                            <div class="card-body">

<p>about paper wallet, build from source, visit https://.....</p>
</div>
</div>


@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
