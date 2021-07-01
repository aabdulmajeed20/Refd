<?php

namespace App\Http\Controllers\Auth;

use App\Address;
use App\Endowment;
use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EndowmentsController extends Controller
{
    public function login(Request $request)
    {
        $email = $request['email'];
        $password    = $request['password'];

        if (Auth::guard('endowment')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('endowment.dashboard');
        }
        return redirect()->back()->with(['error_message' => 'يوجد خطأ في معلومات الدخول']);
        
    }

    public function register(Request $request)
    {
        try {
            $address = new Address();
            $address->contact_number = $request->contact_number;
            $address->region_id = $request->region;
            $address->city_id = $request->city;
            if($address->save()) { 
                $endowment = new Endowment();
                $endowment->name = $request->endowment_name;
                $endowment->email = $request->email;
                $endowment->password = bcrypt($request->password);
                $endowment->address_id = $address->id;
                
                if($endowment->save()){
                    $destinationPath = 'Files/'; // upload path
                    $fileName = time().'.'.$request->file('licence_file')->extension(); // renaming image
    
                    $file = new File();
                    $file->target_id = $endowment->id;
                    $file->file_type = 3;
                    $request->file('licence_file')->move($destinationPath, $fileName);
                    $file->path = $destinationPath.$fileName;
                    $file->label = 'رخصة الوقف';
                    $file->save();

                    Auth::login($endowment);
                    return redirect()->route('endowment.dashboard');
                }
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
