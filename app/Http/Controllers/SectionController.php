<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
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
        $form = $formBuilder->create(\App\Forms\Section::class, [
            'method' => 'POST',
            'url' => route('sections.store',['courseid' => $courseID])
        ]);
        $pageTitle = 'Create Section';
        return view('sections.form', compact('form','pageTitle'));
    }
    public function register($course, Section $section, FormBuilder $formBuilder)
    {   $form = $formBuilder->create(\App\Forms\Registration::class, [
        'method' => 'POST',
        'url' => route('registration.store',['course' => $course,'section' => $section])
    ]);

        $course = $section->course()->get();
        $course = $course[0];

        $courseTitle = $course->title;
        $courseDescription  =  $course->description;
        $pageTitle = 'Register for Section';
        return view('sections.registration', compact('form','pageTitle','course','section','courseTitle','courseDescription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($courseID, Request $request)
    {

        $section = new Section();
        $section->user_id = Auth::id();
        $section->course_id = $courseID;
        $section->start = $request->start;
        $section->end = $request->end;
        $section->open = $request->open;
        $section->close = $request->close;
        $section->status = $request->status;
        $section->publish = $request->publish;

        $section->save();

        return redirect()->route('courses.show',$courseID);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show($course, Section $section, FormBuilder $formBuilder)
    {
        $registrations = $section->registrations()->get();

        $pageTitle = 'Roster';

        return view('sections.roster')->with(compact( 'registrations', 'pageTitle','section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
