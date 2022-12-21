<?php

 

namespace App\Http\Controllers;

 

use App\Models\Student;

use Illuminate\Http\Request;

 

class StudentController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return Student::orderBy('created_at', 'asc')->get();

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

 

        $this->validate($request, [ //inputs are not empty or null

            'student_name' => 'required',

            'email' => 'required',

            'age' => 'required',

            'cid' => 'required',

            'gid' => 'required',

            'course' => 'required',

        ]);

 

        $task = new Student;

        $task->student_name = $request->input('student_name');

        $task->email = $request->input('email');

        $task->age = $request->input('age');

        $task->cid = $request->input('cid');

        $task->gid = $request->input('gid');

        $task->course = $request->input('course');

 

        $task->save(); //storing values as an object

        return $task;

    }

 

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }

 

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        //

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

        $this->validate($request, [ // the new values should not be null

            'Student' => 'required',

            //'description' => 'required',

        ]);

 

        $task = Student::findorFail($id); // uses the id to search values that need to be updated.

        $task->Student = $request->input('title'); //retrieves user input

        //$task->description = $request->input('description');////retrieves user input

        $task->save();//saves the values in the database. The existing data is overwritten.

        return $task;

    }

 

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $task = Student::findorFail($id); //searching for object in database using ID

      if($task->delete()){ //deletes the object

          return 'deleted successfully'; //shows a message when the delete operation was successful.

      }

    }

}