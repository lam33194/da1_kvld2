<main>
    <div class="title">
        <h1>Quản lý danh mục</h1>
    </div>
    <div class="search_add">
        <form action="">
            <!-- <input type="text" placeholder="Search something...">
            <input type="submit"  value="Tìm"> -->
        </form>    
        <a href="?act=themdanhmuc">
        <i class="fa-solid fa-plus"></i>Thêm danh mục
        </a>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng mặt hàng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($all_danhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo'
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$ten_danh_muc.'</td>
                            <td>'.$soluong_mathang.'</td>
                            <td class="thaotac">
                            <a href="?act=sua_danhmuc&iddm='.$id.'" class="setting"><i class="fa-solid fa-wrench"></i></a>
                            <a href="?act=xoa_danhmuc&iddm='.$id.'" onclick="return confirm(\'Xóa danh mục '.$ten_danh_muc.'?\');" class="delete"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            </tr>';
                        }
                        ?>
            </tbody>
        </table>
    </div>
</main>

<!-- <td>'.'sad'.'</td>  -->