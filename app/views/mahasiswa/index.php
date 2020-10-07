<div class="container mt-3">

    <div class="row mb-2">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>


            <br>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item ">
                        <?php echo $mhs['nama'] ?>
                        <a href="<?php echo BASEURL; ?>mahasiswa/hapus/<?php echo $mhs['id']; ?>" class="btn btn-danger btn-sm float-right ml-1" onclick="return confirm('Yakin?');">Hapus</a>

                        <a href="<?php echo BASEURL; ?>mahasiswa/ubah/<?php echo $mhs['id']; ?>" class="btn btn-primary btn-sm float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?php echo $mhs['id']; ?>">Edit</a>

                        <a href="<?php echo BASEURL; ?>mahasiswa/detail/<?php echo $mhs['id']; ?>" class="btn btn-success btn-sm float-right ml-2">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo BASEURL; ?>mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" class="form-control" id="npm" name="npm">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="TI">TI</option>
                            <option value="TIK">TIK</option>
                            <option value="TIA">TIA</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>
</div>