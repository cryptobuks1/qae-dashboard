@extends('layouts.master')

@section('main-content')
<style>
.table td {
    text-align: center;
}

.table tr {
    text-align: center;
}

.i-Close-Window{
    color:red;
}

.i-Yes{
    color:green;
}
</style>


<div class="breadcrumb">
    <h1>QAE Tokens</h1>
</div>
<p class="text-small text-muted text-left">Text about QAE tokens</p>

<div class="separator-breadcrumb border-top"></div>
<div class="card">
<div class="card-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Symbol</th>
                                            <th scope="col">Circulating Supply</th>
                                            <th scope="col">Token ID</th>
                                            <th scope="col">Mintable</th>
                                            <th scope="col">Pausable</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>QAE-1</td>
                                            <td>CryptoGuesser</td>
                                            <td>CGT</td>
                                            <td>77.777.777 <strong>CGT</strong></td>
                                            <td><a href="https://qredit.digitalwindmill.com/token/f93fffec898efa0a785f6780dccab04c">f93fffec898efa0a785f6780dccab04c</a></td>
                                            <td><i class="nav-icon i-Close-Window font-weight-bold"></i></td>
                                            <td> <i class="nav-icon i-Yes font-weight-bold"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>QAE-1</td>
                                            <td>CryptoGuesser</td>
                                            <td>CGT</td>
                                            <td>77.777.777 <strong>CGT</strong></td>
                                            <td><a href="https://qredit.digitalwindmill.com/token/f93fffec898efa0a785f6780dccab04c">f93fffec898efa0a785f6780dccab04c</a></td>
                                            <td><i class="nav-icon i-Close-Window font-weight-bold"></i></td>
                                            <td> <i class="nav-icon i-Yes font-weight-bold"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>QAE-1</td>
                                            <td>CryptoGuesser</td>
                                            <td>CGT</td>
                                            <td>77.777.777 <strong>CGT</strong></td>
                                            <td><a href="https://qredit.digitalwindmill.com/token/f93fffec898efa0a785f6780dccab04c">f93fffec898efa0a785f6780dccab04c</a></td>
                                            <td><i class="nav-icon i-Close-Window font-weight-bold"></i></td>
                                            <td> <i class="nav-icon i-Yes font-weight-bold"></i></td>
                                        </tr>

                                    </tbody>
                                </table>



                        </div>
</div>


 <table id="dataList" style="font-size:9px"></table>

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

getJSON('https://qae.qredit.cloud/api/tokens', function (err, data) {

//document.getElementById('dataList').innerHTML = JSON.stringify(data, function replacer(tokenDetails, tokenIdHex) { return tokenIdHex})

document.getElementById('dataList').innerHTML = JSON.stringify(data)
console.table(data);

});

</script>


<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

@endsection
