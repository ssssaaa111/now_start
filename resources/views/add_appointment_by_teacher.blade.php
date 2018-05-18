<html>
<head>
    <!-- ... -->
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>
<body>



<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <form method="post" href="/appointments">
                {{ csrf_field() }}
                <fieldset disabled>
                    <div class="form-group">
                        <label for="disabledSelect">Time zone</label>
                        <select id="disabledSelect" class="form-control">
                            <option>{{$time_zone}}</option>
                        </select>
                    </div>
                </fieldset>
            <div class="form-group">
                <label for="disabledTextInput">add the begin_time to your teaching appointment table,it last one hour per class bu default</label>
                <div class='input-group date' id='datetimepicker2'>
                    <input name="start_time" type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
                <div class="form-group"> <!-- Submit button -->
                    <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker({
                    locale: 'ru'
                });
            });
        </script>
    </div>
</div>


</body>


</html>