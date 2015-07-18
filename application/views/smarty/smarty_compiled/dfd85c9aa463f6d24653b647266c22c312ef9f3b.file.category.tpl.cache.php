<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-17 19:49:39
         compiled from "application/views/smarty/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91864312355319c130ee992-60195074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd85c9aa463f6d24653b647266c22c312ef9f3b' => 
    array (
      0 => 'application/views/smarty/category.tpl',
      1 => 1429201452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91864312355319c130ee992-60195074',
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
  'unifunc' => 'content_55319c13161646_75566123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55319c13161646_75566123')) {function content_55319c13161646_75566123($_smarty_tpl) {?><div class="container">
    
    <div class="row category_cart">
        <h1>Our <?php echo $_smarty_tpl->tpl_vars['category']->value[0]['name'];?>
 :</h1>
    </div>

    <div class="row "><br>

        <?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>

            <div class="col-sm-3 col-xs-12 product_cart">


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
