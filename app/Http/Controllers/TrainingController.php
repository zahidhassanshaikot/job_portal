<?php

namespace App\Http\Controllers;

use App\TrainingPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class TrainingController extends Controller
{
    public function training(){
        $trainings=TrainingPost::orderBy('id', 'DESC')->paginate(12);
        return view('back-end.training',compact('trainings'));
    }
    public function singleTrainingPost($id){
        $training = TrainingPost::find($id);
        return view('back-end.single-training-post',compact('training'));
    }
    public function trainingPost(){
        return view('back-end.training-post');
    }
    public function saveTrainingPost(Request $request){

        $this->validate($request, [
            'training_title' => 'required|max:30|min:2',
            'location' => 'required|max:30|min:2',
            'email' => 'email|required',
            'tk' => 'required',
            'total_hour' => 'required',
            'training_description' => 'required',
            'last_date' => 'required',

        ]);

        $trainingPost = new TrainingPost();
        $trainingPost->training_title = $request->training_title;
        $trainingPost->user_id = Auth::user()->id;
        $trainingPost->location = $request->location;
        $trainingPost->email = $request->email;
        $trainingPost->tk = $request->tk;
        $trainingPost->training_description = $request->training_description;
        $trainingPost->short_description = $request->short_description;
        $trainingPost->last_date = $request->last_date;
        $trainingPost->total_hour = $request->total_hour;

        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg|max:2048',
            ]);

            $profileImage = $request->file('image');
            $fileType = $profileImage->getClientOriginalExtension();
            $imageName = date('YmdHis') . "ab" . rand(10, 30) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($profileImage)->save($imageUrl);
            $trainingPost->image = $imageUrl;
        }

        $trainingPost->save();

        return redirect()->back()->with('success', 'Successfully Added');
    }
}
