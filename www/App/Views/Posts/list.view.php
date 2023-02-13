<?php
/** @var \App\Models\rezervacie_zajazdy[] $data */
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



<?php foreach ($data as $rz) {?><div class="card my-3 mx-auto w-75 card text-dark bg-info" style="width: 200px">
    <?php if ($rz['nazovZajazdu']) {?>
        <p class="card-text mx-auto"> Ste prihlasený na zájazd: <?php echo $rz['nazovZajazdu'] ?></p>
    <?php } ?>
    <div class="card-body card text-white bg-dark">
       <!-- <h5 class="card-title">Card title</h5> -->


        <?php if( $auth-> isLogged()) { ?>

                <div class="text-center">
                    <a href="?c=posts&a=delete&id=<?php echo $rz['zajazdy_id_zajazdu'] ?>" class="btn btn-danger ">
                        Zmazat
                    </a>
                    <a href="?c=posts&a=edit&id=<?php echo $rz['zajazdy_id_zajazdu'] ?>" class="btn btn-warning">
                        Upravit
                    </a>

                    <p class="card-text mx-auto"> Poznamka k zajazdu: <?php echo $rz['popisZajazdu'] ?></p>
                </div>

        <?php  } else { ?>
        <a href="" class="btn btn-secondary">
            <?php  echo $rz['pocetVolnychMiest']?> volných miest
        </a>
        <?php } ?>
    </div>
</div>

<?php } ?>