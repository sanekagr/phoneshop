<?php /*%%SmartyHeaderCode:1790239416553291bd1f5167-13237336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25ff371a164f6e2014be59793af2e31057d7e6ad' => 
    array (
      0 => 'application/views/smarty/cms/allProducts.tpl',
      1 => 1429201592,
      2 => 'file',
    ),
    'ad2f87b4ef8b37550b1373c9f7ed18a08ac858ef' => 
    array (
      0 => 'application/views/smarty/modal-delete.tpl',
      1 => 1429201455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790239416553291bd1f5167-13237336',
  'variables' => 
  array (
    'url' => 0,
    'categories' => 0,
    'cat' => 0,
    'form' => 0,
    'validation_errors' => 0,
    'search_results' => 0,
    'item' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553291bd39ac80_86948025',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553291bd39ac80_86948025')) {function content_553291bd39ac80_86948025($_smarty_tpl) {?><div class="container">

    <div class="row">

        <div class="col-sm-12"><h1>Product Management</h1><br></div>

    </div>

        

    <div class="row">

        <div class="col-xs-12 col-sm-12">

                <button class="btn btn-primary" onclick="window.location='http://phoneshop.agran.info/cms/dashboard/add_product/' ">
                    <i class="fa fa-plus"></i> Add new product
                </button>&nbsp;&nbsp;&nbsp;

                <button class="btn btn-info" onclick="window.location='http://phoneshop.agran.info/cms/categories/' "><i class="fa fa-pencil"></i> Edit Categories
                </button>&nbsp;&nbsp;&nbsp;

                <button class="btn btn-default" onclick="window.location='http://phoneshop.agran.info/cms/dashboard/database_backup/' "><i class="fa fa-download"></i> Database Backup
                </button>

        </div>

    </div> <br>


    <div class="row">

        

        <div class="col-xs-12 col-sm-6">
            <select class="form-control pull-left" name="selection" id="selection" style="border: 1px #222 solid">
                <option value="-1">Choose Category</option>
                <option value="0">All Categories</option>
                                    <option value="1">Phones</option>
                                    <option value="2">Tablets</option>
                                    <option value="4">Cameras</option>
                                    <option value="3">Memory Cards</option>
                                    <option value="5">Phone Accessories </option>
                            </select>
        </div>
        <br class="visible-xs-inline-block">
        <br class="visible-xs-inline-block">

        

        <div class="col-xs-12 col-sm-6 ">

            <form action="http://phoneshop.agran.info/cms/dashboard/search_products" method="post" accept-charset="utf-8" id="search-products-form" role="search"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="6ce0150650be7475b72ee58d05f35357" />
</div>
            <div class="input-group">

               <input type="text" class="form-control" placeholder="Search product" name="product-search"  minlength=2 required style="border: 1px #222 solid" >

               <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="submit" style="border: 1px #222 solid">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  </button>
               </span>

            </div><!-- /input-group -->
                        </form>

        </div>

     </div>


    <div class="row">

        

        
        

        


        
        
            <div class="col-xs-12 col-sm-6">

                <h3 style="color: #264780; font-weight: 600;">Phones</h3><br>
                <table class="table table-hover table-condensed table-products">
                    <tbody>
                                            <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/phones/phones-1">Apple iPhone 6</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/1' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-1"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Apple iPhone 6 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="1" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/phones/phones-2">Samsung Galaxy S5</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/2' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-2"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Samsung Galaxy S5 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="2" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/phones/phones-70">Samsung Galaxy S6</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/70' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-70"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-70" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Samsung Galaxy S6 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="70" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/phones/phones-71">LG G3</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/71' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-71"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-71" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  LG G3 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="71" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                            </tbody>
                </table>

            </div>


        
            <div class="col-xs-12 col-sm-6">

                <h3 style="color: #264780; font-weight: 600;">Tablets</h3><br>
                <table class="table table-hover table-condensed table-products">
                    <tbody>
                                            <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/tablets/tablets-3">Apple iPad Air 2</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/3' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-3"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Apple iPad Air 2 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="3" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/tablets/tablets-4">Apple iPad mini 3</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/4' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-4"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Apple iPad mini 3 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="4" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/tablets/tablets-72">Samsung Galaxy Tab S 10.5</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/72' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-72"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-72" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Samsung Galaxy Tab S 10.5 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="72" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/tablets/tablets-73">Samsung Galaxy Tab 4 10.1 T530</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/73' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-73"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-73" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Samsung Galaxy Tab 4 10.1 T530 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="73" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                            </tbody>
                </table>

            </div>


        
            <div class="col-xs-12 col-sm-6">

                <h3 style="color: #264780; font-weight: 600;">Memory Cards</h3><br>
                <table class="table table-hover table-condensed table-products">
                    <tbody>
                                            <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/memory_cards/memory_cards-67">SanDisk Ultra microSDHC 32gb</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/67' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-67"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-67" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  SanDisk Ultra microSDHC 32gb with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="67" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/memory_cards/memory_cards-68">SanDisk Ultra SDHC/SDXC Memory Card 32gb</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/68' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-68"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-68" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  SanDisk Ultra SDHC/SDXC Memory Card 32gb with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="68" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/memory_cards/memory_cards-69">SanDisk Extreme PRO CompactFlash 64gb</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/69' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-69"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-69" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  SanDisk Extreme PRO CompactFlash 64gb with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="69" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                            </tbody>
                </table>

            </div>


        
            <div class="col-xs-12 col-sm-6">

                <h3 style="color: #264780; font-weight: 600;">Cameras</h3><br>
                <table class="table table-hover table-condensed table-products">
                    <tbody>
                                            <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/cameras/cameras-6">Canon 600d</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/6' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-6"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Canon 600d with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="6" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/cameras/cameras-8">Sony Alpha a7S</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/8' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-8"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Sony Alpha a7S with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="8" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/cameras/cameras-74">Samsung NX1</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/74' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-74"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-74" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Samsung NX1 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="74" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/cameras/cameras-75">Nikon D5500</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/75' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-75"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-75" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Nikon D5500 with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="75" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                            </tbody>
                </table>

            </div>


        
            <div class="col-xs-12 col-sm-6">

                <h3 style="color: #264780; font-weight: 600;">Phone Accessories </h3><br>
                <table class="table table-hover table-condensed table-products">
                    <tbody>
                                            <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/phone_accessories/accessories-5">headphones apple</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/5' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-5"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  headphones apple with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="5" class="btn btn-danger delete-btn delete-product">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </td>
                        </tr>
                                                <tr>
                            <td class="col-xs-4"><a
                                        href="http://phoneshop.agran.info/products/phone_accessories/accessories-7">Charger Micro Usb</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_product/7' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-7"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                
<div class="modal fade" id="modal-delete-product-7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete  Charger Micro Usb with the content?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="7" class="btn btn-danger delete-btn delete-product">Yes</button>
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
    <!--/.row-->
</div><?php }} ?>
