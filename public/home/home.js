function add_toCart(event) {
    event.preventDefault();
    let Url = $(this).data('url');

    $.ajax({
        type:'GET',
        url: Url,
        success:function(data){
           if(data.code == 'success') {
               
            Swal.fire(
               'Sản phẩm đã được thêm vào giỏ hàng',
            )
           }
        }
     });
}


function add_toDetail(event) {
    event.preventDefault();
    let Url = $(this).data('url');
    let quantity = $(this).parents('span.quantity').find('input.quantity-value').val();

    $.ajax({
        type:'GET',
        url: Url,
        data:{quantity:quantity},
        success:function(data){
           if(data.code == 'success') {

            Swal.fire(
               'Sản phẩm đã được thêm vào giỏ hàng',
            )
           }
        }
     });
}


$(function() {
    $(document).on('click', '.add-to-cart', add_toCart)

    $(document).on('click', '.add-to-detail', add_toDetail)
})