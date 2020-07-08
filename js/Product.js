function returnproduct(key) {
    $.ajax({
        type: "POST",
        url: "controller/product.php",
        dataType: "json",
        data: {
            key: key
        },
        success: function(response) {
            //console.log(response);
            html = "";
            if (response.length == 0) {
                html += `<span style = "margin: auto;">Không có Sản phẩm phù hợp</span>`;
            } else {
                for (value of response) {
                    html += `<div class="col-3 >`;
                    html += '<div class = "item" style = "margin: auto; max-width: 250px; min-width: 125px;margin-bottom:20px;">';
                    html += '<div class = "product font-rale "  >';
                    html += `<a href="chitiet-page.php?id=${value.ID}"><img src="${value.img} " alt="${value.ID}" class="img-fluid " onMouseOver="this.style='transform:scale(1.15,1.15)'" onMouseOut="this.style='transform:scale(1,1)'"></a>`;
                    html += `<div class="text-center " > <h6 style="height:38.400px;margin-top: 15px;">${value.Name}</h6>`;
                    html += '<div class="rating text-warning font-size-12 "> <span><i class="fas fa-star "></i></span> <span><i class="fas fa-star "></i></span> <span><i class="fas fa-star "></i></span><span><i class="fas fa-star "></i></span><span><i class="far fa-star "></i></span>';
                    html += `</div><div class="price py-2 "><span>${value.Price}</span></div> <button type="submit " class="btn btn-warning font-size-12 ">Thêm vào giỏ hàng</button></div> </div> </div></div>`;
                }
            }
            $('#ProductList').html(html);
        }
    });
}
// $(document).ready(function() {
//     //sử dụng autocomplete với input có id = key
//     $("input#key").autocomplete({
//         source: 'search.php', //link xử lý dữ liệu tìm kiếm
//     })
// });
$(document).ready(function() {
    var key = "";
    returnproduct(key);
});
$('#s-btn').click(function() {
    var key = $('#key').val();
    returnproduct(key);
});