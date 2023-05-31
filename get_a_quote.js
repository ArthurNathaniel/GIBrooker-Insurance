// Initialize EmailJS with your user ID
emailjs.init("YOUR_USER_ID"); // Replace "YOUR_USER_ID" with your actual user ID

// Function to send the email
function sendMail() {
  event.preventDefault(); // Prevent the default form submission

  // Get the form values
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var number = document.getElementById("number").value;

  // Prepare the template parameters
  var templateParams = {
    from_name: name,
    to_name: "Your Name", // Replace with the recipient's name
    email: email,
    number: number,
  };

  // Send the email
  emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", templateParams).then(
    function (response) {
      console.log("Email sent successfully!", response.status, response.text);
      document.getElementById("user").textContent = name;
      document.getElementById("quoteForm").reset(); // Reset the form
      $("#myModal").modal("show"); // Show the modal
    },
    function (error) {
      console.error("Error sending email:", error);
    }
  );
}
