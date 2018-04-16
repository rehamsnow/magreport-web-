<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsAnn;
use Illuminate\Support\Facades\Storage;
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
            'ann_img1' => 'image|nullable|max:1999',
            'ann_img2' => 'image|nullable|max:1999',
        ]);

        // Handle File Upload

        if($request->hasFile('ann_img1')){
            // Get filename with the extension
            $filenameWithExt1 = $request->file('ann_img1')->getClientOriginalName();
            // Get just filename
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            // Get just ext
            $extension1 = $request->file('ann_img1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1 = $filename1.'_'.time().'.'.$extension1;
            // Upload Image
            $path = $request->file('ann_img1')->storeAs('public/ann_images', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'noimage.jpg';
        }
        
        if($request->hasFile('ann_img2')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('ann_img2')->getClientOriginalName();
            // Get just filename
            $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('ann_img2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $filename2.'_'.time().'.'.$extension2;
            // Upload Image
            $path = $request->file('ann_img2')->storeAs('public/ann_images', $fileNameToStore2);
        } else {
            $fileNameToStore2 = 'noimage.jpg';
        }

        // Create News Announcements
        $news_anns = new NewsAnn;
        $news_anns->ann_title = $request->input('ann_title');
        $news_anns->ann_desc = $request->input('ann_desc');
        $news_anns->ann_date = $request->input('ann_date');
        $news_anns->ann_time = $request->input('ann_time');
        $news_anns->ann_location = $request->input('ann_location');
        $news_anns->ann_img1 = $fileNameToStore1;
        $news_anns->ann_img2 = $fileNameToStore2;
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
            'ann_location' => 'required'
        ]);

                // Handle File Upload

                if($request->hasFile('ann_img1')){
                    // Get filename with the extension
                    $filenameWithExt1 = $request->file('ann_img1')->getClientOriginalName();
                    // Get just filename
                    $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
                    // Get just ext
                    $extension1 = $request->file('ann_img1')->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore1 = $filename1.'_'.time().'.'.$extension1;
                    // Upload Image
                    $path = $request->file('ann_img1')->storeAs('public/ann_images', $fileNameToStore1);
                } 
                
                if($request->hasFile('ann_img2')){
                    // Get filename with the extension
                    $filenameWithExt2 = $request->file('ann_img2')->getClientOriginalName();
                    // Get just filename
                    $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
                    // Get just ext
                    $extension2 = $request->file('ann_img2')->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore2 = $filename2.'_'.time().'.'.$extension2;
                    // Upload Image
                    $path = $request->file('ann_img2')->storeAs('public/ann_images', $fileNameToStore2);
                }

        // Create News Announcements
        $news_anns = new NewsAnn;
        $news_anns->ann_title = $request->input('ann_title');
        $news_anns->ann_desc = $request->input('ann_desc');
        $news_anns->ann_date = $request->input('ann_date');
        $news_anns->ann_time = $request->input('ann_time');
        $news_anns->ann_location = $request->input('ann_location');
        if($request->hasFile('ann_img1')){
            $news_anns->ann_img1 = $fileNameToStore1;
        }
        if($request->hasFile('ann_img2')){
            $news_anns->ann_img2 = $fileNameToStore2;
        }
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

        //if($news_anns->ann_img1 != 'noimage.jpg'){
            //Delete Image
          //  Storage::delete('public\ann_images/'.$news_anns->ann_img1);
        //}
        //if($news_anns->ann_img2 != 'noimage.jpg'){
            //Delete Image
          //  Storage::delete('public\ann_images/'.$news_anns->ann_img2);
        //}
        $news_anns->delete();
        return redirect('/newsann')->with('success', 'Post Deleted');
    }
}
