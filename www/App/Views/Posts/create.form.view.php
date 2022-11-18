<form method="post" action="?c=posts&a=store">
    <?php /** @var \App\Models\Post $data */
    if ($data->getId()) {  ?>

    <input type="hidden" name="id" value="<?php echo $data->getId() ?>">

   <?php } ?>

    <label for="">
        Text:
        <input type="text" name="text" value="<?php echo $data->getPoznamka() ?>">

    </label>
    <input type="submit" value="Odoslat">

</form>
