<!-- This is only used for development. If you include this at the
     top of nav.php, you will see a menu that allows you to explore
     the different color themes. It should not be used in production.
-->

<script>
  function setTheme(val) {
    // for Kay's machine
     //document.getElementById('style').href = '/styles/' + val + '_theme.css';

     // for Kevin's machine
     document.getElementById('style').href = '/tools/confdemo/styles/' + val + '_theme.css';
  }
</script>
<style>
#theme-menu {
  position: fixed;
  top: 0%;
  right: 0%;
  z-index: 2000;
  height: 0;
}

#theme-menu button {
  background: #f0f0f0 !important;
  border: 2px solid blue;
}
</style>
<div class="dropdown" id="theme-menu">
  <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" \
aria-haspopup="true" aria-expanded="false">
    Choose a color scheme
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#" onclick='setTheme("purple")'>Purple</a>
    <a class="dropdown-item" href="#" onclick='setTheme("black")'>Black</a>
    <a class="dropdown-item" href="#" onclick='setTheme("orange")'>Orange</a>
    <a class="dropdown-item" href="#" onclick='setTheme("green")'>Green</a>
    <a class="dropdown-item" href="#" onclick='setTheme("teal")'>Teal</a>
    <a class="dropdown-item" href="#" onclick='setTheme("blue")'>Blue</a>
    <a class="dropdown-item" href="#" onclick='setTheme("blue2")'>Blue2</a>
    <a class="dropdown-item" href="#" onclick='setTheme("dark")'>Dark</a>
  </div>
</div>

