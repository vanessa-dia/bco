<div class="col-sm-8 bg-info rounded m-2 d-flex flex-column mx-auto p-2 orderDetail" id='<?= $value['id'] ?>'>
    <div class="d-flex flex-row col-sm-12">
        <p class="col-sm-5 mr-2 my-auto text-warning">Ngày mua : <span class="font-weight-bold text-white"><?= $value['created'] ?></span></p>
        <p class="col-sm-4 my-auto text-white">KH : <?= $value['customer'] ?></p>
        <p class="col-sm-3 my-auto text-warning">Tổng tiền <span class="font-weight-bold text-white"><?= number_format($value['totalMoney'], 0, '', '.') ?></span></p>
    </div>
    <div class="d-flex flex-row col-sm-12">
        <p class="col-sm-5 mr-2 my-auto text-warning">Tên người nhận : <span class="font-weight-bold text-white"><?= $value['fullName'] ?></span></p>
        <p class="col-sm-5 mr-2 my-auto text-warning">SDT : <span class="font-weight-bold text-white"><?= $value['phone'] ?></span></p>
    </div>
    <div class="d-flex flex-row col-sm-12">
        <p class="col-sm-5 mr-2 my-auto text-warning">Địa chỉ : <span class="font-weight-bold text-white"><?= $value['address'] ?></span></p>
    </div>
</div>