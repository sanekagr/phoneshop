

<div class="container">

    <div class="row">
        <h1 class="text-center">Add New Category</h1>

        <div class="col-sm-12">
            <?php if ($this->session->flashdata('message') || $this->session->flashdata('error-message')): ?>
                <div class="message-success  text-center"><?= $this->session->flashdata('message'); ?></div>
                <div class="error-display  text-center"><?= $this->session->flashdata('error-message'); ?></div>
            <?php endif; ?>

            <?php if (validation_errors()): ?>
                <div class="error-display text-center"><?= validation_errors(); ?></div>
            <?php endif; ?></div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 add_cat_form">

            <?= form_open_multipart(site_url().'cms/categories/add_category/', array('id'=>'add-category-form')); ?>
            <br><br>

            <div class="form-group">
                <label for="title">Name of category:</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name'); ?>"   />
            </div>

            <div class="form-group">
                <label for="cat_img">Image:</label>
                <input type="file" class="form-control" name="userfile"  id="cat_img"/>
            </div>

            <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Category" />
            <?= form_close(); ?>

            <br>
            <a href="<?= site_url();?>cms/categories"><b>Back to all Categories</b></a>
        </div>
    </div>

</div>