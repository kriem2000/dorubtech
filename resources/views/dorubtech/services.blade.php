<x-scale>
    <div style="margin-top: 100px">
        @php
            $our=explode(" ",__("translations.dorubtech_srv"))[0];
            $services=explode(" ",__("translations.dorubtech_srv"))[1];
        @endphp
        <x-paragraph boldtitle="{{$services}}" normaltitle="{{$our}}" body="" />
    </div>
    <x-slider/>
    <x-fab/>
</x-scale>
