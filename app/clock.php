<?php
include_once("./navbar.php");
date_default_timezone_set("Asia/Jerusalem");
$time = date("F j, Y h:i:s");
?>

<div id="clock"></div>

<script type="text/javascript">
  var currenttime = '<?= $time;?>'; // Timestamp of the timezone you want to use, in this case, it's server time
  var servertime = new Date(currenttime);

  function DigitalClock(){
      servertime.setSeconds(servertime.getSeconds()+1);
      var timestring=PadLength(servertime.getHours())+":"+PadLength(servertime.getMinutes())+":"+PadLength(servertime.getSeconds());
      $('#clock').html(timestring);
  }

  function PadLength(number){
      var output=(number.toString().length==1)? "0"+number : number;
      return output;
  }
  $(document).ready(function(){
    setInterval("DigitalClock()", 1000);
  })
</script>


<style>
* { background-color: green;
    color: white;
    justify-content: center;
    align-items: center; 
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

