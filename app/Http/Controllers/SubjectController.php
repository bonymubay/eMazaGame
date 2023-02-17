<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Traits\HelperTrait;
class SubjectController extends Controller
{
    use HelperTrait;

    public function index(Request $request){

        return $this-> ProcessSubject($request);

       }

       public function store(Request $request){

        return $this-> ProcessSubject($request);
       }

       public function show(Request $request, Subject $subject){
        return $this-> ProcessSubject($request);
       }

       public function update(Request $request, Subject $subject){
        return $this-> ProcessSubject($request);
       }

       public function destroy(Request $request, Subject $subject){
        return $this-> ProcessSubject($request);
       }

}
