<script>
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
</script>