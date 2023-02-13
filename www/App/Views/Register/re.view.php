
<?php
$layout = 'root';
/*
//include "Zakaznik.php";
//include "DB.php";

//$db = new DB();

//if (isset($_POST['priezvisko']) && isset($_POST['meno']) ){
//}

if (!empty($_POST['meno']) &&
    !empty($_POST['priezvisko']) &&
    !empty($_POST['email']) &&
    !empty($_POST['pouzivatelskeMeno']) &&
    !empty($_POST['heslo'])) {

        echo "ugabunga1";
    $newZakaznik = new Zakaznik();
    $newZakaznik->setMeno($_POST['meno']); //to co je v inpute, input name JE v poste 'meno'
    $newZakaznik->setPriezvisko($_POST['priezvisko']);
    $newZakaznik->setEmail($_POST['email']);
    $newZakaznik->setPouživatelskeMeno($_POST['pouzivatelskeMeno']);
    $newZakaznik->setHeslo($_POST['heslo']);
    $db->storePost($newZakaznik);



   <div class="posts-container">
                    <?php foreach ($db->getAllPosts() as $zakaznik) { ?>
                        <div class = "post">
                            <?php echo $zakaznik->getMeno() ?>
                            <?php echo $zakaznik->getPriezvisko() ?>
                        </div>
                    <?php } ?>

                </div>



}
*/

?>

<?php
/** @var Post[] $data */
/** @var \App\Core\IAuthenticator $auth */
?>



<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>

<div class="container text-center">
    <div class="row">

        <div class="mx-auto mt-2">

            <div class="col  ">
                <div class="card " style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Registračný formulár</h5>
                        <div>
                            <form method="post" action="?c=Register&a=register">
                                <input class="form-control mt-1" type="text" name="meno" placeholder="Meno ">
                                <input class="form-control mt-1" type="text" name="priezvisko" placeholder="Priezvisko ">
                                <input class="form-control mt-1 mb-5" type="text" name="email" placeholder="Email ">
                                <input class="form-control mt-1" type="text" name="pouzivatelskeMeno" placeholder="Použivatelské meno ">
                                <div class="form-group">

                                    <input type="password" name="heslo" class="form-control mt-1" id="exampleInputPassword1" placeholder="Heslo">
                                </div>

                                <input  class="btn btn-primary mt-3" type="submit" value="Odoslat"  >
                            </form>
                        </div>
                    </div>
                </div>




            </div>
        </div>



    </div>
</div








</body>
</html>
