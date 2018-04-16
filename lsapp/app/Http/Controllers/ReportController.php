<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
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
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
    public function index()
    {
        $inc_reports = Report::paginate(15);
        return view('report.index')->with('inc_reports', $inc_reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'inc_desc' => 'required',
            'rep_desc' => 'required',
            'rep_date' => 'required',
            'rep_time' => 'required',
            'rep_address' => 'required',
            'rep_img' => 'image|nullable|max:1999',
            'rep_status' => 'required',
        ]);

        if($request->hasFile('rep_img')){
            // Get filename with the extension
            $filenameWithExt3 = $request->file('rep_img')->getClientOriginalName();
            // Get just filename
            $filename3 = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
            // Get just ext
            $extension3 = $request->file('rep_img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore3 = $filename3.'_'.time().'.'.$extension3;
            // Upload Image
            $path = $request->file('rep_img')->storeAs('public/rep_images', $fileNameToStore3);
        } else {
            $fileNameToStore3 = 'noimage.jpg';
        }

        // Incident Reports
        $inc_reports = new Report;
        $inc_reports->inc_desc = $request->input('inc_desc');
        $inc_reports->rep_desc = $request->input('rep_desc');
        $inc_reports->rep_date = $request->input('rep_date');
        $inc_reports->rep_time = $request->input('rep_time');
        $inc_reports->rep_address = $request->input('rep_location');
        $inc_reports->rep_status = $request->input('rep_status');
        $inc_reports->rep_img = $fileNameToStore3;
        $inc_reports->save();

        return redirect('/dash')->with('success', 'Report found');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rep_id)
    {
        $inc_reports = Report::all();
        return view('dash')->with('index_reports',$inc_reports);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inc_reports = Report::find($rep_id);

        return view('report.edit')->with('inc_reports', $inc_reports);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
