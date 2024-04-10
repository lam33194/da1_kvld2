<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Sửa sản phẩm</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <?php if(isset($thongbao)) echo $thongbao ?>
                        <form action="?act=sua_sanpham&id_sp=<?=$load_info_sp['id']?>" method="post" enctype="multipart/form-data" id="addProductForm">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="ten_sp" class="form-control" value="<?=$load_info_sp['ten_sp']?>">
                                <div class="text-danger" style="display:none;">Bạn chưa nhập tên sản phẩm</div>
                            </div>

                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="iddm" class="form-control" id="exampleFormControlSelect1">
                                    <?php foreach($all_danhmuc as $dm) { 
                                        if ($load_info_sp['iddm'] == $dm['id']) {
                                            echo '<option selected value="'.$dm['id'].'">'.$dm['ten_danh_muc'].'</option>';
                                        }?>
                                        <option value="<?=$dm['id']?>"><?=$dm['ten_danh_muc']?></option>
                                        <?php } ?>
                                </select>
                                <span></span>
                            </div>

                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="number" name="gia_sp" class="form-control" value="<?=$load_info_sp['gia_sp']?>">
                                <div id="invalidNum" class="text-danger" style="display:none;">Giá sản phẩm không hợp lệ</div>
                            </div>

                            <label>Ảnh sản phẩm</label>
                            <div id="minImg" class="text-danger" style="display:none;">Hãy tải lên ít nhất 1 ảnh !</div>
                            <div class="form-group d-flex justify-content-between">
                                <!-- <div class="d-flex justify-content-between"> -->
                                    <div>
                                        <label for="img_sp1" class="preview_upload_img">Chọn file
                                        <img src="../upload/<?=$load_anh_sp[0]?>" alt="">
                                        </label>
                                        <input type="file" name="anh_sp1" class="custom-file-input" style="display:none" accept="image/png, image/jpeg" id="img_sp1">
                                        
                                    </div>
                              
                                    <div>
                                        <label for="img_sp2" class="preview_upload_img">Chọn file
                                        <img src="../upload/<?=$load_anh_sp[1]?>" alt="">
                                        </label>
                                        <input type="file" name="anh_sp2" class="custom-file-input" style="display:none" accept="image/png, image/jpeg" id="img_sp2">
                                    </div>
                                
                                    <div>
                                        <label for="img_sp3" class="preview_upload_img">Chọn file
                                        <img src="../upload/<?=$load_anh_sp[2]?>" alt="">
                                        </label>
                                        <input type="file" name="anh_sp3" class="custom-file-input" style="display:none" accept="image/png, image/jpeg" id="img_sp3">
                                    </div>               
                                
                                    <div>
                                        <label for="img_sp4" class="preview_upload_img">Chọn file
                                        <img src="../upload/<?=$load_anh_sp[3]?>" alt="">
                                        </label>
                                        <input type="file" name="anh_sp4" class="custom-file-input" style="display:none" accept="image/png, image/jpeg" id="img_sp4">
                                    </div>
                                <!-- </div> -->
                            </div>
                            
                            <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <textarea name="mota_sp" class="form-control" rows="4"><?=$load_info_sp['mota_sp']?></textarea>
                                <div class="text-danger" style="display:none;">Bạn chưa nhập mô tả sản phẩm</div>
                            </div> 

                            <br>
                            <button type="submit" name="update_sp" class="btn btn-primary">Sửa sản phẩm</button>
                            <button id="btn_reset" type="reset" class="btn btn-danger">Reset</button>
                            <a href="?act=ql_sanpham"><button type="button" class="btn btn-secondary">Quay
                            lại</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Wrapper END -->

<script>
    var uploads = document.querySelectorAll('input[type="file"]');
    var preview = document.querySelectorAll('.preview_upload_img');
    var reset = document.getElementById('btn_reset');
    uploads.forEach((upload, index) => {
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

    // form element
    var formEle = document.getElementById('addProductForm');
    
    // input elements
    var inputFiles = document.querySelectorAll('#addProductForm input[type="file"]');
    var formInputText = document.querySelectorAll('.form-control');

    // error msg element
    var minImg = document.getElementById('minImg');
    var invalidNum = document.getElementById('invalidNum');

    // input number element
    var inputNumber = document.querySelector('#addProductForm input[type="number"]');

    formEle.onsubmit = function(e) {

        // kiểm tra tải lên ít nhất 1 file
        // dùng for vì forEach ko break hay return đc
        for (let i = 0; i < inputFiles.length; i++) {
            if (document.querySelectorAll('preview_upload_img')[i].querySelector('img')) {
                minImg.style.display = 'none';
                break;
            }
            else {
                minImg.style.display = 'block';
                e.preventDefault();
            }
        }

        // check null
        formInputText.forEach(function(ele, key) {
            // kiểm tra rỗng tên, giá, mô tả khi submit
            if (!ele.value.trim() || !ele.value) {
                ele.classList.add('alert','alert-danger');
                ele.nextElementSibling.style.display = 'block';
                e.preventDefault();
            } else {
                ele.classList.remove('alert','alert-danger');
                ele.nextElementSibling.style.display = 'none';
            }

            // sau khi submit:
            ele.addEventListener('blur', function() {
                if (ele.value.trim() && ele.value) {
                ele.classList.remove('alert','alert-danger');
                ele.nextElementSibling.style.display = 'none';
                }
            })
        })

        // check invalid price
        if (inputNumber.value < 1) {
            inputNumber.classList.add('alert','alert-danger');
            invalidNum.style.display = 'block';
            e.preventDefault();
        } else {
            inputNumber.classList.remove('alert','alert-danger');
            invalidNum.style.display = 'none';
        }
    }
</script>