@extends('admin.adminbase')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 ">
                <br>
                <br>
                <br>
                <br>
                <div class="card">
                    <div class="card-body" style="position:absolute;right:0;height:100.5vh;overflow:scroll">
                        <div class="list-group list-group-flush" > 
                            <a href="{{route('adminprofile')}}" class="list-group-item list-group-item-action fw-bold"  style="background-color:rgb(245, 246, 250)">Supriya Kumari</a> 
                            <a href="" class="list-group-item list-group-item-action fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'covid19.png')}}" alt="" width="30px" class="">COVID-19 Information Center</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'find-friends.png')}}" alt="" width="30px">Find Friends</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'groups.png')}}" alt="" width="30px">Groups</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'marketplace.png')}}" alt="" width="30px">Marketplace</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'viddeos.png')}}" alt="" width="30px">Videos</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'events.png')}}" alt="" width="30px">Events</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'memories.png')}}" alt="" width="30px">Momories</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'saved.png')}}" alt="" width="30px">Saved</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'ad-center.png')}}" alt="" width="30px">Ad Center</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'ads-manager.png')}}" alt="" width="30px">Ads Manager</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'blood-donations.png')}}" alt="" width="30px">Blood Donations</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'buy-or-sell.png')}}" alt="" width="30px">Buy and sell groups</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'community-help.png')}}" alt="" width="30px">Community Help</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'fav.png')}}" alt="" width="30px">Favourites</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'flims.png')}}" alt="" width="30px">Flims</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'friend-lists.png')}}" alt="" width="30px">Friend Lists</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'friend-lists.png')}}" alt="" width="30px">Friend Lists</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'friend-lists.png')}}" alt="" width="30px">Friend Lists</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'friend-lists.png')}}" alt="" width="30px">Friend Lists</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'friend-lists.png')}}" alt="" width="30px">Friend Lists</a>
                            <a href="" class="list-group-item list-group-item-action  fw-bold" style="background-color:rgb(245, 246, 250)"><img src="{{asset('img_file/'.'friend-lists.png')}}" alt="" width="30px">Friend Lists</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
               <br>
               <br>
               <br>
               <br>
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <div class="card rounded-3">
                            <div class="card-body">
                                <a href="#create" data-bs-toggle="modal" data-bs-target="#create" class="btn d-grid rounded-pill text-secondary" style="background-color:rgb(245, 246, 250)">What's on your mind...?</a>
                                <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-center" id="exampleModalLabel">Create post</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{route('post')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <textarea name="body" rows="10" class="form-control border-0"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <input type="file" name="photo" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="felling" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" name="checkin" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <input type="submit" class="btn d-grid" style="background-color:rgb(9, 132, 227)">
                                            </div>
                                            <a href="" class="btn d-grid text-white" style="background-color:rgb(9, 132, 227)">Post</a>
                                        </form>
                                          

                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
               
                        <div class="card mt-3">
                            <div class="card-body">
                                <a href="" class="btn rounded-pill border-secondary"><i class="fas fa-video fa-lg text-info"></i>  Create Room</a>
                            </div>
                        </div>
                        @foreach ($posts as $post)
                        <div class="card mt-3">
                            
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>{{$post->felling}}</td>
                                    </tr>
                                </table>
                                
                            </div>
                            <img src="{{asset('photos/'.$post->photo)}}" alt="" width="" style="">
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <br>
                <br>
                <br>
                <br>
                <div class="card" >
                    <div class="card-body">
                        <i class="fas fa-search"></i>
                        <i class="fas fa-ellipsis-h"></i>
                        <div class="list-group list-group-flush bg-info" style="position:absolute;right:100;top:83px;height:100.5vh;overflow:scroll">  
                            <a href="" class="list-group-item list-group-item-action "><img src="{{asset('img_file/'.'covid19.png')}}" alt="" width="30px">Covid-lyiuhjkm,m,, uihuhhhho</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'find-friends.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'groups.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'marketplace.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'viddeos.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'events.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'memories.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'saved.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'ad-center.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'ads-manager.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'blood-donations.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'buy-or-sell.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'community-help.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'fav.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'flims.png')}}" alt="" width="30px">Covid-19</a>
                            <a href="" class="list-group-item list-group-item-action"><img src="{{asset('img_file/'.'friend-lists.png')}}" alt="" width="30px">Covid-19</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection