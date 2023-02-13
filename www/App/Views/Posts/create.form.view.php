<form method="post" action="?c=posts&a=store">
    <?php /** @var \App\Models\zajazdy $data */
    if ($data->getIdZajazdu()) {  ?>

    <input type="hidden" name="id" value="<?php echo $data->getIdZajazdu() ?>">

   <?php } ?>

    <label for="">
        Text:
        <input type="text" name="text" value="<?php echo $data->getPopisZajazdu() ?>">

    </label>
    <input type="submit" value="Odoslat">

</form>
