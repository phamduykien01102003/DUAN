<div>
    <h1 class="alert alert-success" style="color: green"> Update Order </h1>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo '
        <h6 class="alert alert-primary" style="color:chartreuse">' . $thongbao . '</h6>
        ';
    }
    ?>
    <form action="" method="post">

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">ID Order </label>
            <input type="text" class="form-control" name="id_order" value="<?= $id_order ?>" placeholder="auto_number" disabled>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Name Customer</label>
            <input type="text" class="form-control" placeholder="tên brand" name="name_customer" value="<?= $name_customer ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Date Order</label>
            <input type="text" class="form-control" placeholder="tên brand" name="total_price" value="<?= $total_price ?>$" disabled>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="tên brand" name="address_order" value="<?= $address_order ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Date Order</label>
            <input type="text" class="form-control" placeholder="tên brand" name="date_order" value="<?= $date_order ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="inputPassword4" class="form-label">Status</label>
            <select class="form-select" id="validationDefault04" name="status_order">
                <option value="<?= $status_order ?>" selected><?= $status_order ?></option>
                <option value="Bắt Đầu">Bắt Đầu</option>
                <option value="Sẵn sàng giao hàng">Sẵn sàng giao hàng</option>
                <option value="Đang giao hàng">Đang Giao Hàng</option>
                <option value="Hoàn Tất">Hoàn Tất</option>
            </select>
        </div>

        <input type="hidden" name="id_customer" value="<?= $id_customer ?>">



        <br>
        <div>
            <button type="submit" name="capnhatOrder" value="capnhat" class="btn btn-primary">cập nhật </button>
            <a href="index.php?act=listorder" class="btn btn-primary"> danh sách </a>
        </div>

    </form>
</div>