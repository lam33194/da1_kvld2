<main>
    <div class="title">
        <h1>Sửa danh mục</h1>
    </div>
    <form action="?act=sua_danhmuc&iddm=<?=$one_danhmuc['id']?>" method="post" class="myform">
        <div class="inputgroup">
            <label for="">ID danh mục</label><br>
            <input value="<?=$one_danhmuc['id']?>" style="background-color: #d3d3d3" disabled>
            <label for="">Tên danh mục</label><br>
            <input type="text" name="ten_dm" value="<?=$one_danhmuc['ten_danh_muc']?>">
        </div>
        <input type="submit" value="Sửa" name="update_danhmuc">
        <input type="reset" value="Nhập lại">
    </form>
    <button class="return"><a href="?act=ql_danhmuc">Quay lại</a></button> <br> <br>
    <?php if(isset($thongbao)) echo $thongbao?>
</main>