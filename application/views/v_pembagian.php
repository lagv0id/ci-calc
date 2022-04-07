<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h1 class="card-title">Pembagian</h1>
                <form action="" method="POST">
                    <label for="bil1"></label><input type="text" name="bil1" class="input-group-text">
                    <label for="bil2"></label><input type="text" name="bil2" class="input-group-text">
                    <input class="btn btn-secondary mt-3" type="submit" value="Lakukan Pembagian" name="submit">
                    <?php
                    if (isset($_POST['submit'])) {
                        if ($_POST['bil1'] == '' || $_POST['bil2'] == '') {
                            echo "<br>Please fill both forms.";
                        } elseif ($_POST['bil2'] == 0) {
                            echo "<br>Division by zero";
                        } else {
                            $bil1 = $_POST['bil1'];
                            $bil2 = $_POST['bil2'];
                            echo '<br>' . $bil1 . '/' . $bil2 . ' = ' . ($bil1 / $bil2);
                        }
                    }
                    ?>
                </form>
                <br><a href="<?php echo base_url() ?>">Back to main menu.</a>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>