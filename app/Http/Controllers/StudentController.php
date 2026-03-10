<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'Rogg', 'firstname' => 'Rogger', 'age' => 20],
            ['name' => 'Rogger', 'firstname' => 'Roggero', 'age' => 25],
            ['name' => 'Roggero', 'firstname' => 'Hallisatou', 'age' => 30],
            ['name' => 'Hallisatou', 'firstname' => 'Rogg', 'age' => 35]
            
        ];
        return view('students.index', compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        // Logique pour enregistrer les données dans la base de données ou effectuer d'autres actions
    }

    public function show($id){
        // Logique pour afficher les détails d'un étudiant spécifique en fonction de son ID
    }

    public function edit($id){
        // Logique pour afficher le formulaire d'édition d'un étudiant spécifique en fonction de son ID
    }

    public function destroy(String $id){

    }

    public function update(){

    }

    public function test(){
        $student = new Student();
        $student->name = 'Rogg';
        student::create([
            'name' => 'Rogg',
            'firstname' => 'Rogger',
            'age' => 20
        ]);
    }







}
