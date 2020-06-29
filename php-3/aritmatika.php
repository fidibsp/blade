<?php
/*PSEUDOCODE
1. periksa simbol operator, jika ada simbo yang tidak sesuai maka ubah simbol tersebut ke penulisan simbol aritmatika yang benar
2. lakukan proses aritmatika pada data string
3. tampilkan hasil


*/
  function hitung($string_data)
  {
    // Kode kalian di sini
$string_data = str_replace(':', '/', $string_data);
$math_string ="print (".$string_data.");";
$result = eval($math_string);
echo $result."<br>";
  }

  // TEST CASES
  echo hitung("102*2"); //204
  echo hitung("2+3"); //5
  echo hitung("100:25"); //4
  echo hitung("10%2"); //0
  echo hitung("99-2"); //97
?>


