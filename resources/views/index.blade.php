@extends('app')
@section('main-content')

@if($getData)
<div class="row">
            <div class="col-6 col-md-3">
                <div class="countCard confirmed">
                    <h2>মোট আক্রান্ত</h2>
                    <h1 class="counter"></h1>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="countCard recovered">
                    <h2>মোট সুস্থ</h2>
                    <h1 class="counter"></h1>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="countCard deaths">
                    <h2>মোট মৃত্যু</h2>
                    <h1 class="counter"></h1>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="countCard tested">
                    <h2>মোট নমুনা পরিক্ষা</h2>
                    <h1 class="counter"></h1>
                </div>
            </div>
            
            <div class="col-6 col-md-3">
                <div class="countCard new">
                    <h2>নতুন আক্রান্ত</h2>
                    <h1 class="counter">{{$getData['data'][0]['confirmed']}}</h1>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="countCard new ">
                    <h2>নতুন সুস্থ</h2>
                    <h1 class="counter">{{$getData['data'][0]['recovered']}}</h1>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="countCard new ">
                    <h2>নতুন মৃত্যু</h2>
                    <h1 class="counter">{{$getData['data'][0]['deaths']}}</h1>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="countCard new">
                    <h2>নতুন নমুনা পরিক্ষা</h2>
                    <h1 class="counter">{{$getData['data'][0]['tested']}}</h1>
                </div>
            </div>
        </div>

@endif
@endsection




