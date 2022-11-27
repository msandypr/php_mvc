$(function(){

    $('.insertDataButton').on('click', function(){
        $('#titleModal').html('Insert New Item Data');
    });


    $('.modalEdit').on('click', function(){
        $('#titleModal').html('Edit Item Data');
        $('.modal-footer button[type="submit"]').html('Save Changes');
        $('.modal-body form').attr('action', 'http://localhost/php_mvc/public/inventory/editData');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/php_mvc/public/inventory/getEdit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id').val(data.id);
                $('#item_name').val(data.item_name);
                $('#item_type').val(data.item_type);
                $('#quantity').val(data.quantity);
                $('#supplier').val(data.supplier);
            }
        });
    });

});