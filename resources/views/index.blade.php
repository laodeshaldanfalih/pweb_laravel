    @extends('shaldan')

    @section('atas')
    @endsection

    @section('isinya')
        <p>Cari Data Pegawai :</p>
        <form class="row" action="/pegawai/cari" method="GET">
            <input class="form-control col-11" type="text" name="cari" placeholder="Cari Pegawai .."
                value="{{ old('cari') }}">
            <input class="btn btn-primary btn-sm col-1" type="submit" value="CARI">
        </form>

        <br />

        <a href="/pegawai/tambah">+ Tambah Pegawai Baru</a>

        <table border="1" class="table table-striped">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="/pegawai/view/{{ $p->pegawai_id }}">View</a>
                        |
                        <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                        |
                        <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>

                    </td>
                </tr>
            @endforeach
        </table>

        {{-- <br />
        Halaman : {{ $pegawai->currentPage() }} <br />
        Jumlah Data : {{ $pegawai->total() }} <br />
        Data Per Halaman : {{ $pegawai->perPage() }} <br /> --}}


        {{ $pegawai->links() }}
    @endsection
