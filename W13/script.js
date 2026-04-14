const showBtn = document.getElementById("loadMessage");
const sysBtn = document.getElementById("loadSystem");
const SQLBtn = document.getElementById("checkDB");

if (SQLBtn) {
   SQLBtn.addEventListener("click", function () {
        fetch("count.php")
            .then(response => response.text())
            .then(data => {
                document.getElementById("result").innerHTML = "<p style='color:red'>" + data + "<p>";
            })
    });
}

if (showBtn) {
    showBtn.addEventListener("click", function () {
        fetch("message.php")
            .then(response => response.text())
            .then(data => {
                document.getElementById("result").innerHTML = "<p style='color:red'>" + data + "<p>";
            })
    });
}

if (sysBtn) {
    sysBtn.addEventListener("click", function () {
        fetch("message.php")
            .then(response => response.text())
            .then(data => {
                document.getElementById("result").innerHTML = "<p>" + data + "<p>";
            })
    });
}



