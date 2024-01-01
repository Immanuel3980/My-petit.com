function validateForm() {
    var firstName = document.forms["loginForm"]["firstName"].value;
    var lastName = document.forms["loginForm"]["lastName"].value;
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;

    if (firstName === "" || lastName === "" || email === "" || password === "") {
        alert("Please fill in all fields");
    } else {
        alert("Login successful!");
        // You can add more logic here, such as submitting the form or redirecting to another page
    }
}
