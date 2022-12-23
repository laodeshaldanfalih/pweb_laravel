    @extends('shaldan')

    @section('atas')
    @endsection

    @section('isinya')
        {{-- <p>Cari Data Pegawai :</p>
        <form class="row" action="/pegawai/cari" method="GET">
            <input class="form-control col-11" type="text" name="cari" placeholder="Cari Pegawai .."
                value="{{ old('cari') }}">
            <input class="btn btn-primary btn-sm col-1" type="submit" value="CARI">
        </form> --}}

        <br />

        <a class="btn btn-success btn-sm" href="/mahasiswa/tambah">Tambah Data</a>

        <table border="1" class="table table-striped">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
            @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->normorinduksiswa }}</td>
                    <td>{{ $p->nilaiangkaa }}</td>
                    <td>{{ $p->sks }}</td>
                    @if ($p->nilaiangkaa >= 81)
                        <td>A</td>
                    @elseif ($p->nilaiangkaa <= 80 && $p->nilaiangkaa >= 61)
                        <td>B</td>
                    @elseif ($p->nilaiangkaa <= 60 && $p->nilaiangkaa >= 41)
                        <td>C</td>
                    @elseif ($p->nilaiangkaa <= 40)
                        <td>D</td>
                    @endif

                    <td>{{ $p->nilaiangkaa * $p->sks }}</td>
                </tr>
            @endforeach
        </table>
    @endsection
