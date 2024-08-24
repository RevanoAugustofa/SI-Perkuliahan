<?php
function tahunRange() {
  $tahunAwal = 2006;
  $tahunAkhir = 2024;

  for ($i = $tahunAkhir; $i >= $tahunAwal; $i--) {
    echo "<option value='$i'>$i</option>";
  }
}
$tahunAwal = 2006;
$tahunAkhir = 2024;

for ($i = $tahunAwal; $i <= $tahunAkhir; $i++) {
  echo "<option value='$i'>$i</option>";
}

tahunRange();
?>