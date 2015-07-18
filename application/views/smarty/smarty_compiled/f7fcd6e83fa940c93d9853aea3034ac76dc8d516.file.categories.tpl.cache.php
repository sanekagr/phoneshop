<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-17 16:15:38
         compiled from "application/views/smarty/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2110546510553169ea62cd00-69343754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7fcd6e83fa940c93d9853aea3034ac76dc8d516' => 
    array (
      0 => 'application/views/smarty/categories.tpl',
      1 => 1429201451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110546510553169ea62cd00-69343754',
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
  'unifunc' => 'content_553169ea67b164_88728055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553169ea67b164_88728055')) {function content_553169ea67b164_88728055($_smarty_tpl) {?><div class="container">

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
"/> </a>
                              </div>
        <?php } ?>

    <?php } else { ?>
    <h1>No categories</h1>
    <?php }?>

</div>

<?php }} ?>
