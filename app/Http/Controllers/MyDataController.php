<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyData;
use App\Models\Member;
use App\Models\Course;
use App\Models\Mentor;
use App\Models\UserCourse;

use DataTables;

class MyDataController extends Controller
{
    // Controller Data
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = MyData::select('members.id_member as id_member', 'members.member as member', 'courses.id_course as id_course', 'courses.course as course', 'mentors.id_mentor as id_mentor', 'mentors.mentor as mentor', "user_courses.id as id")
            ->from('user_courses') 
            ->join('members','user_courses.id_member','=','members.id_member')
            ->join('courses','user_courses.id_course','=','courses.id_course')
            ->join('mentors','user_courses.id_mentor','=','mentors.id_mentor')
            ->orderBy('user_courses.created_at');
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="'.route('data.edit',['id' => $row->id]).'" class="edit btn btn-success btn-sm">Edit</a>
                                <a href="'.route('data.delete',['id' => $row->id]).'" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </div>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('beranda');
    }

    public function create(){
        $members = Member::all();
        $courses = Course::all();
        $mentors = Mentor::all();
        return view('create_data', compact("members","courses","mentors"));
    }

    public function store(Request $request){
        $request->validate([
            'member_name' => 'required|max:30',
            'course_name' => 'required|max:30',
            'mentor_name' => 'required|max:30',
        ]);
        $member = new Member();
        $member->member = $request->member_name;
        $member->save();

        $data = new UserCourse();
        
        $data->id_member = $member->id_member;
        $data->id_course = $request->course_name;
        $data->id_mentor = $request->mentor_name;

        $data->save();
      
        return redirect(route('data.index'))->with('pesan','Data Berhasil Ditambahkan');
    }

    public function edit($id){ 
        $data = UserCourse::find($id);       
        $members = Member::all();
        $courses = Course::all();
        $mentors = Mentor::all();

        return view('update_data', compact("data","members","courses","mentors"));
    }

    public function update(Request $request, $id){
        $data = UserCourse::find($id);

        $data->id_member = $request->member_name;
        $data->id_course = $request->course_name;
        $data->id_mentor = $request->mentor_name;

        $data->save();
    

        return redirect(route('data.index'))->with('pesan','Data Berhasil Diupdate');
    }

    public function delete($id) {
        $data = UserCourse::find($id);

        $data->delete();
        return redirect(route("data.index"));
    }

    
    // Controller Members
    public function member(Request $request) {
        if ($request->ajax()) {
            $data = Member::all();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="#" class="edit btn btn-success btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </div>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('member');
    }
    public function create_member(){
        $data = Member::all();
        return view('create_member');
    }

    public function store_member(Request $request){
        $request->validate([
            'member_name' => 'required|max:80',
        ]);

        $data = new Membber();
        $data->member = $request->member_name;
        $data->save();

        return redirect(route('member.index'))->with('pesan','Data Berhasil Ditambahkan');
    }


    // Controller Courses
    public function course(Request $request) {
        if ($request->ajax()) {
            $data = Course::all();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="'.route('course.edit',['id_course' => $row->id_course]).'" class="edit btn btn-success btn-sm">Edit</a>
                                <a href="'.route('course.delete',['id_course' => $row->id_course]).'" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </div>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('course');
    }
    public function create_course(){
        $data = Course::all();
        return view('create_course');
    }

    public function store_course(Request $request){
        $request->validate([
            'course_name' => 'required|max:80',
        ]);

        $data = new Course();
        $data->course = $request->course_name;
        $data->save();

        return redirect(route('course.index'))->with('pesan','Data Berhasil Ditambahkan');
    }

    public function edit_course($id_course){ 
        $data = Course::all();
        return view('update_course', compact("data"));
    }

    public function update_course(Request $request, $id_course){
        $data = Course::find($id_course);
        $data->id_course = $request->course_name;
        $data->save();
        return redirect(route('course.index'))->with('pesan','Data Berhasil Diupdate');
    }

    public function delete_course($id_course) {
        $data = Course::find($id_course);
        $data->delete();
        return redirect(route("course.index"));
    }

    // Controller Mentor
    public function mentor(Request $request) {
        if ($request->ajax()) {
            $data = Mentor::all();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="#" class="edit btn btn-success btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </div>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('mentor');
    }

    public function create_mentor(){
        $data = Mentor::all();
        return view('create_mentor');
    }

    public function store_mentor(Request $request){
        $request->validate([
            'mentor_name' => 'required|max:80',
        ]);

        $data = new Mentor();
        $data->mentor = $request->mentor_name;
        $data->save();

        return redirect(route('mentor.index'))->with('pesan','Data Berhasil Ditambahkan');
    }
    public function soal(Request $request) {
        $data = UserCourse::all();       
        $members = Member::all();
        $courses = Course::all();
        $mentors = Mentor::all();

        return view('soal', compact("data","members","courses","mentors"));
    }

    public function countMentor()
    {
        $data = Mentor::all();

        // foreach ($mentors as $mentor) 
        {
            $max_mentor = Course::where('id_mentor', $data->mentor_id)->count();
            Mentor::where('id_mentor', $data->mentor_id)->update(['total_course' => $max_mentor
            ]);
        }

        return redirect(route('soal'));
    }
    
    public function countMember()
    {
        $data = Member::all();

        // foreach ($members as $member) 
        {
            $max_member = Course::where('id_member', $data->member_id)->count();
            Member::where('id_member', $data->member_id)->update(['total_course' => $max_member
            ]);
        }

        return redirect(route('soal'));
    }


}
