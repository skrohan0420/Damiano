<script>

    $(document).ready(function () {
        $('#dataTable_announcement').DataTable();
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