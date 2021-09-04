
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
        <div class="carousel-item active">

            @foreach ($services as $service)
            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                         src="{{ $service->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $service->name }}</h4>
                        <p class="card-text">
                            {{ $service->desc }}
                        </p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a class="btn btn-primary">Button</a>
                    </div>
                </div>
            </div>

        </div>
        <!--/.Second slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <div class="controls-top text-center">
        <a class="btn-floating border-rounded" href="#multi-item-example" data-slide="prev">
            <i class="fas fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next">
            <i class="fas fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

</div>
<!--end here Carousel Wrapper-->
