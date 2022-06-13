<!-- Modal -->
<div class="modal fade" id="modaladdnewpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center" id="exampleModalLabel">Add New Product</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="txt_proName">Product Name :</label>
                    <input type="text" id="txt_proName" class="form-control">

                    <label for="txt_proslug">Product Slug :</label>
                    <input type="text" id="txt_proslug" class="form-control">

                    <label for="txt_stock">Product Stock :</label>
                    <input type="text" id="txt_stock" class="form-control">

                    <label for="txt_proprice">Product price :</label>
                    <input type="text"  id="txt_proprice" class="form-control">

                    <label for="txt_sale">Sale :</label>
                    <input type="text"  id="txt_sale" class="form-control">

                    <label for="txt_proposition">position :</label>
                    <input type="text"  id="txt_proposition" class="form-control">

                    <label for="txt_category">category :</label>
                    <input type="text"  id="txt_category" class="form-control">

                    <label for="txt_Url">Product Url :</label>
                    <input type="text"  id="txt_Url" class="form-control">

                    <label for="txt_proBrand">Product Brand :</label>
                    <input type="text"  id="txt_proBrand" class="form-control">

                    <label for="txt_proVendor">Product Vendor :</label>
                    <input type="text"  id="txt_proVendor" class="form-control">

                    <label for="txt_usercreate">User :</label>
                    <input type="text"  id="txt_usercreate" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="btnSubmit">Add New</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
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
            }
        });
    });
</script>

