<?php
/** @var zajazdy[] $data */
/** @var \App\Core\IAuthenticator $auth */
?>

<!--
<div>
<?php if( $auth-> isLogged()) { ?>
    <a href="?c=posts&a=create" class="btn btn-success">Vytvor post</a>
<?php  } ?>
</div>

-->
<?php if( isset($_GET['e'])  ) {

    echo "<script type='text/javascript'>alert('Nemozes sa znova prihlasit: duplicita');</script>";
 } ?>



<?php foreach ($data as $zajazd) {?><div class="card my-3 mx-auto w-75 card text-dark bg-info" style="width: 200px">
    <?php if ($zajazd->getNazovZajazdu()) {?>
        <p class="card-text mx-auto"> Ste prihlasený na zájazd: <?php echo $zajazd->getNazovZajazdu() ?></p>
    <?php } ?>
    <div class="card-body card text-white bg-dark">
       <!-- <h5 class="card-title">Card title</h5> -->


        <?php if( $auth-> isLogged()) { ?>

                <div class="text-center">
                    <a href="?c=posts&a=delete&id=<?php echo $zajazd->getIdZajazdu() ?>" class="btn btn-danger ">
                        Zmazat
                    </a>
                    <a href="?c=posts&a=edit&id=<?php echo $zajazd->getIdZajazdu() ?>" class="btn btn-warning">
                        Upravit
                    </a>
                    <a href="?c=posts&a=like&id=<?php echo $zajazd->getIdZajazdu() ?>" class="btn btn-secondary">
                        <?php  echo ($zajazd->getPocetVolnychMiest())?> volných miest
                    </a>
                    <p class="card-text mx-auto"> Poznamka k zajazdu: <?php echo $zajazd->getPopisZajazdu() ?></p>
                </div>

        <?php  } else { ?>
        <a href="" class="btn btn-secondary">
            <?php  echo $zajazd->getPocetVolnychMiest()?> volných miest
        </a>
        <?php } ?>
    </div>
</div>

<?php } ?>