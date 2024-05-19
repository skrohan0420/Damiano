<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
    CKEDITOR.replace('editor');
    function submitForm() {
        // Update the textarea with the CKEditor data
        for (var instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        return true; // Proceed with form submission
    }
</script>