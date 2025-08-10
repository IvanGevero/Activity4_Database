function validateform() {
    let email = document.getElementById("email").value.trim();
    let id = document.getElementById("id").value.trim();
    
    let mobile = document.getElementById("mobile").value.trim();
    let pass = document.getElementById("password").value.trim();

    if (id === ""  || pass === "") {
        alert("Both fields are required.");
        return false;
    }
    return true;
}