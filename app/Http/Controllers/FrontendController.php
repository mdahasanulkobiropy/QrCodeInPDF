<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();
        return view('index', $data);
    }


    public function downloadPDF($id)
    {
        $data['user']=$user = User::find($id);   
        $pdf = PDF::loadView('pdf', $data);
        return $pdf->download('user.pdf');
    }
}
