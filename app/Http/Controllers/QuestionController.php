<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Traits\HelperTrait;

class QuestionController extends Controller
{
    use HelperTrait;

   public function index(Request $request){
    return $this-> ProcessQuestion($request);
   }

   public function store(Request $request){
    return $this-> ProcessQuestion($request);
   }

   public function show(Request $request, Question $question){
    return $this-> ProcessQuestion($request);
   }

   public function update(Request $request, Question $question){
    return $this-> ProcessQuestion($request);
   }

   public function destroy(Request $request, Question $question){
    return $this-> ProcessQuestion($request);
   }

}
