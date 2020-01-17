@extends('layouts.master')
@section('main-content')
<style>

.nav-pills .nav-link {
    border: 1px solid;
}

</style>
<div class="row">
    <div class="col md-6">
        <p class="text-small text-muted text-left">Your Wallet Address</p>
        <div class="text-left">
                <h3>QjmG1PUnCh1ip9tZnt24FAQv9eXnsERsYk</h3>
        </div>
    </div>

    <div class="col md-6">
        <p class="text-small text-muted text-right">Your Balance</p>
        <div class="text-right">
                <h3>300.119.827,00000001 XQR</h3>
        </div>
    </div>
</div>

<div class="separator border-bottom" style="padding:5px;"></div>

<div class="card mt-2 mb-4">
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-send-tab" data-toggle="pill" href="#pills-send" role="tab" aria-controls="pills-send" aria-selected="false">Send XQR</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="pills-activity-tab" data-toggle="pill" href="#pills-activity" role="tab" aria-controls="pills-activity" aria-selected="true">Activity</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" id="pills-manage-tab" data-toggle="pill" href="#pills-manage" role="tab" aria-controls="pills-manage" aria-selected="false">Manage QAE Tokens</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content ul-tab__content" id="pills-tabContent">
                                        <div class="tab-pane fade" id="pills-send" role="tabpanel" aria-labelledby="pills-send-tab">
Send XQR
                                        </div>
                                        <div class="tab-pane fade" id="pills-activity" role="tabpanel" aria-labelledby="pills-activity-tab">
Last Transactions
                                        </div>
                                        <div class="tab-pane fade active show" id="pills-manage" role="tabpanel" aria-labelledby="pills-manage-tab">
Manage QAE Tokens
                                        </div>

                                    </div>
                                </div>
                            </div>



@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>
@endsection
