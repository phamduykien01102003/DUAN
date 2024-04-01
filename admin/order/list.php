<div>
    <h1 class="alert alert-success" style="color: green"> Danh sách order</h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th scope="col">ID ORDER </th>
                <th scope="col">mã customer</th>
                <th scope="col">date order</th>
                <th scope="col">order status</th>
                <th scope="col"> order address </th>
                <th scope="col">total_price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>


            <?php
            foreach ($listorder as $order) {
                extract($order);
                echo '
                <tr>
                <td>' . $id_order . '</td>
                <td>' . $name_customer . '</td>
                <td>' . $date_order . '</td>
                <td>' . $status_order . '</td>
                <td>' . $address_order . '</td>
                <td>' . $total_price . '$</td>

                <td>
                <a href="index.php?act=updateOrd&id_order=' . $id_order . '"><button class="btn btn-outline-success">Update</button></a>
                </td>
            </tr>
                ';
            }
            ?>
        </tbody>

    </table>
    <!-- <tfoot>
        <td colspan="4">
            <button type="button" class="btn btn-primary">chọn tất cả </button>
            <button type="button" class="btn btn-primary">xóa tất cả </button>
            <button type="button" class="btn btn-primary">xóa các mục đã chọn </button>
            <a href="" class="btn btn-primary"> thêm mới </a>
        </td>
    </tfoot> -->
</div>