<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
    <style>
        a {
            transition: .2s;
        }

        .grid {
            grid-template-columns: repeat(6, auto);
            display: grid;
            border-top: 1px solid black;
        }

        .grid>div:nth-child(-n+6) {
            height: auto;
            background: #6e1600;
            color: #fff;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
        }

        .grid>div {
            padding: 8px;
            border-bottom: 1px solid black;
            align-items: center;
            display: flex;
        }

        .menu-lang {
            position: relative;
        }

        .menu-lang__link {
            padding: 10px 15px;
            cursor: pointer;
            margin: 0 8px;
        }

        ul.menu-lang__list {
            position: absolute;
            list-style: none;
            display: none;
        }

        li.lang-item a {
            padding: 10px 15px;
            cursor: pointer;
            display: block;
        }

        .toggle-menu-wrap {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .bascket {
            padding: 0 25px;
        }

        .phone.fright {
            display: flex;
            flex-direction: column;
        }

        .kategory-sidebar .kategory-title {
            background-color: #ef0001;
            color: #fff;
            font-size: 18px;
            line-height: 50px;
            margin: 0 0 15px;
            padding: 0 20px;
        }

        .kategory-sidebar ul {
            margin: 0;
            padding: 0 0 7px;
            list-style: none;
            width: 100%;
        }

        .kategory-sidebar li {
            margin: 0;
            padding-left: 20px;
            border-top: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        .kategory-sidebar a {
            color: #131326;
            text-decoration: none;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            display: block;
            padding: 4px 30px 4px 0;
            position: relative;
        }

        .kategory-list {
            margin: 0 -15px;
            font-size: 20px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 10px;
        }

        .props-wrap {
            display: flex;
            flex-wrap: wrap;
        }

        .input-group.row img {
            max-width: 300px;
        }

        .kategory-list .item {
            width: calc(23.333336% - 30px);
            padding: 0 15px;
            font-size: 14px;
            margin-bottom: 26px;
            vertical-align: top;
            display: inline-block;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .kategory-list.show .item {
            display: inline-block;
        }

        .kategory-list a {
            display: block;
            height: 100%;
            text-decoration: none;
            text-align: center;
            color: #131326;
        }

        .kategory-list .visual {
            position: relative;
            width: 100%;
            height: 150px;
            margin-bottom: 10px;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .kategory-list .visual img {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            max-width: 90%;
            max-height: 90%;
        }

        .kategory-list a span {
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }

        .header-middle.hidden-menu {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        a.logo>img {
            height: 130px;
        }

        .left-nav,
        .right-nav,
        #footer nav {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .header-middle {
            background-color: #193867;
            padding: 10px 0;
            color: #fff;
        }

        .header-middle a,
        #footer nav a {
            color: #fff;
            font-weight: 400;
            text-decoration: none;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            font-size: 16px;
            line-height: 20px;
            padding: 15px 11px;
            display: block;
            margin-right: 5px;
        }

        form input[type="search"] {
            float: left;
            padding: 5px 70px 5px 30px;
            /* width: 490px; */
            width: 350px;
            background-color: #fff;
            font-style: italic;
            border-radius: 30px;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        #footer {
            background-color: #193867;
            color: #fff;
            padding: 25px 0;
            margin-top: 60px;
            position: relative;
        }

        #footer .inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
        }

        .product-item {
            width: 25%;
            -webkit-box-shadow: 0 2px 16px rgba(0, 0, 0, .24);
            box-shadow: 0 2px 16px rgba(0, 0, 0, .24);
            padding: 18px 0;
            border-radius: 10px;
            width: calc(25% - 20px);
            margin: 10px;
        }

        .product-item .wrap,
        .product-item-big .wrap,
        .product-item-list .wrap {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: wrap;
            flex-flow: wrap;
        }

        .product-sorting .wrap {
            padding: 0 15px;
        }

        .product-item h4,
        .product-item-big h4,
        .product-item-list h4 {
            font-size: 1.4em;
            line-height: 22px;
            overflow: hidden;
            display: block;
            width: 100%;
            padding: 0 15px;
        }

        .product-item h4 a,
        .product-item-big h4 a,
        .product-item-list h4 a {
            text-decoration: none;
            color: #131326;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }

        .product-item .visual,
        .product-item-big .visual,
        .product-item-list .visual {
            position: relative;
            height: 150px;
            width: 100%;
        }

        .product-item .description,
        .product-item-big .description,
        .product-item-list .description {
            color: #898992;
            padding: 8px 0 4px;
            width: 100%;
            overflow: hidden;
        }

        .product-item .description ul,
        .product-item-big .description ul,
        .product-item-list .description ul {
            margin: 0;
            padding: 0;
            list-style: none;
            height: 66px;
        }

        .product-sorting .product-item .price {
            overflow: hidden;
        }

        .product-item .price,
        .product-item-big .price,
        .product-item-list .price {
            color: #ef0001;
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }

        .product-item .btn,
        .product-item-big .btn,
        .product-item-list .btn {
            font-size: 14px;
            padding: 4px 6px;
            font-weight: 300;
            text-transform: none;
            min-width: 0;
            border-width: 1px;
            margin: 0 auto;
            width: 100%;
        }

        .pre-price {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            width: 100%;
            padding: 0 15px;
        }

        .flex {
            flex-wrap: wrap;
        }

        .btn {
            color: #131326;
            font-size: 16px;
            line-height: 20px;
            padding: 13px 23px;
            min-width: 210px;
            font-weight: 400;
            border: 2px solid #131326;
            text-decoration: none;
            overflow: hidden;
            position: relative;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            display: inline-block;
            border-radius: 0;
            outline: none;
            text-align: center;
            cursor: pointer;
            z-index: 1;
            background-color: #fff;
        }

        .btn.btn-blue {
            color: #fff;
            background-color: #193867;
            border-color: #193867;
        }

        .wysiwyg.no-border {
            display: flex;
        }

        .wysiwyg.no-border .inner {
            width: 100%;
        }

        .moreImg-wrap {
            position: relative;
        }

        a.delMoreImg {
            position: absolute;
            right: 5px;
            top: 5px;
            background: #fff;
            color: red;
            font-size: 18px;
            border: 1px solid;
            border-radius: 10px;
            padding: 0 10px;
            cursor: pointer;
        }

        .more_img {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .flesh {
            text-align: center;
        }

        form.getOrder {
            display: flex;
            flex-direction: column;
            width: 40%;
            margin: 0 auto;
            font-size: 16px;
            height: 55vh;
            justify-content: center;
        }

        form.getOrder legend {
            font-size: 16px;
        }

        form.getOrder input {
            padding: 3px 10px;
            margin-bottom: 10px;
        }

        .tabs-contents .item {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            font-size: 18px;

        }

        .prop {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid;
            padding: 10px;
        }

        .prop-value {
            font-weight: bold;
        }

        .tabs-titles {
            display: flex;
        }

        .tabs-titles .item {
            font-weight: 400;
            font-size: 20px;
            line-height: 79px;
            width: 50%;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            position: relative;
            opacity: .5;
            transition: .2s;
        }

        .tabs-titles .item.active,
        .tabs-titles .item:hover {
            opacity: 1;
        }

        .tabs-contents .item {
            display: none;
        }

        .tabs-contents .item.active {
            display: flex;
        }

        .tabs-titles .item:before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 0;
            background-color: #ef0001;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .tabs-titles .item.active:before,
        .tabs-titles .item:hover:before {
            height: 5px;
        }

        .product-list.small-filter {
            display: flex;
            flex-wrap: wrap;
        }

        .product-item .visual img,
        .product-item-big .visual img,
        .product-item-list .visual img {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            max-width: 90%;
            max-height: 90%;
            width: auto;
            transition: .3s;
        }

        .product-item h4 a:hover,
        .product-item-big h4 a:hover,
        .product-item-list h4 a:hover {
            opacity: 0.5;
        }

        .product-item .visual a:hover,
        .product-item-big .visual a:hover,
        .product-item-list .visual a:hover {
            opacity: 0.5;
        }

        .zakaz-block {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin: 10px 0;
        }

        .zakaz-block .caption {
            font-size: 19px;
            font-weight: 400;
        }

        .zakaz {
            list-style-type: none;
            margin-bottom: initial;
        }

        .zakaz li {
            float: left;
            margin: 0 5px;
        }

        .zakaz li.telegram a {
            background: #0088cc;
        }

        .zakaz li.viber a {
            background: #665cac;
        }

        .zakaz li.phone {
            background: #38c172;
        }

        .zakaz li.bascket {
            padding: 0;
            background: #fff;
        }

        .zakaz li.phone svg {
            width: 35px;
            height: auto;
            fill: #fff;
        }

        .zakaz li.bascket a.bascket {
            padding: 0;
        }

        .zakaz li a {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            border-style: none;
            outline: none;
            max-width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .price-wrap,
        .price-table,
        .price-table .item {
            display: flex;
            flex-wrap: wrap;
        }

        a.reno_phone {
            font-size: 2em;
            display: block;
            padding: 10px 0;
        }

        a.reno_phone:nth-child(2) {
            border-bottom: 1px solid;
        }

        .rent-now .wrap {
            min-width: 320px;
            text-align: center;
            background: #fff;
            border: 1px solid;
            border-radius: 15px;
            position: relative;
            z-index: 1;
            padding: 30px 0;
        }

        .rent-now .wrap .close {
            position: absolute;
            z-index: 2;
            top: 2px;
            right: 9px;
            padding: 3px 12px;
        }

        .rent-now.modal {
            flex-direction: column;
            background: #00000073;
            align-items: center;
            justify-content: center;
            z-index: 99999;
        }

        .price-table .item {
            flex-direction: column;
            width: 50%;
        }

        .price-table {
            width: 50%;
            text-align: center;
        }

        .price-table .title {
            color: #fff;
            background-color: #193867;
            padding: 15px 0;
        }

        .price-table .item:last-child .title {
            background-color: #ef0001;
        }

        .price-table .value {
            background-color: #f5f5f5;
            font-size: 28px;
            line-height: 50px;
        }

        .btn.btn-red {
            color: #fff;
            background-color: #ef0001;
            border-color: #ef0001;
        }

        .btns {
            padding: 0 5px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .oneclick-block {
            background: #f5f5f5;
            padding: 30px;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            margin: 30px 0 10px;
        }

        .main-navigation {
            width: 100%;
        }

        .oneclick-description {
            overflow: hidden;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-right: 10px;
            width: 35%;
        }

        .oneclick-form-block {
            float: right;
            height: 50px;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60%;
        }

        form.oneclick-form input {
            height: 50px;
            box-sizing: border-box;
            border: 1px solid #d9d9d9;
            background: #fff;
            width: 230px;
            padding: 10px 15px;
            margin-bottom: initial;
            font-size: 20px;
            font-weight: 300;
            border-right: none;
        }

        form.oneclick-form button {
            padding: 10px 20px;
        }

        form.oneclick-form button {
            height: 50px;
            padding: 10px 30px;
            font-size: 16px;
            color: #fff;
            white-space: nowrap;
            border: 2px solid;
            background-color: #ef0001;
            border-color: #ef0001;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .phone.fright {
            font-size: 1.2em;
            /* height: fit-content; */
        }

        .col-center {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .svg-round {
            background: #fff;
            /* padding: 0px 10px; */
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .header-link .zakaz {
            display: flex;
            flex-direction: row;
            padding: 0;
        }

        .header-link .zakaz li a {
            width: 60px;
            height: 60px;
            border-radius: 80px;
        }

        .header-link .zakaz li a img {
            width: 60px;
            height: auto;
        }

        .phone-show {
            padding: 10px;
            font-size: 1em;
            background: #193867;
            color: #fff;
            border-radius: 27px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-link .zakaz li a:hover {
            opacity: .5;
        }

        .inner p {
            white-space: pre-line;
            font-size: 1.2em;
        }

        .text-wrap {
            margin-top: 4em;
        }

        form#search {
            position: relative;
        }

        .q-result {
            position: absolute;
            z-index: 10;
            top: 38px;
            width: 100%;
            color: #193867;
            border-radius: 10px;
            background: #fff;
        }

        .q-result a {
            color: #193867;
            display: flex;
            font-weight: bold;
            border-bottom: 1px solid;
            justify-content: space-around;
        }

        form input[type="search"]:focus {
            outline: none;
        }

        .q-result a:last-child {
            border: none;
        }

        .steps {
            padding: 20px 25px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .step .ico_wrap {
            width: 120px;
            height: 120px;
            margin-bottom: 30px;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 20%;
        }

        .step p {
            font-size: 1.2em;
            text-align: center;
        }

        .step svg {
            transform: rotateZ(-45deg);
            width: 5em;
            height: auto;
            fill: #ddd;
        }

        .ico_wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ff8709;
            transform: rotateZ(45deg);
        }

        .accordion .item {
            margin: 0 0 10px 10px;
            width: calc(50% - 10px);
            float: left;
        }

        .accordion .item .title {
            font-size: 16px;
            line-height: 68px;
            border: 1px solid #d9d9d9;
            padding: 0 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .accordion .item svg {
            height: auto;
            width: 2em;
        }

        .accordion .item.active .description {
            display: block;
        }

        .payment-method {
            display: flex;
            flex-wrap: wrap;
            font-size: 1.2em;
        }

        .payment-method .item {
            width: 50%;
            padding: 10px 15px;
            display: flex;
            height: fit-content;
            align-items: center;
        }

        .payment-method .item h6 {
            font-weight: bold;
        }

        .payment-method .item svg {
            height: auto;
            width: 2em;
            margin-right: 10px;
        }

        .accordion .item .description {
            background-color: #f5f5f5;
            padding: 10px 100px 10px 30px;
            border: 1px solid #d9d9d9;
            border-top: 0;
            position: relative;
            display: none;
        }

        .delivery-form .check-list {
            display: flex;
            border: 1px solid;
        }

        .delivery-form .name label,
        .delivery-form .phone label {
            display: flex;
            flex-direction: column-reverse;
            color: #131326;
            font-size: 16px;

            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .delivery-form .name label span,
        .delivery-form .phone label span {
            opacity: 0.5;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        input:focus {
            outline: none;
        }

        input[type="text"]:focus+span {
            opacity: 1;
            font-size: 14px;
        }

        .delivery-form {
            width: 100%;
            align-items: center;
            display: flex;
            /* justify-content: center; */
        }

        .contact-form {
            min-width: 320px;
            /* text-align: center; */
        }

        .delivery-form .item {
            padding-bottom: 15px;
        }

        .delivery-form input.btn.btn-red {
            margin: 0 auto;
            display: block;
        }

        .contact-form h3 {
            text-align: center;
            margin: 20px 0 25px;
        }

        .delivery-form .name input,
        .delivery-form .phone input {
            -webkit-appearance: none;
            border-radius: 0;
            background: none;
            border: 0;
            border-bottom: 1px solid #d9d9d9;
            font-size: 16px;
            line-height: 20px;
            margin-bottom: 10px;
            padding: 10px 0 5px;
            width: 100%;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #000;
        }

        .delivery-form .check-list .check-item {
            width: 50%;
        }

        .delivery-form .check-list .check-item label {
            cursor: pointer;
            width: 100%;
            margin: 0;
            font-size: 1.4em;
            text-align: center;
        }

        input[type="radio"]:checked+div {
            background-color: #131326;
            color: #fff;
        }

        .delivery-form .check-list .check-item input {
            display: none;
        }

        .contact-map {
            display: flex;
            border: 1px solid #193867;
            border-radius: 12px;
            overflow: hidden;
        }

        .info {
            width: 30%;
            color: #fff;
            background-color: rgba(19, 19, 38, 0.8);
            z-index: 10;
            text-align: left;
            padding: 15px 10px;
            display: flex;
            flex-direction: column;
            font-size: 1.2em;
        }

        .info a {
            font-size: 1.2em;
            color: #fff;
        }

        .phone-row {
            width: 100%;
            height: 50px;
            background: #fff;
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            z-index: 9999;
        }

        .pre-price .open-modal,
        .pre-price .reserv-show,
        .pre-price span.price {
            width: 100%;
            margin-top: 10px;
        }

        .phone-row ul.zakaz li {
            margin: 0;
        }

        .phone-row ul.zakaz {
            padding: 0;
        }

        @media screen and (max-width: 991.99px) {

            .q-result {
                border: none;
            }

            .left-nav,
            .right-nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-middle a,
            .left-nav form,
            form input[type="search"] {
                width: 100%;
            }

            form input[type="search"] {
                margin: 0 10px;
                padding: 10px 15px;
            }

            .left-nav form {
                display: flex;
            }

            .step {
                width: auto;
                margin: 10px auto;
            }

            a.logo>img {
                height: auto;
                margin-bottom: 10px;
            }

            .col-center {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
            }

            .col-center:first-child {
                margin-top: 10px;
            }

            .col-center>* {
                margin-bottom: 10px;
            }
        }

        @media screen and (max-width: 767.99px) {
            .product-item {
                width: 100%;
            }

            .kategory-list .item {
                width: calc(50% - 30px);
            }

            .price-table {
                width: 100%;
            }

            .btns {
                width: 100%;
            }

            .btns>a {
                margin-bottom: 15px;
                padding: 10px 0;
                font-size: 1.2em;
            }

            .oneclick-block {
                flex-direction: column;
                padding: 20px 0;
            }

            .oneclick-description {
                width: 100%;
                display: flex;
                justify-content: center;
                text-align: center;
                font-size: 1.2em;
            }

            .oneclick-form-block {
                height: auto;
                width: 100%;
            }

            .oneclick-form-block form {
                display: flex;
                flex-direction: column;
            }

            #footer .inner {
                flex-direction: column;
            }

            .contact-map {
                border: none;
                flex-direction: column;
            }

            .info {
                width: auto;
            }

            header {
                padding-bottom: 55px;
            }
        }
    </style>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        .kategory-list {
            display: flex;
            flex-wrap: wrap;
        }

        .kategory-list .item {
            text-align: center;
            border: 1px solid black;
            width: 25%;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('products.index') }}">Категории</a>
            @guest
            <a href="{{ route('login') }}"> Войти </a>
            <a href="{{ route('register') }}"> Регистрация </a>
            @endguest
            @auth
            <a href="{{ route('home') }}"> Заказы </a>
            <a href="{{ route('logout') }}"> Выйти </a>
            @endauth
        </nav>
    </header>
    @if (session()->has('succsess'))
    <p class="alert">{{ session()->get('succsess') }}</p>
    @endif
    @yield('content')
</body>

</html>