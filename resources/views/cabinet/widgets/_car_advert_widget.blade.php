<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="info-box p-3">
            <span class="info-box-text">{{ __('fillable.Adverts') }}</span>
            <canvas id="chartjs-4" class="chartjs" height="250"></canvas>
        </div>
    </div>
</div>



<div class="col-lg-3 col-xs-6 d-none">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner text-white">
            <h3>150</h3>
            <p>Избранные</p>
        </div>
        <div class="icon">
            <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>


@section('script')
    <script>
        new Chart(document.getElementById("chartjs-4"), {
            "type":"doughnut",
            "data": {
                "labels":["Активный","Модерация","Черновик","Закрытый"],
                "datasets":[{
                    "label":"Объявления",
                    "data":[
                        {{ $countCarAdvertCabinet['car_advert_activate_count'] }},
                        {{ $countCarAdvertCabinet['car_advert_moderation_count'] }},
                        {{ $countCarAdvertCabinet['car_advert_draft_count'] }},
                        {{ $countCarAdvertCabinet['car_advert_closed_count'] }}
                    ],
                    "backgroundColor": [
                        "#6cb2eb",
                        "rgb(255, 205, 86)",
                        "#6c757d",
                        "#e3342f"
                    ]
                }]
            }
        });
    </script>
@endsection