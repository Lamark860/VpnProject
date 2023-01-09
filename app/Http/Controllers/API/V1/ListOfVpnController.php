<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\ListOfVpns;

class ListOfVpnController extends Controller
{
    public function index()
    {
        $vpnList = ListOfVpns::all();
        return view('listOfVpns.index',[
            'vpnList' => $vpnList,
        ]);
    }
}
