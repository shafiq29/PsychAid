$(document).ready(function() {
    function e() {
        //alert(current);
            t(current)
        
    }

    function t(e) {
        ext = {
            ext: e
        };
        $.post("give_mes.php", ext, function(t) {
            if (t != null) {
                var n = $("." + e).find("#box_mid_in");
                //alert('te');
                n.html(t);
                if (n[0] == undefined) {
                    return
                } else {
                    n.scrollTop(n[0].scrollHeight);
                    return
                }
            } else {
                return
            }
        });
        return
    }
    $(setInterval(function() {
        return e()
    }, 1e3))
})