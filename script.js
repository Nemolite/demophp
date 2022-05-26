console.log("111")

$(document).ready(function(){
    $('#btn').on('click', function(e) {
        e.preventDefault();
        var email = document.forms.myform.email.value;
        var pass = document.forms.myform.pass.value;
        var check = document.forms.myform.check.value;
        $.ajax({
            url: 'cont.php',
            method: 'post',
            dataType: 'html',
            data:{
                'email':email,
                'pass':pass,
                'check':check

            },
            success: function(data){
                alert(data);
            }
        });


    });
});
