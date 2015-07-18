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
  'unifunc' => 'content_553168a8254917_81591597',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553168a8254917_81591597')) {function content_553168a8254917_81591597($_smarty_tpl) {?>    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center ">Add/Delete Pictures</h1><br>

            

                                    
        </div>

    </div> 

    
    <form action="http://phoneshop.agran.info/cms/dashboard/edit_images/3" method="post" accept-charset="utf-8" enctype="multipart/form-data"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="228798172d0bc9da90359f400f7d3a88" />
</div>

    <div class="row">

        



        

            
            <div class="col-xs-4 col-md-3 col-lg-2">
                <div class="thumbnail">

                    <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/1.jpg" target="popup"
                       onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/1.jpg','1.jpg','width=800,height=600' )">
                        <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/1.jpg"
                    class="img img-responsive img-rounded"   style="max-height: 140px;">
                    </a>

                    <div class="caption">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" name="1.jpg">
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="col-xs-4 col-md-3 col-lg-2">
                <div class="thumbnail">

                    <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/2.jpg" target="popup"
                       onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/2.jpg','2.jpg','width=800,height=600' )">
                        <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/2.jpg"
                    class="img img-responsive img-rounded"   style="max-height: 140px;">
                    </a>

                    <div class="caption">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" name="2.jpg">
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="col-xs-4 col-md-3 col-lg-2">
                <div class="thumbnail">

                    <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/3.jpg" target="popup"
                       onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/3.jpg','3.jpg','width=800,height=600' )">
                        <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/3.jpg"
                    class="img img-responsive img-rounded"   style="max-height: 140px;">
                    </a>

                    <div class="caption">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" name="3.jpg">
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="col-xs-4 col-md-3 col-lg-2">
                <div class="thumbnail">

                    <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/4.jpg" target="popup"
                       onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/4.jpg','4.jpg','width=800,height=600' )">
                        <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/4.jpg"
                    class="img img-responsive img-rounded"   style="max-height: 140px;">
                    </a>

                    <div class="caption">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" name="4.jpg">
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="col-xs-4 col-md-3 col-lg-2">
                <div class="thumbnail">

                    <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/5.jpg" target="popup"
                       onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/5.jpg','5.jpg','width=800,height=600' )">
                        <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/5.jpg"
                    class="img img-responsive img-rounded"   style="max-height: 140px;">
                    </a>

                    <div class="caption">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" name="5.jpg">
                            </label>
                        </div>
                    </div>

                </div>
            </div>

                </div>

    <div class="row">

        <div class="col-sm-12">
            <button role="submit" name="delete-submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete Pictures</button>
        </div>

    </div><br>
        </form>

        

    <div class="row">

            <form action="http://phoneshop.agran.info/cms/dashboard/edit_images/3" method="post" accept-charset="utf-8" enctype="multipart/form-data"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="228798172d0bc9da90359f400f7d3a88" />
</div>
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
            </form>

    </div>

        <form action="http://phoneshop.agran.info/cms/dashboard/edit_images/3" method="post" accept-charset="utf-8" id="main-image-choice"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="228798172d0bc9da90359f400f7d3a88" />
</div>

            
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Set Main Image</h2>
            </div>
        </div><br>

        <div class="row">
            <div class="col-sm-12">
                    <p><b>main image:</b></p>
                    <a href="http://phoneshop.agran.info/public/img/tablets/1.jpg/5.jpg/"
                       target="popup"
                       onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/1.jpg','1.jpg','width=800,height=600' )">
                        <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/1.jpg"
                             class="img img-responsive img-rounded" style="max-height: 120px;border:2px solid #2A2E2D;">
                    </a><br>

            </div>
            <div class="col-sm-12 table-responsive">
                <table class="table-main-image">
                    <tbody>
                    <tr>

                                                    <td >
                                <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/1.jpg/"
                                   target="popup" onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/1.jpg','1.jpg','width=800,height=600' )" >
                                    <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/1.jpg"
                                         class="img img-responsive" style="max-height: 100px;">
                                </a>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="1.jpg" data-id="3" value="1.jpg" name="main_radio"/>
                                    </label>
                                </div>
                            </td>
                                                    <td >
                                <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/2.jpg/"
                                   target="popup" onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/2.jpg','2.jpg','width=800,height=600' )" >
                                    <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/2.jpg"
                                         class="img img-responsive" style="max-height: 100px;">
                                </a>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="2.jpg" data-id="3" value="2.jpg" name="main_radio"/>
                                    </label>
                                </div>
                            </td>
                                                    <td >
                                <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/3.jpg/"
                                   target="popup" onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/3.jpg','3.jpg','width=800,height=600' )" >
                                    <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/3.jpg"
                                         class="img img-responsive" style="max-height: 100px;">
                                </a>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="3.jpg" data-id="3" value="3.jpg" name="main_radio"/>
                                    </label>
                                </div>
                            </td>
                                                    <td >
                                <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/4.jpg/"
                                   target="popup" onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/4.jpg','4.jpg','width=800,height=600' )" >
                                    <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/4.jpg"
                                         class="img img-responsive" style="max-height: 100px;">
                                </a>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="4.jpg" data-id="3" value="4.jpg" name="main_radio"/>
                                    </label>
                                </div>
                            </td>
                                                    <td >
                                <a href="http://phoneshop.agran.info/public/img/tablets/tablets-3/5.jpg/"
                                   target="popup" onclick="window.open('http://phoneshop.agran.info/public/img/tablets/tablets-3/5.jpg','5.jpg','width=800,height=600' )" >
                                    <img src="http://phoneshop.agran.info/public/img/tablets/tablets-3/5.jpg"
                                         class="img img-responsive" style="max-height: 100px;">
                                </a>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="5.jpg" data-id="3" value="5.jpg" name="main_radio"/>
                                    </label>
                                </div>
                            </td>
                        
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


        </form>


    
        <div class="row">
            <div class="col-sm-12"><br>
                <a href="http://phoneshop.agran.info/cms/dashboard/edit_product/3"><b>Edit Product</b></a>
            </div>
        </div>


<?php }} ?>
