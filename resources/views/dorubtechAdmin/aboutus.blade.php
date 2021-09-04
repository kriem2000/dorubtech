@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center p-3">
            <div class="col-6 form-group">
                <h4 class="text-dark">About us :</h4>
                <form action="/modify_aboutus" method="POST">
                    @csrf
                    
                    <textarea 
                            class="form-control shadow" 
                            cols="8" 
                            rows="10"
                            name="textarea" >
                        {{ old("textarea") ?? $aboutus }}
                    </textarea>
                    @error('textarea')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror        
                     <div class="text-center">
                    <input 
                    name="button"
                    type="submit" 
                    class="btn btn-info form-control mt-4 text-light" 
                    value="publish">
                    </div>

                    @if(session()->has("success"))
                    @php
                        $message=session("success")
                    @endphp
                    <x-flash_message message="{{$message}}" error="{{ false }}"/>
                    @endif
                </form>
            </div>
        </div>
    </div>    
@endsection