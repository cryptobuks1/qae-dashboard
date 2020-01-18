@extends('layouts.master')

@section('main-content')

<div class="breadcrumb">
    <h1>QAE Tokens</h1>
</div>

<div id="dataList">test</div>



@endsection

@section('page-js')

<script>

var getJSON = function(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
      var status = xhr.status;
      if (status === 200) {
        callback(null, xhr.response);
      } else {
        callback(status, xhr.response);
      }
    };
    xhr.send();
};


getJSON('https://qae.qredit.cloud/api/tokens', function(data) {

  console.log(data);

});

</script>


<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
