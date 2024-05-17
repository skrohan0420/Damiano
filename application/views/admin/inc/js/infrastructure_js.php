<script>
    $(document).ready(function () {
        $('#dataTable_infrastructure').DataTable();
    });
    $(document).ready(function () {
        $('#dataTableBanner').DataTable();
    });
    $(document).on('change', 'input[name="home_infrastructure_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#infrastructureImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });

    $(document).on('change', 'input[name="infrastructure_banner_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#infrastructureBannerImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });
</script>