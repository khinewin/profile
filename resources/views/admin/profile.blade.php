@extends('admin.layouts.dashboard')

@section('title')
    Profile | NEW TECH MAWLAMYINE
    @stop

@section('page_heading','Profile')

@section('section')

    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-6">

                <div class="panel panel-body">

                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-user-circle" title="Username"> {{$user->user_name}}</i></li>
                        <li class="list-group-item"><i class="fa fa-envelope" title="Email"> {{$user->email}}</i></li>
                        <li class="list-group-item"><i class="fa fa-clock-o" title="Joined Date"> {{date('D(d)/m/Y', strtotime($user->created_at))}}</i></li>
                    </ul>

                </div>

            </div>
            <div class="col-md-6">

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

@endsection