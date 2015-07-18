<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 21:45:24
         compiled from "application\views\smarty\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313475550f8c4b89f41-99101744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c551e73decf0df45e25736e5f5cdff219a59264f' => 
    array (
      0 => 'application\\views\\smarty\\item.tpl',
      1 => 1429963114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313475550f8c4b89f41-99101744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'images' => 0,
    'url' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5550f8c4bb2996_20460584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550f8c4bb2996_20460584')) {function content_5550f8c4bb2996_20460584($_smarty_tpl) {?>


    <div class="row">

        <div class="col-sm-12">
            <h2 class="item-h2"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2><br>
        </div>

    </div>

    <div class="row">

        <div class="col-sm-12 col-md-5">
            <div class="fotorama fotorama-items" data-autoplay="false" data-keyboard="true" data-nav="thumbs"
                 data-allowfullscreen="true" data-maxheight="450" data-fit="scaledown">

                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">
                <?php } ?>

            </div>
        </div>

        <div class="col-sm-12 col-md-7 item-cart">

            <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</h1><br>
            <button class="btn btn-default btn-lg add-to-cart" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Add to cart <i
                        class="fa fa-cart-plus"></i></button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-info btn-lg buy-now">Buy Now</button>
            <p style="margin-top:20px">
                <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

            </p>

            <p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
">Back to all <b><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button role="link" class="link" onclick="history.go(-1) "><b>Back</b></button>
            </p>

        </div>

    </div>






<?php }} ?>
