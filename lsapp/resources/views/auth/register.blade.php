@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('user_fname') ? ' has-error' : '' }}">
                            <label for="user_fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="user_fname" type="text" class="form-control" name="user_fname" value="{{ old('user_fname') }}" required autofocus>

                                @if ($errors->has('user_fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_lname') ? ' has-error' : '' }}">
                                <label for="user_lname" class="col-md-4 control-label">Last Name</label>
    
                                <div class="col-md-6">
                                    <input id="user_lname" type="text" class="form-control" name="user_lname" value="{{ old('user_lname') }}" required autofocus>
    
                                    @if ($errors->has('user_lname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('user_lname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">
                                <label for="user_type" class="col-md-4 control-label">User Type</label>
    
                                <div class="col-md-6">
                                    <input id="radioButton" type="radio" name="user_type" value="Bantay Bayan" required autofocus> Bantay Bayan <br>
                                    <input id="radioButton" type="radio" name="user_type" value="Barangay Staff" required autofocus> Barangay Staff <br>
                                    <input id="radioButton" type="radio" name="user_type" value="Barangay Council" required autofocus> Barangay Council <br>
    
                                    @if ($errors->has('user_type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('user_type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection