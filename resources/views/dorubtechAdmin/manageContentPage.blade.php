@extends("layouts.app")
@section("styles")
    <link href="{{ asset('css/admincss.css') }}" rel="stylesheet">
@endsection

        @section("content")

           <div class="container h-100">
               <div class="row justify-content-around mt-1">
                   <div class="col col-md">
                        <div class="manage-card container p-5 border rounded text-center shadow">
                            <a class="text-dark" href="{{ route("addservice") }}">
                            <img class="pb-2" src="/admin_img/add.png" width="50" height="55">
                            <h2>Add new service</h2>
                        </a>
                        </div>                       
                   </div>

                   <div class="col col-md">
                       <div class="manage-card container p-5  border rounded text-center shadow ">
                           <a class="text-dark" href="#">
                            <img class="pb-2" src="/admin_img/new-user.png" width="50" height="55">
                            <h2>Add new partner</h2>
                           </a>
                       </div>
                   </div>

                   <div class="col col-md">
                       <div class="manage-card container p-5  border rounded text-center shadow">
                          <a class="text-dark" href="{{ route("aboutus-admin") }}">
                            <img  class="pb-2" src="/admin_img/pen.png" width="50" height="55">
                            <h2>Modify about us</h2>
                          </a>
                       </div>
                   </div>

                   
               </div>
               <div class="row justify-content-around mt-3">
               <div class="col col-md">
                    <div class="manage-card container p-5  border rounded text-center shadow">
                        <a class="text-dark" href="#">
                            <img  class="pb-2" src="/admin_img/edit.png" width="50" height="55">
                        <h2>Modify paragraph</h2>
                        </a>
                    </div>
                </div>
               </div>
           </div>

    @endsection

