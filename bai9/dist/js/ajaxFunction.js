$( document ).ready(function() {
    // buoc 1
    $('.btnDelete').click(function () {
        var id = $(this).attr('data-id');
        var me =  $(this);

        $.ajax({
            url : '',
            type: 'POST',
            data: {
                action: 'DELETE',
                productID : id
            },
            success: function (res) {
                $('.product-'+id).remove();
            },
            error: function (res) {
            }
        });
    });

    $('#addBtn').click(function (){
        $('#modaladdnewpro').modal();
    })

    $('#btnSubmit').click(function(){


        let productname = $('#txt_proName').val();
        let productslug = $('#txt_proslug').val();
        let productstock = $('#txt_stock').val();
        let proPrice = $('#txt_proprice').val();
        let prosale = $('#txt_sale').val();
        let proposition = $('#txt_proposition').val();
        let category = $('#txt_category').val();
        let proUrl = $('#txt_Url').val();
        let proBrand = $('#txt_proBrand').val();
        let proVendor = $('#txt_proVendor').val();
        let usercreate = $('#txt_usercreate').val();

        // console.log(productname,productslug,proPrice,prosale,proposition,category,proUrl,proBrand,proVendor,usercreate);
        $.ajax({
            url:'model/addNewProduct.php',
            type: 'POST',
            data:{
                productname:productname,
                productslug:productslug,
                productstock:productstock,
                proPrice:proPrice,
                prosale:prosale,
                proposition:proposition,
                category:category,
                proUrl:proUrl,
                proBrand:proBrand,
                proVendor:proVendor,
                usercreate:usercreate,
            },
            success:function (data){
                alert(data);
                //reset lai gia tri cho cac o nhap textbox
                $('#txt_proName').val('');
                $('#txt_proslug').val('');
                $('#txt_stock').val('');
                $('#txt_proprice').val('');
                $('#txt_sale').val('');
                $('#txt_proposition').val('');
                $('#txt_category').val('');
                $('#txt_Url').val('');
                $('#txt_proBrand').val('');
                $('#txt_proVendor').val('');
                $('#txt_usercreate').val();
            },
            error: function (data) {
            }
        });
    });


});

