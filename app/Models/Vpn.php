<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vpn extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createRentedVpn($_user_id, $vpn_description, $vpn_image)
    {
        $this->user_id = $_user_id;
        $this->description = $vpn_description;
        $this->image = $vpn_image;
        $this->save();
    }
}
