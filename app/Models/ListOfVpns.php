<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOfVpns extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rentVpn($vpnID, $user_id):bool
    {
        $oneVpn = ListOfVpns::find($vpnID);
        $vpn = new Vpn();
        $vpn->createRentedVpn($user_id, $oneVpn->description, $oneVpn->image);
        return true;
    }
}
