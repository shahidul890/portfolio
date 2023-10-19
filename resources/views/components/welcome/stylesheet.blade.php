<style>
    body {
        font-family: 'Josefin Sans', sans-serif;
    }

    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.9);
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
    }

    .preloader img {
        opacity: 0.4;
        width: 30%;
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
        bottom: 0;
        right: -10%;
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