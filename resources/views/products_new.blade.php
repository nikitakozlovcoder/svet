<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="icon.png">
<style>
    @media screen and (min-width: 500px){}
        .product_col {
            padding: 20px 10px;
            
        }
    }
    .products-items-grid .prod_overlay{
        transition-delay: 0.3s;
        transition: transform .3s linear, opacity .3s;
    }
    .products-items-grid_col_wrap{
        border: 1px solid #b9b9b9;
        padding: 10px;
        padding-bottom: 20px;
        border-radius: 5px;
        //box-shadow: 5px 12px 16px 1px #b9b9b9;
        box-shadow: 2px 5px 5px 1px #b7b7b7;
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    }

    .products-items-grid_col_wrap:hover {
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    }
    .product_img{
        margin: -11px;
        
    }
    .product_img img{
        border-radius: 5px 5px 0 0;
    }
</style>
</head>
<body style="min-height: 100vh; display: flex; flex-direction: column;">
<header>
    <nav class="nav" style="background: white !important">
        <div class="wrap">
            <div class="logo" style="color: #515562 !important;display: flex;"><div><a href='/'><i class="fa fa-arrow-left" style="font-size:16px; padding-right: 25px;" ></i></a>	</div>	<span>SVE</span>T-SKG</div>
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
<div class="wrap" style="margin-top: 40px">
    <div class="section_title">
        <h2>Наша продукция.</h2>
        <div class="section_title_text">Ознакомьтесь с каталогом нашей продукции.</div>
    </div>
</div>
<div class="wrap">
    <div class="products-items-grid">
        <div class="product_col products-items-grid_col">
            <a href="/product/a50" class="products-items-grid_col_wrap">
    
                <div class="product_img"><img src="./img/products/1.jpg"></div>
                <div class="product_title title">AVENUE K- 50.</div>
                <div class="product_text">
                    Уличный светильник.
                    Мощность <span>50ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="/product/a100" class="products-items-grid_col_wrap">
                
                <div class="product_img"><img src="./img/products/2.jpg"></div>
            <div class="product_title title">AVENUE K- 100.</div>
            <div class="product_text">
                Уличный светильник.
                Мощность <span>100ватт</span>
            </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="/product/a200" class="products-items-grid_col_wrap">
                
            <div class="product_img"><img src="./img/products/3.jpg"></div>
            <div class="product_title title">AVENUE K- 200.</div>
            <div class="product_text">
                Уличный светильник.
                Мощность <span>200ватт</span>
            </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="/product/i50" class="products-items-grid_col_wrap">
                
                <div class="product_img"><img src="./img/products/16.jpg"></div>
                <div class="product_title title">INDUSTRY  50.</div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>50ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="/product/i100" class="products-items-grid_col_wrap">
                
                <div class="product_img"><img src="./img/products/20.jpg"></div>
            <div class="product_title title">INDUSTRY 100.</div>
            <div class="product_text">
                 Промышленный светильник.
                Мощность <span>100ватт</span>
            </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="/product/i200" class="products-items-grid_col_wrap">
                
                <div class="product_img"><img src="./img/products/24.jpg"></div>
                <div class="product_title title">INDUSTRY 200.</div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>200ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="/product/a200l" class="products-items-grid_col_wrap">
                
                <div class="product_img"><img src="./img/products/25.jpg"></div>
                <div class="product_title title">AVENUE 200L.</div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>200ватт</span>
                </div>
            </a>
        </div>



        <div class="product_col products-items-grid_col">
            <a href="/product/i150" class="products-items-grid_col_wrap">
                
                <div class="product_img"><img src="./img/products/29.jpg"></div>
                <div class="product_title title">INDUSTRY 150.</div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>150ватт</span>
                </div>
            </a>
        </div>

    </div>

<footer style="margin-top: auto">
    <div class="wrap">
        <hr>
    </div>
    <div class="wrap footer">
        <img src="./img/logo2.png" alt="alt" style="height: 70px; width: 70px; order: 2;">
        <div class="logo logo-footer" style="color: #2c3e50 !important; order: 1;"><span>SVE</span>T-SKG</div>
        <div style="order: 3;">Разработано командой <a href="http://nek-web.ru" style="color: #00bfd3; ">NekWeb</a>.</div>
    </div>
</footer>
<script src="js/main.js"></script>
</body>
</html>