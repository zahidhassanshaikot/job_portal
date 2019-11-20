<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;
use DB;
use File;
use Image;

class JobController extends Controller
{
    public function jobs(){
        $jobs=JobPost::all();
        return view('back-end.jobs',['jobs'=> $jobs]);
    }
    public function myJobs(){
        return view('back-end.my-job');
    }
    public function postJob(){
        return view('back-end.post-job');
    }
    public function savePostJob(Request $request){

        $this->validate($request, [
            'job_title' => 'required|max:30|min:2',
            'location' => 'required|max:30|min:2',
            'email' => 'email|required',
            'salary' => 'required',
            'job_description' => 'required',
            'last_date' => 'required',
            'company_name' => 'required',

        ]);
        
        $job=new JobPost();
        $job->job_title=$request->job_title;
        $job->location=$request->location;
        $job->email=$request->email;
        $job->salary=$request->salary;
        $job->job_description=$request->job_description;
        $job->last_date=$request->last_date;
        $job->company_name=$request->company_name;
        $job->web_url=$request->web_url;

        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'required|mimes:jpg,JPG,JPEG,jpeg|max:2048',
            ]);
            
            $profileImage = $request->file('image');
            $fileType = $profileImage->getClientOriginalExtension();
            $imageName = date('YmdHis') . "ab" . rand(5, 10) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($profileImage)->save($imageUrl);
            $job->image = $imageUrl;
        }

        $job->save();

        return redirect()->back()->with('success','Successfully Added');
    }
    public function singleJobPost($id){
        $job=JobPost::find($id);
        return view('back-end.single-job-post',['job'=>$job]);
    }
    public function postJobList(){
        return view('back-end.post-job-list');
    }
    public function candidateList(){
        return view('back-end.candidate-list');
    }
    public function candidateStatus($status){
        return view('back-end.candidate-status');
    }
}
