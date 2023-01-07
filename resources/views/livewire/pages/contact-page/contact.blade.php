<div class="row1-container">
    <div class="box-details box-down cyan">
        <h2>TimeTable</h2>
        <p>Monday - Thursday: 8 - 16</p>
        <p>Friday: 8 - 13</p>
        <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
    </div>

    <div class="box-details red">
        <h2>Location</h2>
        <p><a class="text-color" href="https://goo.gl/maps/cQrY9N4UmRnqDGJx5" target="_blank">
                <span class="text">
                    Teodor Mihali Street, No.58-60, 400591, Cluj Napoca, Romania
                </span>
            </a></p>
        <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
    </div>

    <div class="box-details box-down blue">
        <h2>Email</h2>
        <p><a class="text-color" href="mailto:manuela.vlasin@yahoo.com"><span class="text">manuela.vlasin@yahoo.com</span></a></p>
        <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
    </div>
</div>
<div class="row2-container">
    <div class="box-details orange">
        <h2>Channels</h2>
        <p>MS Teams</p>
        <p>Zoom</p>
        <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
    </div>
</div>

<style>
    :root {
        --red: hsl(0, 78%, 62%);
        --cyan: hsl(180, 62%, 55%);
        --orange: hsl(34, 97%, 64%);
        --blue: hsl(212, 86%, 64%);
        --varyDarkBlue: hsl(234, 12%, 34%);
        --grayishBlue: hsl(229, 6%, 66%);
        --veryLightGray: hsl(0, 0%, 98%);
        --weight1: 200;
        --weight2: 400;
        --weight3: 600;
    }

    .attribution {
        font-size: 11px;
        text-align: center;
    }
    .attribution a {
        color: hsl(228, 45%, 44%);
    }

    p{
        margin-bottom: 0 !important;
    }

    h1:first-of-type {
        font-weight: var(--weight1);
        color: var(--varyDarkBlue);

    }

    .text-color{
        color: gray !important;
    }

    h1:last-of-type {
        color: var(--varyDarkBlue);
    }

    @media (max-width: 400px) {
        h1 {
            font-size: 1.5rem;
        }
    }

    .header {
        text-align: center;
        line-height: 0.8;
        margin-bottom: 50px;
        margin-top: 100px;
    }

    .header p {
        margin: 0 auto;
        line-height: 2;
        color: var(--grayishBlue);
    }


    .box-details p {
        color: var(--grayishBlue);
    }

    .box-details {
        border-radius: 5px;
        box-shadow: 0px 30px 40px -20px var(--grayishBlue);
        padding: 30px;
        margin: 20px;
    }

    img {
        float: right;
    }

    @media (max-width: 450px) {
        .box-details {
            height: 200px;
        }
    }

    @media (max-width: 950px) and (min-width: 450px) {
        .box-details {
            text-align: center;
            height: 180px;
        }
    }

    .cyan {
        border-top: 3px solid var(--cyan);
    }
    .red {
        border-top: 3px solid var(--red);
    }
    .blue {
        border-top: 3px solid var(--blue);
    }
    .orange {
        border-top: 3px solid var(--orange);
    }

    h2 {
        color: var(--varyDarkBlue);
        font-weight: var(--weight3);
    }

    .row1-container {
     margin-top: 100px;
    }


    @media (min-width: 950px) {
        .row1-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .row2-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box-down {
            position: relative;
            top: 150px;
        }
        .box-details {
            width: 20%;

        }
        .header p {
            width: 30%;
        }

    }
</style>
