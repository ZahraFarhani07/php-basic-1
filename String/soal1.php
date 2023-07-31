<?php   
        echo "<h3> Soal No 1</h3>";

        $first_sentence = "Hello PHP!" ; 
        echo "Panjang String: " .strlen($first_sentence); 
        echo ", ";
        echo "jumlah kata: " .str_word_count($first_sentence); 
        echo "<b> Dari Kata Hello PHP!</b>";
        echo "<br>";

        $second_sentence = "I'm ready for the challenges";
        echo "Panjang String: " .strlen($second_sentence); 
        echo ", ";
        echo "jumlah kata: " .str_word_count($second_sentence);
        echo "<b> Dari Kata I'm ready for the challenges</b>";

        echo "<h3> Soal No 2</h3>";

        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 2, 4);
        echo "<br> Kata ketiga: " . substr($string2, 7, 3);

        echo "<h3> Soal No 3 </h3>";
        
        $string3 = "PHP is old but Good!";
        $string4 = " PHP is old but awesome";
        echo "String: \"$string3\" "; 
        echo "<br> $string4 "; 
    ?>