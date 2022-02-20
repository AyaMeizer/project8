    @extends('layouts.app')






        @section('content')
        <br>
        <br>
            <div class="container" style="min-height: 70vh;">
                <div class="row gutters-sm" style="    min-height: 70vh;
                display: flex;
                flex-direction: column;


                align-items: center;
                width: 100%;">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header border-bottom mb-3 d-flex d-md-none">
                                <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                                    <li class="nav-item">
                                        <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-settings">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path
                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                </path>
                                            </svg> Edit Information</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#Booking" data-toggle="tab" class="nav-link has-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-credit-card">
                                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10"></line>
                                            </svg> Your Booking</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body tab-content">
                                <div class="tab-pane active" id="profile">
                                    @if (Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ Session::get('success') }}</p>
                                        </div>
                                    @endif
                                    <br>
                                    <h6>YOUR PROFILE INFORMATION</h6>
                                    <hr>
                                    <form>

                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input disabled type="text" class="form-control" id="fullName"
                                                aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                                value="{{ $userD->name }}">

                                        </div>
                                        <div class="form-group">
                                            <label for="bio">Email</label>
                                            <input disabled type="text" class="form-control" id="fullName"
                                                aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                                value="{{ $userD->email }}">

                                        </div>
                                        <div class="form-group">
                                            <label for="url">Phone</label>
                                            <input disabled name="phone" type="text" class="form-control" id="url"
                                                placeholder="Enter your website address" value="{{ $userD->phone }}">
                                        </div>


                                        {{-- <button type="button" class="btn btn-primary">Update Profile</button>
                    <button type="reset" class="btn btn-light">Reset Changes</button> --}}
                                    </form>
                                </div>
                                <div class="tab-pane" id="account">
                                    <br>
                                    <h6>ACCOUNT SETTINGS</h6>
                                    <hr>
                                    <form method="POST" action="{{ url('updateUser/' . $userD->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input name="name" type="text" class="form-control" id="fullName"
                                                aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                                value="{{ $userD->name }}">

                                        </div>
                                        <div class="form-group">
                                            <label for="bio">Email</label>
                                            <input name="email" type="text" class="form-control" id="fullName"
                                                aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                                value="{{ $userD->email }}">

                                        </div>
                                        <div class="form-group">
                                            <label for="url">Phone</label>
                                            <input name="phone" type="text" class="form-control" id="url"
                                                placeholder="Enter your website address" value="{{ $userD->phone }}">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update Profile</button>

                                    </form>
                                </div>

                                <div class="tab-pane" id="Booking">
                                    <br>
                                    <h6>Your Bookings:</h6>
                                    <hr>


                                    <div className='customProfile'>
                                        <table style="width: 100%">
                                            <tr>
                                                <th>Reserved Name</th>
                                                <th>Movie</th>
                                                <th>Phone</th>

                                                <th>Price</th>

                                            </tr>


                                            @foreach ($booking as $item)
                                                <tr class="border">
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->movie->name }}</td>
                                                    <td>{{ $item->phone }}</td>

                                                    <td>{{ $item->price }} JD</td>

                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endsection

