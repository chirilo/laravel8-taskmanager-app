<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogposts = Blogpost::latest()->paginate(5);
    
        return view('blogposts.index',compact('blogposts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('blogposts.create');
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
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Blogpost::create($request->all());
     
        return redirect()->route('blogposts.index')
                        ->with('success','Blogpost created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function show(Blogpost $blogpost)
    {
        //
        return view('blogposts.show',compact('blogpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogpost $blogpost)
    {
        //
        return view('blogposts.edit',compact('blogpost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogpost $blogpost)
    {
        //
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $blogpost->update($request->all());
    
        return redirect()->route('blogposts.index')
                        ->with('success','Blogpost updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogpost $blogpost)
    {
        //
        $blogpost->delete();
    
        return redirect()->route('blogposts.index')
                        ->with('success','Blogpost deleted successfully');
    }
}
