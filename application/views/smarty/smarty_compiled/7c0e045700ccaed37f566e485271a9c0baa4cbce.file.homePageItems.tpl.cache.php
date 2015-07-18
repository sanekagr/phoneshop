<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 01:00:35
         compiled from "application\views\smarty\homePageItems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:543555061d238f3137-77623300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c0e045700ccaed37f566e485271a9c0baa4cbce' => 
    array (
      0 => 'application\\views\\smarty\\homePageItems.tpl',
      1 => 1426455697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '543555061d238f3137-77623300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'cat' => 0,
    'item' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55061d239274d4_63203847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55061d239274d4_63203847')) {function content_55061d239274d4_63203847($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['categories']->value!=null) {?>

    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <div class="row">

                <div class="col-sm-12"><h1><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h1></div>

                <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet aut beatae deleniti dicta dolor et facilis labore laboriosam,
                 libero nesciunt nisi perspiciatis quam, quos rerum saepe tempora, vitae voluptate.</p>
                </div>
                <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium debitis deserunt ducimus facilis fugit minima natus
                , porro quam repudiandae? Assumenda aut facere iste pariatur porro quia similique sit voluptatum.</p>
                </div>
                <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam debitis enim esse expedita fugiat ipsum minima,
                 modi natus nobis quasi qui quis quos, soluta voluptas! Est omnis similique suscipit.</p>
                </div>
                    <div class="col-sm-12">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['item']->value['machine_name'];?>
">
                                            <button class="btn btn-primary">Another items</button>
                    </a>
                    </div>
                    
            


            </div>
        <?php } ?>
    <?php } ?>

<?php } else { ?>
    <div class="row">
        <h1>No categories</h1>
    </div>
<?php }?><?php }} ?>
