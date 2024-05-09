<script>
   $(document).on('change', 'input[name="donor_img[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#aboutDonor').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#aboutDonor').append(`<img src="${e.target.result}" height="100" id="donor_img"/>`);
        };

        reader.readAsDataURL(files[i]);
        }
    }); 
</script>
