<htmml>
<head>
<title> My favorite song </title>
    <body>
    <table border = "1" align = "center" width = "500">
        <tr>
            <td colspan = "2" align = "center">
                <strong> ⌒♡*:･。 My favorite song  ⌒♡*:･。 </strong>
            </td>
        <tr>

        <tr>
            <td align = "center"> 𝙨𝙤𝙣𝙜 〄 : </td>
            <td align = "center"> <input type = "text" name = "s" size = "59" value = "" /> </td>
        <tr>

        <tr>
        <td colspan = "2" align = "center">
            <input type = "submit" value = "ᴏᴋ ツ" />
        </td>
        </tr>

        <?php

            echo "<big> ♡ Top 5 My Favorite Song ♡ </big> " ;
            echo "<br>" ;

            $Song1 = "หรือไม่ใช่" ;
            $Ast1 = "INSPIRATIVE" ;
            $View1 = '1,431,215' ;
            echo " ⍀ 1.$Song1 - $Ast1 : $View1 View ʕっ•ᴥ•ʔっ" ;
            echo "<br>" ;
            
            $Song = "Blinding Lights" ;
            $Artist = "The Weeknd" ;
            $View = '340,493,064' ;
            
            echo " ⍀ 2.$Song - $Artist : $View View ⍝◜•⚇•◝⍝" ;  
            echo "<br>" ;

            $Song2 = "RESONANCE" ;
            $Ast2 = "NCT2020" ;
            $View2 = '59,374,800' ;
            echo " ⍀ 3.$Song2 - $Ast2 : $View2 View ⌒ •ㅅ• ⌒ " ;
            echo "<br>" ;

            $Song3 = "Wish" ;
            $Ast3 = "Blackbeans" ;
            $View3 = '2,692,059' ;
            echo " ⍀ 4.$Song3 - $Ast3 : $View3 View ʚ(•͈⌔•͈⑅)ɞ " ;
            echo "<br>" ;

            $Song4 = "Punch" ;
            $Ast4 = "NCT127" ;
            $View4 = '35,054,845' ;
            echo " ⍀ 5.$Song4 - $Ast4 : $View4 View (・ꈊ・)" ;
            echo "<br>" ;

            echo "<br>" ;
            
            
            //echo "<a href = 'ReFav.php'> <big> ReFav </big> </a>" ;
        ?>
</table>
    </body>
</html>
