<div class="card mb-4">
    <div class="card card-body MyHover_blue">
        <div class="row card_title mb-2">
            <div class="col-6">
                <h6>Most Read Week</h6>
            </div>

            <div class="col-6 text-end btn_controller_slider pb-2">
                <button><i class="bi bi-chevron-right" data-bs-target="#carouselExampleControls_week"
                        data-bs-slide="next"></i>
                </button>
                <button><i class="bi bi-chevron-left" data-bs-target="#carouselExampleControls_week"
                        data-bs-slide="prev"></i>
                </button>
            </div>
            <hr>

        </div>

        <div id="carouselExampleControls_week" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner repoerts_carousel">

                @if ($chunk_read_week->count() > 0)
                    @for ($x = 0; $x < $chunk_read_week->count(); $x++)

                        <div class="carousel-item">
                            <div class="row mt-2 card_small_reports">

                                @foreach ($chunk_read_week[$x] as $item)

                                    <a href="#" class="row mb-2">
                                        <div class="col-6">
                                            <div class="img_for_most_read" style="background-image: url('assets/frontEnd/img/carousel-3.jpg')"></div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <p class="small_text"><i class="bi bi-clock"></i> il y a 1 seconde</p>
                                        </div>
                                    </a>

                                @endforeach
                            </div>
                        </div>

                    @endfor
                @endif



            </div>

        </div>


    </div>
</div>

