<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nftx</title>
    <link rel="icon" href="{{ asset('slicing/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset('slicing/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:wght@100;200;300;400;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

    @include("components.navbar")
    @include("components.hero")
    @include("components.customer")

    <section id="how">
        <div class="container">
            <div class="col title col-8">
                <h2>How Does It Work?</h2>
                <p>Using basic skills you can improve your business stuff with Around</p>
            </div>
        </div>

        <section id="vector-garis">
        <div class="vector">
            <div class="container">
                <div class="card col-3">

                        <h2>
                            1. Target youur audience effectively
                        </h2>
                        <p>
                            Using basic skills you can improve your business stuff with Around Using basic skills
                        </p>

                </div>
                <div class="card col-3">

                        <h2>
                            1. Target youur audience effectively
                        </h2>
                        <p>
                            Using basic skills you can improve your business stuff with Around Using basic skills
                        </p>

                </div>
                <div class="card col-3">

                        <h2>
                            3. Easily download your tables and data
                        </h2>
                        <p>
                            Using basic skills you can improve your business stuff with Around Using basic skills
                        </p>

                </div>
                <div class="card col-3">

                        <h2>
                            4. Access to dashboard from all devices
                        </h2>
                        <p>
                            Using basic skills you can improve your business stuff with Around Using basic skills
                        </p>

                </div>


            </div>
        </div>
        </section>

    </section>

    <section id="robust">
        <div class="container">
            <div class="col col-6">
                <img src="{{asset('slicing/images/robust.png')}}" alt="robust picture">
            </div>
            <div class="col col-6">
                <h2>The robust and highly customizable data analysis tool</h2>
                <p>Using basic skills you can improve your business stuff with Around Using basic skills you can improve your business stuff with Around Using basic skills</p>
            </div>
        </div>
    </section>

    <section id="analyse">
        <div class="container">
            <div class=" col col-6">
                <div class="box"> <span>Analytise</span></div>
                <h2>Analyze our data in a few clicks without too many stteings</h2>
                <ul>
                    <li>Using basic skills you can improve your business</li>
                    <li>Using basic skills you can improve your business</li>
                    <li>Using basic skills you can improve your business</li>
                    <li>Using basic skills you can improve your business</li>
                    <li>Using basic skills you can improve your business</li>
                </ul>
            </div>
            <div class="col col-6 box-statistik">
                <img src="{{asset('slicing/images/statistik.png')}}" alt="robust picture">
            </div>
        </div>
    </section>

    <section id="pricing">
        <div class="container">
            <div class="col col-8">
                <h2>Pricing</h2>
                <p>Using basic skills you can improve your business stuff with Around</p>
            </div>
        </div>

        <div class="container">
            <div class="card-price yellow-card col-4">
                <table>
                    <tr>
                        <td><img src="{{asset('slicing/images/piala.png')}}" alt=""></td>
                        <td>
                            <p style="color: #EDCB50 ;">Starter</p>
                            <div><strong>$ 15</strong><em>Per month</em></div>
                        </td>
                    </tr>
                </table>
                <hr class="price-garis">
                <table class="approve">
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-yellow.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-yellow.png')}}" alt=""></td>
                        <td><p>Using basic skills you can impr</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-yellow.png')}}" alt=""></td>
                        <td><p>Using basic skills you can improve</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/close.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/close.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/close.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                </table>
                <button class="btn-yellow">Get Start</button>
            </div>
            <div class="card-price blue-card col-4">
                <table>
                    <tr>
                        <td><img src="{{asset('slicing/images/piala-blue.png')}}" alt=""></td>
                        <td>
                            <div class="button-card-blue">
                                <p style="color: #1681FE ;">Business</p>
                                <div class="button-card-blue-detail" >Recomented</div>
                            </div>
                            <div><strong>$ 15</strong><em>Per month</em></div>
                        </td>
                    </tr>
                </table>
                <hr class="price-garis">
                <table class="approve">
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-blue.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-blue.png')}}" alt=""></td>
                        <td><p>Using basic skills you can impr</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-blue.png')}}" alt=""></td>
                        <td><p>Using basic skills you can improve</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-blue.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/close.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/close.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                </table>
                <button class="btn-blue">Get Start</button>
            </div>
            <div class="card-price green-card col-4">
                <table>
                    <tr>
                        <td><img src="{{asset('slicing/images/piala-green.png')}}" alt=""></td>
                        <td>
                            <p style="color: #448C74 ;">Premium</p>
                            <div><strong>$ 15</strong><em>Per month</em></div>
                        </td>
                    </tr>
                </table>
                <hr class="price-garis">
                <table class="approve">
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-green.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-green.png')}}" alt=""></td>
                        <td><p>Using basic skills you can impr</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-green.png')}}" alt=""></td>
                        <td><p>Using basic skills you can improve</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-green.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-green.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                    <tr>
                        <td class="jarak"><img src="{{asset('slicing/images/approve-green.png')}}" alt=""></td>
                        <td><p>Using basic skills you can</p></td>
                    </tr>
                </table>
                <button class="btn-green">Get Start</button>
            </div>
        </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <div class="col col-8" style="margin-bottom: 74px;">
                <h2>Testimonial</h2>
                <p>Using basic skills you can improve your business stuff with Around</p>
            </div>
        </div>

        <div class="container" style="display: flex;">
            <img src="{{asset('slicing/images/arrow-left.png')}}" alt="">
            <div class="testimonial-card">
                <img src="{{asset('slicing/images/foto-leslie.png')}}">
                <div class="testimonial-content">
                    <h1>Leslie Alexander</h1>
                    <h4>CEO, Digital PT</h4>
                    <hr style="width: 189px; text-align: left; margin-left: 0;">
                    <h3>Nulla facilisi. Vestibulum non est nisl. Donec eget sodales nisl. Donec ut velit erat. Etiam non erat volutpat, consectetur nunc vitae, posuere diam.</h3>
                    <h3>Sed nisl nisi, rhoncus nec orci at, convallis ullamcorper purus. Suspendisse placerat tortor vitae neque iaculis efficitur. Nulla sed consectetur mi, nec tempor lorem. Aenean nec aliquet leo.</h3>
                </div>
            </div>
            <img src="{{asset('slicing/images/arrow-right.png')}}" alt="">
        </div>
        <div class="container" style="margin-top: 32px;">
            <div class="round-indicator">
                <div class="round"></div>
                <div class="round grey"></div>
                <div class="round grey"></div>
                <div class="round grey"></div>
                <div class="round grey"></div>
            </div>
        </div>
    </section>

    <section id="planet">
        <div class="container">
            <div class="col-2 planet-content">
                <h1>The best flows on the planet, at your fingertips.</h1>
                <p>Nulla facilisi. Vestibulum non est nisl. Donec eget sodales nisl. Donec ut velit erat. </p>
                <div class="btn-planet">
                    <p>Start free 14 trial</p>
                    <img src="{{asset('slicing/images/planet-arrow.png')}}">
                </div>
            </div>
            <div class="col-2 planet-img">
                <img src="{{asset('slicing/images/planet.png')}}" alt="">
            </div>

        </div>
    </section>

    <section id="footer">
        <hr>
        <div class="container">
            <div class="footer-content">
                <img style="background-color: #FFFF; padding:0;" src="{{asset('slicing/images/footer-logo.png')}}" alt="">
                <h5 style="font-size: 18px; line-height: 32px;">Nulla facilisi. Vestibulum non est nisl. Donec eget sodales nisl. Donec ut velit erat. </h5>
                <h5 style="color: #293241;">© 2022 All rights reserved.</h5>
            </div>

            <div>
                <p>Explore</p>
                <p>Feature</p>
                <p>Who to work</p>
                <p>Pricing</p>
                <p>Reviews</p>
            </div>

            <div>
                <p>Privacy policy</p>
                <p>Legal</p>
                <p>Terms of service</p>
                <p>Help center</p>
            </div>

            <div>
                <p style="color: #293241; font-weight:700;">Social Media</p>
                <div class="brand-social-media">
                    <img src="{{asset('slicing/images/footer-logo-ig.png')}}" alt="">
                    <img src="{{asset('slicing/images/footer-logo-fb.png')}}" alt="">
                    <img src="{{asset('slicing/images/footer-logo-yt.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

</body>
</html>
