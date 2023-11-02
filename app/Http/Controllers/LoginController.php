<?php

namespace App\Http\Controllers;

use App\Models\doing;
use App\Models\education;
use App\Models\experience;
use App\Models\port_project;
use App\Models\Profile;
use App\Models\resume;
use App\Models\skill;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index() {
        return view ('login.index',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
        public function __construct()
        {
            $this->middleware('auth');
        }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); // Ganti dengan URL yang sesuai
    }

    public function admin()
    {
        $data = Profile::all();
        return view('login.dashboard',compact('data'),[
            "title" => "Profile"
        ]);
    }
    public function edit_profile(Request $request,$id){

        $request->validate([
            'no_hp' => 'required|string|max:255',
            'foto_profil' => 'nullable|file|mimetypes:image/jpeg,image/jpg,image/png',
        ]);
    
    
        $admin = Profile::find($id);
        if ($admin) {
            $admin->no_hp = $request->input('no_hp');
    
            if ($request->hasFile('foto_profil')) {
                if ($admin->foto_profil) {
                    $previousFilePath = '/img/' . $admin->foto_profil;
                    if (file_exists($previousFilePath)) {
                        unlink($previousFilePath);
                    }
                }
            
                $foto_profil = $request->file('foto_profil');
                $foto_path = $foto_profil->move('img', $foto_profil->getClientOriginalName());
                $admin->foto_profil = $foto_path->getFilename();
            }

            $admin->save();
    
            return redirect()->route('dashboard')->with('success', 'Data berhasil diupdate');
        }
    
        return redirect()->route('dashboard')->with('error', 'Data tidak ditemukan');
    
    }

    public function doing()
    {
        $data = Profile::all();
        $doings = doing::all();
        $doings->each(function($doings, $index) {
        $doings->number = $index + 1;
        });
        return view('login.doing',compact('data','doings'),[
            "title" => "Doing"
        ]);
    }

    public function edit_doings($id)
    {
        $data = Profile::all();
        $edit = doing::find($id);
        return view('login.edit_doing' , compact('data','edit'),[
            "title" => "Doing"
        ]);
    }
    public function updatedoing(Request $request , $id)
    {

        $admin = doing::find($id);
        if ($admin) {
            $admin->title = $request->input('title');
            $admin->description = $request->input('description');
            $admin->save();
        return redirect('login/doing');
        }
    }

    public function add_doing(){
        $data = Profile::all();
        return view('login.add_doing',compact('data'),[
            "title" => "Doing"
        ]);
    }

    public function tambah_doing(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $doing = new Doing;
        $doing->title = $request->input('title');
        $doing->description = $request->input('description');
        $doing->save();
        return redirect('login/doing');
    }

    public function edit_res(){
        $data = Profile::all();
        $edit = resume::all();
        return view('login.resume' , compact('data','edit'),[
            "title" => "Resume"
        ]);
    }

    public function updateres(Request $request , $id)
    {

        $request->validate([
            'res_description' => 'required|string',
            'summary' => 'required|string',
            'res_city' => 'required|string|max:255',
            'res_no' => 'required|string|max:255',
            'res_email' => 'required|string|max:255',
        ]);
    
    
        $edit = resume::find($id);
        if ($edit) {
            $edit->res_description = $request->input('res_description');
            $edit->summary = $request->input('summary');
            $edit->res_city = $request->input('res_city');
            $edit->res_no = $request->input('res_no');
            $edit->res_email = $request->input('res_email');

            $edit->save();
    
            return redirect()->route('dashboard')->with('success', 'Data berhasil diupdate');
        }
    
        return redirect()->route('dashboard')->with('error', 'Data tidak ditemukan');
    }

    public function education()
    {
        $data = Profile::all();
        $educate = education::all();
        $educate->each(function($educate, $index) {
        $educate->number = $index + 1;
        });
        return view('login.education',compact('data','educate'),[
            "title" => "Education"
        ]);
    }
    public function edit_educate($id)
    {
        $data = Profile::all();
        $edit = education::find($id);
        return view('login.edit_educate' , compact('data','edit'),[
            "title" => "Doing"
        ]);
    }

    public function updateedu(Request $request , $id)
    {

        $admin = education::find($id);
        if ($admin) {
            $admin->school_name = $request->input('school_name');
            $admin->year = $request->input('year');
            $admin->school_place = $request->input('school_place');
            $admin->save();
        return redirect('login/education');
        }
    }

    public function add_edu(){
        $data = Profile::all();
        return view('login.add_edu',compact('data'),[
            "title" => "Education"
        ]);
    }

    public function tambah_edu(Request $request){

        $request->validate([
            'school_name' => 'required',
            'year' => 'required',
            'school_place' => 'required'
        ]);

        $education = new Education;
        $education->school_name = $request->input('school_name');
        $education->year = $request->input('year');
        $education->school_place = $request->input('school_place');
        $education->save();
        return redirect('login/education');
    }

    public function experience()
    {
        $data = Profile::all();
        $experience = experience::all();
        $experience->each(function($experience, $index) {
        $experience->number = $index + 1;
        });
        return view('login.experience',compact('data','experience'),[
            "title" => "Experience"
        ]);
    }

    public function edit_exp($id)
    {
        $data = Profile::all();
        $edit = experience::find($id);
        return view('login.edit_exp' , compact('data','edit'),[
            "title" => "Experience"
        ]);
    }

    public function updateexp(Request $request , $id)
    {

        $admin = experience::find($id);
        if ($admin) {
            $admin->exp_title = $request->input('exp_title');
            $admin->exp_year = $request->input('exp_year');
            $admin->exp_place = $request->input('exp_place');
            $admin->exp_desc = $request->input('exp_desc');
            $admin->save();
        return redirect('login/experience');
        }
    }
    public function add_exp(){
        $data = Profile::all();
        return view('login.add_exp',compact('data'),[
            "title" => "Experience"
        ]);
    }

    public function tambah_exp(Request $request){

        $request->validate([
            'exp_title' => 'required',
            'exp_year' => 'required',
            'exp_place' => 'required',
            'exp_desc' => 'required'
        ]);

        $experience = new Experience();
        $experience->exp_title = $request->input('exp_title');
        $experience->exp_year = $request->input('exp_year');
        $experience->exp_place = $request->input('exp_place');
        $experience->exp_desc = $request->input('exp_desc');
        $experience->save();
        return redirect('login/experience');
    }

    public function skill()
    {
        $data = Profile::all();
        $skills = skill::all();
        $skills->each(function($skills, $index) {
        $skills->number = $index + 1;
        });
        return view('login.skill',compact('data','skills'),[
            "title" => "Skill"
        ]);
    }

    public function edit_skill($id)
    {
        $data = Profile::all();
        $edit = skill::find($id);
        return view('login.edit_skill' , compact('data','edit'),[
            "title" => "Skill"
        ]);
    }

    public function updateskill(Request $request , $id)
    {

        $admin = skill::find($id);
        if ($admin) {
            $admin->name = $request->input('name');
            $admin->rate = $request->input('rate');
            $admin->kategori = $request->input('kategori');
            $admin->save();
        return redirect('login/skill');
        }
    }
    public function add_skill(){
        $data = Profile::all();
        return view('login.add_skill',compact('data'),[
            "title" => "Skill"
        ]);
    }

    public function tambah_skill(Request $request){

        $request->validate([
            'name' => 'required',
            'rate' => 'required',
            'kategori' => 'required'
        ]);

        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->rate = $request->input('rate');
        $skill->kategori = $request->input('kategori');
        $skill->save();
        return redirect('login/skill');
    }

    public function portfolio()
    {
        $data = Profile::all();
        $port_proj = port_project::all();
        $port_proj->each(function($port_proj, $index) {
        $port_proj->number = $index + 1;
        });
        return view('login.portfolio',compact('data','port_proj'),[
            "title" => "Project"
        ]);
    }
    public function edit_port($id)
    {
        $data = Profile::all();
        $edit = port_project::find($id);
        return view('login.edit_port' , compact('data','edit'),[
            "title" => "Project"
        ]);
    }

    public function updateport(Request $request , $id)
    {
        $request->validate([
            'kategori' => 'required',
        ]);
        $admin = port_project::find($id);
        if ($admin) {
            $admin->detail = $request->input('detail');
            $admin->kategori = $request->input('kategori');
    
            if ($request->hasFile('port_images')) {
                if ($admin->port_images) {
                    $previousFilePath = 'img/' . $admin->port_images;
                    if (file_exists($previousFilePath)) {
                        unlink($previousFilePath);
                    }
                }
            
                $port_images = $request->file('port_images');
                $foto_path = $port_images->move('img', $port_images->getClientOriginalName());
                $admin->port_images = $foto_path->getFilename();
            }

            $admin->save();
        return redirect('login/portfolio');
        }
    }
    public function add_port(){
        $data = Profile::all();
        return view('login.add_port',compact('data'),[
            "title" => "Project"
        ]);
    }
    public function tambah_port(Request $request){
        $validator = Validator::make($request->all(), [
            'port_images' => 'required|file|mimes:jpeg,jpg,png,mp4,mkv',
            'detail' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',

        ]);
        if ($validator->fails()) {
            return redirect()->route('login/portfolio');
        }

        $data = port_project::create($request->all());
        if ($request->hasFile('port_images')) {
            $request->file('port_images')->move('img/', $request->file('port_images')->getClientOriginalName());
            $data->port_images = $request->file('port_images')->getClientOriginalName();
            $data->save();

        }
        return redirect('login/portfolio');
    }
}