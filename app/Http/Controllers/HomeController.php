<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return redirect('/login');
        
        return view('home');
    }


    public function signupcreate()
    {
        echo "Hello"; die;
    }

    public function exportcsv(Request $request)
    {
         
        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=test.csv");
        $fp = fopen('php://output', 'w');
        $header = array('ID', 'FIRST NAME', 'LAST NAME', 'EMAIL', 'GENDER', 'COUNTRY', 'CREATED', 'STATUS'); 
        fputcsv($fp, $header);

        $header1 = array('ID', 'FIRST NAME', 'LAST NAME', 'EMAIL', 'GENDER', 'COUNTRY', 'CREATED', 'STATUS'); 
        fputcsv($fp, $header1);
        fclose($fp);

        exit;

    }
}
