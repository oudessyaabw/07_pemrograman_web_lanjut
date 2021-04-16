<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<Body>
    <div class="container">
        <div class="text-center">
            <h3>JURUSAN TEKNOLOGI INFORMASI</h3>
            <h3>POLITEKNIK NEGERI MALANG</h3>
            <br>
            <h5>Kartu Hasil Studi</h5>
            <br>
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
</Body>

</html>