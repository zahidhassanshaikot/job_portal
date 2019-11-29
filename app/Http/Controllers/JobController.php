<?php

namespace App\Http\Controllers;

use App\JobApply;
use App\JobPost;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Image;

class JobController extends Controller
{
    public function jobs(){
        $jobs=JobPost::orderBy('id', 'DESC')->paginate(12);
        return view('back-end.jobs',['jobs'=> $jobs]);
    }
    public function myJobs(){
        $jobs = JobPost::join('job_apply', 'job_apply.job_post_id','=','job_post.id')
        ->select('job_post.*')
        ->orderBy('job_post.id', 'DESC')
        ->where('job_apply.user_id','=', Auth::user()->id)
        ->paginate(12);
        return view('back-end.my-job', ['jobs'=> $jobs]);
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
        $job->user_id=Auth::user()->id;
        $job->location=$request->location;
        $job->email=$request->email;
        $job->salary=$request->salary;
        $job->job_description=$request->job_description;
        $job->short_description=$request->short_description;
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
        if (Auth::user()) {
        $job=JobPost::find($id);
        $applyCheck = JobApply::where('user_id', Auth::user()->id)->where('job_post_id',$id)->first();
        return view('back-end.single-job-post',['job'=>$job, 'applyCheck'=> $applyCheck]);
        }else{
            return redirect()->route('user-login');
        }
    }
    public function postJobList(){
        $jobs = JobPost::where('user_id',Auth::user()->id)->get();
        // return $jobs;
        return view('back-end.post-job-list',['jobs'=>$jobs]);
    }
    public function applyJob($id){
        if(Auth::user()){
        $apply = new JobApply();
        $apply->user_id = Auth::user()->id;
        $apply->job_post_id = $id;
        $apply->save();
        
        return redirect()->back()->with('success','Applied successfully');
        }else{
        return redirect()->back()->with('error', 'Please login for apply');
        }
    }



    public function candidateList(){
         $candidates = JobApply::join('users', 'job_apply.user_id','=','users.id')
            ->join('job_post', 'job_apply.job_post_id', '=', 'job_post.id')
            ->select('users.*', 'job_post.job_title', 'job_apply.status', 'job_apply.id as job_apply_id')
            ->orderBy('job_apply.created_at', 'DESC')
            ->where('job_post.user_id', '=', Auth::user()->id)->get();
            // return $candidates;
        return view('back-end.candidate-list',['candidates'=>$candidates]);
    }
    public function candidateStatus($status){
        $candidates = JobApply::join('users', 'job_apply.user_id', '=', 'users.id')
            ->join('job_post', 'job_apply.job_post_id', '=', 'job_post.id')
            ->select('users.*', 'job_post.job_title', 'job_apply.status', 'job_apply.id as job_apply_id')
            ->orderBy('job_apply.created_at', 'DESC')
            ->where('job_post.user_id', '=', Auth::user()->id)
            ->where('job_apply.status', '=', $status)
            ->get();
        return view('back-end.candidate-status',compact('candidates'));
    }
    public function changeStatus($status,$id){ 
        $jobApply = JobApply::find($id);
        $jobApply->status = $status;
        $jobApply->save();
        return redirect()->back()->with('success','Successfully change status');
    }
}
