<?php
function ubah_huruf($string){
//kode di sini
	for ($i = 0; $i < strlen($string); $i++) {
    $asciiCode = ord($string[$i]);
        if ($asciiCode >= 97 && $asciiCode <= 122) {
            $string[$i] = chr($asciiCode + 1);
            }
    }
    return "$string<br>";
}


// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
