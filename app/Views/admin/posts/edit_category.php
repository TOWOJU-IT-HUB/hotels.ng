<?php 
    $db = \Config\Database::connect(); 
    $user_id = $_SESSION['id'];
    $db->query("SELECT * FROM withdrawal JOIN users ON users.id=withdrawal.user_id WHERE 'user_id' = $user_id")->getResultArray();
?>
<?= form_open() ?>
<div class="form-group">
    <label class="text-muted"><?= lang('text.title') ?></label>
    <input type="text" name="title" value="<?= $post['title'] ?>" required class="form-control">
</div>
<div class="form-group">
    <label class="text-muted"><?= lang('text.description') ?> (optional)</label>
    <textarea name="description" class="form-control" rows="3"><?= $post['description'] ?></textarea>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><?= lang('text.close') ?></span>
    </button></button>?>
<span class="icon-spinner"><i class="fa fa-spinner load-animate"></i></span> </button>
</div>
<?= form_close() ?>