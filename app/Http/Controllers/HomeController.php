<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public  function index() 
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=='user')
            {
                return view('dashboard');
            }
            elseif($usertype=='admin')
            {
                $usercount=User::where('usertype','user')->count();
                $admincount=User::where('usertype','admin')->count();
                $users=DB::table('users')->get();
                
                
                return view('admin.adminhome',compact('usercount','admincount','users'));
            }
            else
            {
                return redirect()->back();
            }
        }
    }
     public function homepage()  {
        $faculties=Faculty::all();
        $notices=Notice::all();
        return view('home.homepage',compact('faculties','notices'));
        
    }
     public function mission()  {
        return view('home.mission&vision');
        
    }
    public function faculty()  {
        $faculties=Faculty::all();
        return view('home.faculty_member',compact('faculties'));
        
    }
    public function returnHome()
    {
        return  redirect()->back();
    }
     public function stuff()  {

        return view('home.offices&stuff');
        
    }
    
       public function curriculum()
         {
        return view('home.curriculum');
            
        }

       public  function notice()  {

        return view('home.notice');
            
        }

        public  function noticedetails($id)  {
        $notice=Notice::find($id);
        return view('home.notice_details',compact('notice'));
        }

        public  function noticedetails1()  {

            return view('home.notice_details1');
                    
            }

    public  function news()  {
        return view('home.news');
            
        }
        public  function gallery()  {

            return view('home.gallery');
            
        }
         public function research()  {
            return view('home.gallery');
            
        }
    
}
