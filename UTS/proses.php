<?php
if (isset($_POST['tahun'])) {
  $tahun = htmlspecialchars($_POST['tahun']);

  if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
    echo "<p class='hasil'>✅ Tahun $tahun adalah tahun kabisat.</p>";
  } else {
    echo "<p class='hasil'>❌ Tahun $tahun bukan tahun kabisat.</p>";
  }
}
?>
