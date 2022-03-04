<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Баллы 🪙</title>
    <style>
        * {
            border: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.2.2/imask.min.js"></script>
</head>
<body class="flex bg-black text-white text-lg h-screen">
    <div class="container m-auto flex flex-col w-1/5 h-min">
        <form action="/api/" method="post" class="flex flex-col w-full">
            @csrf
            <label for="phone-mask">Введите номер телефона:</label>
            <input type="text" name="tel" class="text-black my-2" id="tel" value>
            <button type="submit" class="my-2 w-full border-2 text-center text-md p-2 hover:bg-white hover:text-black transition duration-300 ease">Посмотреть баллы</button>
        </form>
        <script>
            let tel = document.getElementById('tel');
            let maskOptions = {
                mask: '+{7}(000)000-00-00'
            };
            let mask = IMask(tel, maskOptions);
        </script>
        <div class="hidden text-5xl flex flex-col w-full items-center">
            <div>8088</div>
            <div class="text-3xl">баллов</div>
        </div>
    </div>
</body>
</html>
