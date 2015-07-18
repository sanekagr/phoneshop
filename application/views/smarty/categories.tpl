<div class="container">

    {if !empty($categories) }

        {foreach from=$categories item=item}

                <div class="col-xs-12 col-sm-6 col-md-4 text-center categories">
                    <div class="title">
                        <a href="{$url}products/{$item.machine_name}"><h3>{$item.name}</h3>
                    </div>
                                      <img class="img img-rounded" style="max-height: 250px; max-width: 300px;"  src="{$url}public/img/categories/{$item.image}"
                                           alt="{$item.image}" title="{$item.name}"/>
                    </a>

                </div>
        {/foreach}

    {else}
    <h1>No categories</h1>
    {/if}

</div>

