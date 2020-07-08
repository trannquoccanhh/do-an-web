<?php
// include header.php file
include ('header.php');
?>
        <div class="container">
            <div class="row">
                <div class="input-group mb-3" style="margin: 20px 5px;">
                    <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm" aria-label="Từ khóa tìm kiếm" aria-describedby="button-addon2" id="key">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="s-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>  Tìm kiếm                  
                </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="filters" class="button-group text-right font-baloo font-size-16">
                    <button class="btn is-checked" data-filter="*">All Brand</button>
                    <button class="btn" data-filter=".Apple">Apple</button><button class="btn" data-filter=".Redmi">Redmi</button><button class="btn" data-filter=".Samsung">Samsung</button> </div>
            </div>
            <div class="row" id="ProductList">
            </div>
        </div>
        <script src="js/Product.js"></script>
        
        <?php
// include footer.php file
include ('footer.php');
?>