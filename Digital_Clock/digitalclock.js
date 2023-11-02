//Get HTML elements
hrs = document.getElementById("hrs")
min = document.getElementById("min")
sec = document.getElementById("sec")

//Use set interval to update page every second
setInterval(() => {
    currentTime = new Date();

    // If number is less than 10 (only 1 digit), add 0 as the first digit: Ex: 9 --> 09
    hrs.innerHTML = (currentTime.getHours()<10?"0":"") + currentTime.getHours();
    min.innerHTML = (currentTime.getMinutes()<10?"0":"") + currentTime.getMinutes();
    sec.innerHTML = (currentTime.getSeconds()<10?"0":"") + currentTime.getSeconds();
}, 1000)
        

