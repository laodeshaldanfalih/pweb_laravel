    @extends('shaldan')

    @section('atas')
    @endsection

    @section('isinya')
        <a href="/mahasiswa"> Kembali</a>

        <br />
        <br />

        {{-- <form action="/pegawai/store" method="post">
            {{ csrf_field() }}


            Nama <input type="text" name="nama" required="required"> <br />
            Jabatan <input type="text" name="jabatan" required="required"> <br />
            Umur <input type="number" name="umur" required="required"> <br />
            Alamat
            <textarea name="alamat" required="required"></textarea> <br />
            <input type="submit" value="Simpan Data">
        </form> --}}

        <form action="/mahasiswa/store" method="post">
            {{ csrf_field() }}
            {{-- <div class="form-group row">
                <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input name="nama" required="required" type="text" class="form-control" placeholder="Nama">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputJabatan3" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input name="jabatan" required="required" type="text" class="form-control" placeholder="Jabatan">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" nama="umur" required="required" class="form-control" placeholder="Umur">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" nama="alamat" required="required" class="form-control" placeholder="Alamat">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
                </div>
            </div>
        </form> --}}

            <form action="/pegawai/store" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="id" name="id" rows="3" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="normorinduksiswa" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="normorinduksiswa" name="normorinduksiswa" rows="3" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilaiangkaa" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="nilaiangkaa" name="nilaiangkaa" rows="3" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="sks" name="sks" rows="3" required="required"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"> SIMPAN</button>
            </form>
        @endsection
