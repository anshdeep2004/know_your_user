<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackFormRequest;
use App\Models\Feed;
use Illuminate\View\View;

class FeedController extends Controller
{
    public function index(){
        $feedbacks = Feed::all();
        return view('feedb.index', compact('feedbacks'));
    }

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

    public function edit($feedback_id)
    {
        $feedback = Feed::find($feedback_id);

        return view('feedb.edit', compact('feedback'));
    }

    public function update(FeedbackFormRequest $request, $feedback_id)
    {

        $feedba = $request->validated();

        $feedback = Feed::where('id',$feedback_id)->update([
            'name' => $feedba['name'],
            'email' => $feedba['email'],
            'rating' => $feedba['rating'],
            'feedback' => $feedba['feedback'],
            'contact' => $feedba['contact']
        ]);
        return redirect('/feedbacks')->with('message','Your feedback is being updated');
    }

    public function destroy($feedback_id){
        $feedba = Feed::find($feedback_id)->delete();
        return redirect('/feedbacks')->with('message','Your feedback is being deleted');
    }
}
