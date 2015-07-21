<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
        $pageTitle = "About Opsumit 4.0.0";
        return view('pages.page_template', compact('pageTitle'));
    }

    public function seraphin_study(){
        $pageTitle = "Seraphin Study";
        return view('pages.page_template', compact('pageTitle'));
    }

    public function efficacy(){
        $pageTitle = "Efficacy";
        return view('pages.page_template', compact('pageTitle'));
    }

    public function safety_profile(){
        $pageTitle = "Safety Profile";
        return view('pages.page_template', compact('pageTitle'));
    }

    public function about_opsumit(){
        $pageTitle = "About Opsumit";
        return view('pages.page_template', compact('pageTitle'));
    }

    public function prescribing_opsumit(){
        $pageTitle = "Prescribing Opsumit";
        return view('pages.page_template', compact('pageTitle'));
    }

    public function services_and_support(){
        $pageTitle = "Efficacy";
        return view('pages.page_template', compact('pageTitle'));
    }

    public function pah_resources(){
        $pageTitle = "PAH Resources";
        return view('pages.page_template', compact('pageTitle'));
    }
}
