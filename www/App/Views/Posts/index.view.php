<?php
/** @var Post[] $data */
/** @var \App\Core\IAuthenticator $auth */
?>

<!--
<div>
<?php if( $auth-> isLogged()) { ?>
    <a href="?c=posts&a=create" class="btn btn-success">Vytvor post</a>
<?php  } ?>
</div>

-->


<?php foreach ($data as $post) {?><div class="card my-3 mx-auto w-75 card text-dark bg-info" style="width: 200px">
    <?php if ($post->getNazovZajazdu()) {?>
        <p class="card-text mx-auto"> Ste prihlasený na zájazd: <?php echo $post->getNazovZajazdu() ?></p>
    <?php } ?>
    <div class="card-body card text-white bg-dark">
       <!-- <h5 class="card-title">Card title</h5> -->


        <?php if( $auth-> isLogged()) { ?>

                <div class="text-center">
                    <a href="?c=posts&a=delete&id=<?php echo $post->getId() ?>" class="btn btn-danger ">
                        Zmazat
                    </a>
                    <a href="?c=posts&a=edit&id=<?php echo $post->getId() ?>" class="btn btn-warning">
                        Upravit
                    </a>
                    <a href="?c=posts&a=like&id=<?php echo $post->getId() ?>" class="btn btn-secondary">
                        <?php  echo (1000-count($post->getLikes()))?> volných miest
                    </a>
                    <p class="card-text mx-auto"> Poznamka k zajazdu: <?php echo $post->getPoznamka() ?></p>
                </div>

        <?php  } else { ?>
        <a href="" class="btn btn-secondary">
            <?php  echo (1000-count($post->getLikes()))?> volných miest
        </a>
        <?php } ?>
    </div>
</div>

<?php } ?>