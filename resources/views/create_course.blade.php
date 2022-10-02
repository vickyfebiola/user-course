@extends('template.base')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Data</h6>
    </div>
        <div class="card-body">
            <form action="{{ route('course.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="course">Course Name</label>
                    <input type="text" class="form-control" name="course_name">
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection