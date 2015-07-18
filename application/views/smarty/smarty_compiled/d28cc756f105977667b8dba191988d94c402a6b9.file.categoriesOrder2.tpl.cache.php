<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 12:53:49
         compiled from "application\views\smarty\cms\categoriesOrder2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2205524faad917e37-10292559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28cc756f105977667b8dba191988d94c402a6b9' => 
    array (
      0 => 'application\\views\\smarty\\cms\\categoriesOrder2.tpl',
      1 => 1428478213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2205524faad917e37-10292559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'categories' => 0,
    'form' => 0,
    'cat' => 0,
    'error' => 0,
    'order' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5524faad95eae2_52088591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5524faad95eae2_52088591')) {function content_5524faad95eae2_52088591($_smarty_tpl) {?><div class="container">
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

        </div>

    </div>

    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?>
           <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>


                <div class="col-md-3 col-sm-5">
                    <label for="cat-select">Categories:</label>
                    <select class="form-control" name="cat-select" id="cat-select">
                        <option value="choose">Choose category</option>
                        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                            <option value=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                        <?php } ?>
                    </select>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value['category']) {?>
                        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value['category'];?>
</div>
                    <?php }?>
                </div>

                <div class="col-md-3 col-sm-5">
                    <label for="order-select">New place of category</label>
                    <select class="form-control" name="order-select" id="order-select">
                        <option value='choose'>Choose Order</option>
                        <?php  $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['num']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['num']->key => $_smarty_tpl->tpl_vars['num']->value) {
$_smarty_tpl->tpl_vars['num']->_loop = true;
?>
                            <option value=<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</option>
                        <?php } ?>
                    </select>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value['order']) {?>
                        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value['order'];?>
</div>
                    <?php }?>
                </div>

                <div class="col-sm-12">
                    <br><input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
                </div>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>

        <?php } else { ?>
            <div class="col-md-12"><h1>No Categories</h1></div>
        <?php }?>
    </div>

</div><?php }} ?>
