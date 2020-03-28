<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <h2>Tambah Data Buku</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-buku.php">
                        <div class="form-group">
                            <label for="buku">Judul</label>
                            <input type="text" class="form-control" name="judul" id="buku" placeholder="Masukkan judul buku">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan penerbit buku">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan pengarang buku">
                            </div>
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <input type="textarea" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan buku">
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="text" class="form-control" name="cover" id="cover" placeholder="Masukkan deskripsi cover buku">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukkan jumlah stok buku">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori">ID_Kategori</label><br>
                            <select name="id_kategori" id="sel">
                            <option value="">Pilih Kategori</option>
                            <option value="fiksi">Fiksi</option>
                            <option value="non fiksi">Non Fiksi</option>
                            </select>
                            </div>

                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
