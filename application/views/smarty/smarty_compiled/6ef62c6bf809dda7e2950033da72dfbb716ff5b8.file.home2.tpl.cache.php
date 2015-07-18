<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 00:35:24
         compiled from "application\views\smarty\home2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6324551db61c69e5c4-94202471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef62c6bf809dda7e2950033da72dfbb716ff5b8' => 
    array (
      0 => 'application\\views\\smarty\\home2.tpl',
      1 => 1428010457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6324551db61c69e5c4-94202471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'products' => 0,
    'cat' => 0,
    'prod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551db61c6f0a50_30326870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551db61c6f0a50_30326870')) {function content_551db61c6f0a50_30326870($_smarty_tpl) {?><div class="container">

    <div class="row">
        <div class="fotorama"   data-autoplay="6000" data-keyboard="true" data-transition="crossfade">

            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/1.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/2.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/3.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/4.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/5.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/6.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/7.jpg">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/8.jpg">

        </div>
    </div><!--/.row-->

    <div class="row hidden-xs">
            <h1 class="h1-home text-center">
                Phoneshop - the home of the best phones
            </h1>
    </div><!--/.row-->

        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>

                <div class="row category_cart" >

                    <div class="col-sm-12 " style="margin-top: 0;"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
"><h1><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</h1></a></div>

                    <?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>

                            <div class="col-sm-3 col-xs-12 product_cart">

                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
"><h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['prod']->value['title'];?>
</h4></a><br>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
">
                                    <img class="center-block img img-responsive"
                                         src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['main_image'];?>
"
                                         alt="<?php echo $_smarty_tpl->tpl_vars['prod']->value['title'];?>
" height="150" width="150"/>
                                </a>

                                <h4><?php echo $_smarty_tpl->tpl_vars['prod']->value['price'];?>
$</h4>
                                <button class="btn btn-info btn-sm add-to-cart" data-id="<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
">add to cart <i class="fa fa-cart-plus"></i></button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
">
                                    <button class="btn btn-info btn-sm hidden-sm hidden-xs">Read more</button>
                                </a>

                            </div>
                    <?php }
if (!$_smarty_tpl->tpl_vars['prod']->_loop) {
?>

                        <div class="col-sm-8">
                            <h3>No products in category</h3>
                        </div>

                    <?php } ?>

                </div><!--/.row-->

        <?php } ?>











</div><!--/.container --><?php }} ?>
