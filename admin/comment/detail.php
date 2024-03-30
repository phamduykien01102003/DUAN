<style>
    table th,
    td {
        text-align: center;
    }
</style>
<div>
    <h1 class="alert alert-success" style="color: green"> Detail comment base on product</h1>
    <table class="table ">
        <thead>
            <tr class="table-success">
                <th>Content_Comment</th>
                <th>Date</th>
                <th>Your_Comment</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($comments as $comment) {
                extract($comment);
                echo '
                <tr>
                <td>' . $content . '</td>
                <td>' . $date_comment . '</td>
                <td>' . $name_customer . '</td>
                <td>
                <a href="index.php?act=del_cmt&id_comment=' . $id_comment . '&id_product=' . $id_product . '" class="button-86">Remove</a>
                </td>
                </tr>
                ';
            }
            ?>
            <tr>

            </tr>
        </tbody>

    </table>
    <tfoot>
        <td colspan="4">
        </td>
    </tfoot>
</div>