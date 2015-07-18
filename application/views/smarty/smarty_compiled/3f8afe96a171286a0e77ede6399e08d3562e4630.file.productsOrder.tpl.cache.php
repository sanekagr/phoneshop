<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-17 16:10:12
         compiled from "application/views/smarty/cms/productsOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:544827233553168a4195db7-39645827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8afe96a171286a0e77ede6399e08d3562e4630' => 
    array (
      0 => 'application/views/smarty/cms/productsOrder.tpl',
      1 => 1429201595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '544827233553168a4195db7-39645827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'validation_errors' => 0,
    'products' => 0,
    'form' => 0,
    'prod' => 0,
    'set_value' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553168a43407a5_98124701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553168a43407a5_98124701')) {function content_553168a43407a5_98124701($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Products Order</h1>
            

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
        <?php if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>

            <div class="col-xs-12 col-sm-12 col-md-6">

                <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

                <table class="table table-condensed">
                    <tbody>
                    <tr class="success">
                        <th class="col-xs-2">Place</th>
                        <th class="col-xs-6"><div style="width:200px;">Product</div></th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>
                        <tr>
                            <td><input type="text" name="order-<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
" class="form-control" value="<?php if (!$_smarty_tpl->tpl_vars['set_value']->value[$_smarty_tpl->tpl_vars['prod']->value['id']]||!isset($_smarty_tpl->tpl_vars['set_value']->value)||empty($_smarty_tpl->tpl_vars['set_value']->value)) {
echo $_smarty_tpl->tpl_vars['prod']->value['the_order'];
}
echo $_smarty_tpl->tpl_vars['set_value']->value[$_smarty_tpl->tpl_vars['prod']->value['id']];?>
" style="max-width: 60px;"
                                       /></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['prod']->value['title'];?>
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
cms/dashboard/edit_product/<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
"><b>Back to edit product section</b></a>
            </div>
        <?php } else { ?>
            <div class="col-sm-12"><h1>No Products in category</h1></div>
        <?php }?>
    </div>


</div><?php }} ?>
