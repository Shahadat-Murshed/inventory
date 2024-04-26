document
    .getElementById("fileInput")
    .addEventListener("change", function (event) {
        var file = this.files[0];
        var preview = document.getElementById("preview");

        // Clear any previous preview
        preview.innerHTML = "";

        // Ensure that the file is an image
        if (file && file.type.startsWith("image/")) {
            var reader = new FileReader();

            reader.onload = function () {
                // Create an image element
                var img = document.createElement("img");
                img.src = reader.result;

                // Append the image to the preview div
                preview.appendChild(img);
            };

            // Read the image file as a data URL
            reader.readAsDataURL(file);
        } else {
            // Display an error message if the selected file is not an image
            preview.innerHTML = "Selected file is not an image";
        }
    });
