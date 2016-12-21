 $(document).ready(function() {
    $(document).on("keypress", "#ent", function(e) {
        if (e.which == 13) {
           
            var t = $(this).parent().parent().attr("class");
            //alert(t);
            var n = $("." + t).find("#ent").val();
            $("." + t).find("#ent").val("");
            
            post_data = {
                message: n,
                who: t
            };
            $.post("ins_mes.php", post_data, function(e) {}).fail(function(e) {
                //alert(e);
            })
        }
    })
})