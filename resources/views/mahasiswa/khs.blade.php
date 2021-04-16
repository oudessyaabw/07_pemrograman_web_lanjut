@extends('mahasiswa.layout')

@section('content')
<div class="container">
    <div class="text-center">
        <h1>JURUSAN TEKNOLOGI INFORMASI</h1>
        <h1>POLITEKNIK NEGERI MALANG</h1>
        <br>
        <h3>Kartu Hasil Studi</h3>
        <br>
    </div>
    <div class="row">
        <div class="m-1">
            <a class="btn btn-success" href="{{route('mahasiswa.nilai.print', $mahasiswa->nim)}}">Cetak Nilai</a>
        </div>
    </div>
    <div class="my-3">
        <p><strong>Nama</strong> : {{$mahasiswa->nama}}</p>
        <p><strong>NIM</strong> : {{$mahasiswa->nim}}</p>
        <p><strong>Kelas</strong> : {{$mahasiswa->kelas->nama_kelas}}</p>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Semester</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $item)
            <tr>
                <th>{{__($item->matakuliah->nama_matkul)}}</th>
                <th>{{__($item->matakuliah->sks)}}</th>
                <th>{{__($item->matakuliah->semester)}}</th>
                <td>{{__($item->nilai)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection