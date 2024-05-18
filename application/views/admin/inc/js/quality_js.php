<script>
    $(document).ready(function () {
        $('#dataTable_quality').DataTable();
    });
    $(document).ready(function () {
        $('#dataTableBanner').DataTable();
    });
    $(document).on('change', 'input[name="quality_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#qualityImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });

    $(document).on('change', 'input[name="quality_banner_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#qualityBannerImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });
</script>