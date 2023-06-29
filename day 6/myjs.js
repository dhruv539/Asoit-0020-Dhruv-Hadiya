document.getElementById("click").addEventListener("click",displaylenght)

function displaylenght(){
    var name=document.getElementById("getdata").value;
    document.getElementById("showop").innerText=name.length;
}