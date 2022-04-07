<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h1 class="card-title">Penjumlahan</h1>
                <form action="" method="POST">
                    <label for="bil1"></label><input type="text" name="a" class="input-group-text">
                    <label for="bil2"></label><input type="text" name="b" class="input-group-text">
                    <input class="btn btn-secondary mt-3" type="submit" value="Lakukan Penjumlahan" name="submit">
                    <?php
                    if (isset($_POST['tambah'])) {
                        echo $_POST['a'] + $_POST['b'];
                    }
                    ?>
                </form>
                <br><a href="<?php echo base_url() ?>">Back to main menu.</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>