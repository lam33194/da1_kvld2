<main>
    <div class="title">
        <h1>Quản lý sản phẩm</h1>
    </div>
    <div class="search_add">
        <form action="">
            <h3>Lọc theo danh mục</h3>
            <?php foreach ($all_dm as $dm) { ?>
                <input type="checkbox" value="<?=$dm['id']?>" name="iddm" id="<?=$dm['id']?>">
                <label for="<?=$dm['id']?>">
                    <?= $dm['ten_danh_muc'] ?>
                </label>
                <br>
            <?php } ?>
        </form>
        <a href="?act=them_sanpham">
            <i class="fa-solid fa-plus"></i>Thêm sản phẩm
        </a>
    </div>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Thumbnail</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Đã bán</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($all_sp as $sp) {
                    extract($sp);
                    $anh_sp = explode(',', $anh_sp)[0];
                    echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $ten_sp . '</td>
                            <td> <img src="../upload/' . $anh_sp . '" width="140px" height="180px"> </td>
                            <td>' . number_format($gia_sp) . ' VNĐ</td>
                            <td> <textarea class="admin_view_textarea" contenteditable="false" cols="50" rows="8" style="border: none; background-color: unset;">' . $mota_sp . '</textarea></td>
                            <td> ' . $sold . '</td>
                            <td class="thaotac">
                            <a href="?act=sua_sanpham&id_sp=' . $id . '" class="setting"><i class="fa-solid fa-wrench"></i></a>
                            <a href="?act=xoa_sanpham&id_sp=' . $id . '" onclick="return confirm(\'Xóa ' . $ten_sp . '?\');" class="delete"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<!-- <td>'.$soluong.'</td> -->