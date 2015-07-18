<?php /*%%SmartyHeaderCode:9669560025531690532f551-55151593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf8531bf7a4777bc7bdc31103beabc8ee7eeef6' => 
    array (
      0 => 'application/views/smarty/cms/allCategories.tpl',
      1 => 1429201591,
      2 => 'file',
    ),
    'ad2f87b4ef8b37550b1373c9f7ed18a08ac858ef' => 
    array (
      0 => 'application/views/smarty/modal-delete.tpl',
      1 => 1429201455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9669560025531690532f551-55151593',
  'variables' => 
  array (
    'url' => 0,
    'feedback' => 0,
    'categories' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553169054635d2_64781805',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553169054635d2_64781805')) {function content_553169054635d2_64781805($_smarty_tpl) {?>
<div class="container">
    <div class="row">
        <h2>Edit Categories</h2><br>

        <div class="col-sm-12">
            <button class="btn btn-primary" onclick="window.location='http://phoneshop.agran.info/cms/categories/add_category' "><i
                        class="fa fa-plus"></i> Add New Category
            </button>&nbsp;&nbsp;
            <button class="btn btn-info" onclick="window.location='http://phoneshop.agran.info/cms/categories/categories_order' "><i
                        class="fa fa-pencil"></i> Categories Order
            </button>
        </div>
                  <div class="col-sm-12 message-success"></div>
            </div>
    <br/>

    <div class="row">
        <div class="col-xs-12 col-sm-7">

            
            <table class="table table-hover table-products">
                <tbody>
                                    <tr>
                        <td class="col-xs-4"><a
                                    href="http://phoneshop.agran.info/products/phones/">Phones</a>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-info" onclick="window.location='http://phoneshop.agran.info/cms/categories/edit_category/1' "><i class="fa fa-pencil"></i> Edit</button>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-category-1"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-category-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Phones category with all the content (images, products)?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="1" class="btn btn-danger delete-btn delete-category">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>
                                    <tr>
                        <td class="col-xs-4"><a
                                    href="http://phoneshop.agran.info/products/tablets/">Tablets</a>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-info" onclick="window.location='http://phoneshop.agran.info/cms/categories/edit_category/2' "><i class="fa fa-pencil"></i> Edit</button>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-category-2"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-category-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Tablets category with all the content (images, products)?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="2" class="btn btn-danger delete-btn delete-category">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>
                                    <tr>
                        <td class="col-xs-4"><a
                                    href="http://phoneshop.agran.info/products/cameras/">Cameras</a>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-info" onclick="window.location='http://phoneshop.agran.info/cms/categories/edit_category/4' "><i class="fa fa-pencil"></i> Edit</button>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-category-4"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-category-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Cameras category with all the content (images, products)?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="4" class="btn btn-danger delete-btn delete-category">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>
                                    <tr>
                        <td class="col-xs-4"><a
                                    href="http://phoneshop.agran.info/products/memory_cards/">Memory Cards</a>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-info" onclick="window.location='http://phoneshop.agran.info/cms/categories/edit_category/3' "><i class="fa fa-pencil"></i> Edit</button>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-category-3"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-category-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Memory Cards category with all the content (images, products)?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="3" class="btn btn-danger delete-btn delete-category">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>
                                    <tr>
                        <td class="col-xs-4"><a
                                    href="http://phoneshop.agran.info/products/phone_accessories/">Phone Accessories </a>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-info" onclick="window.location='http://phoneshop.agran.info/cms/categories/edit_category/5' "><i class="fa fa-pencil"></i> Edit</button>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-category-5"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-category-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Phone Accessories  category with all the content (images, products)?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="5" class="btn btn-danger delete-btn delete-category">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>
                                </tbody>
            </table>

            
        </div>
    </div>
</div>
<?php }} ?>
