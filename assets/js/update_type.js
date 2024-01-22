function update_type() {
  const http = new XMLHttpRequest();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      return this.responseText;
    }
  };
  http.open("GET", "../../controller/compte/update_type.php", true);
  http.send();
}

setInterval(update_type, 30000);
