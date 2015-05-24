<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use Request;
use Carbon\Carbon;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        //
        //return \Auth::user();
        $articles = \App\Article::latest('published_at')->published()->get();
        //$latest=\App\Article::latest()->first();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        //dd(\Auth::user());
        if (\Auth::guest()) {

            return redirect('articles');
        }
        $tags=\App\Tag::lists('name','id');
        //dd($tags);
        //$user_id = \Auth::user()->id;
        return view('articles.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\ArticleRequest $request) {
//dd($request->input('tags'));        
//
        //
        $tagIds=$request->input('tags');
        //dd(\Auth::user());
        //return \Auth::user();
        //$aricle['user_id']=\Auth::user()->id;
        $article = new \App\Article($request->all());
        //\App\Article::create($request->all());
        $article=\Auth::user()->articles()->save($article);
        //dd($article);
        $article->tags()->attach($request->input('tag_list'));
        \Session::flash('flash_message','Your article has been created!');
        //flash('Your article has been created!')->important();

        /*return redirect('articles')->with([
            'flash_message'=>'Your article has been created!',
            'flash_message_important'=>true
            
        ]);*/
        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
//dd($article)        ;
//
        $article = \App\Article::findorfail($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
         $tags=\App\Tag::lists('name','id');
        $article = \App\Article::findorfail($id);
        return view('articles.edit', compact('article','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Requests\ArticleRequest $request) {
//dd($id);		
//
        $article = \App\Article::findorfail($id);
        
        $article->update($request->all());
        //dd($article);
        $article->tags()->sync($request->input('tag_list'));
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
