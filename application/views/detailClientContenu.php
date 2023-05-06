  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Sakila</h1>
        <h1>fiche client</h1>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Client <?php echo($client['customer_id']); ?>
                </h4>
                <h5><?php echo($client['first_name']); ?> <?php echo($client['last_name']); ?></h5>
                <label for="email">Email</label>
                <p class="card-text" name="email"><?php echo($client['email']); ?></p>
                <label for="create_date">Create date</label>
                <p class="card-text" name="create_date"><?php echo($client['create_date']); ?></p>
                <label for="last_update">Last update</label>
                <p class="card-text" name="last_update"><?php echo($client['last_update']); ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->