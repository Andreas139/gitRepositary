<?php
$layout = 'dubai';
/** @var Post[] $data */
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */

?>
<?php
use App\Models\Post;

/** @var \App\Core\IAuthenticator $auth */
?>





<section id="services" class="services section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header card bg-dark text-white text-center pb-1" >
          <div class="card-body">
            <h2> Our Offerings </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br>
              do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.
            </p>
          </div>

        </div>
      </div>
    </div>



    <div class="row section-padding">

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-light text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="project-2img/BurjKhalifaMini.jpg" alt="" class="img-fluid">
            </div>

          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body ">
            <i class="bi bi-house-fill"></i>
            <h3 class="card-title">Hotel Burj Khalifa</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, commodi ex facere itaque obcaecati officiis provident quidem unde veniam.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, commodi ex facere itaque obcaecati officiis provident quidem unde veniam.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            <p>
              Accusantium beatae commodi cupiditate dolore dolores eveniet explicabo in ipsam itaque
              nam, numquam quis quos recusandae temporibus ullam vel veritatis voluptas voluptatem?Aut consectetur cumque ex facilis fuga labore laudantium reprehenderit repudiandae? Molestias?
            </p>

            <p>
              Accusantium beatae commodi cupiditate dolore dolores eveniet explicabo in ipsam itaque
              nam, numquam quis quos recusandae temporibus ullam vel veritatis voluptas voluptatem?Aut consectetur cumque ex facilis fuga labore laudantium reprehenderit repudiandae? Molestias?
            </p>

            <p>
              Accusantium beatae commodi cupiditate dolore dolores eveniet explicabo in ipsam itaque
              nam, numquam quis quos recusandae temporibus ullam vel veritatis voluptas voluptatem?Aut consectetur cumque ex facilis fuga labore laudantium reprehenderit repudiandae? Molestias?
            </p>


          </div>
        </div>
      </div>




      <div class="col-12 col-md-12 col-lg-4">;
        <div class="card text-light text-center bg-dark pb-2">
          <div class="card-body text-white">
            <div class="img-area mb-4">
            </div>
            <h3 class="card-title">Top services</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt itaque nostrum optio qui vel. Ad animi, autem consequuntur cumque doloribus et expedita inventore ipsum perferendis
              possimus quisquam, repellat, sit temporibus?</p>


                 <?php if ($auth->isLogged()) { ?>


                              <form method="post" action="?c=posts&a=storeText">

                                  <label for="">
                                      <input type="hidden" name="pouzivatel" value="<?= $auth->getLoggedUserName() ?>">
                                  </label>

                                  <label for="">
                                      <input type="hidden" name="nazovZajazdu" value="Burj Khalifa">
                                  </label>

                                  <input type="submit" value="Odoslat">

                              </form>



                  <?php } else  { ?>





              <?php } ?>


          </div>
        </div>
      </div>
    </div>

    <div class="row section-padding">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body">
            <i class="bi bi-house-fill"></i>
            <h3 class="card-title">Hotel Vysoky</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, commodi ex facere itaque obcaecati officiis provident quidem unde veniam. Aut consectetur cumque ex facilis fuga labore laudantium reprehenderit repudiandae? Molestias?
            </p>


          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-light text-center bg-white pb-20 " id="firstCard">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="project-1-img/project-2.jpg" alt="" class="img-fluid">
            </div>
            <h3 class="card-title">We are small</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt itaque nostrum optio qui vel. Ad animi, autem consequuntur cumque doloribus et expedita inventore ipsum perferendis
              possimus quisquam, repellat, sit temporibus?</p>
            <button class="btn bg-warning text-dark">This one</button>

          </div>
        </div>
      </div>
    </div>



    <div class="row section-padding">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body">
            <i class="bi bi-house-fill"></i>
            <h3 class="card-title">Hotel Vysočina</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, commodi ex facere itaque obcaecati officiis provident quidem unde veniam. Aut consectetur cumque ex facilis fuga labore laudantium reprehenderit repudiandae? Molestias?
            </p>


          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-light text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="project-1-img/project-3.jpg" alt="" class="img-fluid">
            </div>
            <h3 class="card-title">We love to eat</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt itaque nostrum optio qui vel. Ad animi, autem consequuntur cumque doloribus et expedita inventore ipsum perferendis
              possimus quisquam, repellat, sit temporibus?</p>
            <button class="btn bg-warning text-dark">This one</button>

          </div>
        </div>
      </div>
    </div>




  </div>
</section>
