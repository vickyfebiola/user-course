@extends('template.base')
@section('content')
    <h1>Members</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('member.create') }}" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="dataTable">
                    <thead>
                        <tr>
                            <th>id_member</th>
                            <th>member</th>
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
        ajax: "{{ route('member.index') }}",
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
                data: 'action',
                name: 'action',
            },
        ]
    });
</script>
@endsection