<div class="container mt-5">
    <div class="row">
        <div class="col-6">
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