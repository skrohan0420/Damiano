<script>


// Call the dataTables jQuery plugin
$(document).ready(function () {
    $('#dataTable').DataTable();
});

// Add this function to preview selected images before uploading
$(document).on('change', 'input[name="quote_img[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#imagePreview').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imagePreview').append(`<img src="${e.target.result}" height="100" id="quote_img"/>`);
        };

        reader.readAsDataURL(files[i]);
    }
});


$(document).on('change', 'input[name="about_img[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#aboutPrev').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#aboutPrev').append(`<img src="${e.target.result}" height="100" id="about_img"/>`);
        };

        reader.readAsDataURL(files[i]);
    }
});

$(document).on('change', 'input[name="work_img[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#aboutWork').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#aboutWork').append(`<img src="${e.target.result}" height="100" id="work_img"/>`);
        };

        reader.readAsDataURL(files[i]);
    }
});
</script>


