function add_friend(user_id) {
    var btn = $("#btn_add_"+user_id);
    $.post('inc/core_inc.php?action=add_friend_request',{user_id:user_id},function (data) {
        if(data == 1){
            alert('sent!');
        }
    });
}