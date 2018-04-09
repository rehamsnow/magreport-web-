<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Report;

class DashController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $inc_reports = Report::paginate(10);
        return view('dash')->with('inc_reports',$inc_reports);
    }
}