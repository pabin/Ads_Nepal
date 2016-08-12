

function Pandorabot(host, app_id, botname, user_key) {
    this.host = host;
    this.app_id = app_id;
    this.botname = botname;
    this.user_key = user_key;
    this.sessionid = "";
    this.protocol = "http";
}

Pandorabot.prototype.talk = function(input, fn) {
    var pb = this;
    var cookie = document.cookie.replace(/(?:(?:^|.*;\s*)pb_client_name\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    if (cookie) {
        pb.client_name = cookie;
    } else {
        var c = Math.round(Math.random() * 1000001);
        document.cookie = "pb_client_name=" + c;
        pb.client_name = c;
    }
    var url = this.protocol + "://" + this.host + "/talk/" + this.app_id + "/" + this.botname + "?user_key=" + this.user_key + "&client_name=" + this.client_name + "&sessionid=" + this.sessionid + "&input=" + encodeURIComponent(input) + "&extra=true";
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var p = JSON.parse(xhr.responseText);
            pb.sessionid = p["sessionid"];
            fn(p);
        }
    };
};
