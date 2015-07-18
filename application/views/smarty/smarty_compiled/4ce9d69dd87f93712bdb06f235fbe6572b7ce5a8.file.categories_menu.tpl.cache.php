<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 16:27:12
         compiled from "application\views\smarty\categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3230255aa54304033c4-62787976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ce9d69dd87f93712bdb06f235fbe6572b7ce5a8' => 
    array (
      0 => 'application\\views\\smarty\\categories_menu.tpl',
      1 => 1429201452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3230255aa54304033c4-62787976',
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
  'unifunc' => 'content_55aa5430448fd5_33857287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa5430448fd5_33857287')) {function content_55aa5430448fd5_33857287($_smarty_tpl) {?>

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
