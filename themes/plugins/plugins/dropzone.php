

<div class="card-body">
        <form action="<?= url("/teste/send-images") ?>" class="dropzone" id="dropzone">
            <input type="file" name="file" hidden multiple />
         </form>
</div>
   


<script>

    Dropzone.options.dropzone = {
    paramName: "file",
    dictDefaultMessage: "Arraste seus arquivos para cá!",
    maxFilesize: 10,
    resizeQuality: 0.8,
    maxFiles: 10,
    acceptedFiles: "image/png,image/jpg,image/jpeg",
        accept: function(file, done) {
            if (file.name == "olamundo.png") {
                done("Arquivo não aceito.");
            } else {
                done();
            }
        }
    }

$("#dropzone").dropzone({ 
    url: "/teste/send-images" 
});

</script>   