<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $data_officer = DB::table('data_officer')->get();
        return view('home', ['data_officer' =>$data_officer]);
    }

    public function add()
    {
        return view('add');
    }

    public function adddata(Request $request)
    {
        DB::table('data_officer')->insert([
            'company_id' =>$request->company_id,
            'officer_id' =>$request->officer_id,
            'officer_name' =>$request->officer_name,
            'officer_qr' =>$request->officer_qr,
            'level' =>$request->level,
            'division' =>$request->division,
            'birth_date' =>$request->birth_date,
            'birth_place' =>$request->birth_place,
            'placement_location' =>$request->placement_location,
            'pin' =>$request->pin,
        ]);
        return redirect('home');
    }

    public function editdata($id)
    {
        $data_officer = DB::table('data_officer')->where('company_id',$id)->get();
        return view('edit', ['data_officer' =>$data_officer]);
    }

    public function edit(Request $request){
        echo $request;
        DB::table('data_officer')->where('company_id', $request->company_id)->update([
            'officer_id' =>$request->officer_id,
            'officer_name' =>$request->officer_name,
            'officer_qr' =>$request->officer_qr,
            'level' =>$request->level,
            'division' =>$request->division,
            'birth_date' =>$request->birth_date,
            'birth_place' =>$request->birth_place,
            'placement_location' =>$request->placement_location,
            'pin' =>$request->pin,

        ]);
        return redirect('home');
    }

    public function delete($id)
    {
        DB::table('data_officer')->where('company_id',$id)->delete();
        return redirect('home');
    }
}
