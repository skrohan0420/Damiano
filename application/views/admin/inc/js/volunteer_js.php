<script>
   $(document).on('change', 'input[name="volunteers_img[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#aboutVolentrees').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#aboutVolentrees').append(`<img src="${e.target.result}" height="100" id="volunteers_img"/>`);
        };

        reader.readAsDataURL(files[i]);
        }
    }); 
</script>
