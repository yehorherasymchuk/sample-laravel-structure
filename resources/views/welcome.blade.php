<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <script src="{{ asset('/js/app.js') }}"></script>

    <script>
        window.Echo.channel('orders')
            .listen('.created', (e) => {
                console.log(e)
            });
    </script>
    </body>
</html>
