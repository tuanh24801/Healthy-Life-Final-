$(document).ready(function(){

$('.btnxoabaiviet').click(function(){
    var idbv = $(this).closest("tr").find("#idbv").val();
    swal({
        title: "Xóa bài viết",
        text: "Bài viết đã xóa không thể khổi phục",
        icon: "warning",
        dangerMode: true,
        buttons: {
            cancel: "Hủy",
            catch: {
                text: "Xác nhận",
                value: "catch",
            },
            
        },
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            $.post(
                '../../Process/Admin/xoabaiviet.php', 
            {
                idbv: idbv,
                delete_btn_set: 1
            },function(data){
                
                swal("Đã xóa bài viết",{
                    icon:"success",
                }).then((result) =>{
                    location.reload();
                })
            });
        }
        
        });
    });

})