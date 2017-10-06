@extends ('admin.layouts.app')
@section('title')
    User Login | NEW TECH MAWLAMYINE
@stop
@section ('body')
    <div class="container">
        <div class="row" style="margin-top: 100px;margin-bottom: 100px;">

            <div class="col-md-4 col-md-offset-4">
                @if(Session('err'))<div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span> {{Session('err')}}</div>@endif

                <div id="authTitle">NEW TECH <br><small>MAWLAMYINE</small><br><small>User Login</small></div>

            @component('admin.widgets.panel')

                    @slot ('panelBody')
                        <form class="form-horizontal" role="form" method="POST" action="{{route('login')}}">
                            <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="email" class="control-label">Username</label>

                                    <input id="user_name" type="text" class="form-control" name="user_name"
                                           value="{{ old('user_name') }}" required autofocus>

                                    @if ($errors->has('user_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
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

                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6 text-center">
                                    <div class="checkbox-inline">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-success btn-block">
                                        Login
                                    </button>
                                    <br>
                                    <a class="btn-link" href="{{route('register')}}">
                                        Don't have an account ?
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
