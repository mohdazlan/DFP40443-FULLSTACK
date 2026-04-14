document.getElementById("loadMessage").addEventListener("click", function () {
    fetch("message.php")
        .then(res => res.text())
        .then(data => {
            document.getElementById("result").innerHTML = data;
        });
});