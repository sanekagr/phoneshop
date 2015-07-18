
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center ">Add/Delete Pictures</h1><br>

            {* ---------------- messages divs  ----------------- *}

            {if $message.flashdata}
                <div class="message-success  text-center">{$message.flashdata}</div>
            {/if}
            {if $message.error}
                <div class="error-display  text-center">{$message.error}</div>
            {/if}
            {if isset($validation_errors)}
                <div class="error-display  text-center">{$validation_errors}</div>
            {/if}

        </div>

    </div> {* /.row*}

    {if isset($images) and !empty($images)}

    {$form.open}

    <div class="row">

        {* ---------------- Delete images ---------------  *}



        {*  thumbnails *}

            {foreach $images as $img}

            <div class="col-xs-4 col-md-3 col-lg-2">
                <div class="thumbnail">

                    <a href="{$url}public/img/{$product.cat_name}/{$product.machine_name}/{$img}" target="popup"
                       onclick="window.open('{$url}public/img/{$product.cat_name}/{$product.machine_name}/{$img}','{$img}','width=800,height=600' )">
                        <img src="{$url}public/img/{$product.cat_name}/{$product.machine_name}/{$img}"
                    class="img img-responsive img-rounded"   style="max-height: 140px;">
                    </a>

                    <div class="caption">
                        <div class="checkbox" >
                            <label>
                                <input type="checkbox" name="{$img}">
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            {/foreach}
    </div>

    <div class="row">

        <div class="col-sm-12">
            <button role="submit" name="delete-submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete Pictures</button>
        </div>

    </div><br>
        {$form.close}

        {* ---------------- Add images ---------------  *}

    <div class="row">

            {$form.open}
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
            {$form.close}

    </div>

        {$form2.open}

            {* ---------------- Set Main Image ---------------  *}
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Set Main Image</h2>
            </div>
        </div><br>

        <div class="row">
            <div class="col-sm-12">
                    <p><b>main image:</b></p>
                    <a href="{$url}public/img/{$product.cat_name}/{$product.main_image}/{$img}/"
                       target="popup"
                       onclick="window.open('{$url}public/img/{$product.cat_name}/{$product.machine_name}/{$product.main_image}','{$product.main_image}','width=800,height=600' )">
                        <img src="{$url}public/img/{$product.cat_name}/{$product.machine_name}/{$product.main_image}"
                             class="img img-responsive img-rounded" style="max-height: 120px;border:2px solid #2A2E2D;">
                    </a><br>

            </div>
            <div class="col-sm-12 table-responsive">
                <table class="table-main-image">
                    <tbody>
                    <tr>

                        {foreach $images as $img}
                            <td >
                                <a href="{$url}public/img/{$product.cat_name}/{$product.machine_name}/{$img}/"
                                   target="popup" onclick="window.open('{$url}public/img/{$product.cat_name}/{$product.machine_name}/{$img}','{$img}','width=800,height=600' )" >
                                    <img src="{$url}public/img/{$product.cat_name}/{$product.machine_name}/{$img}"
                                         class="img img-responsive" style="max-height: 100px;">
                                </a>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="{$img}" data-id="{$product.id}" value="{$img}" name="main_radio"/>
                                    </label>
                                </div>
                            </td>
                        {/foreach}

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


        {$form2.close}


    {else}

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="text-danger"> This product hasn't pictures</h2>
            </div>
        </div><br>

        {* ---------------- Add images ------------------------  *}

         <div class="row" >

             {$form.open}
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
             {$form.close}

        </div>

    {/if}

        <div class="row">
            <div class="col-sm-12"><br>
                <a href="{$url}cms/dashboard/edit_product/{$product.id}"><b>Edit Product</b></a>
            </div>
        </div>


