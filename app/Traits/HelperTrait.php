<?php

namespace App\Traits;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Question;

Trait HelperTrait{
    public function ProcessSubject(Request $request){

        $orderDirection= $request-> Query(key: 'direction', default:'asc');
        $orderColumn=$request-> Query(key:'column', default:'id');
        $orderPerPage= $request-> Query(key:'per_page', default:'2');
       $subjects= Subject::orderBy($orderColumn, $orderDirection)->paginate($orderPerPage);

        return response()-> json([$subjects]);
    }

    public function ProcessQuestion(Request $request){

        $orderDirection= $request-> Query(key: 'direction', default:'asc');
        $orderColumn=$request-> Query(key:'column', default:'id');
        $orderPerPage= $request-> Query(key:'per_page', default:'2');
       $questions= Question::orderBy($orderColumn, $orderDirection)->paginate($orderPerPage);

        return response()-> json([$questions]);
    }

}
