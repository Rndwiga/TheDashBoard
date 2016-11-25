$(document).ready(function() {
    $('.summernote').summernote({
	  height: 350
	});
/*
  function sendFile(file,editor,welEditable) {
            data = new FormData();
            data.append("file", file);
            jQuery.ajax({
                url: "{{ URL::to('Posts/uploadImage') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function(s){
                    jQuery('.summernote').summernote("insertImage", s);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus+" "+errorThrown);
                }
            });
        }
    */
});
