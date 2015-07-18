<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 21:42:19
         compiled from "application\views\smarty\cms\editCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70785550f80bcbdf33-91401714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '130bb85770adae535bcd9a63a6e62269e15cfe55' => 
    array (
      0 => 'application\\views\\smarty\\cms\\editCategory.tpl',
      1 => 1429201593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70785550f80bcbdf33-91401714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat' => 0,
    'message' => 0,
    'validation_errors' => 0,
    'form' => 0,
    'set_value' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5550f80bcf2ae0_73914015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550f80bcf2ae0_73914015')) {function content_5550f80bcf2ae0_73914015($_smarty_tpl) {?>
    <div class="row">
        <div class="col-sm-12">

            <h2 class="text-center">Edit Category - <?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</h2>

            

            <?php if ($_smarty_tpl->tpl_vars['message']->value['flashdata']) {?>
                <div class="message-success  text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value['flashdata'];?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['message']->value['flashdata']-'error') {?>
                <div class="error-display  text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value['flashdata']-'error';?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['validation_errors']->value)) {?>
                <div class="error-display  text-center"><?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>
</div>
            <?php }?>

        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">

             <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

                <br>

                <div class="form-group">
                    <label for="title">Name of category:</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php if (!$_smarty_tpl->tpl_vars['set_value']->value['name']) {
echo $_smarty_tpl->tpl_vars['cat']->value['name'];
}
echo $_smarty_tpl->tpl_vars['set_value']->value['name'];?>
" />
                </div>

                <div class="form-group">
                    <label for="cat_img">Image:</label>
                    <input type="file" class="form-control" name="userfile"  id="cat_img"/>
                </div>

                <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Category" />

            <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>


            <br>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/categories"><b>Back to all Categories</b></a>
        </div>
    </div>

<?php }} ?>
