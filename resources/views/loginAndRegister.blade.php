<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    @vite('resources/css/login.css')
    @vite('resources/js/login.js')
</head>

<body>
<div class="container" id="container">
    <div class="form-container sign-up">
        <form>
            <h1>!همین حالا یک اکانت بساز</h1>
            <div class="social-icons">
                <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span style="font-size: math">ایمیل خود را وارد کنید برای ثبت نام</span>
            <input type="text" placeholder="نام">
            <input type="email" placeholder="ایمیل">
            <input type="password" placeholder="گذرواژه">
            <button style="font-size: larger">ثبت نام</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form>
            <h1>ورود</h1>
            <div class="social-icons">
                <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span style="font-size: math">ایمیل / گذرواژه را وارد کنید</span>
            <input type="email" placeholder="ایمیل">
            <input type="password" placeholder="گذرواژه">
            <a style="font-size: math" href="#">گذرواژه خود ر فراموش کرده اید؟</a>
            <button style="font-size: larger">ورود</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>!سلام دوست من</h1>
                <p>با مشخصات شخصی خود ثبت نام کنید تا از همه امکانات سایت استفاده کنید</p>
                <button style="font-size: math" class="hidden" id="login">ورود</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>!خوش برگشتی</h1>
                <p>اطلاعات شخصی خود را وارد کنید تا از تمام ویژگی های سایت استفاده کنید</p>
                <button style="font-size: math" class="hidden" id="register">ثبت نام</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>
