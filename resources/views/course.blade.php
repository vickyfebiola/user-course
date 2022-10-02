@extends('template.base')
@section('content')
    <h1>Courses</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('course.create') }}" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="dataTable">
                    <thead>
                        <tr>
                            <th>id_course</th>
                            <th>course</th>
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
        ajax: "{{ route('course.index') }}",
        columns: [
            {
                data: 'id_course',
                name: 'courses.id_course',
            },
            {
                data: 'course',
                name: 'courses.course',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });
</script>
@endsection