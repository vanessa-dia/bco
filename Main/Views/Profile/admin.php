<div class="min-vh-100 row p-0 m-0 font-Quicksand">
    <!-- Hồ sơ -->
    <div class="rounded shadow col-sm-3">
        <div class="sticky-top">
            <form id="form-profile" class="">
                <h5 class="text-center">Hồ sơ</h5>
                <div class="row p-1">
                    <label for="userName-signin" class="col-sm-4">Họ và tên</label>
                    <input type="text" class="input-profile form-control-sm border col" id="fullName-profile" name="fullName" value="<?= $_SESSION['user']['fullName'] ?>" disabled>
                </div>
                <div class="row p-1">
                    <label for="userName-signin" class="col-sm-4">Email</label>
                    <input type="text" class="input-profile form-control-sm border col" id="email-profile" name="email" value="<?= $_SESSION['user']['email'] ?>" disabled>
                </div>
                <div class="row p-1">
                    <label for="userName-signin" class="col-sm-4">Số điện thoại</label>
                    <input type="text" class="input-profile form-control-sm border col" id="phone-profile" name="phone" value="<?= $_SESSION['user']['phone'] ?>" disabled>
                </div>
                <div class="row p-1">
                    <label for="userName-signin" class="col-sm-4">Địa chỉ</label>
                    <input type="text" class="input-profile form-control-sm border col" id="address-profile" name="address" value="<?= $_SESSION['user']['address'] ?>" disabled>
                </div>
                <div class="row p-1">
                    <label for="userName-signin" class="col-sm-4">Ngày sinh</label>
                    <input type="text" class="input-profile form-control-sm border col input-date" id="birth-profile" name="birth" value="<?= $_SESSION['user']['birth'] ?>" disabled>
                </div>
            </form>
            <div class="row p-1">
                <div class="ml-auto">
                    <button class="btn btn-sm btn-primary" id="edit-profile">Chỉnh sửa</button>
                    <button class="btn btn-sm btn-success" id="save-profile">Save</button>
                </div>
            </div>

            <hr>
            <h5 class="text-center">Quản trị viên</h5>
            <div class="nav d-flex flex-column">
                <a href="#orders" class="nav-item nav-link nav-admin text-dark border rounded m-2" data-toggle="tab" role="tab" id="nav-listOrders-tab">
                    Hóa đơn của khách <i class="fas fa-money-check-alt"></i>
                </a>
                <a href="#listProduct" class="nav-item nav-link nav-admin text-dark border rounded m-2" data-toggle="tab" role="tab" id="nav-listProduct-tab">
                    Danh sách sản phẩm <i class="fas fa-store"></i>
                </a>
                <a href="#addProduct" class="nav-item nav-link nav-admin text-dark border rounded m-2" data-toggle="tab" role="tab" id="nav-addProduct-tab">
                    Thêm sản phẩm <i class="fas fa-cart-plus"></i>
                </a>
                <a href="#addType" class="nav-item nav-link nav-admin text-dark border rounded m-2" data-toggle="tab" role="tab" id="nav-addType-tab">
                    Thêm loại sản phẩm <i class="fas fa-list"></i>
                </a>
                <a href="#editProduct" class="nav-item nav-link nav-admin text-dark border rounded m-2" data-toggle="tab" role="tab" id="nav-editProduct-tab">
                    Sửa sản phẩm <i class="fas fa-edit"></i>
                </a>

            </div>
        </div>
    </div>

    <div class="col">
        <div class="tab-content" id="nav-tabContent">
            <!-- Load sản phẩm -->
            <div class="tab-pane fade show " role="tabpanel" id="listProduct">
                <!-- Tìm kiếm -->
                <div class="mx-auto col-sm-4 p-2 m-3 border-rounded" id="formSearchAdmin">
                    <h5 class="text-center">Tìm kiếm</h5>
                    <div class="form-group">
                        <select name="typeProduct-show" id="typeProduct-show" class="form-control">
                            <option hidden value="">Chọn loại sản phẩm - Tất cả</option>
                            <option value="all">Tất cả</option>
                            <? foreach ($allType as $value) { ?>
                                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                            <? } ?>
                        </select>
                    </div>
                    <input type="text" class="form-control" placeholder="Tìm theo tên sản phẩm">
                </div>
                <div id="product-content" class="row">
                    <? foreach ($allProduct as $val) { ?>
                        <div class="col-sm-2 col-4 p-1 product-item" id="<?= $val['id'] ?>">
                            <div class="card h-100 p-2  shadow product">
                                <div class="item">
                                    <div class="overflow-hidden">
                                        <img src="asset/img/products/<?= $val['img'] ?>" class="card-img-top" alt="...">
                                    </div>
                                    <h6 class="card-title font-weight-bold product-name"><?= $val['name'] ?></h6>
                                </div>
                                <div class="mt-auto">
                                    <p class="text-left text-danger font-weight-bold product-price"><?= number_format($val['price'], 0, '', '.') ?></p>
                                    <a class="btn btn-sm btn-secondary btn-deleteProduct"><span class="ui-icon ui-icon-trash"></span>Xóa</a>
                                    <a class="btn btn-sm btn-primary text-white btn-editProduct"><span class="ui-icon ui-icon-pencil"></span>Sửa</a>
                                </div>
                            </div>
                        </div>
                    <? } ?>

                </div>
            </div>
            <!-- Thêm sản phẩm -->
            <div class="tab-pane fade" role="tabpanel" id="addProduct">
                <div class="w-50 mx-auto">
                    <h5 class="text-center">Thêm sản phẩm</h5>
                    <form action="" id="addProductForm" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label for="nameProduct">Tên sản phẩm <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm inputRequire" name="nameProduct" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Loại sản phẩm <span class="text-danger">*</span></label>
                            <select name="typeProduct" id="" class="form-control shadow-sm inputRequire">
                                <option hidden value="">Chọn loại sản phẩm</option>
                                <? foreach ($allType as $value) { ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                <? } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá <span class="text-danger">*</span></label>
                            <input type="text" data-type="currency" class="form-control shadow-sm inputRequire" name="priceProduct" placeholder="Giá sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Số lượng <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm inputRequire" name="amountProduct" placeholder="Số lượng">
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh <span class="text-danger">*</span></label>
                            <input type="file" class="form-control shadow-sm inputRequire" name="imgProduct" id="imgProduct-upload">
                        </div>
                        <div class="form-group">
                            <label>Miêu tả</label>
                            <textarea name="desProduct" rows="3" class="form-control shadow-sm"></textarea>
                        </div>
                        <div class="text-right p-2">
                            <input type="submit" name="submit" value="Thêm" class="btn btn-success shadow-sm" id="addProductBtn">
                        </div>
                    </form>
                </div>
            </div>
            <!-- Thêm loại -->
            <div class="tab-pane fade" role="tabpanel" id="addType">
                <div class="w-50 mx-auto">
                    <h5 class="text-center">Thêm loại</h5>
                    <form id="addTypeForm">
                        <div class="form-group">
                            <label for="typeProduct">Tên loại</label>
                            <input type="text" class="form-control" name="typeProduct" placeholder="Nhập tên loại sản phẩm">
                        </div>
                    </form>
                    <div class="text-right p-2">
                        <button class="btn btn-success" id="addTypetBtn">Thêm</button>
                    </div>
                </div>
            </div>
            <!-- Sửa sản phẩm -->
            <div class="tab-pane fade" role="tabpanel" id="editProduct">
                <h5 class="text-center mt-3">Sửa sản phẩm</h5>
                <div class="row productEdit">
                    <form class="col-sm-6 mx-auto" id="formEditProduct">
                        <div class="row mt-3 d-none">
                            <label for="">Mã sản phẩm</label>
                            <input type="text" class="form-control shadow-sm" name="id">
                        </div>
                        <div class="row mt-3">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control shadow-sm" name="name">
                        </div>
                        <div class="row mt-3">
                            <label for="">Giá</label>
                            <input type="text" class="form-control shadow-sm" name="price">
                        </div>
                        <div class="row mt-3">
                            <label for="">Số lượng</label>
                            <input type="number" class="form-control shadow-sm" name="amount">
                        </div>
                        <div class="row mt-3">
                            <label for="">Miêu tả</label>
                            <textarea name="description" id="" rows="3" class="form-control shadow-sm"></textarea>
                        </div>
                        <div class="row mt-3">
                            <label for="typeProduct">Loại sản phẩm</label>
                            <select name="idType" id="" class="form-control shadow-sm">
                                <option hidden value="">Chọn loại sản phẩm</option>
                                <? foreach ($allType as $value) { ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                <? } ?>
                            </select>
                        </div>
                        <div class="row mt-3">
                            <button class="btn btn-sm btn-success ml-auto" id='btnProductEdit'>Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Hóa đơn của khách -->
            <div class="tab-pane fade active" role="tabpanel" id="orders">
                <div id="listOrder" class="col-sm-12">
                    <h5 class="text-center">Hóa đơn khách hàng</h5>
                    <? if (count($allOrders) > 0 && isset($allOrders)) {
                        foreach ($allOrders as $value) {
                            ?>
                            <? require('./Views/Profile/ordersAdmin.php') ?>
                    <? }
                    } ?>
                    <div class="col-sm-12 justify-content-center d-flex">
                        <?php
                        if ($current_page > 1 && $total_page > 1) {
                            echo '<a href="#" page=' . ($current_page - 1) . ' id="prevPageOrders">--Prev</a> ';
                        }


                        // Lặp khoảng giữa
                        if ($total_page - $current_page > 3) {
                            echo '<span class="border bg-warning text-info">' . $current_page . '</span> | . . . | <a href="index.php?page=' . $total_page . '">' . $total_page . ' </a>  -- ';
                        }

                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($current_page < $total_page && $total_page > 1) {
                            echo ' <a href="" page=' . $current_page . ' id="nextPageOrders"> Next--</a>  ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
