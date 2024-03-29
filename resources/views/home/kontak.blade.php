<!-- ======= Hero Section ======= -->
<section class="team bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <div class="kotak">
          <div class="row">
            <div class="col-md-12 text-center mt-5">
              <h1><?php echo $title ?></h1>
              <hr>
            </div>
            
            <div class="col-md-4">
              <p class="lead">
                <strong><?php echo $site->namaweb ?></strong>
                <br><?php echo nl2br($site->alamat) ?>
                <br>Telepon: <?php echo $site->telepon ?>
                <br>Email: <?php echo $site->email ?>
                <br>Website: <?php echo $site->website ?>
              </p>
            </div>
            <div class="col-md-8">
              <style type="text/css" media="screen">
                iframe {
                  width: 100%;
                  height: 350px;
                }
              </style>
              <div class="kotak" style="border:solid 3px #ede; padding: 10px; border-radius: 5px; background-color: #F5F5F5;">
                <?php echo $site->google_map ?>
              </div>
              
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</section><!-- End Hero -->

