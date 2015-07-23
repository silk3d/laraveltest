<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NavModel;

class PagesController extends Controller
{

    public function home(){
        $navItems = NavModel::getNavElements();
        $pageTitle = "Home 0.0";
        return view('pages.home', ['navItems'=>$navItems, 'pageTitle'=>$pageTitle]);
    }

    public function seraphin_study(){
        $navItems = NavModel::getNavElements();
        $pageTitle = "Seraphin Study 1.0";
        return view('pages.page_template', ['navItems'=>$navItems, 'pageTitle'=>$pageTitle]);
    }

    public function efficacy(){
        $navItems = NavModel::getNavElements();
        $pageTitle = "Efficacy 2.0";
        return view('pages.page_template', ['navItems'=>$navItems, 'pageTitle'=>$pageTitle]);
    }

    public function safety_profile(){
        $navItems = NavModel::getNavElements();
        $pageTitle = "Safety Profile 3.0";
        return view('pages.page_template', ['navItems'=>$navItems, 'pageTitle'=>$pageTitle]);
    }

    public function about(){
        $navItems = NavModel::getNavElements();
        $pageTitle = "About Opsumit 4.0";
        return view('pages.page_template', ['navItems'=>$navItems, 'pageTitle'=>$pageTitle]);
    }

    public function prescribing_opsumit(){
        $navItems = NavModel::getNavElements();
        $pageTitle = "Prescribing Opsumit 5.0";
        return view('pages.page_template', ['navItems'=>$navItems, 'pageTitle'=>$pageTitle]);
    }

    public function services_and_support(){
        $navItems = NavModel::getNavElements();
        $pageTitle = "Services and Support 6.0";
        return view('pages.page_template', ['navItems'=>$navItems, 'pageTitle'=>$pageTitle]);
    }

    public function pah_resources(){
        $navItems = NavModel::getNavElements();
        $pageTitle = "PAH Resources 7.0";
        return view('pages.page_template', ['navItems'=>$navItems, 'pageTitle'=>$pageTitle]);
    }
}
