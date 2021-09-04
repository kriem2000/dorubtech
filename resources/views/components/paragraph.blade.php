<!-- page paragraph !-->
<div class="container">
    <div class="row p-5 " id="appSummary">
        <div class="col text-center">
            <h1 class="paragraph-h1">
                <span class="paragraph-h1-first-letter">{{ $boldtitle ?? 'empty' }}</span> {{ $normaltitle ?? 'empty' }}</h1>
            
            <div class="row justify-content-center">
                <div class="d-none d-lg-block">
                    <img src="/img/heading_border_left.png" alt="">
                </div>
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="paragraph-container">
                    
                    <p class="leading-paragraph d-inline px-3">
                        {{ $body ?? "empty" }}
                    </p>
                    
                </div>
            </div>
                <div class=" d-none d-lg-block">
                    <img  src="/img/heading_border_right.png" alt="">
                </div>
            </div>
                
        </div>
    </div>
</div>
<!-- end page paragraph !-->
