<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php 

        echo "<h3> Soal No 1 Greetings </h3>";
        /* 
            Soal No 1
            Greetings
            Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

            contoh: greetings("abduh");
            Output: "Halo Abduh, Selamat Datang di Sanbercode!"
        */

        // Code function di sini
        function greetings($nama){
            echo "Halo ".$nama.", Selamat Datang di Sanbercode! <br>";
        }

        greetings("Bagas");
        greetings("Wahyu");
        greetings("Abdul");

        echo "<br>";
        
        echo "<h3>Soal No 2 Reverse String</h3>";
        /* 
            Soal No 2
            Reverse String
            Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
            Function reverseString menerima satu parameter berupa string.
            NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

            reverseString("abdul");
            Output: ludba
            
        */
 
        // Code function di sini 
        function reverseString($word){
            for ($i=strlen($word)-1; $i >= 0; $i--)
            {
                echo $word[$i];
            }   echo "<br>";
        }

        reverseString("abduh");
        reverseString("Sanbercode");
        reverseString("We Are Sanbers Developers");
        echo "<br>";

        echo "<h3>Soal No 3 Palindrome </h3>";
        /* 
            Soal No 3 
            Palindrome
            Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
            Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
            Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
            NB: 
            Contoh: 
            palindrome("katak") =>  output : true
            palindrome("jambu") => output : false
            NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
            
        */


        // Code function di sini
        function palindrome($a){
        $count=0;
        for($i=0;$i<strlen($a);$i=$i+1) //diulang sebanyak 4 kali
        {
        if($a{$i}==$a{strlen($a)-$i-1}) //jika jaya{j} == jaya{4-j-1} --> jika j = a, jika a = y
        {
        $count=$count+1; 
        /*tambah count nya --> endingnya nanti klo huruf depan dan belakang sama maka jumlah countnya bakal sama dengan jaya */
        }
        }
        if($count==strlen($a)) //fungsi cekjika count nya sudah sama dengan jaya
        echo "True <br>";
        else
        echo "False <br>";
        }


       palindrome("civic") ; // true
       palindrome("nababan") ; // true
       palindrome("jambaban"); // false
       palindrome("racecar"); // true
    ?>
</body>
</html>
