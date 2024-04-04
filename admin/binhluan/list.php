<main>
    <div class="title">
        <h1>Quản lý bình luận</h1>
    </div>
    <div class="search_add">
        <form action="">
            <input type="text" placeholder="Search something...">
            <input type="submit" value="Tìm">
        </form>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <!-- <th>ID bình luận</th> -->
                    <th>Tên sản phẩm</th>
                    <th>Tên người dùng</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_binhluan as $binhluan) {
                    extract($binhluan); ?>
                    <tr>
                        <td>
                            <?= $ten_sp ?>
                        </td>
                        <td>
                            <?= $ho_va_ten ?>
                        </td>
                        <td>
                            <?= $noi_dung ?>
                        </td>
                        <td>
                            <?= $ngay_binh_luan ?>
                        </td>
                        <td class="thaotac">
                            <a href="?act=xoa_binhluan&id_bl=<?=$id?>" class="delete"
                                onclick="return confirm('Chắc chắn xóa bình luận này ?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<!-- ranh thi lam -->
<!-- <div class="dropdown">
    <span onclick="myFunction()" class="dropbtn">▼</span>
    <div class="table-preview dropdown-content" id="myDropdown">
        <table>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Thumbnail</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($all_sp as $sp) {
                    extract($sp);
                    $anh_sp = explode(',', $anh_sp)[0]; ?>
                    <tr>
                        <td>
                            <?= $ten_sp ?>
                        </td>
                        <td> <img src="../upload/<?= $anh_sp ?>" width="140px" height="180px">
                        </td>
                        <td>
                            <?= number_format($gia_sp) ?> VNĐ
                        </td>
                        <td> <textarea contenteditable="false" cols="50" rows="8"
                                style="border: none; background-color: unset;"><?= $mota_sp ?></textarea>
                        </td>
                    </tr>
                    <?php break;
                } ?>
            </tbody>
        </table>
    </div>
</div> -->

<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction(idsp) {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>