@extends('template.base')
@section('database') active @endsection
@section('content')
    <h1>Mentors</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('mentor.create') }}" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="dataTable">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>id_mentor</th>
                            <th>mentor</th>
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
        ajax: "{{ route('mentor.index') }}",
        columns: [
            { 
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false,
            },
            {
                data: 'id_mentor',
                name: 'id_mentor',
            },
            {
                data: 'mentor',
                name: 'mentor',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });
</script>
@endsection