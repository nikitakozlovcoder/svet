<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="icon" href="icon.png">
    <style>
        .product_img{
            height: 100%;
            display: flex;
            padding-top: 0;
            flex-direction: column;
            position: relative;
        }
        .product_img img {
            margin: auto;
            top: 0;
            left: 0;
            object-fit: cover;
            position: relative;
            width: 100%;
            height: 100%;
        }



    </style>

</head>
<body style="min-height: 100vh; display: flex; flex-direction: column;">
<header>
    <nav class="nav" style="background: white !important">
        <div class="wrap">
            <div class="logo" style="color: #515562 !important;display: flex;"><div><a href='../photos'><i class="fa fa-arrow-left" style="font-size:16px; padding-right: 25px;" ></i></a>	</div>	<span>SVE</span>T-SKG</div>
            <div class="toggle">
                <div class="toggle_nav">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="links" style="color: #2c3e50 !important">
                <div class="links_wrap">
                    <hr><a class=" link" href="/#home" style="color: #515562;" >Главная</a>
                    <a class=" link" href="/#about" style="color: #515562;">О нас</a>
                    <a class=" link" href="/#products" style="color: #515562;">Продукция</a>
                    <a class=" link" href="/#work" style="color: #515562;">Работы</a>
                    <a class=" link" href="/#service" style="color: #515562;">Возможности</a>
                    <a class=" link" href="/#contact" style="color: #515562;">Связаться</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="wrap main-wrap">
    <div class="section_title">
        <h2>Ростовская область.</h2>

    </div>
    <div class="products-items-grid">
        <div class="product_col products-items-grid_col">
            <div class="product_img"><img src="../img/products-work/22.jpg" class="work-img expand-img" data-full="../img/products-work/full/22.jpg"></div>
        </div>
        <div class="product_col products-items-grid_col">
            <div class="product_img"><img src="../img/products-work/23.jpg" class="work-img expand-img" data-full="../img/products-work/full/23.jpg"></div>
        </div>
        <div class="product_col products-items-grid_col">
            <div class="product_img"><img src="../img/products-work/24.jpg" class="work-img expand-img" data-full="../img/products-work/full/24.jpg"></div>
        </div>
        <div class="product_col products-items-grid_col">
            <div class="product_img"><img src="../img/products-work/25.jpg" class="work-img expand-img" data-full="../img/products-work/full/25.jpg"></div>
        </div>
    </div>


    <footer style="margin-top: auto">
        <div class="wrap">
            <hr>
        </div>
        <div class="wrap footer">
            <img src="../img/logo2.png" alt="alt" style="height: 70px; width: 70px; order: 2;">
            <div class="logo logo-footer" style="color: #2c3e50 !important; order: 1;"><span>SVE</span>T-SKG</div>
            <div style="order: 3;">Разработано командой <a href="http://nek-web.ru" style="color: #00bfd3; ">NekWeb</a>.</div>
        </div>
    </footer>
    <script src="../js/main.js"></script>
    <script src="../js/fullimg.js"></script>
</body>
</html>
