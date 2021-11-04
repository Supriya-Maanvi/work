@extends('admin.adminbase')
@section('content')
<div class="container-fluid">
    <br>
    <br>
    <div class="row bg-white">
        <div class="col-lg-9 mx-auto">
            <div class="jumbotron" style="background-image:url('{{asset('img_file/'.'1234.jpg')}}');height:400px;background-size:cover">
                <div class="row">
                    <div class="col mt-5 pt-5">
                        <div class="row">
                            <div class="col-lg-3 mx-auto mt-5 pt-5">
                                <div class="card rounded-circle" style="">
                                    <div class="card-body">
                                        <img src="{{asset('img_file/'.'IMG-20.jpg')}}" alt="" width="" class="card-image rounded-circle" style="max-width:200px;min-height:200px;background-size:cover;object-fit: contain">
                                        
                                    </div>
                                </div>
                                <a href="" class="btn float-right  me-5"><i class="fas fa-camera fa-lg"></i></a>

                            </div>
                        </div>
                    </div>    
                </div>
            </div>

            <h4 class="text-center mt-5">Supriya Kumari</h4>
            <hr>
        </div>
    </div>
    <div class="row bg-white">
        <div class="col shadow-sm">
            <div class="row bg-white">
                <div class="col-lg-8 mx-auto">
                    <ul class=" d-flex">
                        <a href="" class="nav-link">Post</a>
                        <a href="" class="nav-link">About</a> 
                        <a href="" class="nav-link">Friends</a>
                        <a href="" class="nav-link">Photos</a>
                        <a href="" class="nav-link">More</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mt-3 mx-auto">
            <div class="row">

                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h5></h5>
                            <h6 class="mt-1"><i class="fas fa-graduation-cap text-secondary fa-lg"></i> Works at {{ $userdetails->details->work}}</h6>
                            <h6 class="mb-2"><i class="fas fa-graduation-cap text-secondary fa-lg"></i> Studied at {{ $user->details->high_school}}</h6>
                            <h6 class="mb-2"><i class="fas fa-graduation-cap text-secondary fa-lg"></i> Studied at {{ $user->details->university}}</h6>
                            <h6 class="mb-2"><i class="fas fa-home text-secondary fa-lg"></i> Lives in {{ $user->details->city}}</h6>
                            <h6 class="mb-2"><i class="fas fa-map-marker-alt text-secondary fa-lg"></i> From {{ $user->details->home_town}}</h6>
                            <h6 class="mb-2"><i class="fas fa-heart text-secondary fa-lg"></i> {{ $user->details->relationship}}</h6>

                            <a href="#editModal" class="btn d-grid mt-2 fw-bold" data-bs-toggle="modal" data-bs-target="#editModal" style="background-color:rgb(230, 231, 236)">Edit Details</a>
               
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{route('details')}}" method="POST">
                                        @csrf
                                          <div class="mb-3">
                                              <input type="text" name="work" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                              <input type="text" name="high_school" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                              <input type="text" name="university" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                              <input type="text" name="city" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                              <input type="text" name="home_town" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                              <input type="text" name="relationship" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                              <input type="text" name="dob" class="form-control">
                                          </div>
                                          <div class="mb-3">
                                              <input type="submit" class="btn btn-success d-grid">
                                          </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <a href="" class="btn d-grid mt-2 fw-bold" style="background-color:rgb(230, 231, 236)">Add Hobbies</a>
                            <a href="" class="btn d-grid mt-2 fw-bold" style="background-color:rgb(230, 231, 236)">Edit Featured</a>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5>Photos</h5>
                            <a href="" class="nav-link d-flex">See All</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7"> 
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
                                            <input type="submit" class="btn d-grid text-white" value="Post" style="background-color:rgb(9, 132, 227)">
                                        </div>
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
                            <h5>Posts</h5>
                            <hr>
                        </div>
                    </div>
                    @foreach ($user->posts as $post)
                        <div class="card mt-3">
                            <div class="card-body">
                                <hr>
                                <table class="table">
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>{{$post->felling}}</td>
                                    </tr>
                                </table>
                            </div>
                            <img src="{{asset('photos/'.$post->photo)}}" alt="" width="">
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection