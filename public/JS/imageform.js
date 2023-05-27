document.getElementById("avatar").addEventListener("change", function(event) {
    var input = event.target;
    if (input.files && input.files[0]) {
        var reader = new FileReader();

         reader.onload = function(e) {
            var previewElement = document.getElementById('previewImage');
            previewElement.src = e.target.result;
            previewElement.style.display = 'block';
        }

        reader.readAsDataURL(input.files[0]);
    }
});

