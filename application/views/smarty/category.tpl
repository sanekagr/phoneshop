<div class="container">
    
    <div class="row category_cart">
        <h2 style="font-weight: 600;color:#0e3372;">Our {$category[0].name}</h2>
    </div>

    <div class="row"><br>

        {foreach from=$category item=prod}

            <div class="col-xs-12 col-sm-6 col-md-3 product_cart">

                <div class="title">
                    <a href="{$url}products/{$prod.cat_machine}/{$prod.machine_name}"><h4
                                class="text-center"><b>{$prod.title}</b></h4></a>
                </div>
                <a href="{$url}products/{$prod.cat_machine}/{$prod.machine_name}">
                    <img class="center-block img-rounded"
                         src="{$url}public/img/{$prod.cat_machine}/{$prod.machine_name}/{$prod.main_image}"
                         alt="{$prod.title}" />
                </a>

                <h4>{$prod.price}$</h4>
                <button class="btn btn-primary btn-sm add-to-cart" data-id="{$prod.id}" >Add to cart <i class="fa fa-cart-plus"></i></button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{$url}products/{$prod.cat_machine}/{$prod.machine_name}">
                    <button class="btn btn-primary btn-sm hidden-sm hidden-xs pull-right">Read more</button>
                </a>

            </div>

            {foreachelse}

                <h1><i>No Products in this category!</i></h1>

        {/foreach}
    </div>
    
</div>


