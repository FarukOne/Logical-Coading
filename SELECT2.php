<!--<link href="select2.min.css">-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<select class="js-example-basic-single" name="state">
    <option value="AL">Alabama</option>
    <option value="WY">Wyoming</option>
    <option value="AL">Alabama</option>
    <option value="WY">Wyoming</option>
</select>

<!--<script src="select2.min.js"></script>-->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>