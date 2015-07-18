<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-23 01:33:20
         compiled from "application\views\smarty\search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2729555382fc0928cc5-21683749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5ab5248ba139f0036f3388f24c482c1fa30b7e0' => 
    array (
      0 => 'application\\views\\smarty\\search_results.tpl',
      1 => 1429315654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2729555382fc0928cc5-21683749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'validation_errors' => 0,
    'search_results' => 0,
    'search_input' => 0,
    'url' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55382fc0978502_77595670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55382fc0978502_77595670')) {function content_55382fc0978502_77595670($_smarty_tpl) {?>

    <div class="row">

        <?php if (isset($_smarty_tpl->tpl_vars['validation_errors']->value)) {?>
            <div class="error-display  text-center"><?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>
</div>
            <div class="text-center">
                <button role="link" class="link" onclick="history.go(-1) "><h3>Back</h3></button>
            </div>
        <?php }?>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['search_results']->value)) {?>

            <?php if (isset($_smarty_tpl->tpl_vars['search_input']->value)) {?>
                <div class="row">
                    <h2>Search results for "<span style="color: coral"><?php echo $_smarty_tpl->tpl_vars['search_input']->value;?>
</span>"</h2>
                </div>
                <hr>
            <?php }?>

        <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>

            <div class="row result" title="If you can't see all description hover over it">

                <div class="col-sm-12">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['res']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['res']->value['machine_name'];?>
/"><h3><?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['res']->value['price'];?>
$</h3></a>
                </div>

                <div class="description col-sm-9">
                    <?php echo $_smarty_tpl->tpl_vars['res']->value['description'];?>

                </div>
                <div class="col-sm-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['res']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['res']->value['machine_name'];?>
/"><img class="img img-rounded"
                         src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['res']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['res']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['res']->value['main_image'];?>
"
                         alt="<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
"/></a>
                </div>

            </div>
            <hr>
        <?php } ?>
        <div class="row">

           <div class="text-center col-sm-12">
                <button role="link" class="link" onclick="history.go(-1) "><h3>Back</h3></button
           </div>

        </div>

    <?php } else { ?>
        <div class="col-sm-12">
            <?php if (isset($_smarty_tpl->tpl_vars['search_input']->value)) {?>
               <h2 class="text-center"><i>Sorry. No Results for "<span style="color: coral"><?php echo $_smarty_tpl->tpl_vars['search_input']->value;?>
</span>"</i></h2>
            <?php }?>
            <div class="text-center">
                <button role="link" class="link" onclick="history.go(-1) "><h3>Back</h3></button>
            </div>
        </div>
    <?php }?>


<?php }} ?>
