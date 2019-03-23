<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createCourseRequest;
use Illuminate\View\View;
use App\Models\course;

class coursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */

    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        //
        $course = course::where('user_id', auth()->user()->id)->get();
        return view('showcourses')->with('courses', $course);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(createCourseRequest $request)
    {

        //
        $this->validate($request, [
            'name' => 'required',
            'credits' => 'required | numeric',
            'cover_image' => 'image|nullable|max:1999',
            'description' => 'required'
        ]);


        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image')->getClientOriginalName();

            //file name without ext

            $fileName = pathinfo($file, PATHINFO_FILENAME);

            //ext
            $fileExt = $request->file('cover_image')->getClientOriginalExtension();

            //Creating File name

            $finalFile = $fileName . '_' . time() . $fileExt;

            $path = $request->file('cover_image')->storeAs('public\cover_image', $finalFile);

        } else {

            $finalFile = 'noimage.jpg';
        }
        $course = new course;
        $course->name = $request->input('name');
        $course->credits = $request->input('credits');
        $course->description = $request->input('description');
        $course->cover_image = $finalFile;
        $course->user_id = auth()->user()->id;


        try {
            $course->save();


            return redirect('\home')->with('success', 'Course Created Successfully');
        } catch (Exception $ex) {
            dd($ex);
            return redirect('\courses')->with('error', 'Error Check The Attributes!');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $course = course::find($id);
        return view('show')->with('courses', $course);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
