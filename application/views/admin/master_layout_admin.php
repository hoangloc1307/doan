<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xây dựng Hoàng Đức - Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?= base_url('assets/ckfinder/ckfinder.js') ?>"></script>
</head>

<body id="admin">
    <header>
        <nav class="container">
            <a class="logo" href="<?= base_url('admin') ?>">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
            </a>
            <ul class="menu">
                <li><a href="#">Dashboard</a></li>
                <li>
                    <a href="#">Bài viết</a>
                    <ul class="menu_2">
                        <li><a href="">Tất cả bài viết</a></li>
                        <li><a href="<?= base_url('admin/news/add') ?>">Thêm mới</a></li>
                        <li><a href="">Danh mục bài viết</a></li>
                    </ul>
                </li>
                <li><a href="#">Đăng xuất</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php $this->load->view('admin/' . $view); ?>
    </main>
</body>

</html>