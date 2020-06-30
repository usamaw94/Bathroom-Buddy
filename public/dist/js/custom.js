$(document).on("click", ".edit-product-type", function(){

    var id=$(this).attr('data-id');
    var category=$(this).attr('data-category');
    var name=$(this).attr('data-name');
    var img=$(this).attr('data-img');

    $('#displayImg').attr('src',img);

    $('#prevImg').val(img);
    $('#productTypeId').val(id);
    $('#productTypeName').val(name);
    $('#productTypeCategory').val(category);
});

$(document).on("click", ".delete-product-type", function(){
    var id=$(this).attr('data-id');
    var img=$(this).attr('data-img');

    $('#productTypeDelId').val(id);
    $('#productTypeDelImg').val(img);
});

$("#deleteProductType").on("submit", function(e){
    e.preventDefault();

    var url="/deleteProductType";
    var data=$('#deleteProductType').serialize();

    $.ajax({
        url:url,
        method:"GET",
        data:data,
        processData: false,
        contentType: false,
        datatype:"json",
        success:function(data){
            $('#modalDeleteProductType').modal('toggle');
            $('#reloadSection').load("adminProductTypes #reloadSection");
        }
    });
    $('#deleteProductType').trigger("reset");
});



//---------------------------------------------------------


$(document).on("click", ".edit-product", function(){

    var id=$(this).attr('data-id');
    var code=$(this).attr('data-code');
    var name=$(this).attr('data-name');
    var type=$(this).attr('data-type');
    var desc=$(this).attr('data-desc');
    var img=$(this).attr('data-img');
    var price=$(this).attr('data-price');

    $('#displayImg').attr('src',img);

    $('#prevImg').val(img);
    $('#productId').val(id);
    $('#productCode').val(code);
    $('#productName').val(name);
    $('#productDesc').val(desc);
    $('#productType').val(type);
    $('#productPrice').val(price);
});


$(document).on("click", ".delete-product", function(){
    var id=$(this).attr('data-id');
    var img=$(this).attr('data-img');

    $('#productDelId').val(id);
    $('#productDelImg').val(img);
});

$("#deleteProduct").on("submit", function(e){
    e.preventDefault();

    var url="/deleteProduct";
    var data=$('#deleteProduct').serialize();

    $.ajax({
        url:url,
        method:"GET",
        data:data,
        processData: false,
        contentType: false,
        datatype:"json",
        success:function(data){
            $('#modalDeleteProduct').modal('toggle');
            $('#reloadSection').load("adminProducts #reloadSection");
        }
    });
    $('#deleteProduct').trigger("reset");
});


$(document).on("click", ".delete-gallery-img", function(){
    var id=$(this).attr('data-id');
    var img=$(this).attr('data-img');

    $('#galleryImgId').val(id);
    $('#galleryImg').val(img);
});


$("#deleteGalleryImg").on("submit", function(e){
    e.preventDefault();

    var url="/deleteGalleryImg";
    var data=$('#deleteGalleryImg').serialize();

    $.ajax({
        url:url,
        method:"GET",
        data:data,
        processData: false,
        contentType: false,
        datatype:"json",
        success:function(data){
            $('#modalDeleteGalleryImg').modal('toggle');
            $('#reloadSection').load("adminGallery #reloadSection");
        }
    });
    $('#deleteGalleryImg').trigger("reset");
});

$(document).on("click", ".view-order", function(){
    var id =$(this).attr('data-id');
    var cusName =$(this).attr('data-cus-name');
    var email =$(this).attr('data-cus-email');
    var phone =$(this).attr('data-cus-phone');
    var address =$(this).attr('data-cus-address');
    var postalCode =$(this).attr('data-cus-postcode');
    var state =$(this).attr('data-cus-state');
    var country =$(this).attr('data-cus-country');
    var date =$(this).attr('data-order-date');
    var time =$(this).attr('data-order-time');
    var total =$(this).attr('data-order-total-amount');
    var paymentId =$(this).attr('data-payment-id');
    var cart =$(this).attr('data-cart');

    var cartObj = JSON.parse(cart);

    $('#order_id').text(id);
    $('#cus_name').text(cusName);
    $('#cus_email').text(email);
    $('#cus_phone').text(phone);
    $('#cus_address').text(address);
    $('#cus_postcode').text(postalCode);
    $('#cus_state').text(state);
    $('#cus_country').text(country);
    $('#order_date').text(date);
    $('#order_time').text(time);
    $('#payment_id').text(paymentId);
    $('#order_total_amount').text(total);


    $("#order-cart").empty();

    $.each(cartObj, function(i, item) {


        var productCode = item.item.product_code;
        var productName = item.item.product_name;
        var productPrice = item.item.product_price;
        var quantity = item.qty;
        var subtTotal = item.price;

        var table = document.getElementById("order-cart");
        var row = table.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);

        cell1.innerHTML = productCode;
        cell2.innerHTML = productName;
        cell3.innerHTML = productPrice;
        cell4.innerHTML = quantity;
        cell5.innerHTML = subtTotal;
    });
});