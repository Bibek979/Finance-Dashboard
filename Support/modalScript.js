const modalSubmitBtnClick = (option) => {
    if(option === 1)
    {
        var amount = parseInt(document.getElementById('savedamount').value);
        var reason = document.getElementById('savedreason').value;
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log(xhttp.responseText);
        }
        xhttp.open("GET", "Support/modalDataHandler.php?amount="+amount+"&reason="+reason+"&option=0", true);
        xhttp.send();

    }
    else if(option === 2)
    {
        var amount = parseInt(document.getElementById('expensedamount').value);
        var reason = document.getElementById('expensedreason').value;
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log(xhttp.responseText);
        }
        xhttp.open("GET", "Support/modalDataHandler.php?amount="+amount+"&reason="+reason+"&option=1", true);
        xhttp.send();
    }
    else{
        console.log("Invalid option")
    }

}