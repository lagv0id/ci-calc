<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h1 class="card-title">Pengurangan</h1>
                <form action="<?php echo base_url('kurang/pengurangan') ?>" method="POST">
                    <label for="bil1"></label><input type="text" name="bilangan1" class="input-group-text">
                    <label for="bil2"></label><input type="text" name="bilangan2" class="input-group-text">
                    <input class="btn btn-secondary mt-3" type="submit" value="Lakukan Pembagian" name="submit">
                    <?php if (isset($hasil)) : ?>
                        <br>Hasilnya pengurangan <?= $bilangan1 ?> dan <?= $bilangan2 ?> adalah : <strong><?php echo $hasil ?></strong>
                    <?php endif ?>
                    <br><a href="<?php echo base_url() ?>">Back to main menu.</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>