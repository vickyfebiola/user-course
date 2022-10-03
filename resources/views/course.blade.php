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
                            <th>no</th>
                            <th>id_course</th>
                            <th>course</th>
                            <th>aksi</th>
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
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false,
            },
            {
                data: 'id_course',
                name: 'id_course',
            },
            {
                data: 'course',
                name: 'course',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });
</script>
@endsection