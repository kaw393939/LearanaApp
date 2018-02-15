<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();

        return view('courses.index')->with('courses', $courses);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\CourseForm::class, [
            'method' => 'POST',
            'url' => route('courses.store')
        ]);

        return view('courses.form', compact('form'));
    }

    public function store(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(\App\Forms\CourseForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
        $course = new Course();
        $course->user_id = Auth::id();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->publish = $request->has('publish');
        $course->save();
        return redirect()->route('courses.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        return view('courses.course')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder, Course $course)
    {
        //
        $edit = $formBuilder->create(\App\Forms\CourseForm::class, [
            'method' => 'PATCH',
            'url' => route('courses.update', $course->id),
            'model' => $course,
        ]);
        //
        $delete = $formBuilder->create(\App\Forms\DeleteForm::class, [
            'method' => 'DELETE',
            'url' => route('courses.destroy', $course->id),
        ]);

        return view('courses.formEdit', compact('edit','delete'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(FormBuilder $formBuilder, Request $request, Course $course)
    {
        //
        $form = $formBuilder->create(\App\Forms\CourseForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        // Do saving and other things...
        $course->title = $request->title;
        $course->description = $request->description;
        $course->publish = $request->has('publish');
        $course->save();

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormBuilder $formBuilder, Course $course, Request $request)
    {
        // delete

        $course->delete();

        // redirect
        $request->session()->flash('message', 'Successfully deleted the nerd!');
        return redirect()->route('courses.index');
    }
}
