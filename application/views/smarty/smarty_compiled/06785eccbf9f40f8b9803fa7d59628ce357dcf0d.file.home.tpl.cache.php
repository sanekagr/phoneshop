<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 16:27:12
         compiled from "application\views\smarty\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2811155aa5430496b70-40162984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06785eccbf9f40f8b9803fa7d59628ce357dcf0d' => 
    array (
      0 => 'application\\views\\smarty\\home.tpl',
      1 => 1429966775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2811155aa5430496b70-40162984',
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
  'unifunc' => 'content_55aa54305011e9_48141159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa54305011e9_48141159')) {function content_55aa54305011e9_48141159($_smarty_tpl) {?></div>

<div class="container-fluid">

    <div class="row">

        <div class="fotorama fotorama-home" data-width="100%" data-ratio="2.74" data-autoplay="6000" data-keyboard="true"
             data-transition="crossfade" data-loop="true" data-fit="contain" data-nav="false">

            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/1.1.jpg" data-caption=" <div class='caption'><a href='products/tablets' ><h1>Buy Tablets</h1></a></div>">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/2.1.jpg" data-caption=" <div class='caption'><a href='products/cameras' ><h1>Buy Cameras</h1></a></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/3.jpg" data-caption=" <div class='caption'><a href='products/phones' ><h1>Buy Cell Phones</h1></a></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/4.jpg" data-caption=" <div class='caption'><h1>We have the best prices</h1></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/5.jpg" data-caption=" <div class='caption'><h1>And good reputation</h1></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/6.jpg" data-caption=" <div class='caption'><h1>No problems with warranty</h1></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/7.jpg" data-caption=" <div class='caption'><h1>We are working for you!</h1></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/8.jpg" data-caption=" <div class='caption'><a href='products/tablets/tablets-3' ><h1>Ipad Air 2 16gb only 499$</h1></a></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/9.jpg" data-caption=" <div class='caption'><a href='products/tablets/tablets-4' ><h1>iPad Mini 3 16gb only 399$</h1></a></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/10.jpg" data-caption=" <div class='caption'><a href='products/cameras/cameras-74' ><h1>The new Samsung NX1 - 1499$</h1></a></div> ">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/carousel_home/11.jpg" data-caption=" <div class='caption'><a href='products/phones/phones-1' ><h1>iPhone 6 16gb - 699$</h1></a></div> ">

        </div>

        <div id="m1" class="marquee hidden-xs">
            <span class="h1-home">
                Phoneshop - The best cell phones, tablets, cameras and other devices at a good price,
                good service and warranty. We are working for you! Call 1700-000-000!
            </span>
        </div>
        <!--/.hidden-xs-->

    </div>

</div>

<div class="container">

    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>

        <?php if ($_smarty_tpl->tpl_vars['cat']->value['items']==null) {?>
            
            <?php continue 1;?>
        <?php }?>

        <div class="row category_cart">

            <div class="col-sm-12" style="margin-top: 0;"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
">
                    <h1 class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</h1>
                    <h3 class="visible-xs-inline-block"><b><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</b></h3>
                </a>
            </div>

            <?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 product_cart">

                    <div class="title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
">
                            <h4 class="text-center"><b><?php echo $_smarty_tpl->tpl_vars['prod']->value['title'];?>
</b></h4></a>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
">
                        <img class="center-block img"
                             src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['main_image'];?>
"
                             alt="<?php echo $_smarty_tpl->tpl_vars['prod']->value['title'];?>
"/>
                    </a>

                    <h4><?php echo $_smarty_tpl->tpl_vars['prod']->value['price'];?>
$</h4>
                    <button class="btn btn-primary btn-sm add-to-cart" data-id="<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
">add to cart <i
                                class="fa fa-cart-plus"></i></button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['prod']->value['machine_name'];?>
">
                        <button class="btn btn-primary btn-sm hidden-sm hidden-xs pull-right">Read more</button>
                    </a>

                </div>
            <?php } ?>

        </div>
        <!--/.row-->

    <?php } ?>


<?php }} ?>
