
    <div class="row">

        <div class="col-sm-12">
            <h1 class="text-center">Edit Product</h1>

            {* ---------------- messages divs  ----------------- *}

            {if $message.flashdata}
                <div class="message-success  text-center">{$message.flashdata}</div>
            {/if}
            {if $message.flashdata-error}
                <div class="error-display  text-center">{$message.flashdata-error}</div>
            {/if}
            {if isset($validation_errors)}
                <div class="error-display  text-center">{$validation_errors}</div>
            {/if}

        </div>


    </div>

    {if isset($categories) and !empty($categories) and isset($old_value)}


    <div class="row">

        <div class="col-sm-8 col-sm-offset-4">
            <div class="btn-group" role="group">
                <button class="btn btn-default btn-lg" onclick="window.location='{$url}cms/dashboard/edit_images/{$old_value.id}' ">
                    <i class="fa fa-picture-o"></i> Delete or Add Pictures
                </button>
                <button class="btn btn-default btn-lg" onclick="window.location='{$url}cms/dashboard/products_order/{$old_value.categorie_id}' ">
                    Products order
                </button>
            </div><br>
            <small>Save changes (if you need) before you leave this page</small>
        </div>

        {*    ------------------------    Description   -------------------------   *}
        {$form.open}

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="description">Product Description:</label>
                               <textarea class="form-control" id="description"
                                         name="description" >
                                   {if !$set_value.description or !isset($set_value)  or empty($set_value)}
                                       {$old_value.description}
                                   {/if}
                                   {$set_value.description}
                               </textarea>
                    <small>You can add images and videos here only from external source</small>
                </div>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-5">

            <div class="col-sm-12"><br><br>
                <div class="form-group">
                    <select class="form-control" name="cat_change" id="cat_change">
                        <option value="-1">Change Category</option>
                        {foreach $categories as $cat}
                            <option value="{$cat.id}">{$cat.name}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control"
                           value="{if !$set_value.title or !isset($set_value) or empty($set_value)}{$old_value.title}{/if}{$set_value.title}" required />
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group ">
                    <label for="prod_price">Product price in $:</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price"
                           value="{if !$set_value.price or !isset($set_value) or empty($set_value)}{$old_value.price}{/if}{$set_value.price}" required >
                </div>
            </div>

            <div class="col-sm-6">
                <div class="checkbox" style="position: relative; top:13px ;">
                    <label><input type="checkbox" name="visibility" checked >
                        <b>Present on site</b>
                    </label>
                </div><br><br>
            </div>

            <div class="col-sm-12 ">
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Product"/>
                </div>
                <a href="{$url}cms/dashboard/"><b>Back to Products Management</b></a>
            </div>

        </div>

        {$form.close}

        {else}

        {/if}
    </div>


