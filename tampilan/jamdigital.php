
<script type="text/javascript">
 window.onload = function() { jam(); }

 function jam() {
  var e = document.getElementById('jum'),
  d = new Date(), h, m, s;
  h = d.getHours();
  m = set(d.getMinutes());
  s = set(d.getSeconds());

  e.innerHTML = h +':'+ m +':'+ s;

  setTimeout('jam()', 1000);
 }

 function set(e) {
  e = e < 10 ? '0'+ e : e;
  return e;
 }
</script>
<center>
<h1 style="font-size: 100px; font-family: arial; color:red; margin:0; border-radius:1px;" id="jum"></h1>
</center>