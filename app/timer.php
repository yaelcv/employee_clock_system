<?php
include_once("./navbar.php");
?>

<div>
    <br>
    
    <div class="stoper">
                <p>Timer</p>
                <p id="timer-value">60:00</p>
            </div>
    <button class="start-button">start</button>
</div>


<script type="text/javascript">
 
  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

// window.onload = function () {
//     var fiveMinutes = 60 * 60,
//         display = document.querySelector('#timer-value');
//     startTimer(fiveMinutes, display);
// };
jQuery('.start-button').on('click',function(event){
    var hour = 60 * 60,
    jQuery('#timer-value').startTimer(hour, display);
})

</script>
jQuery('#color').on('change',function(event){
    jQuery('html').css('background-color',event.target.value)
<script>


<style>

* { background-color: green;
    color: white;
    justify-content: center;
    align-items: center; 
}

button:onClick {
    display: flex;
    color: red;
    background-color: black;
    justify-content: center;
    align-items: center;
    height: 160px;
    width: 250px;
}

#clock {
    display: flex;
    color: white;
    font-size: 48px;   
    justify-content: center;
    align-items: center;
    /* height: 40px; */
    text align:center;
    margin: 50px;
}
</style>