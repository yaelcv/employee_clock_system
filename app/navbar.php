
<div class="navbar">
    <div class="clock-option"> Clock </div>;
    <div class= "timer-option"> Timer </div>;
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    
jQuery('.clock-option').on('click',function(event){
    window.location.href = "./clock2.php"
})

jQuery('.timer-option').on('click',function(event){
    window.location.href = "./timer.php"
})
</script>


<style>
.navbar {
    display: flex;
    color: white;
    background-color: black;
    justify-content: center;
    align-items: center;
    height: 40px;
}

.navbar div:hover {
    color: black;
    background-color : white;
    font size: 36px
}


</style>