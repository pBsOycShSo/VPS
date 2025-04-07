function work() {
  var user = document.getElementById("email").value;
  var pass = document.getElementById("password").value;

  var msgBody = document.getElementById("msgBody");
  var msgBtn = document.getElementById("msgBtn");

  var f = new FormData();
  f.append("user", user);
  f.append("pas", pass);
  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var m = r.responseText;
      if (m == "Done") {
        msgBody.innerHTML =
          "<div class='modal-body bg-success rounded-2'  align='center'><h4 class='text-white'>Welcome back! <b>"+user+"</b></h4></div>";
          msgBtn.click();
      } else {
        msgBody.innerHTML =
          "<div class='modal-body bg-danger rounded-2'  align='center'><h4 class='text-white'>Username or Password is wrong!</h4></div>";
        msgBtn.click();
      }
    }
  };

  r.open("POST", "assets/connection.php", true);
  r.send(f);
}