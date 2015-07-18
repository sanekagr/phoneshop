
    <div class="row">
        <div class="col-sm-12">

            <h2 class="text-center">Edit Category - {$cat.name}</h2>

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
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">

             {$form.open}
                <br>

                <div class="form-group">
                    <label for="title">Name of category:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{if !$set_value.name}{$cat.name}{/if}{$set_value.name}" />
                </div>

                <div class="form-group">
                    <label for="cat_img">Image:</label>
                    <input type="file" class="form-control" name="userfile"  id="cat_img"/>
                </div>

                <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Category" />

            {$form.close}

            <br>
            <a href="{$url}cms/categories"><b>Back to all Categories</b></a>
        </div>
    </div>

