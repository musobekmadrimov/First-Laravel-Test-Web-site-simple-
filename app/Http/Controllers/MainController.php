<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function reviews(){
        $review = new ContactModel();
//        dd($review->all());
        return view('reviews', ['reviews' => $review->all()]);
    }

    public function reviews_check(Request $request){
        $valid = $request -> validate([
            'email' => 'required|min:4|max:30',
            'name' => 'required|min:4|max:50',
            'message' => 'required|min:15|max:100'
        ]);

        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->name = $request->input('name');
        $review->message = $request->input('message');

        $review->save();
        return redirect()-> route('reviews');
    }
}
