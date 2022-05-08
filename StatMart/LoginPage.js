var welcomeDIV = document.getElementById('welcome-div');
var loginDIV = document.getElementById('login-div');
var signupDIV = document.getElementById('signup-div');

function showLOGIN()
{
    welcomeDIV.style.display = 'none';
    loginDIV.style.display = 'block';
    signupDIV.style.display = 'none';
}

function showSIGNUP()
{
    welcomeDIV.style.display = 'none';
    loginDIV.style.display = 'none';
    signupDIV.style.display = 'block';
}

function showWELCOME()
{
    welcomeDIV.style.display = 'block';
    loginDIV.style.display = 'none';
    signupDIV.style.display = 'none';
}