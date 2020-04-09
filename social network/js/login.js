$(document).ready(function () {
    $("#btn_user_login").on('click',function () {
        var username = $("#username").val();
        var password = $("#password").val();
        user_login_acct(username,password);
    });
});

function user_login_acct(username,password){
    var btn = $("#btn_user_login");
    if(username == "" || password == ""){
        Msg("<i class='fa fa-warning'></i>&nbsp; Required field(s) empty","alert-danger",1,"#msg",3000);
    } else {
        $.ajax({
            url:"inc/core_inc.php?action=user_login_acct",
            type:"POST",
            data: {'username':username,'password':password},
            beforeSend:function(){
                $(btn).html('<i class="fa fa-spinner fa-spin"></i> &nbsp; Validating Data...');
                $(btn).prop('disabled', true);
            },
            success: function(data){
                if(data == 1){
                    setTimeout(function () {
                        Msg("<i class='fa fa-globe fa-spin'></i>&nbsp; Welcome You're Loging In...","alert-success",1,"#msg",3000);
                        window.location.href="index.php";
                    },3000);
                } else if(data == 0) {
                    setTimeout(function () {
                        Msg("<i class='fa fa-warning'></i>&nbsp; Invalid Login Details","alert-danger",1,"#msg",3000);
                        $(btn).prop('disabled', false);
                        $(btn).html("Sign In");
                    },3000);
                }
            }
        });
    }
}






