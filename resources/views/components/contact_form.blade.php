<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-11 col-xs-11">
            <form action="/sendEmail" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg col-md col-sm-12 col-xs-12 form-group">
                        <input
                            class="text-white form-control bg-dark d-inline float-left"
                            type="text"
                            name="sender_name"
                            id=""
                            value="{{ old("sender_name") }}"
                            placeholder="Your name">

                        @error("sender_name")
                        <p class=" text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-lg col-md col-sm-12 col-xs-12 form-group">
                        <input
                            class="text-white form-control bg-dark d-inline float-right"
                            name="sender_email"
                            value="{{old("sender_email")}}"
                            type="text"
                            placeholder="Your email">
                        @error("sender_email")
                        <p class=" text-danger">{{$message}}</p>
                        @enderror
                    </div>

                </div>
                <div class="row ">
                    <div class="col-lg col-md col-sm-12 col-xs-12 text-center form-group">
                        <input
                            class=" text-white form-control bg-dark"
                            name="sender_number"
                            value="{{old("sender_number")}}"
                            type="text"
                            name=""
                            id=""
                            placeholder="Your phone number">
                        @error("sender_number")
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class=" row form-group justify-content-center">
                    <div class="col-lg-12 col-md col-sm-12 col-xs-12 ">
                        <textarea
                            name="sender_message"
                            class="text-white form-control bg-dark "
                            id="exampleFormControlTextarea1"
                            rows="5"
                            placeholder="your message here...">{{old("sender_message")}}</textarea>
                        @error("sender_message")
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md col-sm-12 col-xs-12 text-center">
                        <input class="text-white btn btn-primary" id="btn_contact" type="submit" value="send message">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md col-sm-12 col-xs-12 mt-3">
                    @if(session()->has("success"))
                        @php
                        $message=session("success");
                        @endphp
                        <x-flash_message message="{{$message}}" error="{{false}}"/>
                    @endif
                        @if(session()->has("error"))
                            @php
                                $message=session("error");
                            @endphp
                            <x-flash_message message="{{$message}}" error="{{true}}"/>
                        @endif
                    </div>
                </div>

            </form>
        </div>
        <div class="col-lg-5 mt-4">
            <div class="row">
                <div class="col-2">
                    <a class="form-contacts"><i class="fas fa-location-arrow"></i></a>
                </div>
                <div class="col">
                    <b>Address</b>
                    <p>the adress of the comopany goes here....</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <a class="form-contacts"><i class="fas fa-envelope"></i></a>
                </div>
                <div class="col">
                    <b>Email</b>
                    <p>the email of the comopany goes here....</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <a class="form-contacts"><i class="fas fa-phone-volume"></i></a>
                </div>
                <div class="col">
                    <b>Phone number</b>
                    <p>the phone numbers of the comopany goes here....</p>
                </div>
            </div>

        </div>

    </div>
</div>
