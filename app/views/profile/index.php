<h1>Profile</h1>

<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- frontend belum jadi -->
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data User
            </button>
        </div>
    </div>

</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

                    <!-- nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                    </div>

                   <!-- jenis kelamin -->
                   <div class="input-group mb-3">
                        <label class="input-group-text" for="jkelamin">Jenis Kelamin</label>
                        <select class="form-select" id="jkelamin" name="jkelamin">
                            <option selected>Pilih...</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                            <option value="Rahasia">Rahasia</option>
                        </select>
                    </div>

                    <!-- tahunlahir -->
                    <div class="mb-3">
                        <label for="tahunlahir" class="form-label">Tahun Lahir</label>
                        <input type="number" class="form-control" id="tahunlahir" name="tahunlahir" placeholder="20xx">
                    </div>

                    <!-- email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com">
                    </div>

                    <!-- nomor hp -->
                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor HP</label>
                        <input type="number" class="form-control" id="nomor" name="nomor" placeholder="20xx">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>