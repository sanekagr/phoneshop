

    <div class="row">

        {if isset($validation_errors)}
            <div class="error-display  text-center">{$validation_errors}</div>
            <div class="text-center">
                <button role="link" class="link" onclick="history.go(-1) "><h3>Back</h3></button>
            </div>
        {/if}
    </div>

    {if !empty($search_results) }

            {if isset($search_input)}
                <div class="row">
                    <h2>Search results for "<span style="color: coral">{$search_input}</span>"</h2>
                </div>
                <hr>
            {/if}

        {foreach $search_results as $res}

            <div class="row result" title="If you can't see all description hover over it">

                <div class="col-sm-12">
                    <a href="{$url}products/{$res.cat_name}/{$res.machine_name}/"><h3>{$res.title} - {$res.price}$</h3></a>
                </div>

                <div class="description col-sm-9">
                    {$res.description}
                </div>
                <div class="col-sm-3">
                    <a href="{$url}products/{$res.cat_name}/{$res.machine_name}/"><img class="img img-rounded"
                         src="{$url}public/img/{$res.cat_name}/{$res.machine_name}/{$res.main_image}"
                         alt="{$res.title}" title="{$res.title}"/></a>
                </div>

            </div>
            <hr>
        {/foreach}
        <div class="row">

           <div class="text-center col-sm-12">
                <button role="link" class="link" onclick="history.go(-1) "><h3>Back</h3></button
           </div>

        </div>

    {else}
        <div class="col-sm-12">
            {if isset($search_input)}
               <h2 class="text-center"><i>Sorry. No Results for "<span style="color: coral">{$search_input}</span>"</i></h2>
            {/if}
            <div class="text-center">
                <button role="link" class="link" onclick="history.go(-1) "><h3>Back</h3></button>
            </div>
        </div>
    {/if}


