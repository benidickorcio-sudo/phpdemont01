const username = document.getElementById('displayusername').innerText;
const userid = document.getElementById("displayuserid").innerText;
const school = document.getElementById("displayschool").innerText;
const ballpen = document.getElementById("displayballpen").innerText;
const notebook = document.getElementById("displaynotebook").innerText;

function greetuser () {
        alert("Hello " + username + " your ID is " + userid + " and I study in " + school + ". I have a " + ballpen + " ballpen and a " + notebook + " notebook.");
    }