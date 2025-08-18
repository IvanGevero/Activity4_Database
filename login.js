function validateform() {
    const id = document.getElementById("id").value.trim();
    const pass = document.getElementById("password").value.trim();

    if (id === ""  || pass === "") {
        alert("Both fields are required.");
        return false;
    }
    return true;
}