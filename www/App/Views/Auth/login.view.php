<?php
$layout = 'auth';
/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">





                    <?php if(!$auth->isLogged()) { ?>
                        <h5 class="card-title text-center">Prihlásenie</h5>
                         <div class="text-center text-danger mb-3">
                             <?= @$data['message'] ?>
                         </div>
                        <form class="form-signin" method="post"  action="?c=auth&a=login">
                            <div class="form-label-group mb-3">
                                <input name="login" type="text" id="login" class="form-control" placeholder="Login"
                                       required autofocus>
                            </div>

                            <div class="form-label-group mb-3">
                                <input name="password" type="password" id="password" class="form-control"
                                       placeholder="Password" required>
                            </div>
                            <div class="text-center"  >
                                <button class="btn btn-success" type="submit" name="submit"  >Prihlásiť</button>
                        </form>

                        <form class="form-register mt-3" method="post" action="?c=register&a=re">
                            <button class="btn btn-secondary" type="submit" name="name">Register</button>
                        </form>

                    <?php  } ?>

                    <?php if($auth->isLogged()) { ?>
                        <h5 class="card-title text-center">Ste prihlaseny</h5>


                    <?php  } ?>

                             <div class="text-center text-danger mb-3">
                                 <a class="nav-link" href="?c=posts">Posty</a>
                             </div>

                        <!-- <a class="nav-link" href="?c=register&a=re">Registracia</a>
                            <a class="nav-link" href="?c=home&a=main">Main</a> -->

                    <!--  <a class=" nav-link " href="?c=register&a=re">Registracia</a> -->

                  </div>

                  </div>

          </div>
      </div>
  </div>
</div>
</div>
