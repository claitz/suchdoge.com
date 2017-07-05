<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $.post(
            'https://graph.facebook.com',
            {
                id: 'http://wow.suchdoge.com',
                scrape: true
            },
            function(response){
                console.log(response);
            }
        );
    </script>
</html>





