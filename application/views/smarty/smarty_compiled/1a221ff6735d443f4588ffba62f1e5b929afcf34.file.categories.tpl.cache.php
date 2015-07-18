<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 21:46:34
         compiled from "application\views\smarty\categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51055550f90a29da13-79392535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a221ff6735d443f4588ffba62f1e5b929afcf34' => 
    array (
      0 => 'application\\views\\smarty\\categories.tpl',
      1 => 1429732410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51055550f90a29da13-79392535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5550f90a2c6764_03391401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550f90a2c6764_03391401')) {function content_5550f90a2c6764_03391401($_smarty_tpl) {?><div class="container">

    <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)) {?>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                <div class="col-xs-12 col-sm-6 col-md-4 text-center categories">
                    <div class="title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['item']->value['machine_name'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
                    </div>
                                      <img class="img img-rounded" style="max-height: 250px; max-width: 300px;"  src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/categories/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"
                                           alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
                    </a>

                </div>
        <?php } ?>

    <?php } else { ?>
    <h1>No categories</h1>
    <?php }?>

</div>

<?php }} ?>
