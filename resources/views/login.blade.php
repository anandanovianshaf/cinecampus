<html>
    <head>
        <title> CINECAMPUS </title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include ('header-login')
        <div class="w-full h-screen flex items-center justify-center relative bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2">
            <!-- Pseudo-elemen untuk background image -->
            <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('https://wallpapers.com/images/high/movie-poster-background-xw72c00uspkdklqq.webp');"></div>
            <!-- Login Session -->
            <div class="login flex flex-col items-center justify-center relative z-10">
                <h1 class="text-white">HI, STUDENT OF UIN, SEARCHING MOVIES TO WATCH?</h1>
                <br>
                <div class="input-box">
                    <input type="text" placeholder="NIM" required>
                    <i class='bx bxs-user-circle'></i>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" placeholder="PASSWORD" required>
                    <i class='bx bxs-key'></i>
                </div> <br>
                <button type="submit" class="btn">Login</button> <br>
                <h1 class="text-white"><a href="{{ route('sign-up') }}"></a>HAVEN'T MADE AN ACCOUNT?</h1> <br>
                <button class="btn">Sign Up</button>

                
        </div>
    </body>
</html>