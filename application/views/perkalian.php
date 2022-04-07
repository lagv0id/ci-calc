<?php $this->load->view('layout/header'); ?>

<div class="container">
   <div class="row justify-content-center mt-5">
      <div class="card" style="width: 500px;">
         <div class="card-body">
            <h1 class="card-title">Perkalian</h1>
            <form action="" method="POST">
               <input type="text" name="angka1" class="input-group-text"><br>
               <input type="text" name="angka2" class="input-group-text"><br>
               <input class="btn btn-secondary mt-3" type="submit" name="submit">
               <?php

               if (isset($_POST["submit"])) {
                  $angka1 = $_POST["angka1"];
                  $angka2 = $_POST["angka2"];
                  echo '<br>';
                  echo 'Hasilnya ' . ($angka1 * $angka2);
               }
               ?>
            </form>
            <br><a href="<?php echo base_url() ?>">Back to main menu.</a>
         </div>
      </div>
   </div>
</div>

<?php $this->load->view('layout/footer'); ?>