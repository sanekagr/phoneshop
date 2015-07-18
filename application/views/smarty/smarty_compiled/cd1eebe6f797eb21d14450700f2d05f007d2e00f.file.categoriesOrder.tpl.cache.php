<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 15:03:01
         compiled from "application\views\smarty\cms\categoriesOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:988055aa4075413712-87920581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1eebe6f797eb21d14450700f2d05f007d2e00f' => 
    array (
      0 => 'application\\views\\smarty\\cms\\categoriesOrder.tpl',
      1 => 1429201592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '988055aa4075413712-87920581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'validation_errors' => 0,
    'categories' => 0,
    'form' => 0,
    'cat' => 0,
    'set_value' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa40754626c2_14722661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa40754626c2_14722661')) {function content_55aa40754626c2_14722661($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Categories Order</h1>
            

            <?php if ($_smarty_tpl->tpl_vars['message']->value['flashdata']) {?>
                <div class="message-success"><?php echo $_smarty_tpl->tpl_vars['message']->value['flashdata'];?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['message']->value['flashdata']-'error') {?>
                <div class="error-display "><?php echo $_smarty_tpl->tpl_vars['message']->value['flashdata']-'error';?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['validation_errors']->value)) {?>
                <div class="error-display "><?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>
</div>
            <?php }?>
        </div>

    </div>

    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?>

            <div class="col-xs-8 col-sm-5 col-lg-3">
                <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

                <table class="table table-condensed">
                    <tbody>
                    <tr class="success">
                        <th class="col-xs-2">Place</th>
                        <th class="col-xs-6"><div style="width:150px;">Category</div></th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                        <tr>
                            <td><input type="text" name="order-<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" class="form-control" value="<?php if (!$_smarty_tpl->tpl_vars['set_value']->value[$_smarty_tpl->tpl_vars['cat']->value['id']]||!isset($_smarty_tpl->tpl_vars['set_value']->value)||empty($_smarty_tpl->tpl_vars['set_value']->value)) {
echo $_smarty_tpl->tpl_vars['cat']->value['cat_order'];
}
echo $_smarty_tpl->tpl_vars['set_value']->value[$_smarty_tpl->tpl_vars['cat']->value['id']];?>
"
                                       style="max-width: 60px;" /></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 col-sm-12">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>

            <div class="col-sm-12">
                <br><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/categories"><b>Back to Categories Management</b></a>
            </div>
        <?php } else { ?>
            <div class="col-md-12"><h1>No Categories</h1></div>
        <?php }?>
    </div>


</div><?php }} ?>
