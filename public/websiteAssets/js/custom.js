/**
 * Created by Haier on 2/15/2019.
 */

$(document).on("click", "#addToCart", function(){
    var id=$(this).attr('data-id');

    var url = "/addToCart/"+id;
    var current =$(this);

    var updateUrl = "/productDetails/"+id

    $.ajax({
        url:url,
        data:id,
        datatype:"json",
        method:"GET",
        success:function(data){

            if(data == 'success') {
                $('#updateCart').load(updateUrl+" #updateCart");
            }
        }
    });
});

$(document).on("click", "#addToCartOnCart", function(){
    var id=$(this).attr('data-id');

    var url = "/addToCart/"+id;
    var current =$(this);

    var updateUrl = "/cart";

    $.ajax({
        url:url,
        data:id,
        datatype:"json",
        method:"GET",
        success:function(data){

            if(data == 'success') {
                $('#updateCart').load(updateUrl+" #updateCart");
                $('#reloadCart').load(updateUrl+" #reloadCart");
            }
        }
    });
});

$(document).on("click", "#removeItem", function(){
    var id=$(this).attr('data-id');

    var url = "/getRemoveItem/"+id;
    var current =$(this);

    var updateUrl = "/cart";

    $.ajax({
        url:url,
        data:id,
        datatype:"json",
        method:"GET",
        success:function(data){

            if(data == 'success') {
                $('#fullWrap').load(updateUrl+" #fullWrap");
                //$('#reloadCart').load(updateUrl+" #reloadCart");
            }
        }
    });
});


$(document).on("click", "#ReduceByOne", function(){
    var id=$(this).attr('data-id');

    var url = "/getReduceByOne/"+id;
    var current =$(this);

    var updateUrl = "/cart";

    $.ajax({
        url:url,
        data:id,
        datatype:"json",
        method:"GET",
        success:function(data){

            if(data == 'success') {
                $('#fullWrap').load(updateUrl+" #fullWrap");
                //$('#reloadCart').load(updateUrl+" #reloadCart");
            }
        }
    });
});