<div style="max-width: 1200px;margin:0 auto; ">
    <?php empty($msg) ? false : getMsg($msg,'danger') ?>
    <form action="<?php echo _WEB_HOST_ROOT_ADMIN.'/groups/post_add' ?>" method="POST">
        <input type="text" name="name" class="form-control" placeholder="Nhập vào tên của nhóm cần thêm..."
            value="<?php echo empty($dataForm['name']) ? false : $dataForm['name']?>">
        <?php empty($errors['name']) ? false : getMsgErr($errors,'name') ?>

        <br>
        <button type="submit" class="btn btn-primary">Thêm nhóm</button>
        <p><a href="<?php echo _WEB_HOST_ROOT_ADMIN.'/groups' ?>">Quay lại</a></p>

    </form>
</div>