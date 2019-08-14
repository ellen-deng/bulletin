<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Member;
use App\Category;
use Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderby('updated_at', 'desc')->get();
        return view('news.index',compact('news'));
        // return dd($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Session::has('member_id'))return redirect('/');

        $category = Category::all();
        return view('news.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Session::has('member_id'))return redirect('/');

        if($request->okOrCancel == 'OK'){
            $news = new News();
            $news->member_id = $request->member;
            $news->title = $request->title;
            $news->category_id = $request->category;
            $news->content = $request->content;
            $news->save();
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Session::has('member_id'))return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Session::has('member_id'))return redirect('/');

        $news = News::find($id);
        $category = Category::all();
        return view('news.edit',compact('news'),compact('category'));
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
        if(!Session::has('member_id'))return redirect('/');

        if($request->okOrCancel == 'OK'){
            $news = News::find($id);
            $news->title = $request->title;
            $news->category_id = $request->category;
            $news->content = $request->content;
            $news->save();
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Session::has('member_id'))return redirect('/');

        $news = News::find($id);
        $news->delete();
        return redirect('/');
    }

    function content($id){
        $news = News::find($id);
        return view('news.content',compact('news'));
    }
}
