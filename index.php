<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div style="float: left; width: 100%">
            
            <input type="hidden" id="shift_start" />
            <input type="hidden" id="shift_end" />
            <input type="hidden" id="shift_break" />
            <input type="hidden" id="shift_acq" />
            
            <button class="shifts" id="shift1" data-start="15:30" data-end="16:00" data-break="01:00" data-acq="08:00">Shift 1: 13:30 ~ 16:00 ~ 1:00</button>
            <button class="shifts" id="shift2" data-start="08:00" data-end="17:00" data-break="01:00" data-acq="08:00">Shift 2: 8:00 ~ 17:00 ~ 1:00</button>
            <button class="shifts" id="shift3" data-start="12:00" data-end="21:00" data-break="01:00" data-acq="08:00">Shift 3: 12:00 ~ 21:00 ~ 1:00</button>
        </div>
        
        <div style="float: left; width: 100%; margin-top: 10px;">
            <button id="timein" disabled>TIME IN</button>
            <button id="timeout" disabled>TIME OUT</button>
            <button id="absent" disabled>ABSENT</button>
            <button id="holiday" disabled>HOLIDAY</button>
            <button id="late" disabled>LATE /LEAVE</button>
            <button id="change" disabled>CHANGE</button>
        </div>
        
        <div style="float: left; width: 100%; margin-top: 10px;">
            <h1>Legend</h1>
            <span>Time IN: 00:05 BEFORE ~ 00:05 AFTER</span> <br />
            <span>Time OUT: 00:05 BEFORE ~ 00:05 AFTER</span> <br />
            <span>ABSENT: 00:05 BEFORE ~ 00:05 AFTER</span> <br />
            <span>HOLIDAY: 00:05 BEFORE ~ 00:05 AFTER</span> <br />
            <span>LATE /LEAVE: 00:05 BEFORE ~ 00:05 AFTER</span> <br />
            <span>CHANGE: 00:05 BEFORE ~ 00:05 AFTER</span> <br />
            
            <input type="hidden" id="timein_min" value="00:01" />
            <input type="hidden" id="timein_min_period" value="before" />
            <input type="hidden" id="timein_max" value="00:01" />
            <input type="hidden" id="timein_max_period" value="after" />
            
            <input type="hidden" id="timeout_min" value="00:01" />
            <input type="hidden" id="timeout_min_period" value="before" />
            <input type="hidden" id="timeout_max" value="00:01" />
            <input type="hidden" id="timeout_max_period" value="after" />
            
            <input type="hidden" id="absent_min" value="00:01" />
            <input type="hidden" id="absent_min_period" value="before" />
            <input type="hidden" id="absent_max" value="00:01" />
            <input type="hidden" id="absent_max_period" value="after" />
            
            <input type="hidden" id="holiday_min" value="00:01" />
            <input type="hidden" id="holiday_min_period" value="before" />
            <input type="hidden" id="holiday_max" value="00:01" />
            <input type="hidden" id="holiday_max_period" value="after" />
            
            <input type="hidden" id="late_min" value="00:01" />
            <input type="hidden" id="late_min_period" value="before" />
            <input type="hidden" id="late_max" value="00:01" />
            <input type="hidden" id="late_max_period" value="after" />
            
            <input type="hidden" id="change_min" value="00:01" />
            <input type="hidden" id="change_min_period" value="before" />
            <input type="hidden" id="change_max" value="00:01" />
            <input type="hidden" id="change_max_period" value="after" />
            
        </div>
        <script src="func.js" type="text/javascript"></script>
    </body>
</html>
