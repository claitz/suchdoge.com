<!DOCTYPE html>
<html>
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





