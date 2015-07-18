<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 07:02:14
         compiled from "application/views/smarty/categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1644037644552f96b6da8225-71624462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85f80d688bfdd119dda90ab1efb52187d038bcc' => 
    array (
      0 => 'application/views/smarty/categories_menu.tpl',
      1 => 1429181417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1644037644552f96b6da8225-71624462',
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
  'unifunc' => 'content_552f96b70eb267_77672103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f96b70eb267_77672103')) {function content_552f96b70eb267_77672103($_smarty_tpl) {?>

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
