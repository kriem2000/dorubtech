
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators d-none">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active justify-content-center">
            <div class="row justify-content-center">

            @foreach ($services as $service)
                @break($loop->index==4)
            <div class="col-md-3 {{ $loop->first || $loop->last ? "px-4" : '' }}" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                         src="{{ $service["img"] }}" alt="Card image cap" width="150" height="200">
                    <div class="card-body">
                        <h4 class="card-title">{{ $service["name"] }}</h4>
                        <p class="card-text">
                            {{ $service["desc"] }}
                        </p>
                        <a class="btn btn-primary disabled">read more</a>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
        </div>
        <!--/.First slide-->

        <!--Second slide-->
        @if($services_length > 4 )
                <div class="carousel-item">
                @for($i=4;$i<$services_length;$i++)
                    @break($i>=8)
                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                 src="{{ $services[$i]["img"] }}" alt="Card image cap" width="150" height="200">
                            <div class="card-body">
                                <h4 class="card-title">{{ $services[$i]['name'] }}</h4>
                                <p class="card-text">
                                    {{$services[$i]["desc"]}}
                                </p>
                                <a class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <!--/.Second slide-->
        @endif

    <!--third slide-->
        @if($services_length > 8 )
            <div class="carousel-item">
                @for($i=8;$i<$services_length;$i++)
                    @break($i>=12)
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="{{ $services[$i]["img"] }}" alt="Card image cap" width="15    0" height="200">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $services[$i]['name'] }}</h4>
                                    <p class="card-text">
                                        {{$services[$i]["desc"]}}
                                    </p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                @endfor
            </div>
            <!--/.third slide-->
        @endif

    </div>
    <!--/.Slides-->

    @if($services_length > 4)
        <!--Controls-->
            <div class="controls-top text-center">
                <a class="btn-floating border-rounded" href="#multi-item-example" data-slide="prev">
                    <i class="fas fa-chevron-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next">
                    <i class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->
        @endif

</div>
<!--end here Carousel Wrapper-->
