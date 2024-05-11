<script>


// Call the dataTables jQuery plugin
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });

    // Add this function to preview selected images before uploading
    $(document).on('change', 'input[name="home_banner_img[]"]', function (e) {
        console.log(1)
        var files = e.target.files;
        $('#imagePreview').html(''); // Clear existing previews

        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview').append(`<img src="${e.target.result}" height="100" id="home_banner_img"/>`);
            };

            reader.readAsDataURL(files[i]);
        }
    });

</script>


