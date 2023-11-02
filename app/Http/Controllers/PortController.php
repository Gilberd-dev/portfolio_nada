<?php

namespace App\Http\Controllers;

use App\Models\doing;
use App\Models\education;
use App\Models\experience;
use App\Models\port_project;
use App\Models\Profile;
use App\Models\resume;
use App\Models\skill;

class PortController extends Controller
{

    public function profile(){
        $profile = Profile::all();
        $do = doing::all();
        $do->each(function($do, $index) {
            $do->number = $index + 1;
        });
        $edu = education::all();
        $exp = experience::all();
        $port_pro = port_project::all();
        $port_app = port_project::where('kategori','App')->get();
        $port_web = port_project::where('kategori','Web')->get();
        $port_proj = port_project::where('kategori','Project')->get();
        $resumee = resume::all();
        $skill_pro = skill::where('kategori','Programming')->get();
        $skill_soft = skill::where('kategori','Soft')->get();
        return view('portfolio',compact('profile','do','edu','exp','port_pro','port_app','port_web','port_proj','resumee','skill_pro','skill_soft'),[
            "title" => "Portfolio"
        ]);
    }
}