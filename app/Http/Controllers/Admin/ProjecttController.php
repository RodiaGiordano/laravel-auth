<?php

namespace App\Http\Controllers\Admin;

use App\Models\Projectt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ProjecttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projectt::all();
        
        return view("admin.projects.index", compact("projects"));
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
     * @param  \App\Models\Projectt  $projectt
     * @return \Illuminate\Http\Response
     */
    public function show(Projectt $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projectt  $projectt
     * @return \Illuminate\Http\Response
     */
    public function edit(Projectt $projectt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projectt  $projectt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projectt $projectt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projectt  $projectt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projectt $projectt)
    {
        //
    }
}
