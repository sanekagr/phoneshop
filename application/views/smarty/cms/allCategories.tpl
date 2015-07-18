

<div class="container">
    <div class="row">
        <h2>Edit Categories</h2><br>

        <div class="col-sm-12">
            <button class="btn btn-primary" onclick="window.location='{$url}cms/categories/add_category' "><i
                        class="fa fa-plus"></i> Add New Category
            </button>&nbsp;&nbsp;
            <button class="btn btn-info" onclick="window.location='{$url}cms/categories/categories_order' "><i
                        class="fa fa-pencil"></i> Categories Order
            </button>
        </div>
        {if isset($feedback)}
          <div class="col-sm-12 message-success">{$feedback}</div>
        {/if}
    </div>
    <br/>

    <div class="row">
        <div class="col-xs-12 col-sm-7">

            {if !empty($categories) and isset($categories)}

            <table class="table table-hover table-products">
                <tbody>
                {foreach $categories  as  $cat}
                    <tr>
                        <td class="col-xs-4"><a
                                    href="{$url}products/{$cat.machine_name}/">{$cat.name}</a>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-info" onclick="window.location='{$url}cms/categories/edit_category/{$cat.id}' "><i class="fa fa-pencil"></i> Edit</button>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-category-{$cat.id}"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            {include file="modal-delete.tpl" item=" {$cat.name} category with all the content (images, products)" data_id="{$cat.id}" id="modal-delete-category-{$cat.id}" class="delete-category"}
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>

            {else}
                <h2>No Categories</h2>
            {/if}

        </div>
    </div>
</div>
