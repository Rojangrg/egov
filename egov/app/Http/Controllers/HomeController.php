<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
           'nationality' => 'required|string', 
           'type_of_vehicle_transaction' => 'required|string', 
           'vehicle_registration_in _the_name_of' => 'required|string',
           'nature_of_vehicle_registration' => 'required|string',
           'type_of_vehicle_registration' => 'required|string',
           'old_owner_id' => 'required|string',

        ]) ;
        Registration::create($validatedData);
return redirect('/home')->with('success', 'Vehicle registered successfully!');
    }
}
