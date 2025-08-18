function validateform() {
    let id = document.getElementById("id").value.trim();
    let pass = document.getElementById("password").value.trim();

    if (id === ""  || pass === "") {
        alert("Both fields are required.");
        return false;
    }
    return true;
}