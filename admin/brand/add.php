<div>
<h1 class="alert alert-success" style="color: green"> Thêm mới Brand </h1>

<form action="index.php?act=addbrand" method="post">

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Mã brand </label>
          <input type="text" class="form-control" placeholder="auto_number"   readonly>
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label" >Tên brand</label>
          <input type="text" class="form-control"  placeholder="tên brand" name="name_brand">
        </div>
        
        <br>
        <div>
        <button type="submit" name="themmoi"  value="themmoi" class="btn btn-primary">thêm mới</button>
        <button type="reset" class="btn btn-primary">nhập lại </button>
        <a href="index.php?act=listbrand" class="btn btn-primary" > danh sách </a>
        </div>
        <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            } 
        ?>
</form>
</div>