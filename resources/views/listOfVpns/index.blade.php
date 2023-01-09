@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-9 pt-5">
            @foreach ($vpnList as $vpn )
            <div class="row pt-3">
                <div class="col-2">
                    <strong>{{$vpn->image}}</strong>
                </div>
                <div class="col-1">
                    <strong>{{$vpn->name}}</strong>
                </div>
                <div class="col-2">
                    <strong>Cost: {{$vpn->cost}} руб./мес.</strong>
                </div>
                <div class="col-3">
                    <strong>VPN description: {{$vpn->description}}</strong>
                </div>
                <div class="col-2">
                    <strong>VPN ID: {{$vpn->id}}</strong>
                </div>
                <div class="col-2">
                    <a href="/vpns/rent/{{Auth::user()->id}}/{{$vpn->id}}">Purchase VPN</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
