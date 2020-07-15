<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaraDev\Http\Requests\CourseRequest;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.courses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LaraDev\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
//    public function store(CourseRequest $request)
    {

        $rules = [
            'name' => 'required',
            'tutor' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12|confirmed'
        ];

        $message = [
            'password.confirmed' => 'As senhas não são iguais.'
        ];

//        $request->validate($rules, $message);
        $validate = Validator::make($request->all(), $rules, $message);

        if ($validate->fails()) {
            return redirect()->route('courses.create')->withInput()->withErrors($validate);
        } else {
            return var_dump($validate);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
