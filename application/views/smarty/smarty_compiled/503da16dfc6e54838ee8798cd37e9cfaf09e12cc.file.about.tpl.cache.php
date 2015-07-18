<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-11 03:33:55
         compiled from "application\views\smarty\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2783154ffa993637c14-42651308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '503da16dfc6e54838ee8798cd37e9cfaf09e12cc' => 
    array (
      0 => 'application\\views\\smarty\\about.tpl',
      1 => 1424697987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2783154ffa993637c14-42651308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gnida' => 0,
    'suka' => 0,
    'name' => 0,
    'name2' => 0,
    'myPeople' => 0,
    'value' => 0,
    'myColors' => 0,
    'color' => 0,
    'products' => 0,
    'prod' => 0,
    'key1' => 0,
    'prod1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ffa993681736_56025313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ffa993681736_56025313')) {function content_54ffa993681736_56025313($_smarty_tpl) {?><h1>Gnida: <?php echo $_smarty_tpl->tpl_vars['gnida']->value;?>
</h1>
<h2>Suka: <?php echo $_smarty_tpl->tpl_vars['suka']->value;?>
</h2>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable('Bob', null, 0);?>
<?php $_smarty_tpl->tpl_vars['name2'] = new Smarty_variable('Sasha', null, 0);?>

<p>
   The name is <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

</p>

<?php if ($_smarty_tpl->tpl_vars['name2']->value=='Sasha') {?>
    <h3>Sasha The best</h3>
<?php } elseif ($_smarty_tpl->tpl_vars['name2']->value=='Pasha') {?>
    <h3>Pasha The best</h3>
<?php } else { ?>
     <h3>No one the best....</h3>
<?php }?>

<h1>Employee</h1>
<ul>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['myPeople']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
    <?php } ?>
</ul>

<h1>Colors</h1>

</ul>
<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['myColors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
<?php } ?>
</ul>

<hr>
<?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['prod']->value['name']==null) {?>
    <hr>
    <h3>No such product</h3>
    <?php } else { ?>
    <ul>
        <?php  $_smarty_tpl->tpl_vars['prod1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod1']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod1']->key => $_smarty_tpl->tpl_vars['prod1']->value) {
$_smarty_tpl->tpl_vars['prod1']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['prod1']->key;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['prod1']->value;?>
</li>
        <?php } ?>
    </ul>
<?php }?>
<?php } ?>
<hr>


<?php }} ?>
