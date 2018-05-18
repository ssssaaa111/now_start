@extends('common.master')


@section('content')
    <header class="bar bar-nav">
        <h1 class='title'>Edit profile</h1>
    </header>



    <div class="content" style="padding: 0 .5rem 1rem .5rem">
        <form method="POST" action="/teacher_registrate">
            {{ csrf_field() }}
            <div class="form-group">
                <img src="images/index-teacher.png" alt="" class="img-circle">
                <div class="disp-rec">
                    <a href="javascript:;" class="a-upload">
                        <input type="file" name="" id="">上传头像
                    </a>
                    <p>We recommend you to use a portrait photo.
                        Profile without a photo will not be approved.
                        Maximum size - 2MB. JPG or PNG.</p>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="name" class="form-control" id="exampleInputEmail1" placeholder="name"
                       value="{{$info['name']}}">
            </div>

            <div class="form-group">
                <label for="exampleInputbuttons" style="display: block">Gender</label>
                <select name="sex" class="form-control" id="sel1">
                    <option value="">Choose...</option>
                    <option value="M"
                            @if($info['sex']=="M")
                            selected
                            @endif
                    >Male
                    </option>
                    <option value="F"
                            @if($info['sex']=="F")
                            selected
                            @endif
                    >Female
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="sel1">Country:</label>
                <select name="country" class="form-control" id="sel1">
                    @include('common.countries')
                </select>
            </div>

            <div class="form-group">
                <label for="sel1">Language you can teach:</label>
                <select name="language" class="form-control" id="sel1">
                    @include('common.language')
                </select>
            </div>

            <div class="form-group">
                <label for="sel1">Language level:</label>
                <select name="lang_level" class="form-control" id="sel1">
                    @include('common.lang_level')
                </select>
            </div>

            <div class="form-group">
                <label for="sel1">Year of birth :</label>
                <select name="year_of_birth" class="form-control" id="sel1">
                    @include('common.year_of_birth')
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputtextarea">Phone number</label>
                <textarea name="phone_number" class="form-control" id="exampleInputtextarea" rows="1">{{$info['phone_number']}}</textarea>
                <p>
                    Receive SMS-notifications about new messages from students.
                    Please, use international format e.g. +44093 123 4567
                </p>
            </div>

            <div class="form-group">
                <label for="exampleInputtextarea">Profile headline</label>
                <textarea name="profile_headline" class="form-control" id="exampleInputtextarea" rows="1">{{$info['profile_headline']}}</textarea>
                <p>
                    E.g. 'Certified IELTS tutor with 9 years of experience'…
                </p>
            </div>

            <div class="form-group">
                <label for="exampleInputtextarea">Description</label>
                <textarea name="description" class="form-control" id="exampleInputtextarea" rows="5">
                    {{$info['description']}}
            </textarea>
                <p>
                    Help students get to know you better. Tell about your tutoring experience and methods you use. Share
                    why
                    you enjoy teaching others.
                </p>
            </div>

            <div class="form-group">
                <label for="exampleInputtextarea">Video introduction</label>
                <textarea name="video_introduction" class="form-control" id="exampleInputtextarea" rows="2">{{$info['video_introduction']}}</textarea>
                <p>
                    Paste the URL to your Youtube/Vimeo video . Learn more about video introduction
                </p>
            </div>

            <div class="form-group">
                <label for="exampleInputtextarea">University/College</label>
                <textarea name="university" class="form-control" id="exampleInputtextarea" rows="1">{{$info['university']}}</textarea>

            </div>

            <div class="form-group">
                <label for="exampleInputtextarea">Degree</label>
                <textarea name="degree" class="form-control" id="exampleInputtextarea" rows="1">{{$info['degree']}}</textarea>

            </div>

            {{--<div class="form-group">--}}
            {{--<label for="exampleInputbutton" style="display: block">Years of study</label>--}}
            {{--<div class="btn-group" role="group">--}}
            {{--<button type="button" class="btn btn-default dropdown-toggle" id="exampleInputbutton"--}}
            {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--start year--}}
            {{--<span class="caret"></span>--}}
            {{--</button>--}}
            {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="#">1997</a></li>--}}
            {{--<li><a href="#">1998</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--<span>-</span>--}}
            {{--<div class="btn-group" role="group">--}}
            {{--<button type="button" class="btn btn-default dropdown-toggle" id="exampleInputbuttont"--}}
            {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--end year--}}
            {{--<span class="caret"></span>--}}
            {{--</button>--}}
            {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="#">2017</a></li>--}}
            {{--<li><a href="#">2018</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="form-group">
                <label for="exampleInputtextarea">Skype ID</label>
                <textarea name="skype_id" class="form-control" id="exampleInputtextarea" rows="1">{{$info['skype_id']}}</textarea>
                <p>Your Skype ID will only be visible to your students/your tutor.
                </p>
            </div>

            <div class="form-group">
                <label for="exampleInputtextarea">Certificate</label>
                <textarea name="certificate" class="form-control" id="exampleInputtextarea" rows="1">{{$info['certificate']}}</textarea>

            </div>

            <div class="form-group">

                <label for="exampleInputAmount">Tutoring experience</label>
                <div class="input-group">
                    <input value="{{$info['tutoring_experience']}}" name="tutoring_experience" type="text"
                           class="form-control" id="exampleInputAmount"
                           placeholder="">
                    <div class="input-group-addon">year</div>
                </div>
            </div>


            <div class="form-group">

                <label for="exampleInputAmount">Hourly rate</label>
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input value="{{$info['hourly_rate']}}" name="hourly_rate" type="text" class="form-control"
                           id="exampleInputAmount" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label>Group lessons</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="group_lessons" id="optionsRadios1" value="option1"
                               @if($info['group_lessons'] == "option1")
                               checked
                                @endif
                        >
                        Yes
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="group_lessons" id="optionsRadios2" value="option2"
                               @if($info['group_lessons'] == "option2")
                               checked
                                @endif
                        >
                        No
                    </label>
                </div>
            </div>



            <button type="submit" class="btn btn-success">Submit</button>
            <a href="/" type="button" class="btn btn-danger">cancel</a>

            <!--<div class="content-block">-->
            <!--<div class="row">-->
            <!--<div class="col-50"><a href="#" class="button button-big button-fill button-danger">取消</a></div>-->
            <!--<div class="col-50"><a href="#" class="button button-big button-fill button-success">提交</a></div>-->
            <!--</div>-->
            <!--</div>-->
        </form>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_fheok2d376d5nrk9.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_mpzc1sbdm1xxbt9.css">
    <link rel="stylesheet" href="css/tea-reg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>




@endsection

@section('foot')
    <script>
        $(function () {
            $('.form-group').on('click', '.dropdown-menu a', function (e) {
                var $li = $(e.target).html();
                $(e.target).parent().parent().siblings('button').html($li + '<span class="caret"></span>');
            });
        })
    </script>

@endsection