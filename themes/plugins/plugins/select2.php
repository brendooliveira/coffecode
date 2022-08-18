<div class="container">
    <div class="row">
        <div class="col-lg-6 mb-3">
            <select class="js-example-basic-single form-select" name="state">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>

        <div class="col-lg-6 mb-3">
            <select class="js-example-basic-multiple form-select" name="states[]" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>

    </div>
    

    
</div>

<script>



    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {

    
    $('.js-example-basic-single').select2();

    $('.js-example-basic-multiple').select2();

});



</script>