    @extends('shaldan')

    @section('atas')
    @endsection

    @section('isinya')
        <a href="/pegawai"> Kembali</a>

        <br />
        <br />

        @foreach ($pegawai as $p)
            {{-- <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
                Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br />
                Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br />
                Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br />
                Alamat
                <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br />
                <input type="submit" value="Simpan Data">
            </form> --}}

            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $p->pegawai_nama }}" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan"
                            value="{{ $p->pegawai_jabatan }}" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="umur" name="umur"
                            value="{{ $p->pegawai_umur }}" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required="required">{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui Data</button>
            </form>
        @endforeach
    @endsection
