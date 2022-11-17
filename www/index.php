<?php

include "Zakaznik.php";
include "DB.php";

$db = new DB();

if (isset($_POST['meno']) && isset($_POST['priezvisko'])) {
    $newZakaznik = new Zakaznik();
    $newZakaznik->meno = $_POST['meno']; //to co je v inpute, input name JE v poste 'meno'
    $newZakaznik->priezvisko = $_POST['priezvisko'];
    $db->storePost($newZakaznik);
}

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
        <div class="col">
            Column
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div>
                        <form method="post">
                            <input type="text" name="meno" placeholder="Meno ">
                            <input type="text" name="priezvisko" placeholder="Priezvisko ">

                            <input class="btn btn-primary" type="submit" value="Odoslat">
                        </form>
                    </div>
                </div>
            </div>

            <div class="posts-container">
                <?php foreach ($db->getAllPosts() as $zakaznik) { ?>
                    <div class = "post">
                        <?php echo $zakaznik->meno ?>
                        <?php echo $zakaznik->priezvisko ?>
                    </div>
                <?php } ?>

            </div>


        </div>
        <div class="col">
            Column
        </div>
    </div>
</div







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
