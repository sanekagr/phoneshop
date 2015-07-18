<div class="container">

    <div class="row">

        <div class="col-sm-12"><h1>Product Management</h1><br></div>

    </div>

        {*  ---------------  buttons --------------------- *}

    <div class="row">

        <div class="col-xs-12 col-sm-12">

                <button class="btn btn-primary" onclick="window.location='{$url}cms/dashboard/add_product/' ">
                    <i class="fa fa-plus"></i> Add new product
                </button>&nbsp;&nbsp;&nbsp;

                <button class="btn btn-info" onclick="window.location='{$url}cms/categories/' "><i class="fa fa-pencil"></i> Edit Categories
                </button>&nbsp;&nbsp;&nbsp;

                <button class="btn btn-default" onclick="window.location='{$url}cms/dashboard/database_backup/' "><i class="fa fa-download"></i> Database Backup
                </button>

        </div>

    </div>{*/.row*} <br>


    <div class="row">

        {* ----------------  categories choose ---------- *}

        <div class="col-xs-12 col-sm-6">
            <select class="form-control pull-left" name="selection" id="selection" style="border: 1px #222 solid">
                <option value="-1">Choose Category</option>
                <option value="0">All Categories</option>
                {foreach $categories as $cat}
                    <option value="{$cat.id}">{$cat.name}</option>
                {/foreach}
            </select>
        </div>
        <br class="visible-xs-inline-block">
        <br class="visible-xs-inline-block">

        {*  ------------------ search ------------------- *}

        <div class="col-xs-12 col-sm-6 ">

            {$form.open}
            <div class="input-group">

               <input type="text" class="form-control" placeholder="Search product" name="product-search"  minlength=2 required style="border: 1px #222 solid" >

               <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="submit" style="border: 1px #222 solid">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  </button>
               </span>

            </div><!-- /input-group -->
            {if isset($validation_errors)}
                <small style="color: red">{$validation_errors}</small>
             {/if}
            {$form.close}

        </div>

     </div>{*/.row*}


    <div class="row">

        {* --------------  search results ------------------ *}

        {if isset($search_results) }

            <div class="col-xs-12 col-sm-6 "><br>
                <h3>Search results:</h3>

                    {foreach $search_results  as  $item}
                        <table class="table table-hover table-condensed table-products">
                            <tbody>
                            <tr>
                                <td class="col-xs-5">
                                    <a href="{$url}products/{$item.cat_name}/{$item.machine_name}">{$item.title}</a>
                                </td>
                                <td class="col-xs-1">
                                    <button class="btn btn-info pull-right" onclick="window.location='{$url}cms/dashboard/edit_product/{$item.id}' "><i class="fa fa-pencil"></i> Edit</button>
                                </td>
                                <td class="col-xs-1">
                                    <button class="btn btn-danger pull-right" data-toggle="modal"
                                            data-target="#modal-delete-product-{$item.id}"><i class="fa fa-trash-o" ></i> Delete
                                    </button>
                                    {include file="modal-delete.tpl" item=" {$item.title} with the content"
                                    data_id="{$item.id}" id="modal-delete-product-{$item.id}" class="delete-product"}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    {foreachelse}

                       <b><i>No search results</i></b>

                    {/foreach}
            </div>
            <div class="col-sm-12"><hr></div>
        {else}

        {/if}


        {* --------------  table of products  --------------- *}


        {if isset($products)}

        {foreach $products as  $cat}

            <div class="col-xs-12 col-sm-6">

                <h3 style="color: #264780; font-weight: 600;">{$cat.name}</h3><br>
                <table class="table table-hover table-condensed table-products">
                    <tbody>
                    {foreach $cat.items  as  $item}
                        <tr>
                            <td class="col-xs-4"><a
                                        href="{$url}products/{$cat.machine_name}/{$item.machine_name}">{$item.title}</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='{$url}cms/dashboard/edit_product/{$item.id}' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-{$item.id}"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                {include file="modal-delete.tpl" item=" {$item.title} with the content"
                                data_id="{$item.id}" id="modal-delete-product-{$item.id}" class="delete-product"}
                            </td>
                        </tr>
                        {foreachelse}
                        <tr>
                            <td><h4>No products in category</h4></td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>

            </div>


        {/foreach}
       {*</div>*}{*/.col-sm-7*}

        {else}
            <h1>No products </h1>
        {/if}


    </div>
    <!--/.row-->
</div>