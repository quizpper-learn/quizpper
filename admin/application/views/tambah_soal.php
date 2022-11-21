<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-center">Tambah Soal</h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <a href="<?= site_url(''); ?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Kembali</a>
            </div>
            <div class="box-body">
                <form action="admin/act_tambah_soal" enctype="multipart/form-data" method="POST">
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">Mata Pelajaran :</label>
                        <select name="mapel" class="form-control" required="">
                            <option value="">Pilih Mata Pelajaran...</option>
                            <?php foreach ($listmapel as $lm) { ?>
                                <option value="<?= $lm->id_mapel; ?>"><?= $lm->mapel; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">Kelas :</label>
                        <select name="kelas" class="form-control" required="">
                            <option value="">Pilih Kelas...</option>
                            <?php foreach ($listkelas as $lk) { ?>
                                <option value="<?= $lk->id_kelas; ?>"><?= $lk->kode_kelas; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">Guru :</label>
                        <select name="guru" class="form-control" required="">
                            <option value="">Pilih Guru...</option>
                            <?php foreach ($listguru as $lg) { ?>
                                <option value="<?= $lg->id_guru; ?>"><?= $lg->nama; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="Soal">Soal :</label>
                        <textarea id="fieldSoal" name="soal" required=""></textarea>
                    </div>
                     <div style="display:none;" class="col-md-12 form-group">
                        <label for="Media">Media :</label>
                        <input type="file" name="media">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="A">Opsi A</label>
                        <input type="text" name="a" class="form-control" placeholder="Jawaban A" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="B">Opsi B</label>
                        <input type="text" name="b" class="form-control" placeholder="Jawaban B" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="C">Opsi C</label>
                        <input type="text" name="c" class="form-control" placeholder="Jawaban C" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="D">Opsi D</label>
                        <input type="text" name="d" class="form-control" placeholder="Jawaban D" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="E">Opsi E</label>
                        <input type="text" name="e" class="form-control" placeholder="Jawaban E" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="Jawaban">Jawaban</label>
                        <select name="jawaban" id="" class="form-control" required="">
                            <option value="">Pilih Jawaban...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                        <input type="hidden" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<script async="defer">
    $(function() {
        CKEDITOR.replace('fieldSoal')
    })
</script>

<?php
if ($this->session->flashdata('soal')) { ?>
    <script>
        Swal.fire('Sukses!', 'Soal berhasil ditambahkan', 'success');
    </script>
<?php
}
?>

<!-- CK Editor -->
<script src="<?= base_url('./../assets/adminlte/bower_components/ckeditor/ckeditor.js'); ?>"></script>