//password validation
$(document).ready(function(){
    $("#cPassword").keyup(function(){
        if($("#password").val() != $("#cPassword").val()){
            $("#msg").html("Password does not match!").css("color","red");
            $("#submit").attr("disabled", true);
        } else {
            $("#msg").html("Password matched.").css("color","green");
            $("#submit").removeAttr("disabled");
        }
    });
});

//delete confirmation
function deleteconfirm(){
    event.preventDefault();
    let text = "Are you sure you want to delete this data?";
    if(window.confirm(text)){
        event.target.closest('form').submit();
    }
}

//ckeditor
CKEDITOR.replace('content');

//datatable
new DataTable('#example');