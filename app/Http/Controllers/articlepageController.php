<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class articlepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articles = App\articles::all();
  
        $articlepage =  App\articles::get();
        return view('articlepage' , compact('articlepage', 'articles'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tags = App\tags::all();
        $articles = App\articles::find($id);
    
        return view('articlepage')->withArticles($articles)->withTags($tags);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = App\articles::find($id);
        $categories = App\categories::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }
        
        $tags = App\tags::all();
        $tags2 = array();
        foreach ($tags as $tag) 
        {
            $tags2[$tag->id] = $tag->name;
        }
        return view('edit-art')->withArticles($articles)->withCategories($cats)->withTags($tags);
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
        $articles = App\articles::find($id);

        $articles->title = $request->input('edit-title');
        $articles->content = $request->input('edit-content');
        $articles->category_id = $request->input('category');

        $articles->save();

        if (isset($request->tags)) 
        {
            $articles->tags()->sync($request->tags);
        } 
        else 
        {
            $articles->tags()->sync(array());
        }

        $articles->tags()->sync($request->input('checktag'), false);

        Session::flash('success','Article has been Updated Successfully !!');
        // we reurn the name of view and the function of route view
        return redirect()->route('articlepage.show', $articles->id_articles);
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
