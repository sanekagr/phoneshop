<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 10:17:13
         compiled from "application\views\smarty\cms\productsOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23626552f70092d3261-92115466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd300fed2644e0d77a2bdb2f366617f6efbafc537' => 
    array (
      0 => 'application\\views\\smarty\\cms\\productsOrder.tpl',
      1 => 1429115015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23626552f70092d3261-92115466',
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
  'unifunc' => 'content_552f7009323260_86859322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f7009323260_86859322')) {function content_552f7009323260_86859322($_smarty_tpl) {?><div class="container">
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
