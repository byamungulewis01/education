<?php

namespace App\Http\Controllers;

use App\Models\ClientConsultancy;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function profile()
    {
        return view('client.profile');
    }
    public function my_consultancy()
    {
        return view('client.consultancy');
    }
    public function consultancy_apply($id)
    {
        $check = ClientConsultancy::where('client_id', auth()->guard('client')->user()->id)->where('consultance_id', $id)->first();
        if ($check) {
            return back()->with('warning', 'Arleady apply this consultancy');
        } else {
            ClientConsultancy::create([
                'client_id' => auth()->guard('client')->user()->id,
                'consultance_id' => $id
            ]);
        }
        return to_route('client.my_consultancy')->with('message', 'application success');
    }
}
