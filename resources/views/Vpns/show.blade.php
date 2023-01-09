@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="/svg/InternetLogo.svg" style="height: 150px;">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->nickname}}</h1>
                    <a href="/list">Purchase VPN</a>
                </div>
                <div style="height: 25px;"></div>
                <h2>Purchased VPN:</h2>
                <div style="height: 25px;"></div>
                <div>
                    <?php $vpns = $user->vpns ?>
                    @foreach($vpns as $vpn)
                        <div class="d-flex justify-content-between align-items-baseline">
                            <strong>User ID: {{$vpn->user_id ?? 'N\a'}}</strong>
                            <a href="#">Delete VPN</a>
                        </div>
                        <div><strong>{{$vpn->image ?? 'N|A'}}</strong></div>
                        <div><strong>Description: {{$vpn->description ?? 'N\A'}}</strong></div>
                        <div style=" border-bottom: 1px solid #333;"></div>
                        <div style=" height: 20px;"></div>
                        {{--<div><strong>{{dd($user->vpns->getArrayableItems())}}</strong></div>--}}
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
