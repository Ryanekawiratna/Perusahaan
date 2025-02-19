<html lang="en">

<head>
       <style>
              .footer {
                     background-color: #151269;
                     color: white;
                     padding: 10px;
                     position: fixed;
                     bottom: 0;
                     width: 100%;
                     text-align: center;
              }

              body {
                     font-family: Arial, sans-serif;
                     margin: 0;
                     padding: 0;
              }
       </style>

       <?= $this->load->view('head_content',  $title); ?>
</head>

<body>
       <!-- Konten utama halaman -->
       <div class="<?php echo isset($full_width) && $full_width == 1 ? 'container-fluid' : 'container' ?>" style="<?php echo isset($no_border) && $no_border == 1 ? 'margin:0; padding: 0 ;' : '' ?>">
              <?= $this->load->view($module . "/" . $view) ?>
       </div>


</body>
<?= $this->load->view('js_content') ?>
<?php
if (isset($header_data)) {
       foreach ($header_data as $v_head) {
              echo $v_head;
       }
}
?>


</html>