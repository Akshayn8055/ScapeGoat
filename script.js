document.addEventListener("DOMContentLoaded", function () {
    let comments = localStorage.getItem("comments") || "";
    document.getElementById("comments").innerHTML = comments;
});
