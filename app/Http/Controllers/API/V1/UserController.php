<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserCollection;
use App\Models\User;
use App\Http\Resources\V1\UserResource;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $filter = new UserQuery();
        $queryItems = $filter->transform($request);

        if(count($queryItems == 0)) return new UserCollection(User::paginate());
        else return new UserCollection(User::where($queryItems)->paginate());
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }
}
