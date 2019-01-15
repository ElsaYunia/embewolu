function w3_open() {
  document.getElementById("main").style.marginLeft = "15%";
  document.getElementsByClassName("w3-sidenav")[0].style.width = "15%";
  document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
  document.getElementsByClassName("w3-opennav")[0].style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
  document.getElementsByClassName("w3-opennav")[0].style.display = "inline-block";
}

function onClick(element) {
  document.getElementById("gambar").src = element.src;
  document.getElementById("mgambar").style.display = "block";
}

$().ready(function(){
  $("#m_kamar").click(function(){
    $.ajax({
      url:"m_kamar.php",
      success:function(data){
        $("#isi").html(data);
      } 
    });
  });

  $("#m_bayar").click(function(){
    $.ajax({
      url:"m_bayar.php",
      success:function(data){
        $("#isi").html(data);
      } 
    });
  });
});

