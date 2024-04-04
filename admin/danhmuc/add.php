<main>
    <div class="title">
        <h1>Thêm danh mục</h1>
    </div>
    <form action="" method="post" class="myform">
        <div class="inputgroup">
            <label for="">Tên danh mục</label><br>
            <input type="text" name="ten_dm" class="tendm">
        </div>
        <input type="submit" value="Thêm" name="add_danhmuc" class="submit">
        <input type="reset" value="Nhập lại"> <br> <br>
        <?php if(isset($thongbao)) echo $thongbao?>
    </form>
    <button class="return"><a href="?act=ql_danhmuc">Quay lại</a></button>
</main>