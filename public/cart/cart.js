

// UPDATE
function updateCart(event) {
    event.preventDefault();
    let id = $(this).data('id');
    let quantity = $(this).parents('td').find('input.cart_quantity_input').val();
    let Url = $(this).data('url');

    $.ajax({
        type:'GET',
        url:Url,
        data:{id:id, quantity:quantity},
        success:function(data){
           if(data.code == 'success') {
               $('.wrapper').html(data.cartAfterUpdate);
           }
        }
     });
}

// DELETE
function deleteCart(event) {
    event.preventDefault();
    let id = $(this).data('id');
    let Url = $(this).data('url');

    $.ajax({
        type:'GET',
        url:Url,
        data:{id:id},
        success:function(data){
           if(data.code == 'success') {
               $('.wrapper').html(data.cartAfterUpdate);
           }
        }
     });
}

$(function() {
    $(document).on('change', '.cart_quantity_input', updateCart)

    $(document).on('click', '.cart_quantity_delete', deleteCart)
})