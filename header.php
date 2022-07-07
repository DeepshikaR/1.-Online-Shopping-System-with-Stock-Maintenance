<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="3">
<style>
.bor{
    border:2px solid black;
}
.header_item{
    position:absolute;
    width:40px;
    height:40px;
    top:2px;
    }
.trans_button{
    position:absolute;
    top:0px;
    background-color: Transparent;
    background-repeat:no-repeat;
    overflow:hidden;
    border:20px  solid Transparent;
    }    
div.header{
    position: -webkit-sticky;
    position:sticky;
    left:10px;
    width:920px;
    height:50px;
    background-color:red;
    background-blend-mode:overlay;    
    }
div.logo{
    left:10px;
    }
div.search{
    left:800px;
    }
div.menu{
    left:80px;
}
div.home{
    left:125px;
}
div.cart{
    left:850px;
}
.img_header{
    background-color: red;
    background-size: 40px 40px;
    background-blend-mode:;
    background-repeat: no-repeat;
}
.img_menu{
    background-image:url("")
}
</style>
</head>
<body>
<center><h1>WELCOME</h1></center>
<div class="header bor">
    <div class="header_item logo bor">
    logo
    </div>
    <div class="header_item menu">
        <img class="header_item" src="./images/menu_2.jpeg" alt="menu">
        <a class="trans_button" href="./testing/test.html">
        </a>
    </div>
    <div class="header_item home ">
        <img class="header_item" src="./images/home.jpg" alt="home">
        <a class="trans_button" href="./testing/test.html">
        </a>
    </div> 
    <div class="header_item search">
        <img class="header_item" src="./images/search.png" alt="search">
        <a class="trans_button" href="./testing/test.html">
        </a>
    </div>
    <div class="header_item cart ">
        <img class="header_item" style="left:0px;" src="./images/cart.png" alt="cart">
        <a class="trans_button" href="./testing/test.html">
        </a>
    </div>
    
</div>
</body>
</html>