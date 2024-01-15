<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Supermercado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./view/css/header.css" rel="stylesheet">
        <!-- ICONS -->
        <link href="./view/icons/scss/solid.scss" rel="stylesheet">
        <link href="./view/icons/css/all.css" rel="stylesheet">
        <link href="./view/icons/css/brands.css" rel="stylesheet">
        <link href="./view/icons/css/fontawesome.css" rel="stylesheet">
        <link href="./view/icons/css/regular.css" rel="stylesheet">
        <link href="./view/icons/css/svg-with-js.css" rel="stylesheet">
        <link href="./view/icons/css/v4-font-face.css" rel="stylesheet">
        <link href="./view/icons/css/v4-shims.css" rel="stylesheet">
        <link href="./view/icons/css/v5-font-face.css" rel="stylesheet">

    </head>
    <body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Salsa&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;1,700&display=swap'); 
        .cabecalho{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #daf4fb;
            border-bottom: 1px solid #8e8e8e;
        }

        .logo {
            padding-left:7px;
            color: #330954;
            font-weight: 700;
            font-size: 1.5rem;
        }
        .logo p{
            font-family: 'Salsa', cursive;
        }

        .menu{
            height: 3rem;
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 50%;
        }
        .menu .item {
            height: 3.2rem;
            width: 3.2rem;
        }
        .menu .item a{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .menu .item i{
            color: #8e8e8e;
            font-size: 1.3rem
        }

        .pesquisa{
            padding:11px 7px 6px 0;
        }
        .box_pesquisa{
            height: 100%;
            width: 20rem;
            background: #ffffff;
            padding: 7px;
            border-radius: 7px;
            box-shadow: -4px 3px 7px 0px #8e8e8e;
        }
        .box_pesquisa input{
            width: 90%;
            border: none;
        }
        .box_pesquisa input:focus {
            outline: none;
        }
        .box_pesquisa button{
            cursor: pointer;
            border: none;
            background: transparent;
            font-size: 1.2rem;
        }
    </style>
    <section class="cabecalho">
        <div class="logo">
            <p>Supermercado</p>
        </div>
        <div class="menu">
            <div class="item"> <a class="home" href="?page=home"> <i class="fa-solid fa-house"></i></a></div>
            <div class="item"> <a class="pedidos" href="?page=pedidos"> <i class="fa-solid fa-file"></i></a></div>
            <div class="item"> <a class="carrinho" href="?page=carrinho"> <i class="fa-solid fa-cart-shopping"></i></a></div>
        </div>
        <div class="pesquisa">
            <div class="box_pesquisa">
                <input type="text" name="" id="">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </section>