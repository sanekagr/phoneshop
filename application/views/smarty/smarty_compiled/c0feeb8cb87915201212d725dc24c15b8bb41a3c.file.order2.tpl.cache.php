<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-23 00:01:10
         compiled from "application\views\smarty\order2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2340555380c168dc313-63447047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0feeb8cb87915201212d725dc24c15b8bb41a3c' => 
    array (
      0 => 'application\\views\\smarty\\order2.tpl',
      1 => 1429201456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2340555380c168dc313-63447047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'ord' => 0,
    'url' => 0,
    'order' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55380c168f93e7_89512579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55380c168f93e7_89512579')) {function content_55380c168f93e7_89512579($_smarty_tpl) {?>



    <h1 >Thank you <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, your order have been saved!</h1>

    <h2>Order details:</h2>

    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ord']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
    <p><strong>
    Item: <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['order']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['order']->value['machine_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
</a><br>
    Quantity: <?php echo $_smarty_tpl->tpl_vars['order']->value['qty'];?>
<br>
    Price: <?php echo $_smarty_tpl->tpl_vars['order']->value['price'];?>
$<br>
    Subtotal: <?php echo $_smarty_tpl->tpl_vars['order']->value['subtotal'];?>
$<br>
    </p></strong>
    <?php } ?>
    <h2>Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
$</h2>






<?php }} ?>
