@extends('admin.layouts.dashboard')

@section('title')
    Class | NEW TECH MAWLAMYINE
    @stop

@section('page_heading','Class')

@section('section')

    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">

            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">New Class</div>
                    <div class="panel-body">

                        <form method="post" action="{{route('new_class')}}">
                            <div class="form-group">
                                <input type="text" name="class_name" id="class_name" class="form-control" placeholder="Class Name">
                            </div>
                            <div class="form-group">
                                <input type="datetime" name="class_date" id="class_date" class="form-control" placeholder="Class Date">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_ten" id="text_ten" class="form-control" placeholder="Location">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_one" id="text_one" class="form-control" placeholder="Text One">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_two" id="text_two" class="form-control" placeholder="Text Two">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_three" id="text_three" class="form-control" placeholder="Text Three">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_four" id="text_four" class="form-control" placeholder="Text Four">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_five" id="text_five" class="form-control" placeholder="Text Five">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_six" id="text_six" class="form-control" placeholder="Text Six">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_seven" id="text_seven" class="form-control" placeholder="Text Seven">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_eight" id="text_eight" class="form-control" placeholder="Text Eight">
                            </div>
                            <div class="form-group">
                                <input type="text" name="text_nine" id="text_nine" class="form-control" placeholder="Text Nine">
                            </div>


                           <div class="form-group">
                               <button type="submit" class="btn btn-primary">Save</button>
                           </div>
                            {{csrf_field()}}

                        </form>

                    </div>
                </div>


            </div>

            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">Class List</div>
                    <div class="panel-body">

                        @foreach($sts as $stc)
                            <ul class="list-group">
                                <li class="list-group-item"> {{$stc->class_date}} ({{$stc->text_ten}}) | {{$stc->class_name}} <a href="{{route('delete.class',['id'=>$stc->id])}}" class="text-danger pull-right"><span class="glyphicon glyphicon-trash"></span></a></li>
                            </ul>

                            @endforeach
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

@endsection