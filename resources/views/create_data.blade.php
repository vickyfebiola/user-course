@extends('template.base')
@section('beranda') active @endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </div>
        <div class="card-body">
            <form action="{{ route('data.store') }}" method="post">
            @csrf
                <div class="form-group">
                <label for="member">Member Name</label>
                    <select name="member_name" class="form-control">
                        @foreach($members as $member)
                        <option value="{{$member->id_member}}">{{$member->member}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="course">Course Name</label>
                    <select name="course_name" class="form-control">
                        @foreach($courses as $course)
                        <option value="{{$course->id_course}}">{{$course->course}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="mentor">Mentor Name</label>
                    <select name="mentor_name" class="form-control">
                        @foreach($mentors as $mentor)
                        <option value="{{$mentor->id_mentor}}">{{$mentor->mentor}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection