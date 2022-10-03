@extends('template.base')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Data</h6>
    </div>
        <div class="card-body">
            <form action="{{ route('data.update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="member">Member Name</label>
                    <select name="member_name" class="form-control">
                        @foreach($members as $member)
                        <option value="{{$member->id_member}}" @if($data->id_member == $member->id_member) selected @endif>{{$member->member}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="course">Course Name</label>
                    <select name="course_name" class="form-control">
                        @foreach($courses as $course)
                        <option value="{{$course->id_course}}" @if($data->id_course == $course->id_course) selected @endif>{{$course->course}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="mentor">Mentor Name</label>
                    <select name="mentor_name" class="form-control">
                        @foreach($mentors as $mentor)
                        <option value="{{$mentor->id_mentor}}" @if($data->id_mentor == $mentor->id_mentor) selected @endif>{{$mentor->mentor}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection