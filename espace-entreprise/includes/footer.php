</main>

<?php

if($useJquery==true)
{
    echo'

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>    
    
    
    ';
    if($moreJS != ""){

        echo $moreJS;
    }
    echo'

    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/helper.js"></script>
    
    
    ';
}

?>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-79433549-1', 'auto');
    ga('send', 'pageview');


</script>

</body>
</html>