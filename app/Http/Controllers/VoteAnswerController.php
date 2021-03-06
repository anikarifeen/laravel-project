<?php

namespace App\Http\Controllers;
use App\Answer;
use Illuminate\Http\Request;

class VoteAnswerController extends Controller
{
    public function _construct(){
        return $this->middleware('auth');
    }
    public function vote(Answer $answer){
        $vote=(int) request()->vote;
        auth()->user()->voteAnswer($answer, $vote);
        return back();
    }
}
