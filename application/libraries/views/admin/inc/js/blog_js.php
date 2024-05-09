<script>
   $(document).on('change', 'input[name="blog_img[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#aboutBlog').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#aboutBlog').append(`<img src="${e.target.result}" height="100" id="blog_img"/>`);
        };

        reader.readAsDataURL(files[i]);
        }
    }); 
</script>