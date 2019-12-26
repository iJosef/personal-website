function validateLogin()
{
    var x = document.forms["login"]["username"].value;
    if (x == "")
    {
        alert("Username is required.");
        return false;
    }
    var x = document.forms["login"]["password"].value;
    if (x == "")
    {
        alert("Password is required.");
        return false;
    }
}

function validateTest()
{
    var x = document.forms["test"]["name"].value;
    if (x == "")
    {
        alert("Fullname field is empty");
        return false;
    }
    var x = document.forms["test"]["message"].value;
    if (x == "")
    {
        alert("Testimony field is empty");
        return false;
    }
}

function validateRates()
{
    var x = document.forms["rates"]["buy"].value;
    if (x == "")
    {
        alert("Buy rate should not be empty");
        return false;
    }
    var x = document.forms["rates"]["sell"].value;
    if (x == "")
    {
        alert("Sell rate should not be empty");
        return false;
    }
}

function validatePasschange()
{
    var x = document.forms["changepass"]["oldpass"].value;
    if (x == "")
    {
        alert("All fields are required.");
        return false;
    }
    var x = document.forms["changepass"]["newpass"].value;
    if (x == "")
    {
        alert("ALL fields are required.");
        return false;
    }
    var x = document.forms["changepass"]["cnewpass"].value;
    if (x == "")
    {
        alert("All fields are required.");
        return false;
    }
    var y = document.forms["changepass"]["newpass"].value;
    var z = document.forms["changepass"]["cnewpass"].value;
    if (y != z)
    {
        alert("Passwords don't match!!");
        return false;
    }
}