cheak = () => {
            var text = document.querySelector("#email").value;
            var pattern = /^[a-zA-Z]+$/;

            if (pattern.test(text) === false) {
                alert("Plese enter correct text");
                return false;
            }
            else {
                alert("succsessfully");
            }
        }