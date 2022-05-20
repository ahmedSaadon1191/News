<div class="card card-body pt-1 mix_section mt-4 MyHover">
    <div class="row card_title">
        <div class="col-6">
            <h4>{{ __('welcome.mix') }}</h4>
        </div>

        <div class="col-6 text-end btn_controller_slider">
            <button><i class="bi bi-chevron-right" data-bs-target="#carouselExampleControls_mix"
                    data-bs-slide="next"></i>
            </button>
            <button><i class="bi bi-chevron-left" data-bs-target="#carouselExampleControls_mix"
                    data-bs-slide="prev"></i>
            </button>
        </div>

    </div>

    <!-- ====================-->

    <div id="carouselExampleControls_mix" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner repoerts_carousel">


            @for ($x = 0; $x < $chunk_mix->count(); $x++)

                <div class="carousel-item">
                    <div class="row mt-2 card_small_reports">
                        @php
                            $number = 0;
                        @endphp

                        @foreach ($chunk_mix[$x] as $item)
                            @php
                                $number = ++$number;
                            @endphp

                            @if ($number == 1)
                                <div class="col-md-6">
                                    <div class="main_post_for_mix mb-4"
                                        style="background-image: url('assets/images/{{ $item->photo }}');">
                                        <div class="overray"></div>
                                        <div class="post_content">
                                            <h6 class="mb-4">{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</h6>
                                            <h3>
                                            @php
                                           $val =  substr($item->body, 0, 100)
                                        @endphp

                                        {{  $val}} ....
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                            @endif

                        @endforeach

                        <div class="col-md-6">
                            @php
                                $number = 0;
                            @endphp
                            @foreach ($chunk_mix[$x] as $item)
                                @php
                                    $number = ++$number;
                                @endphp

                                @if ($number > 1)

                                    <div class="col-12 row mb-4">
                                        <div class="col-5">
                                            <div class="img_for_news" style="background-image: url('assets/images/{{ $item->photo }}')"></div>
                                        </div>
                                        <div class="col-7">
                                            <div class="small_text mt-1"> <i class="bi bi-clock"></i>{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}</div>
                                            <h6>{{ $item->title }}</h6>
                                        </div>
                                    </div>

                                @endif
                            @endforeach
                        </div>


                    </div>
                </div>

            @endfor

        </div>

    </div>


    <!-- ========================= -->


</div>
