function calculateTip(){
    let payout = document.getElementById("payout").value;
    let copper = document.getElementById("copper").value;
    let peopleamt = document.getElementById("peopleamt").value;
    let avgHourWage = document.getElementById("avgHourWage").value;
    let hours = document.getElementById("hours").value;

    if(payout === 0 || copper == 0 || peopleamt === 0 || hours === 0){
        alert("Please Enter Values");
    }

    let copperCost = copper * 3.85;
    let peopleCost = peopleamt * avgHourWage;
    let total = payout - copperCost - peopleCost;
    
    total = total.toFixed(2);
    document.getElementById("totalCost").style.display = "block";
    document.getElementById("profit").innerHTML = total;
}

document.getElementById("totalCost").style.display = "none";

document.getElementById("calculate").onclick = function(){
    calculateTip();
}