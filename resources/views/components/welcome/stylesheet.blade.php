<style>
    body {
        font-family: 'Josefin Sans', sans-serif;
        /* background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('/assets/gifs/Blue-Connected-Particles.webp');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed; */
    }
    
    .hero-bg{
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('/assets/videos/hero-bg.webm');
        /* background-repeat: no-repeat;
        background-size: cover; */
        /* background-position: center; */
    }

    #hero-bg-video{
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    .footer-bg{
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('/assets/img/footer_bg.svg');
    }

    .navbar .navbar-nav .nav-item a{
        color: #fff
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
        color: #fff;
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
        bottom: 13%;
        right: -6%;
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

    .form-control:focus{
        border-color: #09072d;
        box-shadow: none;
        /* transition: background-color 0.3s, border-color 0.3s; */
    }

    .nav-link.active{
        color: #ff580b !important;
        font-weight: 800
    }

    .project-img{
        transition: 0.5s all ease-in-out;
        height: 140px;
    }
    .project-img:hover{
        transform: scale(1.1);
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
</style>