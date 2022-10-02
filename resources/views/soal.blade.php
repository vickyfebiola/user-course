@extends('template.base')
@section('content')
    <h3>Jawban Soal Skill MTM</h3>
    <div class="row">
        <div class="col-lg-12">
            <h6>1. Mentor yang mengambil course terbanyak adalah</h6>
            <p>
                <?php
                    foreach ($mentors as $mentor) {
                        echo $mentor->mentor_name.', ';
                    }
                ?>
            </p>

            <h6>2. Jumlah yang mengambil course Golang sebanyak</h6>
            <p>
                <?php
                    foreach ($members as $member) {
                        echo $member->member_name.', ';
                    }
                ?>
            </p>

            <h6>3. Member yang mengambil course terbanyak adalah</h6>
            <p>
                <?php
                    foreach ($members as $member) {
                        echo $member->member_name.', ';
                    }
                ?>
            </p>
        </div>
    </div>

@endsection