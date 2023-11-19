var age = function() {
    var birth = new Date(2000, 09, 16);
    var now = new Date();
    var age = now.getFullYear() - birth.getFullYear()

    if(now.getMonth() >= birth.getMonth() && now.getDate() > birth.getDate()) {
        document.getElementsByClassName("age").innerHTML = age--;
    }
}