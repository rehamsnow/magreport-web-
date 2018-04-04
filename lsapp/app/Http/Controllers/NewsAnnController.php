<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsAnn;
//use DB;

class NewsAnnController extends Controller
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
        // $news_anns = DB::select('SELECT * FROM news_anns');
        $news_anns = NewsAnn::orderBy('created_at', 'desc')->get();
        return view('newsann.index')->with('news_anns', $news_anns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsann.create');
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
            'ann_title' => 'required',
            'ann_desc' => 'required',
            'ann_date' => 'required',
            'ann_time' => 'required',
            'ann_location' => 'required',
        ]);

        // Create News Announcements
        $news_anns = new NewsAnn;
        $news_anns->ann_title = $request->input('ann_title');
        $news_anns->ann_desc = $request->input('ann_desc');
        $news_anns->ann_date = $request->input('ann_date');
        $news_anns->ann_time = $request->input('ann_time');
        $news_anns->ann_location = $request->input('ann_location');
        $news_anns->user_id = auth()->user()->id;
        $news_anns->save();

        return redirect('/newsann')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ann_id)
    {
        $news_anns = NewsAnn::find($ann_id);
        return view('newsann.show')->with('news_anns', $news_anns);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ann_id)
    {
        $news_anns = NewsAnn::find($ann_id);

        //check for correct user
        //if(auth()->user()->id !==$news_anns->user_id){
          //  return redirect('/newsann')->with('error', 'Unauthorized Page');

        //}
        return view('newsann.edit')->with('news_anns', $news_anns);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ann_id)
    {
        $this->validate($request,[
            'ann_title' => 'required',
            'ann_desc' => 'required',
            'ann_date' => 'required',
            'ann_time' => 'required',
            'ann_location' => 'required',
        ]);

        // Create News Announcements
        $news_anns = new NewsAnn;
        $news_anns->ann_title = $request->input('ann_title');
        $news_anns->ann_desc = $request->input('ann_desc');
        $news_anns->ann_date = $request->input('ann_date');
        $news_anns->ann_time = $request->input('ann_time');
        $news_anns->ann_location = $request->input('ann_location');
        $news_anns->user_id = auth()->user()->id;
        $news_anns->save();

        return redirect('/newsann')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ann_id)
    {
        $news_anns = NewsAnn::find($ann_id);

        //check for correct user
        //if(auth()->user()->id !==$news_anns->user_id){
          //  return redirect('/newsann')->with('error', 'Unauthorized Page');
        //}

        $news_anns->delete();
        return redirect('/newsann')->with('success', 'Post Deleted');
    }
}
