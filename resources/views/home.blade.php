@extends('layouts.app')

@section('content')
<h2 align="center" style="margin-top: 3%;">PENILAIAN RESIKO PRIBADI TERKAIT COVID-19</h2>
<p align="center "style="margin-top: 1%;">Mari tandai sesuai kegiatan harian Anda,untuk bersatu melawan</p>
<p align="center">penyebaran COVID-19 selama 14 hari ke depan</p>
<form role="form" action="{{ url('home/store')}}" method="POST">
{{csrf_field()}}
<br>

<table border="1" cellpadding="10" style="margin-left: 7%;margin-top: 5%;">

        <tr >
            <th >NO</th>
            <th>Kegiatan</th>
            <th>Ya /Tidak</th>
        </tr>
        <?php
            $i=0;
            
        ?>
        <tr>
            <th>A.</th>
            <th colspan="2">POTENSI TERTULAR DI LUAR RUMAH</th>
        </tr>
        @foreach($tanya as $key)
            @if($key['jenis'] == 'POTENSI TERTULAR DI LUAR RUMAH')
                <tr>
                    <td>{{ $i++ +1  }}</td>
                    <td>
                    {{ $key['desk']}}
                        <input type="hidden" name="id_pertanyaan[]" value="{{$key['id_pertanyaan']}}">
                    </td>
                    <td>
                        <input type="radio" name="value[<?= $i-1?>]" value="1" required>Ya</input>
                        <input type="radio" name="value[<?= $i-1?>]" value="0" required>Tidak</input>
                    </td>
                <tr>
            @endif
        @endforeach

        <tr>
            <th>B.</th>
            <th colspan="2">POTENSI TERTULAR DI LUAR RUMAH</th>
        </tr>
        @foreach($tanya as $key)
            @if($key['jenis'] == 'POTENSI TERTULAR DI DALAM RUMAH')
                <tr>
                    <td>{{ $i++ +1}}</td>
                    <td>{{ $key['desk']}}</td>
                    <input type="hidden" name="id_pertanyaan[]" value="{{$key['id_pertanyaan']}}">
                    <td>
                        <input type="radio" name="value[<?= $i-1?>]" value="1" required>Ya</input>
                        <input type="radio" name="value[<?= $i-1?>]" value="0" required>Tidak</input>
                    </td>
                <tr>
            @endif
        @endforeach
        <tr>
            <th>C.</th>
            <th colspan="2">DAYA TAHAN TUBUH(IMUNITAS)</th>
        </tr>
        @foreach($tanya as $key)
            @if($key['jenis'] == 'DAYA TAHAN TUBUH(IMUNITAS)')
                <tr>
                    <td>{{ $i++ +1}}</td>
                    <td>{{ $key['desk']}}</td>
                    <input type="hidden" name="id_pertanyaan[]" value="{{$key['id_pertanyaan']}}">
                    <td>
                        <input type="radio" name="value[<?= $i-1?>]" value="1" required>Ya</input>
                        <input type="radio" name="value[<?= $i-1?>]" value="0" required>Tidak</input>
                    </td>
                   
                <tr>
                <tr>
                
                </tr>
            @endif
        @endforeach
        <!-- <tr colspan="2">
        <td>
        <button type="submit" class="btn btn-primary" >Submit</button></td>
        </tr> -->
    </table>
    <div>
    <button type="submit" class="btn btn-primary" style="
    margin-right: 12%;
    margin-top: 2%;
    width: 500px;
    margin-left: 30%;
">Lihat Hasil</button></td>

    </div>
    </form>
</br>
@endsection