<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//à la place de Student::all() on remplace par DB::table('student') en update et add
use App\Classroom;
use App\Student;
use Image;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;

class TestController extends Controller
{
    public function showClassroomList(){

  
    	$classrooms = Classroom::all();
    	return view('welcome', ['class' => $classrooms]);

    }


    public function showAddClassroom() {

    	
    	return view('classroom.add') ;

    }

    public function handleAddClassroom(){
    	$data = input::all();
          $photo = 'photo-' . str_random(5) . time() . '.' . $data['photo']->getClientOriginalExtension();

            $fullImagePath = public_path('storage/classrooms/' . $photo);

            Image::make($data['photo']->getRealPath())->save($fullImagePath);

            $photoPath = 'storage/classrooms/' . $photo;
    	classroom::create([
    		'title' =>$data['title'],
            'photo' =>$photoPath
    	]);
       
    	return redirect('/');

    	//dd($data['title']);
    
    }

    public function showStudentsList(){
        $student = Student::all();
        $classrooms = Classroom::all();
        return view('student.Students', ['student' => $student], ['class' => $classrooms]);

    }

    public function showAddStudent() {

        $classrooms = Classroom::all();
        return view('student.addst', ['class' => $classrooms]) ;

    }

    public function handleAddstudent(){
        $data = input::all();
        student::create([
            'email' =>$data['email'],
            'name' =>$data['name'],
            'password' =>bcrypt($data['password']),
            'classroom_id' =>$data['classroom'],
        ]);
       return redirect('/');
        

        //dd($data['title']);
    
    }

    public function handleDeleteStudent($id){
         
         $student = Student::find($id);
         if ($student) {
             $student->delete();

         }else{
            return 'Erreur';
         }
         return redirect('/');


    }

    public function showStudentDetails($id){
        $student = Student::find($id);
        $classrooms = Classroom::all();
        return view('student.showStudentDetails', ['student' => $student], ['class' => $classrooms]);

    }


    public function showUpdateStudent($id){

        $classrooms = Classroom::all();
        $student = Student::find($id);
        if ($student) {
           return view('student.edit', ['student' => $student, 'class' => $classrooms]);
        }


    }

    public function handleUpdatestudent(Request $request, $id){

        $student = student::find($id);
        if ($student) {
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->classroom_id = $request->input('classroom');
            $student->save();
             return redirect('/');

        }else{
            return back();
        }
       

       

        /*
        ----------------------------
        autre méthode (save):
        ----------------------------

        $data = Input::all();
        $student->name = $data['name'];
        $student->email = $data['email'];
        $student->classroom_id = $data['classroom'];
        $student->save();




         */


    }
    public function showStudentLogin(){
        return view('student.loginStudent') ;
    }

    public function handleStudentLogin(){


        $data = Input::all();
        dd($data);
        $cred = [
                'email' => $data['email'], 
                'password' => $data['password']
            ];
            dd(Auth::user(), $cred);

        if (Auth::attempt($cred)) {//pour comparer esque l'utilisateur enregistré ou nn
            
             return redirect(route('welcome'));

        }else{

            return back();
        }


            
        }

    public function handleStudentLogout(){

        Auth::logout();
        return redirect('student/loginStudent');
    }

    public function test_connection()
    {
         $data = Input::all();
            $cred = [
                'email' => $data['email'], 
                'password' => $data['password']
            ];
          if (Auth::attempt($cred)) {//pour comparer esque l'utilisateur enregistré ou nn
            
             return redirect('/');

        }else{
            
            return back();
        }


    }
}
