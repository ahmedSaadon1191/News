<div class="Economie_section mt-4">
    <div class="card card-body MyHover_blue">
        <div class="row card_title">
            <div class="col-6">
                <h4>Society</h4>
            </div>

            <div class="col-6 text-end btn_controller_slider">
                <button><i class="bi bi-chevron-right" data-bs-target="#carouselExampleControls_society"
                        data-bs-slide="next"></i>
                </button>
                <button><i class="bi bi-chevron-left" data-bs-target="#carouselExampleControls_society"
                        data-bs-slide="prev"></i>
                </button>
            </div>

        </div>

        <div id="carouselExampleControls_society" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner repoerts_carousel">

                @if ($chunk_Society->count() > 0)
                    @for ($x = 0; $x < $chunk_Society->count(); $x++)

                        <div class="carousel-item">
                            <div class="row mt-2 card_small_reports">
                                @php
                                    $number = 0;
                                @endphp

                                @foreach ($chunk_Society[$x] as $item)
                                @php
                                    $number = ++$number;
                                @endphp

                                @if ($number == 1)

                                    <img src="{{ asset('/assets/images/' . $item->photo)}}" class="img-fluid" alt="">
                                    <div class="medium_text mt-2 mb-1"> <i class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</div>
                                    <a href="post"><h4>{{ $item->title }}</h4> </a>

                                    <p>
                                    @php
                                           $val =  substr($item->body, 0, 100)
                                        @endphp

                                        {{  $val}} ....
                                    </p>

                                @else
                                    <a class="row mt-3">
                                        <div class="col-5">

                                            <div class="img_for_news" style="background-image: url('assets/images/{{ $item->photo }}')"></div>

                                        </div>
                                        <div class="col-7">
                                            <div class="small_text mt-1"> <i class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</div>
                                            <h6>{{ $item->title }}</h6>
                                        </div>
                                    </a>
                                @endif


                                @endforeach
                            </div>
                        </div>

                    @endfor
                @endif



            </div>

        </div>


    </div>
</div>
