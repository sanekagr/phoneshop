/**
 * js cms doc
 */


/*  clickToggle custom function    */
//http://stackoverflow.com/questions/4911577/jquery-click-toggle-between-two-functions
//func 1 - on , func 2 - off
(function($) {
    $.fn.clickToggle = function(func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function() {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };
}(jQuery));

/*  ------ UItoTop ------- */

$().UItoTop({easingType: 'easeOutQuart'});

// -------tooltip----------//

$('[data-toggle="tooltip"]').tooltip();


/*   ---------------- Settings of TinyMCI editor-------------------------- */

tinymce.init({
    selector: "textarea#description",
    theme: "modern",
    plugins: [
        "advlist autolink link image lists charmap hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualchars code insertdatetime media nonbreaking",
        "save table contextmenu directionality  template paste textcolor directionality"
    ],
    height: "280",
    toolbar: "undo redo | styleselect | fontselect |  fontsizeselect  forecolor backcolor | bold italic underline link | alignleft aligncenter alignright alignjustify | " +
    "ltr rtl bullist numlist outdent indent | ink image media ",
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt"

});

/*    ---------------------------------------------    */
/*    -------------      products     -----------      */
/*    ---------------------------------------------    */

/* -----------  delete-product ------------ */

$('.delete-product').one('click',function(){

    var id = $(this).data('id');
    console.log(id);
    var modal_name="#modal-delete-product-"+id;

    $.ajax({
        url: CI_ROOT + "cms/dashboard/delete_product",
        method: "GET",
        dataType: "html",
        data:{id: id},
        success: function (data) {

            $('.modal-body').html('<h2>'+data+'</h2>').css({'color':'green'});

            $(modal_name).on('hide.bs.modal', function (e) {
                //after closing the modal ->reload
                location.reload();
            });

            setTimeout(function(){
                location.reload();
            },3000);
        }
    });

});


/*    ---------------------------------------------    */
/*    -------------      categories     -----------    */
/*    ---------------------------------------------    */

/* ------------  selection of category --------------  */

$("#selection").on('change', function () {
    var cat_id=$('#selection').val();
    //console.log(cat_id);
    window.location=CI_ROOT+'cms/dashboard/show_products/'+cat_id;
});


/* -----------  delete-category ------------ */

$('.delete-category').on('click',function(){

    var id = $(this).data('id');
    console.log(id);

    $.ajax({
        url: CI_ROOT + "cms/categories/delete_category",
        method: "GET",
        dataType: "html",
        data:{id: id},
        success: function (data) {
            location.reload();

        }
    });

});


/*    ---------------------------------------------    */
/*    -------------  orders and messages -----------   */
/*    ---------------------------------------------    */


/*  ------ delete orders  -------- */

$('.delete-order').on('click',function(){
    var id = $(this).data('id');

    $.ajax({
        url: CI_ROOT + "cms/dashboard/delete_table_data",
        method: "GET",
        dataType: "html",
        data: {id: id,table:'orders'},
        success: function (data) {
            location.reload();
        }
    });

});

/*  --------- delete  messages ------------  */

$('.delete-message').on('click',function(){
    var id = $(this).data('id');

    $.ajax({
        url: CI_ROOT + "cms/dashboard/delete_table_data",
        method: "GET",
        dataType: "html",
        data: {id: id,table:'contact_log'},
        success: function (data) {
            location.reload();
        }
    });

});


/* -------- increase table row height on click and decrease ------- */

$('.order-details').hide();
$('table.table-orders>tbody>tr').on('click',function(){
    $(this).find('td>div>ul.order-details').slideToggle();;
});


/*    -------    messages table height growth on click     -------   */

$('table.table-messages>tbody>tr').clickToggle(
    function(){
        $(this).find('td>div').css({'height':'auto','color':'#222'});
    },
    function(){
        $(this).find('td>div').css({'height':'30px','color':'#909090'});
    }
);

/*    -------    choose main image form     -------   */

$('#main-image-choice').submit(function(){

    var radio_value=$('input:radio[name=main_radio]:checked').val();
    var id=$('input[type=radio]').data('id');

    var form_data = {
        csrf_test_name:$("input[name=csrf_test_name]").val(),
        main_radio: radio_value,
        id: id
    };
    console.log(form_data);

    if(radio_value) {

        $.ajax({
            url: CI_ROOT + "cms/dashboard/choose_main_image/",
            method: "post",
            dataType: "json",
            data: form_data,
            success: function (data) {
                console.log(data);
                if (data == true) {
                    location.reload();
                }
            }

        });
    }

    return false;

});

