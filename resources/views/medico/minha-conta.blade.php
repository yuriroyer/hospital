@extends('layouts.app.main')

@section('title')
    Minha Conta
@endsection

@section('content')
    <!-- DASHBOARD PROFILE SECTION -->
    <section class="clearfix bg-dark profileSection">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="dashboardBoxBg mb30">
                        <div class="profileImage">
                            <img src="assets/img/dashboard/user-2.jpg" alt="Image User" class="img-circle">
                            <div class="file-upload profileImageUpload">
                                <div class="upload-area">
                                    <input type="file" name="img[]" class="file">
                                    <button class="browse" type="button">Upload a Picture <i class="icon-listy icon-upload"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="profileUserInfo bt profileName">
                            <p>Your Current Plan</p>
                            <h2>Platinum Package</h2>
                            <h5>Next Payment: <span>15/01/2017</span></h5>
                            <a href="#" class="btn btn-primary">Change</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                        <div class="dashboardBoxBg">
                            <div class="profileIntro">
                                <h2>{{ $user->name }}</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form Ipsum available.</p>
                            </div>
                        </div>
                        <div class="dashboardBoxBg mt30">
                            <div class="profileIntro">
                                <h3>About You</h3>
                                <div class="row">
                                    {!! Form::model($user, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['MedicoController@updateMinhaConta']])!!}
                                    {{ csrf_field() }}
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="firstNameProfile">Fast Name</label>
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="emailProfile">Email</label>
                                        {!! Form::text('email', null, ['class' => 'form-control', 'disabled'=>'email']) !!}
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <label for="aboutYou">About You</label>
                                        <textarea class="form-control" rows="5" id="aboutYou" placeholder="About You"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-area mt30">
                            {!! Form::button('submit', ['class' => 'btn btn-primary btn-lg btn-block', 'type'=>'submit']) !!}
                        </div>

                        {{ Form::close() }}
                        <div class="dashboardBoxBg mt30">
                            <div class="profileIntro">
                                <h3>Update password</h3>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="currentPassword">Current Password</label>
                                        <input type="password" class="form-control" id="currentPassword" placeholder="********">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="newPassword">New Password</label>
                                        <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="confirmPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <button class="btn btn-primary" type="button">Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection