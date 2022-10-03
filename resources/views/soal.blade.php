@extends('template.base')
@section('soal') active @endsection
@section('content')
    <h3>Jawaban Soal Skill MTM</h3><br>
    <div class="row">
        <div class="col-lg-12">
        <h6>1. Siapakah mentor yang paling banyak ambil course? </h6>
        <p>
            <?php
                foreach($countMentors as $mentors){
                    echo "Jawaban: " . $mentors->mentor;
                }   
            ?>
        </p>

        <h6>2. Jumlah yang mengambil course Golang sebanyak..</h6>
        <p>
            <?php
                foreach($countGolang as $golangs){
                    echo "Jawaban: " . $golangs->member_num;
                }
            ?>
        </p>
        <h6>3. Member yang mengambil course terbanyak adalah..</h6>
        <p>
            <?php
                foreach($mostCourse as $members){
                    echo "Jawaban: " . $members->member;
                }     
            ?>
        <p>
    </div>

@endsection