<!DOCTYPE html>
<html>
    <body>
        <?php
        /*
        (function) untuk menyelesaikan tugas tertentu,
        yang merupakan bagian dari program utama yang 
        kita buat. 
        */
        function myTest() {
            static $x = 0;
            echo $x;
            $x++;
        }

        myTest();
        myTest();
        myTest();
        ?>
    </body>
</html>