<section id="customer">
        <div class="container col-8">
            <h2>Customers have consistently rated Around 4.7/5 stars</h2>
        </div>

        <div class="container">
            <div class="card col-4">
                <div class="stars-container">
                    @for ($i=0; $i<5 ;$i++)
                    <img src="{{ asset('slicing/images/icons/star.svg')}}" alt="">
                    @endfor
                </div>
                <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.</p>
                <img src="{{ asset('slicing/images/google.png')}}" alt="">
            </div>
            <div class="card col-4">
                <div class="stars-container">
                    @for ($i=0; $i<5 ;$i++)
                    <img src="{{ asset('slicing/images/icons/star.svg')}}" alt="">
                    @endfor
                </div>
                <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.</p>
                <img src="{{ asset('slicing/images/amazon.png')}}" alt="">
            </div>
            <div class="card col-4">
                <div class="stars-container">
                    @for ($i=0; $i<5 ;$i++)
                    <img src="{{ asset('slicing/images/icons/star.svg')}}" alt="">
                    @endfor
                </div>
                <p>Maecenas convallis non sapien in commodo. Nulla semper pulvinar luctus. Proin luctus.</p>
                <img src="{{asset('slicing/images/spotify.png')}}" alt="">
            </div>
        </div>
    </section>
