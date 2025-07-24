<style>

    :root{
        --theme-color: #f85b00;
        --theme-dark-blue: #06051f;
        --theme-purple: #342ead;
        --theme-orange: #f85b00;
        --theme-white: #fff;
        --theme-light: #f5f5f5;
        --theme-gray: #696969;
        --theme-text: #f5f5f5;
        --theme-text-muted: #b3b3b3;
        --theme-bg: #040416;
        --theme-bg-secondary: #06051f;
    }

    p,li, ol{
        font-size: 18px;
    }

    body {
        font-family: 'Josefin Sans', sans-serif;
        background: var(--theme-bg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        color: white
    }

    .card{
        background-color: #06051f;
        color: white;
    }

    .text-muted{
        color: rgb(179, 179, 179) !important;
    }

    .blog-content a{
        color:rgb(248, 91, 0) !important
    }

    #hero-bg-video{
        position: absolute;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
    }

    .hero-bg{
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5))
    }

    .overlay{
        min-height: 100vh;
    }

    .footer-bg{
        /* background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('/assets/img/footer_bg.svg'); */
        background: #06051f;
    }

    /* .navbar{
        opacity: 0;
        transform: translateY(-20px);
        transition: opacity 0.4s ease, transform 0.4s ease;
    } */

     /* Show navbar */
    .navbar.show {
        opacity: 1;
        transform: translateY(0);
    }

    .navbar .navbar-nav .nav-item a{
        color: #fff;
        font-size: 14px !important
    }

    .my-name{
        font-size: 75px;
        font-weight: 700;
        background: -webkit-linear-gradient(180deg, #fff, #ff580b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-orange{
        color: rgb(248, 91, 0);
    }

    .bg-orange{
        background-color: rgb(248, 91, 0);
    }

    .text-purple{
        color:rgb(106, 16, 170)
    }

    .bg-dark-blue{
        background-color: #342ead;
    }

    .btn-outline-orange{
        border: 2px solid rgb(248, 91, 0);
        border-radius: 25px;
    }

    .btn-outline-orange:hover{
        border: 2px solid rgb(248, 91, 0);
        border-radius: 25px;
        background-color: rgb(248, 91, 0);
        color: #fff !important;
    }

    .btn-orange{
        border: 2px solid rgb(248, 91, 0);
        border-radius: 25px;
        background-color: rgb(248, 91, 0);
        color: #fff;
    }

    .btn-orange:hover{
        background-color: #fff;
        color: #000;
        border: 2px solid rgb(248, 91, 0);
        border-radius: 25px;
    }

    .slow-motion{
        animation: mymove 3s infinite alternate;
        /* animation-timing-function: linear; */
    }

    .experience-card{
        position: absolute;
        bottom: 4%;
        right: -6%;
        border-radius: 18px;
        background: linear-gradient(90deg, #fff, #fdb08d);
    }

    .projects-card{
        position: absolute;
        top: 0%;
        right: -8%;
        border-radius: 18px;
        background: linear-gradient(90deg, #fff, #fdb08d);
    }

    .page-title{
        position: relative;
        overflow: hidden;
        background: #09072d;
    }

    .page-title .row{
        min-height: 360px;
        height: initial;
    }

    .page-title h1{
        background: linear-gradient(244deg, #8b85ff 0%, #ffeae8 100%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 75px;
        font-weight: 800;
    }

    footer h1{
        background: linear-gradient(244deg, #8b85ff 0%, #ffeae8 100%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 75px;
        font-weight: 800;
    }

    .breadcrumb-item, 
    .breadcrumb-item + .breadcrumb-item::before {
        color: #fff; 
    }

    .form-control{
        background: none;
        color: #ffeae8
    }

    .form-control::placeholder{
        color: #ffeae83d
    }

    .form-control:focus{
        background: none !important;
        border-color: var(--theme-color) !important;
        box-shadow: none !important;
        transition: background-color 0.3s, border-color 0.3s;
        color: var(--theme-color);
    }

    .nav-link.active{
        color: var(--theme-color) !important;
        font-weight: 800
    }

    /* #projects{
        color: #000 !important;
    } */

    .project-img{
        transition: 0.5s all ease-in-out;
        height: 140px;
    }
    .project-img:hover{
        transform: scale(1.1);
    }

    section#experience .card .card-header{
        background-color: #09072d;
        color: white
    }

    #experties{
        position: relative;
    }

    #experties #icons img{
        position: absolute;
        height: 25px;
        width: 25px;
        animation: iconAnimate 8s infinite;
    }
    img#php-icon{
        top: 15%;
        right: 15%
    }

    img#tailwind-icon{
        top: 25%;
        right: 20%
    }

    img#laravel-icon{
        top: 15%;
        right: 26%
    }

    img#vue-icon{
        top: 23%;
        right: 32%
    }

    @keyframes iconAnimate{
        0% {transform: rotate(360deg);}
    }

    @media only screen and (max-width: 991px){
        /*Big smartphones [426px -> 600px]*/
        .project-img{
            height: 210px;
        }

        .hero-bg{
            background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url('/assets/img/footer_bg.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover
        }
    }

    @media only screen and (max-width: 600px){
        /*Big smartphones [426px -> 600px]*/
        .project-img{
            height: 230px;
        }
    }

    @media only screen and (max-width: 426px){
        /*Small smartphones [426px]*/
        .project-img{
            height: 185px;
        }
    }

    @media only screen and (max-width: 600px){
        
        .my-name{
            font-size: 58px
        }
        
        .experience-card{
            position: absolute;
            bottom: -8%;
            right: 5%;
            border-radius: 18px;
        }
    }

    @keyframes mymove {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(20px);
        }
    }

    .scroll {
        width: 50px;
        height: 50px;
        border: 2px solid #696969;
        border-radius: 50%;
        position: absolute;
        bottom: 5%;
        left: 48%;
        animation: down 1.5s infinite;
        -webkit-animation: down 1.5s infinite;
        cursor: pointer;
        &::before {
            content: '';
            position: absolute;
            top: 14px;
            left: 16px;
            width: 15px;
            height: 15px;
            border-left: 2px solid #fbfbfb;
            border-bottom: 2px solid #fbfbfb;
            transform: rotate(-45deg);
        }
    }

    @keyframes down {
        0% {
            transform: translate(0);
        }
        20% {
            transform: translateY(15px);
        }
        40% {
            transform: translate(0);
        }
    }

    @-webkit-keyframes down {
        0% {
            transform: translate(0);
        }
        20% {
            transform: translateY(15px);
        }
        40% {
            transform: translate(0);
        }
    }

    .scroll-to-top div{
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        opacity: 0;
        background-color: #09072d;
        border: 2px solid #696969;
        margin-right: 20px;
        margin-bottom: 20px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 9999;
        transition: opacity 0.3s ease;
        cursor: pointer;
        transform: translateY(20px); /* Moves slightly down */
        transition: opacity 0.4s ease, transform 0.4s ease;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .scroll-to-top div.show{
        opacity: 1;
        transform: translateY(0);
    }

    .border-orange{
        border: 1px solid var(--theme-color);
    }

    .border-orange:hover{
        box-shadow: 0 0 15px var(--theme-color);
    }

    .text-xs{
        font-size: 16px;
    }
</style>