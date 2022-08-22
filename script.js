// const slideShow = () =>{
    
// }
console.log("Bibek")
document.getElementById("login").style.display = "none";
const signupBtn = (val) =>{
    console.log(val);
    if(val)
    {
        document.getElementById("signup").style.display = "flex";
        document.getElementById("signUpButton").className="clicked";
        document.getElementById("loginButton").className="unclicked";
        document.getElementById("login").style.display = "none";
    }
    else{
        document.getElementById("signup").style.display = "none";
        document.getElementById("loginButton").className="clicked";
        document.getElementById("signUpButton").className="unclicked";
        document.getElementById("login").style.display = "flex";
    }
}




