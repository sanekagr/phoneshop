<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 16:42:02
         compiled from "application/views/smarty/categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4126929805532c19a49d7a7-58316176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a229debb961bb1e4cac352c420a79434b20eeb' => 
    array (
      0 => 'application/views/smarty/categories_menu.tpl',
      1 => 1429201452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4126929805532c19a49d7a7-58316176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories_menu' => 0,
    'url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5532c19a535962_25547640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5532c19a535962_25547640')) {function content_5532c19a535962_25547640($_smarty_tpl) {?>

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['item']->value['machine_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
    <?php } ?>





<?php }} ?>
