<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h1 class="card-title">Perpangkatan</h1>
                <form action="<?php echo base_url('pangkat/hitung') ?>" method="POST">
                    <label for="bil1"></label><input type="text" name="bil1" class="input-group-text">
                    <label for="bil2"></label><input type="text" name="bil2" class="input-group-text">
                    <input class="btn btn-secondary mt-3" type="submit" value="Lakukan Perpangkatan" name="submit">
                    <?php if (isset($hasil)) : ?>
                        <br>Hasilnya angka <?= $bil1 ?> dipangkat <?= $bil2 ?> adalah : <strong><?php echo $hasil ?></strong>
                    <?php endif ?>
                    <br><a href="<?php echo base_url() ?>">Back to main menu.</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>