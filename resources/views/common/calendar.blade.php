<div class="md-content">
    <p class="modal-time"><a class="icon icon-left fl" id="last-week"></a><span
                class="time-now">{{$today}}</span><a class="icon icon-right fr"
                                                     id="next-week"></a></p>
    <select id="select_id">
        <option selected="true" disabled="disabled" value="{{$time_zone}}">时区：{{$time_zone}}</option>
    </select>
    <div class="time-list">
        <ul id="monitor">
            @foreach($weekDay as $k=>$item)
                <li class="day-0{{$k}}">
                    <span class="col-000">{{$weekMap[$item]}}</span>
                    <span class="col-000 marbot-2 month_now">{{$day[$k]}}</span>
                    @if(isset($present_data[$item]))
                        @foreach($present_data[$item] as $datum)
                            <span id="appointment_{{$datum['id']}}"
                                    @if($datum['user_id'] != 0)
                                    class="col-eee"
                                    @else
                                    class="col-faa"
                                    @endif
                            >{{$datum['start_time']->format('H:m')}}</span>
                        @endforeach
                    @endif
                    {{--<span>12:00</span>--}}
                    {{--<span>12:00</span>--}}
                    {{--<span class="col-eee">12:00</span>--}}
                    {{--<span>12:00</span>--}}
                    {{--<span class="col-faa">12:00</span>--}}
                    {{--<span>12:00</span>--}}
                </li>
            @endforeach
        </ul>
    </div>
</div>