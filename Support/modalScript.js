const modalSubmitBtnClick = (option) => {
    if(option == 1)
    {
        var amount = parseInt(document.getElementById('savedamount').value);
        var reason = document.getElementById('savedreason').value;
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log(xhttp.responseText);
        }
        xhttp.open("GET", "Support/trial.php?amount="+amount+"&reason="+reason, true);
        xhttp.send();

    }
    else if(option == 2)
    {
        console.log("Option 2 Clicked")
    }
    else{
        console.log("Invalid option")
    }

}