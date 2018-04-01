<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App;




class articlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $articles = App\articles::orderBy('id_articles','desc')->get();
    
       return View('arts', compact('articles'));
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addArt              = new App\articles();
        $addArt->title       = $request->input('art-title');
        $addArt->content     = $request->input('art-content');
        $addArt->owner_id    = 0; // i will ad user id here
        $addArt->category_id = $request->input('category_id'); // i will ad category_id here
        
        
        $file                = request()->file('file');
        $name                = $file->getClientOriginalName();
        $ext                 = $file->getClientOriginalExtension(); 
        $location            = $file->move(public_path('uploads'), $name);
        $addArt->imgpath     = $name ;
        
        $addArt->save();
        return redirect()->route('home.index');
    }



    public function upload()
    {
        $file = new App\articles();
        $file = request()->file('file');
        $name = $file->getClientOriginalName();
        $size = $file->getSize();
        $mim  = $file->getMimeType();
        $ext  = $file->getClientOriginalExtension();
        $realPath = $file->getRealPath();

        $file->move(public_path('uploads'),$name);
       // return redirect()->route('add.store');
       // 'image_'.time().'.'.$ext
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $artdelete = App\articles::destroy($id);
        return redirect()->route('home.index');
    }
}
