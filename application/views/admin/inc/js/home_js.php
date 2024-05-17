<script>


// Call the dataTables jQuery plugin
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
   
  
    $(document).ready(function () {
        $('#dataTable_appreciation').DataTable();
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


   

 

    

    $(document).on('change', 'input[name="home_appreciation_img[]"]', function (e) {
        var files = e.target.files;
        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#appreciationImagePreview').html(`<img src="${e.target.result}" height="100"/>`);
            };
            reader.readAsDataURL(files[i]);
        }
    });
</script>


