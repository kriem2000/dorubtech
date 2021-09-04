<x-app-layout>
    @section('styles')
        <link href="{{ asset('css/admincss.css') }}" rel="stylesheet">

    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section("content")
        <div class="container text-center">

            <div class="col"> <h3  class="text-secondary "> welcome to the panel control ...</h3></div>
            <h5  class="text-secondary "> here you can change the content of your website ...</h5>
            <h5  class="text-secondary "> here you can modify,update and delete paragraphs and also add new services to your website ...</h5>
            <h5  class="text-secondary "> so please choose one of the options above to start manage the content of your website ...</h5>

        </div>
    @endsection
</x-app-layout>
