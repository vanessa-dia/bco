<? if (!isset($product)) echo '<h5 class="container font-Quicksand">Bạn chưa chọn sản phẩm</h5>'; else { ?>
    <div class="mx-auto row">
    <div class="col-sm-3">
        <img src="./asset/img/products/<?= $product['img'] ?>" alt="" class="img-fluid border shadow-sm">
    </div>
    <div class="col">
        <h5>Tên sản phẩm: <?= $product['name'] ?></h5>
        <p class="text-danger">Giá tiền: <?= $product['price'] ?></p>
        <p>Số lượng: <?= $product['amount'] ?></p>
        <p>Miêu tả: <?= $product['description'] ?></p>
        <p>Loại: <?= $product['type'] ?></p>
        <button class="btn btn-secondary" id="backListProducts">Quay lại</button>
    </div>
</div>
<? }?>
