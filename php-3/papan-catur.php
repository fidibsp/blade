<?php

function papan_catur($angka) {
// tulis kode di sini
	for($column=1;$column<=$angka;$column++)
	{
	for($row=1;$row<=$angka;$row++)
	{
		if($column%2==0)
		{ $angk=$angka-1;
			for($row=1;$row<=$angk;$row++){
			echo "&nbsp #";
		}
	}
		else
		{
			echo "# &nbsp";
		}
	}

	echo "<br>";
}
}

// TEST CASES
echo papan_catur(4)."<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)."<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # # 
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>