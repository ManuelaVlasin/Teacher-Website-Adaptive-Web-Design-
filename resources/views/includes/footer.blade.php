<section id="footer">
    <div class="main-content">
        <div class="left box"></div>
        <div class="center box">
            <h2>{{__('Contact Info')}}</h2>
            <div class="content">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <a href="https://goo.gl/maps/cQrY9N4UmRnqDGJx5" target="_blank">
                        <span class="text">
                            Teodor Mihali Street, No.58-60, 400591, Cluj Napoca, Romania
                        </span>
                    </a>
                </div>
                <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <a id="my_phone_number"><span class="text">0767544016</span></a>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <a href="mailto:manuela.vlasin@yahoo.com"><span class="text">manuela.vlasin@yahoo.com</span></a>
                </div>
            </div>
        </div>
        <div class="right box"></div>
    </div>
    <div class="bottom">
        <div style="text-align: center; background-color: #344966; color: #d9d9d9">
            <span class="credit">Interface Created By Manuela Vlasin| </span>
            <span class="far fa-copyright"></span><span> 2023 All rights reserved.</span>
        </div>
    </div>
</section>

@livewireScripts

<style>

    a{
        color: white;
    }

    .main-content{
        display: flex;
    }

    .main-content .box{
        flex-basis: 50%;
        padding: 10px 20px;
    }

    .box h2{
        font-size: 1.125rem;
        font-weight: 600;
        text-transform: uppercase;
        text-align: center;
        color: black;
    }
    .box .content{
        margin: 20px 0 0 0;
        position: relative;
        color: white;
    }
    .box .content:before{
        position: absolute;
        content: '';
        top: -10px;
        height: 2px;
        width: 100%;
        background: #87CEFA;
    }
    .box .content:after{
        position: absolute;
        content: '';
        height: 2px;
        width: 15%;
        top: -10px;
    }
    .left .content p{
        text-align: justify;
    }
    .left .content .social{
        margin: 20px 0 0 0;
        text-align: center;
    }
    .left .content .social a{
        padding: 0 2px;
    }
    .left .content .social a span{
        height: 40px;
        width: 40px;
        background: #344966;
        line-height: 40px;
        text-align: center;
        font-size: 18px;
        border-radius: 5px;
        transition: 0.3s;
    }
    .left .content .social a span:hover{
        background: #87CEFA;
    }
    .center .content .fas{
        font-size: 1.4375rem;
        background: #344966;
        height: 45px;
        width: 45px;
        line-height: 45px;
        text-align: center;
        border-radius: 50%;
        transition: 0.3s;
        cursor: pointer;
        color: #d9d9d9;
    }
    .center .content .fas:hover{
        background: #87CEFA;
    }
    .center .content .text{
        font-size: 1.0625rem;
        font-weight: 500;
        padding-left: 10px;
    }

    .center .content .phone{
        margin: 15px 0;
    }
    .right form .text{
        font-size: 1.0625rem;
        margin-bottom: 2px;
        color: #656565;
    }
    .right .newsletter-form .msg{
        margin-top: 10px;
    }
    .right .newsletter-form input, .right .newsletter-form textarea{
        width: 100%;
        font-size: 1.0625rem;
        background: #151515;
        padding-left: 10px;
        border: 1px solid #222222;
    }
    .right .newsletter-form input:focus,
    .right .newsletter-form textarea:focus{
        outline-color: #3498db;
    }
    .right .newsletter-form input{
        height: 35px;
    }
    .right .newsletter-form .btn{
        margin-top: 10px;
    }

    .bottom center{
        padding: 5px;
        font-size: 0.9375rem;
        background: #151515;
    }
    .bottom center span{
        color: #656565;
    }

    .newsletter-container{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #subscribebox{
        width: 700px;
        max-width: 100%;
        margin: auto;
        text-align: center;
        border-radius: 4px;
        padding: 60px 20px;
    }

    .newsletter-form{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    h3{
        font-size: 22px;
        text-align: center;
        font-weight: 700;
        font-family: inherit;
        color: white;
    }

    #email-input{
        width: 450px;
        max-width: 100%;
        font-family: inherit;
        color: #344966;
        text-align: left;
        font-weight: 500;
        border-radius: 2px;
        padding: 15px 0px 15px 20px;
        font-size: 14px;
        border: 2px solid #B9D9EB;
        background: white;
    }

    #email-input:focus, #email-input:hover{
        outline: 0px;
    }

    #subscribe-button{
        border: 0px;
        width: 150px;
        max-width: 100%;
        font-size: 14px;
        color: #F0F4EF;
        font-family: inherit;
        background: #344966;
        cursor: pointer;
        border-radius: 0px 2px 2px 0px;
        outline: 0;
        transition: all 0.2s;
    }

    #subscribe-button:hover{
        background: #213144;
    }


    @media screen and (max-width: 900px) {
        footer{
            /*position: relative;*/
            bottom: 0px;
        }
        .main-content{
            flex-wrap: wrap;
            flex-direction: column;
        }
        .main-content .box{
            margin: 5px 0;
        }
    }

    @media screen and (max-width: 400px) {
        .main-content .box{
            flex-basis: 50%;
            padding: 0;
        }
    }

    #footer {
        background-image: linear-gradient(60deg, #30CFD0 0%, #330867 100%);;
    }

    #footer h2 {
        color: white;
        font-weight: 500;
        font-size: 1.8rem;
        letter-spacing: 0.1rem;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<script>
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Mobile Chrome/i.test(navigator.userAgent)) {
        // true for mobile device
        console.log("mobile device");
        $('#my_phone_number').attr("href", "tel:0767544016");
    } else {
        // false for not mobile device
        console.log("not mobile device");
    }
</script>
