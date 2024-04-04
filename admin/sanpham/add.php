<main>
    <div class="title">
        <h1>Thêm sản phẩm</h1>
    </div>
    <?php if(isset($thongbao)) echo $thongbao; ?>
    <br><br>
    <form action="" method="post" class="myform" enctype="multipart/form-data">
        <div class="inputgroup">
            <label for="">Tên sản phẩm</label><br>
            <input type="text" name="ten_sp">
        </div>
        <div class="inputgroup">
            <label for="dm">Danh mục</label>
            <select name="iddm" id="dm" style="min-width: 100px">
                <?php 
                foreach($all_danhmuc as $dm) {
                    echo '<option value="'.$dm['id'].'">'.$dm['ten_danh_muc'].'</option>';      
                }?>
            </select>
        </div>
        <div class="inputgroup">
            <label for="">Giá</label><br>
            <input type="number" name="gia_sp">
        </div>
        Ảnh sản phẩm <br>
        <div class="inputgroup flex">
            <label for="img_sp" class="preview_upload_img"><i class="fa-solid fa-plus"></i>Thêm ảnh</label>
            <input type="file" name="anh_sp1" hidden id="img_sp">

            <label for="img_sp2" class="preview_upload_img"><i class="fa-solid fa-plus"></i>Thêm ảnh</label>
            <input type="file" name="anh_sp2" hidden id="img_sp2">

            <label for="img_sp3" class="preview_upload_img"><i class="fa-solid fa-plus"></i>Thêm ảnh</label>
            <input type="file" name="anh_sp3" hidden id="img_sp3">

            <label for="img_sp4" class="preview_upload_img"><i class="fa-solid fa-plus"></i>Thêm ảnh</label>
            <input type="file" name="anh_sp4" hidden id="img_sp4">
        </div>
        <div class="inputgroup">
            <label for="">Mô tả</label><br>
            <textarea cols="90" rows="9" name="mota_sp"></textarea>
        </div>
        <input type="submit" value="Thêm" name="add_sanpham">
        <input type="reset" value="Nhập lại" id="btn_reset">
    </form>
    <button class="return"><a href="?act=ql_sanpham">Quay lại</a></button>
</main>

<script>
    var uploads = document.querySelectorAll('input[type="file"]');
    var preview = document.querySelectorAll('.preview_upload_img');
    var reset = document.getElementById('btn_reset');
    uploads.forEach((upload,index) => {
        upload.addEventListener('change', function (e) {
            var img = document.createElement('img');
            img.src = URL.createObjectURL(upload.files[0]);
            preview[index].appendChild(img);
        });
    });

    reset.onclick = function () {
        preview.forEach(labelEle => {
            if (labelEle.querySelector('img'))
            labelEle.removeChild(labelEle.lastElementChild);
        });
    }
</script>