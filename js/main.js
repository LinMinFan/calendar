document.addEventListener("load", current_time());

function current_time() {
    NowDate = new Date();
    h = NowDate.getHours();
    m = NowDate.getMinutes();
    s = NowDate.getSeconds();
    document.getElementById('current').innerHTML = '現在時間:' + h + '時' + m + '分' + s + '秒';
    setTimeout('current_time()', 1000);
}


document.addEventListener("mousemove", function (e) {
    document.getElementById("cat").innerHTML = "<i class='fa-solid fa-cat'></i>";
    let cat = document.getElementById("cat");
    let x = e.pageX;
    let y = e.pageY;
    cat.style.left = x + "px";
    cat.style.top = y + "px";
});