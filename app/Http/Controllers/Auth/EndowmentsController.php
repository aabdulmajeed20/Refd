<?php

namespace App\Http\Controllers\Auth;

use App\Endowment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EndowmentsController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        
    }

    public function register(Request $request)
    {
        try {
            $endowment = new Endowment();
            $endowment->name = $request->name;
            $endowment->email = $request->email;
            $endowment->pasword = $request->pasword;
            $endowment->address_id = $request->address_id;

            $endowment->save();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
