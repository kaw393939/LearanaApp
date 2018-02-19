<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;
class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($courseID, FormBuilder $formBuilder)
    {
        //
        $form = $formBuilder->create(\App\Forms\Resource::class, [
            'method' => 'POST',
            'url' => route('resource.store',['courseid' => $courseID])
        ]);
        $pageTitle = 'Create Resource';
        return view('sections.form', compact('form','pageTitle'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($courseID, Request $request)
    {

        $resoure = new Resource();
        $resoure->user_id = Auth::id();
        $resoure->course_id = $courseID;
        $resoure->url = $request->url;

        $resoure->publish = $request->publish;

        $resoure->save();

        return redirect()->route('courses.show',$courseID);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */

    public function show($course, Resource $resource)
    {


        $pageTitle = 'Resource';

        return view('resources.resource')->with(compact( 'resource', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
    }
}
