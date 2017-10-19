@extends('admin.layouts.app')

@section('title')
    NEW TECH MAWLAMYINE
    @stop


@section('body')

   <div class="page-header text-center  panel-primary navbar-fixed-top" id="pageHeader"><a href="/"><img src="logo.jpg" class="img-rounded" style="height: 98px;"></a> <a href="https://web.facebook.com/newtechgroupmawlamyine/" target="_blank" class="pull-right" style="margin-right: 20px;"><img src="fb.jpeg" style="width: 30px; border-radius: 30px"></a></div>
    <div class="page-header  panel-primary  navbar-fixed-top" id="pageHeader2"><a href="/"><img src="logo.jpg" class="img-rounded" style="height: 78px;margin-left: 10px; "></a> <a href="https://web.facebook.com/newtechgroupmawlamyine/" target="_blank" class="pull-right" style="margin-right: 20px;"><img src="fb.jpeg" style="width: 30px; border-radius: 30px"></a></div>

    <div class="container">

        <div class="panel-body" style="margin-bottom: 0px; margin-top: 100px; ">

            @foreach($stc as $st)
                <div class="col-sm-6 col-md-6">

                <div class="panel panel-info ">
                    <div class="panel-heading text-center"><h4><a href="{{route('posts',['cName'=>$st->class_name])}}">{{$st->class_name}}</a></h4> <span class="text-warning">Class Date : {{$st->class_date}}</span>
                        <br>
                        <span class="text-danger">
                        @if($st->text_ten)<td><span class="glyphicon glyphicon-map-marker"></span> {{$st->text_ten}}</td>@endif
                        </span>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                        <tr>
                            @if($st->text_one)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_one}}</td>@endif
                        </tr>
                            <tr>
                                @if($st->text_two)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_two}}</td>@endif
                            </tr>
                            <tr>
                                @if($st->text_three)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_three}}</td>@endif
                            </tr>
                            <tr>
                                @if($st->text_four)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_four}}</td>@endif
                            </tr>
                            <tr>
                                @if($st->text_five)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_five}}</td>@endif
                            </tr>
                            <tr>

                                @if($st->text_six)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_six}}</td>@endif
                            </tr>
                            <tr>

                                @if($st->text_seven)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_seven}}</td>@endif
                            </tr>
                            <tr>

                                @if($st->text_eight)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_eight}}</td>@endif
                            </tr>
                            <tr>
                                @if($st->text_nine)<td><span class="glyphicon glyphicon-ok-circle"></span> {{$st->text_nine}}</td>@endif
                            </tr>







                        </tr>
                        </table>
                    </div>
                </div>

                </div>

                @endforeach

        </div>

    </div>
    <div class="panel-footer panel-success text-center" style="margin-top: 0px">

        <p class="text-primary">အိမ္အမွတ္ (695-A)၊ ေအာက္လမ္းမႀကီး၊ ေမာင္ငံရပ္္၊  ေမာ္လၿမိဳင္ၿမိဳ႕။</p>
        <p><a class="text-warning" href="tel:0943134783"><span class="glyphicon glyphicon-phone"></span> : 0943134783</a></p>

    </div>

   <script type=text/javascript>
       $(window).on("load", function() {

           if ($(window).scrollTop() < 50) {
               $("#pageHeader2").hide();
           }else{
               $("#pageHeader2").show();
           }

       });
       $(window).on("scroll", function() {
           if ($(window).scrollTop() > 50) {

               $("#pageHeader").hide(700);
               $("#pageHeader2").show(700);
           } else {
               $("#pageHeader").show(700);
               $("#pageHeader2").hide(700);

           }
       });
   </script>

    @stop