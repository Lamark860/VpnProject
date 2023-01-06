@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/InternetLogo.svg" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->nickname}}</h1></div>
            <div>
                <div><strong>{{$user->profile->user_id}}</strong></div>
                <div><strong>{{$user->profile->VPN_description ?? 'N\A'}}</strong></div>
                <div><strong>{{$user->profile->id}}</strong></div>
            </div>
        </div>

    </div>
</div>
@endsection
