<x-scale>

    <div style="margin-top: 100px">
        @php
        $about=explode(" ",__("translations.about_us"))[0];
        $us=explode(" ",__("translations.about_us"))[1];
        @endphp
        <x-paragraph boldtitle="{{$about}}" normaltitle="{{$us}}" body="{{ $aboutus }}" />
    </div>
    <x-fab/>

</x-scale>
