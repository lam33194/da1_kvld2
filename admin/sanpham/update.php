<main>
    <div class="title">
        <h1>Sửa sản phẩm</h1>
    </div>
    <?php if (isset($thongbao))
        echo $thongbao; ?>
    <br><br>
    <form action="" method="post" class="myform" enctype="multipart/form-data">
        <div class="inputgroup">
            <label for="">Tên sản phẩm</label><br>
            <input type="text" value="<?= $load_info_sp['ten_sp'] ?>" name="ten_sp">
        </div>
        <div class="inputgroup">
            <label for="dm">Danh mục</label>
            <select name="iddm" id="dm" style="min-width: 100px">
                <?php
                foreach ($all_danhmuc as $dm) {
                    if ($load_info_sp['iddm'] == $dm['id'])
                        echo '<option selected value="' . $dm['id'] . '">' . $dm['ten_danh_muc'] . '</option>';
                    else
                        echo '<option value="' . $dm['id'] . '">' . $dm['ten_danh_muc'] . '</option>';
                } ?>
            </select>
        </div>
        <div class="inputgroup">
            <label for="">Giá</label><br>
            <input type="text" value="<?= $load_info_sp['gia_sp'] ?>" name="gia_sp">
        </div>
        Ảnh sản phẩm <br>
        <div style="display: flex">
            <?php foreach ($load_anh_sp as $sp) {
                echo '<label class="preview_img">
                    <img src="../upload/' . $sp . '" alt="" width="180px" height="180px">
                    </label>';
            }
            ?>
        </div>
        <br>
        <div class="inputgroup flex">
            <div>
                <label for="img_sp">Thêm ảnh</label>
                <input type="file" name="anh_sp0" id="img_sp">
            </div>
            <br>

            <div>
                <label for="img_sp">Thêm ảnh</label>
                <input type="file" name="anh_sp1" id="img_sp">
            </div>
            <br>

            <div>
                <label for="img_sp">Thêm ảnh</label>
                <input type="file" name="anh_sp2" id="img_sp">
            </div>
            <br>

            <div>
                <label for="img_sp">Thêm ảnh</label>
                <input type="file" name="anh_sp3" id="img_sp">
            </div>
        </div>
        <div class="inputgroup">
            <label for="">Mô tả</label><br>
            <textarea cols="90" rows="9" name="mota_sp"><?= $load_info_sp['mota_sp'] ?></textarea>
        </div>
        <input type="submit" value="Sửa" name="update_sp">
        <input type="reset" value="Nhập lại" id="btn_reset">
    </form>
    <button class="return"><a href="?act=ql_sanpham">Quay lại</a></button>
</main>

<script>
    // var uploads = document.querySelectorAll('input[type="file"]');
    // var preview = document.querySelectorAll('.preview_upload_img');
    // var reset = document.getElementById('btn_reset');
    // uploads.forEach((upload,index) => {
    //     upload.addEventListener('change', function (e) {
    //         var img = document.createElement('img');
    //         img.src = URL.createObjectURL(upload.files[0]);
    //         preview[index].appendChild(img);
    //     });
    // });

    // reset.onclick = function () {
    //     preview.forEach(labelEle => {
    //         if (labelEle.querySelector('img'))
    //         labelEle.removeChild(labelEle.lastElementChild);
    //     });
    // }
</script>