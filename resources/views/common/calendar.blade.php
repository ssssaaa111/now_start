<div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content">
        <h5>预约列表<span class="md-close">完成</span></h5>
        <p class="modal-time"><a class="icon icon-left fl" id="last-week"></a><span
                    class="time-now">2018-04-07</span><a class="icon icon-right fr" id="next-week"></a></p>
        <select id="select_id">
            @foreach($tzlist as $item)
                <option value="{{$item}}">{{$item}}</option>
            @endforeach
        </select>
        <div class="time-list">
            <ul id="monitor">
                <li class="day-01">
                    <span class="col-000">星期一</span>
                    <span class="col-000 marbot-2 month_now">9</span>
                    <span class="col-faa">12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span class="col-eee">12:00</span>
                    <span>12:00</span>
                    <span class="col-faa">12:00</span>
                    <span>12:00</span>
                </li>
                <li class="day-02">
                    <span class="col-000">星期二</span>
                    <span class="col-000 marbot-2  month_now">9</span>
                    <span class="col-faa">12:00</span>
                    <span>12:00</span>
                    <span class="col-faa">12:00</span>
                    <span>12:00</span>
                    <span class="col-eee">12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                </li>
                <li class="day-03">
                    <span class="col-000">星期三</span>
                    <span class="col-000 marbot-2  month_now">9</span>
                    <span>12:00</span>
                    <span class="col-faa">12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span class="col-eee">12:00</span>
                    <span class="col-faa">12:00</span>
                </li>
                <li class="day-04">
                    <span class="col-000">星期四</span>
                    <span class="col-000 marbot-2  month_now">9</span>
                    <span>12:00</span>
                    <span class="col-faa">12:00</span>
                    <span class="col-eee">12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                </li>
                <li class="day-05">
                    <span class="col-000">星期五</span>
                    <span class="col-000 marbot-2  month_now">9</span>
                    <span>12:00</span>
                    <span class="col-faa">12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span class="col-eee">12:00</span>
                </li>
                <li class="day-06">
                    <span class="col-000">星期六</span>
                    <span class="col-000 marbot-2  month_now">9</span>
                    <span class="col-faa">12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span class="col-eee">12:00</span>
                    <span>12:00</span>
                </li>
                <li class="day-07">
                    <span class="col-000">星期日</span>
                    <span class="col-000 marbot-2  month_now">9</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span class="col-faa">12:00</span>
                    <span class="col-eee">12:00</span>
                    <span>12:00</span>
                    <span>12:00</span>
                    <span class="col-eee">12:00</span>
                </li>
            </ul>
        </div>
    </div>
</div>