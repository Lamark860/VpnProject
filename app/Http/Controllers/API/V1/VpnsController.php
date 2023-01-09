<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\ListOfVpns;
use App\Models\User;

class VpnsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($_user)
    {
        $user = User::findOrFail($_user) ;

        return view('vpns.show',[
            'user' => $user,
        ]);
    }

    public function rent($user_id,$Vpn_id)
    {
        $OneVpn = ListOfVpns::find($Vpn_id);
        $OneVpn->rentVpn($Vpn_id, $user_id);

        return redirect()->route('vpns.show',[
            'user' => $user_id
        ]);
    }
}
