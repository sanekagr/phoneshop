<?php /*%%SmartyHeaderCode:70785550f80bcbdf33-91401714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '130bb85770adae535bcd9a63a6e62269e15cfe55' => 
    array (
      0 => 'application\\views\\smarty\\cms\\editCategory.tpl',
      1 => 1429201593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70785550f80bcbdf33-91401714',
  'variables' => 
  array (
    'cat' => 0,
    'message' => 0,
    'validation_errors' => 0,
    'form' => 0,
    'set_value' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5550f80bd08829_92535359',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550f80bd08829_92535359')) {function content_5550f80bd08829_92535359($_smarty_tpl) {?>    <div class="row">
        <div class="col-sm-12">

            <h2 class="text-center">Edit Category - Phones</h2>

            

                                                    <div class="error-display  text-center"></div>
            
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">

             <form action="http://localhost/phoneshop/cms/categories/edit_category/1" method="post" accept-charset="utf-8" id="edit-category-form" enctype="multipart/form-data"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="afcd8960dc78fce21c0ad7783705ca90" />
</div>
                <br>

                <div class="form-group">
                    <label for="title">Name of category:</label>
                    <input type="text" name="name" id="name" class="form-control" value="Phones" />
                </div>

                <div class="form-group">
                    <label for="cat_img">Image:</label>
                    <input type="file" class="form-control" name="userfile"  id="cat_img"/>
                </div>

                <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Category" />

            </form>

            <br>
            <a href="http://localhost/phoneshop/cms/categories"><b>Back to all Categories</b></a>
        </div>
    </div>

<?php }} ?>
