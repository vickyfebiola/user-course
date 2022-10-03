@extends('template.base')
@section('database') active @endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Course</h6>
    </div>
        <div class="card-body">
            <form action="{{ route('course.update',['id_course' => $data->id_course])}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="course">Course Name</label>
                    <input type="text" class="form-control" name="course_name" value="{{ $data->course }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection