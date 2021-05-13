/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var timeout1 = new Array();
var timeout2 = new Array();

$('.shifts').click(function() {
    var start = $(this).data('start');
    var end = $(this).data('end');
    var sbreak = $(this).data('break');
    var acq = $(this).data('acq');
    
    $('#shift_start').val(start);
    $('#shift_end').val(end);
    $('#shift_break').val(sbreak);
    $('#shift_acq').val(acq);
    
    
    for(var i=0; i< timeout1.length ;i++) {  
        clearTimeout(timeout1[i]);
        clearTimeout(timeout2[i]);
    }
    enableBtn($('#timein'), 'timein', start);
    enableBtn($('#timeout'), 'timeout', end);
    enableBtn($('#absent'), 'absent', start);
    enableBtn($('#holiday'), 'holiday', start);
    enableBtn($('#late'), 'late', start);
    enableBtn($('#change'), 'change', start);
});

var enableBtn = function(btn, reference, startingtime) {
    var format = 'HH:mm';
    var currentTime = moment().format(format);
    var starttime = computeTime(reference, 'min', startingtime);
    var endtime = computeTime(reference, 'max', startingtime);
    
    var d = getDiffDurationInMilliSecond(starttime,format);
    console.log(d.asMilliseconds());
    timeout1.push(setTimeout(function(){
        setBtnProp(btn, false)
    }, d.asMilliseconds()));

    //disable button
    var d = getDiffDurationInMilliSecond(endtime,format);
    console.log(d.asMilliseconds());
    timeout2.push(setTimeout(function(){
        setBtnProp(btn, true)
    }, d.asMilliseconds()));
}

var computeTime = function (ref, ref2, starttime) {
    var period = $('#'+ref+'_'+ref2+'_period').val();
    var grace = $('#'+ref+'_'+ref2).val();
    
    if(period == 'before') {
        return newtime(starttime, grace, false);
    } else {
        return newtime(starttime, grace, true);
    }
}

var newtime = function(time1, time2, isAdd) {
    var t1 = time1.split(':');
    var t2 = time2.split(':');
    
    var d1 = new Date(0, 0, 0, t1[0], t1[1], 0);
        
    if(isAdd) {
        return moment(d1).add(t2[0], 'hours').add(t2[1],'minutes').format("HH:mm");
    } else {
        return moment(d1).subtract(t2[0], 'hours').subtract(t2[1],'minutes').format("HH:mm");
    } 
}

var setBtnProp = function (btn, isDisabled) {
    console.log(moment());
    console.log(isDisabled);
    $(btn).prop('disabled', isDisabled);
}

var getDiffDurationInMilliSecond = function(endtime, format) {
    var ms = moment(endtime,format).diff(moment());
    return moment.duration(ms);
}