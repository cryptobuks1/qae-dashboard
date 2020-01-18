@extends('layouts.master')
@section('main-content')

<div class="breadcrumb">
    <h1>QAE Tokens</h1>
</div>
<p class="text-small text-muted text-left">Text about QAE tokens</p>
<div class="separator-breadcrumb border-top"></div>


<div class="card">
<div class="card-body">
  <div class="table-responsive">
  <table class="table table-sm table-striped">
        <thead>
          <tr>
            <th scope="col">QAE Version</th>
            <th scope="col">Token Name</th>
            <th scope="col">Symbol</th>
            <th scope="col">Owner Address</th>
            <th scope="col">TokenID</th>
            <th scope="col">Circulating Supply</th>
            <th scope="col">Pausable</th>
            <th scope="col">Mintable</th>
        </tr>
        </thead>


    <tbody>
<?php

    $myData = file_get_contents("https://qae.qredit.cloud/api/tokens");
    $myObject = json_decode($myData);
    $myObjectMap = $myObject;
    foreach($myObjectMap as $key => $item):
?>
    <tr>
        <td><?PHP echo $item->tokenDetails->versionType; ?></td>
        <td><?PHP echo $item->tokenDetails->name; ?></td>
        <td><?PHP echo $item->tokenDetails->symbol; ?></td>
        <td><?PHP echo $item->tokenDetails->ownerAddress; ?></td>
        <td><?PHP echo $item->tokenDetails->tokenIdHex; ?></td>
        <td><?PHP echo $item->tokenStats->qty_token_circulating_supply; ?></td>
        <td><?PHP echo $item->tokenDetails->pausable; ?></td>
        <td><?PHP echo $item->tokenDetails->mintable; ?></td>
    </tr>
<?php endforeach; ?>


    </tbody>
  </table>
</div>
</div>
</div>

<style>
.table td, .table th {
    text-align:center;
}
</style>
@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
