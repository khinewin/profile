@extends ('admin.layouts.app')
@section('title')
   User Registration | NEW TECH MAWLAMYINE
    @stop
@section ('body')
    <div class="container">
        <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="col-md-4 col-md-offset-4">
                <div id="authTitle">NEW TECH <br><small>MAWLAMYINE</small><br><small>User Registration</small></div>
                @component('admin.widgets.panel')

                    @slot ('panelBody')
                        <form class="form-horizontal" role="form" method="POST" action="{{route('register')}}">
                            <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="user_name" class="control-label">Username</label>

                                    <input id="user_name" type="text" class="form-control" name="user_name"
                                           value="{{ old('user_name') }}" required autofocus>

                                    @if ($errors->has('user_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="email" class="control-label">Email</label>

                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="password" class="control-label">Password</label>

                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirm') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="password" class="control-label">Confirm Password</label>

                                    <input id="password_confirm" type="password" class="form-control" name="password_confirm" required>

                                    @if ($errors->has('password_confirm'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirm') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-success btn-block">
                                        Sign Up
                                    </button>
                                    <br>
                                    <a class="btn-link" href="{{route('login')}}">
                                        Already have an account ?
                                    </a>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
