
        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            // Validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }

            // Validate password length
            if (password.length < 8) {
                alert("Password must be at least 8 characters long");
                return false;
            }
            
            // Validate password contains at least one lowercase letter and one number
            var passwordRegex = /^(?=.*[a-z])(?=.*\d)/;
            if (!passwordRegex.test(password)) {
                alert("Password must contain at least one lowercase letter and one number");
                return false;
            }


            // Form is valid
            return true;
        }