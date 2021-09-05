<x-scale>
    <div style="margin-top: 100px">
        @php
            $us=explode(" ",__("translations.contact_us"))[1];
            $contact=explode(" ",__("translations.contact_us"))[0];
        @endphp
        <x-paragraph boldtitle="{{$contact}}" normaltitle="{{$us}}" body=" " />
    </div>

    <div style="margin-bottom: 40px">
        <x-contact_form/>
        </div>
    <x-fab/>
</x-scale>
