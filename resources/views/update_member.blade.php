@extends('template.base')
@section('database') active @endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Member</h6>
    </div>
        <div class="card-body">
            <form action="{{ route('member.update',['id_member' => $data->id_member])}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="member">Member Name</label>
                    <input type="text" class="form-control" name="member_name" value="{{ $data->member }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection