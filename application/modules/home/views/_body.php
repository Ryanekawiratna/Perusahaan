<!DOCTYPE html>
<html lang="en">
<style>
    .image-text {
        position: absolute;
        top: 120%;
        left: 20%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 24px;
        font-family: Arial, sans-serif;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
</style>

<?php echo $this->load->view('header'); ?>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <img src="<?= base_url('assets/images/header.jpg') ?>" alt="">
                <div class="image-text">
                    <h1>Selamat Datang</h1>
                </div>
            </div>
        </div>
    </div>
</body>

<?php echo $this->load->view('footer'); ?>

</html>