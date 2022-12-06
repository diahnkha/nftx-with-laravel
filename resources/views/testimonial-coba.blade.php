@extends("template-coba")

@section("content")

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



@endsection
