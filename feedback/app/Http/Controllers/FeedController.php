<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackFormRequest;
use App\Models\Feed;
use Illuminate\View\View;

class FeedController extends Controller
{
    public function create()
    {
        return view('feedb.create');
    }

    public function store(FeedbackFormRequest $request)
    {
        $feedba = $request->validated();

        $feedbacks = Feed::create($feedba);
        return redirect('/feed')->with('message','Thanks for your Feedback');
    }
}
