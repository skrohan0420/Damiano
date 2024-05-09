<script>
   $(document).on('change', 'input[name="member_img[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#aboutTeam').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#aboutTeam').append(`<img src="${e.target.result}" height="100" id="member_img"/>`);
        };

        reader.readAsDataURL(files[i]);
        }
    }); 
</script>