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
        $user_id = \Auth::user()->id;
        return view('articles.create', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\ArticleRequest $request) {
        //
        //dd(\Auth::user());
        //return \Auth::user();
        //$aricle['user_id']=\Auth::user()->id;
        $article = new \App\Article($request->all());
        //\App\Article::create($request->all());
        \Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
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
        $article = \App\Article::findorfail($id);
        return view('articles.edit', compact('article'));
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
