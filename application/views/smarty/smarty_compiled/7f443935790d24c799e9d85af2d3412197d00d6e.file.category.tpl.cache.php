<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 21:46:37
         compiled from "application\views\smarty\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189605550f90df422c9-71100361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f443935790d24c799e9d85af2d3412197d00d6e' => 
    array (
      0 => 'application\\views\\smarty\\category.tpl',
      1 => 1429649858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189605550f90df422c9-71100361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'url' => 0,
    'prod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5550f90e03ee63_34669042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550f90e03ee63_34669042')) {function content_5550f90e03ee63_34669042($_smarty_tpl) {?><div class="container">
    
    <div class="row category_cart">
        <h2 style="font-weight: 600;color:#0e3372;">Our <?php echo $_smarty_tpl->tpl_vars['category']->value[0]['name'];?>
</h2>
    </div>

    <div class="row"><br>

        <?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>

            <div class="col-xs-12 col-sm-6 col-md-3 product_cart">

                <div class="title">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['cat_machine'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
"><h4
                                class="text-center"><b><?php echo $_smarty_tpl->tpl_vars['prod']->value['title'];?>
</b></h4></a>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['cat_machine'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
">
                    <img class="center-block img-rounded"
                         src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['prod']->value['cat_machine'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['main_image'];?>
"
                         alt="<?php echo $_smarty_tpl->tpl_vars['prod']->value['title'];?>
" />
                </a>

                <h4><?php echo $_smarty_tpl->tpl_vars['prod']->value['price'];?>
$</h4>
                <button class="btn btn-primary btn-sm add-to-cart" data-id="<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
" >Add to cart <i class="fa fa-cart-plus"></i></button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['cat_machine'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
">
                    <button class="btn btn-primary btn-sm hidden-sm hidden-xs pull-right">Read more</button>
                </a>

            </div>

            <?php }
if (!$_smarty_tpl->tpl_vars['prod']->_loop) {
?>

                <h1><i>No Products in this category!</i></h1>

        <?php } ?>
    </div>
    
</div>


<?php }} ?>
