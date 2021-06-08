
    <div class="border rounded col-sm-6 mx-auto p-2">
        <form id="formTinhTien">
            <h5 class="text-center">Nhập thông tin nhận hàng</h5>
            <div class="form-group">
                <label for="userName-signin">Tên nguòi nhận</label>
                <input type="text" class="form-control inputCheckOut" name="fullName" value="<?= $_SESSION['user']['fullName'] ?>">
            </div>
            <div class="form-group">
                <label for="userName-signin">Địa chỉ</label>
                <input type="text" class="form-control inputCheckOut" name="address" value="<?= $_SESSION['user']['address'] ?>">
            </div>
            <div class="form-group">
                <label for="userName-signin">Số điện thoại</label>
                <input type="text" class="form-control inputCheckOut" name="phone" value="<?= $_SESSION['user']['phone'] ?>">
            </div>
        </form>
        <div class="d-flex flex-row">
            <button class="btn btn-orange ml-auto" id="thanhtoan">Thanh toán</button>
        </div>
    </div>