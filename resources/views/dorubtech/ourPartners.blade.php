<x-scale>
    <div style="margin-top: 100px">

    </div>
    <section class="team text-center">
        <div class="container">
            <div class="header my-5">
                @php
                    $our=explode(" ",__("translations.our_partners"))[0];
                    $partners=explode(" ",__("translations.our_partners"))[1];
                @endphp
                <x-paragraph boldtitle="{{$our}}" normaltitle="{{$partners}}" body="{{ $body }}" />
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="img-block mb-5">
                        <img src="https://www.mintformations.co.uk/blog/wp-content/uploads/2020/05/shutterstock_583717939.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                        <div class="content mt-2">
                            <h4>Zain Knob</h4>
                            <p class="text-muted">Mechanical Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ">
                    <div class="img-block mb-5">
                        <img src="https://www.logodesign.net/logo/abstract-cuboid-building-4519ld.png" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                        <div class="content mt-2">
                            <h4>Syndia Lee</h4>
                            <p class="text-muted">Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="img-block mb-5">
                        <img src="https://gfx4arab.com/wp-content/uploads/2018/12/blue-company-logo_1057-513.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                        <div class="content mt-2">
                            <h4>Noel Flantier</h4>
                            <p class="text-muted">Joomla Specialist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="img-block mb-5">
                        <img src="https://seeklogo.com/images/C/corporate-company-logo-BAE6B43FF7-seeklogo.com.png" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                        <div class="content mt-2">
                            <h4>Bobby Doe</h4>
                            <p class="text-muted">Street Artist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-fab/>
</x-scale>
