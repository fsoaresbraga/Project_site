
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

;

var checkPassWordProfile = document.querySelector("input[name=newPassword]");
if(checkPassWordProfile != null)
{
    checkPassWordProfile.addEventListener('change', function() {
        if (this.checked)
        {
            document.getElementById('changePassword').style.display = 'block';
        } 
        else
        {
            document.getElementById('changePassword').style.display = 'none';
        }
    });
}



var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;
var idVaga = null;
function vagaUplod(vagaId)
{
    idVaga = vagaId;
}

$("body").on("change", ".image", function(e) {
    var files = e.target.files;
    var done = function(url) {
        image.src = url;
        $modal.modal('show');
    };
    
    var reader;
    var file;
    var url;
    if (files.length > 0) {
        file = files[0];
        if (URL) {
            done(URL.createObjectURL(file));
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function(e) {
                done(reader.result);
            };
            reader.readAsDataURL(file);
        }
    }
});
$modal.on('shown.bs.modal', function() {
    cropper = new Cropper(image, {
        aspectRatio: 1.0,
        viewMode: 1,
        preview: '.preview'
    });
}).on('hidden.bs.modal', function() {
    cropper.destroy();
    cropper = null;
});
$("#crop").click(function() {
    canvas = cropper.getCroppedCanvas({
        width: 150,
        height: 150,
    });
    canvas.toBlob(function(blob) {
        url = URL.createObjectURL(blob);
        var reader = new FileReader();
        reader.readAsDataURL(blob);
        reader.onloadend = function() {
            var base64data = reader.result;
            
            $.ajax({
                type: "post",
                dataType: "json",
                url: "/admin/vagas/crop-image-upload",
                data: {
                    'image': base64data,
                    'idVaga': idVaga
                },
                success: function(data) {
                    //console.log(data);
                    if(data.success)
                    {
                        $modal.modal('hide');
                        swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "Upload feito com Sucesso!",
                            showConfirmButton: false,
                            timer: 2300
                        });
                    }
                    if(data.error)
                    {
                        swal.fire({
                            position: "top-center",
                            icon: "info",
                            title: "Erro!",
                            showConfirmButton: false,
                            timer: 2300
                        });
                    }
                }
            });
        }
    });
})


$(function(){
    $('#state').change(function(){
        var select = document.getElementById('state_id');
	    var value = select.options[select.selectedIndex].value;

        $.ajax({
            url: "/admin/state/cities",
            type: "get", //send it through get method
            data: { 
              id: value, 
            },
            success: function(response) {
                //console.log(response);
                $('#city_id').empty();
                $.each(response, function(i, p) {
                    $('#city_id').append($('<option></option>').val(p.id).html(p.name));
                });
            },
            error: function(xhr) {
              //Do Something to handle error
            }
        });
        
    });
});

$("form").on("change", ".file-upload-field", function(){ 
    $(this).parent(".file-upload-wrapper").attr("data-text",         $(this).val().replace(/.*(\/|\\)/, '') );
});
    