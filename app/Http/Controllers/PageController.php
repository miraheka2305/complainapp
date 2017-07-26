<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\kategori;
use App\Complaint;

class PageController extends Controller
{
    //
    public function dashboardadmin(){
        return view('complaints.ad-home');
    }
    public function dashboardfl(){
        $user_id = Auth::id();
        $complaints = Complaint::all();
        $user_complaint = $complaints->where('user_id', $user_id);
        return view('complaints.fl-home')->with("user_complaint", $user_complaint);
    }
    public function statistic(){
        return view('complaints.ad-statistic');
    }
    public function complaint(){
        return view('complaints.ad-complaints');
    }
    public function regisfreelancer(){
        return view('complaints.ad-regis-freelancer');
    }
    public function newcomplaint(){
        $user_id = Auth::id();
        $kategoris = kategori::all();
        return view('complaints.fl-new-complaint')->with("user_id", $user_id)->with("kategoris", $kategoris);
    }
    public function viewanswer(){
        return view('complaints.fl-view-answer');
    }
}
