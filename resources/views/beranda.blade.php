@extends('template.base')
@section('content')
    <h1>User Courses</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('data.create') }}" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="dataTable">
                    <thead>
                        <tr>
                            <th>id_member</th>
                            <th>member_name</th>
                            <th>id_course</th>
                            <th>course</th>
                            <th>id_mentor</th>
                            <th>mentor</th>
                            <th> </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#dataTable').DataTable({
        // menampilkan data
        processing: true,
        serverSide: true,
        ajax: "{{ route('data.index') }}",
        columns: [
            {
                data: 'id_member',
                name: 'members.id_member',
            },
            {
                data: 'member',
                name: 'members.member',
            },
            {
                data: 'id_course',
                name: 'courses.id_course',
            },
            {
                data: 'course',
                name: 'courses.course',
            },
            {
                data: 'id_mentor',
                name: 'mentors.id_mentor',
            },
            {
                data: 'mentor',
                name: 'mentors.mentor',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });
</script>
@endsection