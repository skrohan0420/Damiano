<script>


// Call the dataTables jQuery plugin
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
    $(document).ready(function () {
        $('#dataTable_announcement').DataTable();
    });

    // Add this function to preview selected images before uploading
    $(document).on('change', 'input[name="home_banner_img[]"]', function (e) {
        var files = e.target.files;
        $('#imagePreview').html(''); // Clear existing previews
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').html(`<img src="${e.target.result}" height="100" />`);
            };
            reader.readAsDataURL(files[i]);
        }
    });


    $(document).on('change', '#inp_IMG_1', function (e) {
        var files = e.target.files;
        $('#IMG_1').html(''); // Clear existing previews

        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#IMG_1').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });
    $(document).on('change', '#inp_IMG_2', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#IMG_2').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });

    $(document).on('change', '#inp_IMG_3', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#IMG_3').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });

    $(document).on('change', 'input[name="home_update_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#updateImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });
</script>


