<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-17 16:10:16
         compiled from "application/views/smarty/cms/editImages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1052706959553168a8087048-58118618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb52ba408179f71875289ae5ce1da84c6774f334' => 
    array (
      0 => 'application/views/smarty/cms/editImages.tpl',
      1 => 1429201593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1052706959553168a8087048-58118618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'validation_errors' => 0,
    'images' => 0,
    'form' => 0,
    'url' => 0,
    'product' => 0,
    'img' => 0,
    'form2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553168a82187f5_79521957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553168a82187f5_79521957')) {function content_553168a82187f5_79521957($_smarty_tpl) {?>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center ">Add/Delete Pictures</h1><br>

            

            <?php if ($_smarty_tpl->tpl_vars['message']->value['flashdata']) {?>
                <div class="message-success  text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value['flashdata'];?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['message']->value['error']) {?>
                <div class="error-display  text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value['error'];?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['validation_errors']->value)) {?>
                <div class="error-display  text-center"><?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>
</div>
            <?php }?>

        </div>

    </div> 

    <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&!empty($_smarty_tpl->tpl_vars['images']->value)) {?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>


    <div class="row">

        



        

            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>

            <div class="col-xs-4 col-md-3 col-lg-2">
                <div class="thumbnail">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" target="popup"
                       onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
','width=800,height=600' )">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
"
                    class="img img-responsive img-rounded"   style="max-height: 140px;">
                    </a>

                    <div class="caption">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
">
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            <?php } ?>
    </div>

    <div class="row">

        <div class="col-sm-12">
            <button role="submit" name="delete-submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete Pictures</button>
        </div>

    </div><br>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>


        

    <div class="row">

            <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

            <div class="col-xs-12 col-sm-6">

                <div class="input-group">

                    <input type="file" class="form-control" name="userfile[]" multiple="multiple"/>
                    <span class="input-group-btn">
                        <button type="submit" name="add-submit" class="btn btn-default ">
                            <i class="fa fa-plus"></i> Add Pictures
                        </button>
                    </span>

                </div>

            </div>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>


    </div>

        <?php echo $_smarty_tpl->tpl_vars['form2']->value['open'];?>


            
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Set Main Image</h2>
            </div>
        </div><br>

        <div class="row">
            <div class="col-sm-12">
                    <p><b>main image:</b></p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['main_image'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
/"
                       target="popup"
                       onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['main_image'];?>
','<?php echo $_smarty_tpl->tpl_vars['product']->value['main_image'];?>
','width=800,height=600' )">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['main_image'];?>
"
                             class="img img-responsive img-rounded" style="max-height: 120px;border:2px solid #2A2E2D;">
                    </a><br>

            </div>
            <div class="col-sm-12 table-responsive">
                <table class="table-main-image">
                    <tbody>
                    <tr>

                        <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                            <td >
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
/"
                                   target="popup" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
','width=800,height=600' )" >
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
"
                                         class="img img-responsive" style="max-height: 100px;">
                                </a>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" name="main_radio"/>
                                    </label>
                                </div>
                            </td>
                        <?php } ?>

                        </tr>
                    </tbody>
                </table><br>
            </div>

            <div class="col-sm-12">
                <button role="submit" name="set_main_submit" class="btn btn-default set-main-submit"><i class="fa fa-picture-o"></i> Set
                    Main Image
                </button>
            </div>

        </div><br>


        <?php echo $_smarty_tpl->tpl_vars['form2']->value['close'];?>



    <?php } else { ?>

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="text-danger"> This product hasn't pictures</h2>
            </div>
        </div><br>

        

         <div class="row" >

             <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

             <div class="col-xs-12 col-sm-5">

                 <div class="input-group">

                     <input type="file" class="form-control" name="userfile[]" multiple="multiple"/>

                    <span class="input-group-btn">
                        <button type="submit" name="add-submit" class="btn btn-default ">
                            <i class="fa fa-plus"></i> Add Pictures
                        </button>
                    </span>

                 </div>

             </div>
             <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>


        </div>

    <?php }?>

        <div class="row">
            <div class="col-sm-12"><br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/edit_product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><b>Edit Product</b></a>
            </div>
        </div>


<?php }} ?>
