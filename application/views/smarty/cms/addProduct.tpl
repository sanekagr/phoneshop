
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Add Product</h1>

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


    <div class="row">

        {if !empty($categories)}

        {$form.open}

        <div class="col-xs-12 col-sm-12 col-md-4">
            <br>
            <div class="col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="cat_selection" id="cat_selection">
                        <option value="-1">Choose Category</option>
                        {foreach $categories as $cat}
                            <option value="{$cat.id}">{$cat.name}</option>
                        {/foreach}
                    </select>
                    <small>If you didn't make a category, <a  style="color:#0064cd" href="{$url}cms/categories/add_category/">add it here</a></small>
                </div>
            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{$set_value.title}" required />
                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-group">
                    <label for="userfile">Main Image:</label>
                    <input type="file" class="form-control" name="userfile[]" />
                    <small>This picture appears in the Home and Products pages</small>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="userfile[]">Images:</label>
                    <input type="file" class="form-control" name="userfile[]" multiple="multiple" />
                    <small>You can also add images in edit picture section</small>
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group ">
                    <label for="prod_price">Product price in $:</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price"
                           value="{$set_value.price}" required >
                </div>
            </div>

            <div class="col-sm-6">
                <div class="checkbox" style="position: relative; top:13px ;">
                    <label><input type="checkbox" name="visibility" checked >
                        <b>Present on site</b>
                    </label>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="col-sm-12">
                <div class="form-group ">
                    <label for="description">Product Description:</label>
                               <textarea class="form-control" id="description"
                                         name="description" style="border: 2px solid #222;">{$set_value.description}</textarea>
                    <small>You can add images and videos here only from external source</small>
                </div>
            </div>

        </div>

        <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Product"/>
            </div>
        </div>
        {$form.close}
        <div class="col-sm-4 col-sm-offset-4">
            <a href="{$url}cms/dashboard/"><b>Back to Products Management</b></a>
        </div>

        {else}
            <div class="col-sm-12 text-left">
                <h3 >You haven't any category yet, <a  style="color:#0064cd" href="{$url}cms/categories/add_category/">add it here</a> </h3>
            </div>
        {/if}
    </div>

