function Myfunction()
{
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let call = document.getElementById('call').value.trim();
    let address = document.getElementById('address').value.trim();
    let age = document.getElementById('age').value.trim();
    let gender = document.querySelector ('input[name="gender"]:checked');
    let membertyp = document.querySelector ('input[name="membertyp"]:checked');
    let weight = document.getElementById('weight').value.trim();
    let injury = document.getElementById('injury').value.trim();

    if(name === "")
    {
        alert("name can't be empty");
        return false;
    }
    if(email === "")
    {
        alert("email can't be empty");
        return false;
    }
     if(call === "")
    {
        alert("enter your phone number");
        return false;
    }
    if(address === "")
    {
        alert("enter your age");
        return false;
    }
    if(age === "")
    {
        alert("enter your age");
        return false;
    }
    if(!gender)
    {
        alert("select your gender");
        return false;
    }
     if(!membertyp)
    {
        alert("please select your membership type");
        return false;
    }
    return true;
}