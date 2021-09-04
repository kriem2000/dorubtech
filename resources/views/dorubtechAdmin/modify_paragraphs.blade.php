@extends("layouts.app")
@section('styles')
    <link href="{{ asset('css/admincss.css') }}" rel="stylesheet">
    <!--fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

@endsection

@section("content")
    @if (session()->has("success"))
        @php
            $message=session("success")
        @endphp
        <x-flash_message message="{{ $message }}" error="{{ false }}"/>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <!-- for the partners -->
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>partner paragraph</b></h5>
                    <form class="" action="/modify_partners" method="post">
                        @csrf
                        <label class="mt-1 d-block" for="service_name"><b>body :</b></label>
                        <textarea
                            cols="6"
                            rows="8"
                            name="partners_body",
                            class="mb-2 form-control @error('partners_body') border border-danger @enderror">
                                    {{ old("partners_body") ?? $partners->pluck("body")[0]  }}
                                 </textarea>
                        @error('partners_body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                        <input name="partners_id" type="hidden" value="{{$partners->pluck("id")[0]}}">
                        <input
                            type="submit"
                            class="text-white btn btn-info mt-3 form-control"
                            value="update">
                    </form>
                </div>
            </div>
            <!-- for the partners end here-->

            <!-- for the first paragraph -->
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>first paragraph</b></h5>
                    <form class="" action="/modify_firstP" method="post">
                        @csrf
                        <label class="mt-1 d-block" for="service_name"><b>title :</b></label>
                        <input
                            type="text"
                            name="firstP_title",
                            class="form-control @error('firstP_title') border border-danger @enderror"
                            value="{{ old('firstP_title') ?? $firstP->pluck("title")[0]  }}">

                        @error('firstP_title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label class="mt-1 d-block" for="service_name"><b>body :</b></label>
                        <textarea
                            cols="6"
                            rows="8"
                            name="firstP_body",
                            class="mb-2 form-control @error('firstP_body') border border-danger @enderror">
                                    {{ old("firstP_body") ?? $firstP->pluck("body")[0]  }}
                                 </textarea>
                        @error('firstP_body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <input name="id" type="hidden" value="{{$firstP->pluck("id")[0]}}">
                        <input
                            type="submit"
                            class="text-white btn btn-info mt-3 form-control"
                            value="update">
                    </form>
                </div>
            </div>
            <!-- for the first p end here-->

            <!-- for the second paragraph -->
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>second paragraph</b></h5>
                    <form class="" action="/modify_secondP" method="post">
                        @csrf
                        <label class="mt-1 d-block" for="title"><b>title :</b></label>
                        <input
                            type="text"
                            name="secondP_title",
                            class="form-control @error('secondP_title') border border-danger @enderror"
                            value="{{ old('secondP_title') ?? $secondP->pluck("title")[0]  }}">

                        @error('secondP_title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label class="mt-1 d-block" for="service_name"><b>body :</b></label>
                        <textarea
                            cols="6"
                            rows="8"
                            name="secondP_body",
                            class="mb-2 form-control @error('secondP_body') border border-danger @enderror">
                                    {{ old("secondP_body") ?? $secondP->pluck("body")[0]  }}
                                 </textarea>
                        @error('secondP_body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <input name="id" type="hidden" value="{{$secondP->pluck("id")[0]}}">
                        <input
                            type="submit"
                            class="text-white btn btn-info mt-3 form-control"
                            value="update">
                    </form>
                </div>
            </div>
            <!-- for the second p end here--->


            <!-- for the third paragraph -->
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>third paragraph</b></h5>
                    <form class="" action="/modify_thirdP" method="post">
                        @csrf
                        <label class="mt-1 d-block" for="title"><b>title :</b></label>
                        <input
                            type="text"
                            name="thirdP_title",
                            class="form-control @error('thirdP_title') border border-danger @enderror"
                            value="{{ old('thirdP_title') ?? $thirdP->pluck("title")[0]  }}">

                        @error('thirdP_title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <label class="mt-1 d-block" for="service_name"><b>body :</b></label>
                        <textarea
                            cols="6"
                            rows="8"
                            name="thirdP_body",
                            class="mb-2 form-control @error('thirdP_body') border border-danger @enderror">
                                    {{ old("thirdP_body") ?? $thirdP->pluck("body")[0]  }}
                                 </textarea>
                        @error('thirdP_body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <input name="id" type="hidden" value="{{$thirdP->pluck("id")[0]}}">
                        <input
                            type="submit"
                            class="text-white btn btn-info mt-3 form-control"
                            value="update">
                    </form>
                </div>
            </div>
            <!-- for the third p end here-->

        </div>
    </div>
@endsection
