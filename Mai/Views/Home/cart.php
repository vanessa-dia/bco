<? if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
    <div class="col-sm-12 p-1">
        <table class="table table-pink text-center">
            <thead>
                <tr class="d-flex flex-row">
                    <th class="col-sm-1">#</th>
                    <th class="col">Tên sản phẩm</th>
                    <th class="col-sm-2">Hình</th>
                    <th class="col">Giá</th>
                    <th class="col">Số lượng</th>
                    <th class="col">Tổng tiền</th>
                    <th class="col-sm-1"></th>
                </tr>
            </thead>
            <tbody>
                <?
                    if (isset($_SESSION['cart'])) {
                        $count = 1;
                        foreach ($_SESSION['cart'] as $key => $cart) {
                            ?>
                        <tr class="d-flex flex-row itemCart" id=<?= $key ?>>
                            <td class="col-sm-1"><? echo $count;
                                                                $count += 1; ?></td>
                            <td class="col itemCart-name"><?= $cart['name'] ?></td>
                            <td class="col-sm-2"><img src="<?= $cart['img'] ?>" class="img-fluid"></td>
                            <td class="col itemCart-price"><?= $cart['price'] ?></td>
                            <td class="col"><input type="number" name="" id="" min=0 value="<?= $cart['amount'] ?>" class="itemCart-amount text-center form-control-sm border col-sm-6"></td>
                            <td class="col itemCart-money"><?= $cart['money'] ?></td>
                            <td class="col-sm-1"><a href="" class="delItemCart">X</a></th>
                        </tr>
                <? }
                    } else echo 'Chưa thêm sản phẩm nào' ?>
                <tr>
                    <td scope="7">
                        <h4 class="text-right text-danger" id="totalMoney">Tổng tiền: </h4>
                        <div class="text-right">
                            <button class="btn btn-orange shadow" id="btnCheckOut">Thanh toán</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<? } else echo '<div class="d-flex flex-row">
        <p>Bạn chưa thêm sản phẩm nào vào giỏ hàng</p>
        <a class="font-weight-bold" href="./home">Cửa hàng</a>
    </div> ' ?>
<div id="dialog" title="Thông báo!">
    <p></p>
</div>
<script>
    $(document).ready(function() {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            position: {
                at: "top"
            },
            show: {
                effect: "blind",
                duration: 400
            },
            hide: {
                effect: "fold",
                duration: 400
            }
        });
        tongtien();

        function tongtien() {
            $money = 0;
            $(".itemCart").each(function() {
                $amount = parseInt($(this).find(".itemCart-amount").val());
                $val = parseInt($(this).find(".itemCart-price").text().replace(".", ""))*$amount;
                $money += $val;
                $totalMoney = addCommas($val);
                $(this).find(".itemCart-money").text($totalMoney);
            })
            $money = addCommas($money);
            $("#totalMoney").text("Tổng tiền : " + $money);
        }

        function addCommas(nStr) {
            nStr += "";
            var x = nStr.split(".");
            var x1 = x[0];
            var x2 = x.length > 1 ? "." + x[1] : "";
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, "$1" + "." + "$2");
            }
            return x1 + x2;
        }
    })
</script>
