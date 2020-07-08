<?php
// include header.php file
include ('header.php');
?>
    <section id="product" class=" py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" id="SP_img">
                </div>
                <div class="col-sm-6 py-5" id="SP_P">

                </div>
                <div class="col-12" id="SP_D" style="margin:2.5rem 0rem">
                    <h6 class="font-baloo" style="text-shadow: black; font-size: 24px; font-style: initial ;">Giới thiệu</h6>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <?php
    // include footer.php file
    include ('footer.php');
    ?>
<script>
    window.onload = function() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get('id');
        // alert(id);
        $.ajax({
            type: "POST",
            url: "controller/chitiet.php",
            dataType: "json",
            data: {
                id: id
            },
            success: function(response) {
                console.log(response);
                html = "";
                // html += "<p>Chưa có thông tin</>";
                html += `<img src="${response.img}" alt="${response.Name}" class="img-fluid" style="position: relative;">`;

                $('#SP_img').html(html);
                html = "";
                html += `<h2 class="font-baloo">${response.Name} </h2>`;
                html += ` <small style="font-size:16px; font-style:italic"> by ${response.Brand}</small><hr class="m-0">`;
                html += `<table class="my-3"> <tbody><tr class="font-rale"style="font-size:18px;"><td>Giá gốc:</td><td><strike>$</strike></td></tr>`;
                html += `<tr class="font-rale"style="font-size:18px;"><td>Giá khuyến mãi:</td><td style="font-size:26px;"class="text-danger">$<span>${response.Price}</span><small class="text-dark font-size-12">&nbsp;&nbsp;Bao gồm VAT 10%</small></td></tr>`;
                html += `</tbody> </table>`;
                html += `<div id="policy"><div class="d-flex"><div class="return text-center"style="margin-right: 4rem !important;">`;
                html += `<div class="font-size-20 my-2 color-second"><span class="fas fa-retweet border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">10 ngày <br> đổi trả</a></div><div class="return text-center "style="margin-right: 4rem !important;"> <div class="font-size-20 my-2 color-second">`;
                html += `<span class="fas fa-truck  border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">Giao hàng <br>tận nơi</a> </div>`;
                html += `<div class="return text-center" style="margin-right: 4rem !important;">`;
                html += `<div class="font-size-20 my-2 color-second"><span class="fas fa-check-double border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">Bảo hành <br>1 năm</a></div></div></div>`;
                html += `<hr>`;
                html += '<div class="form-row pt-4 font-size-16 font-baloo">';
                html += '<div class="col"><button type="submit" class="btn btn-danger form-control">Mua ngay</button></div>';
                html += '<div class="col"><button type="submit" class="btn btn-warning form-control">Thêm vào giỏ</button></div> </div>';
                html += ``;
                $('#SP_P').html(html);
                html = "";
                html += `<p>${response.Des}</p>`;
                $('#SP_D').append(html);
            }
        });
    }
</script>