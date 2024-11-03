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
            <!-- Sign Up Session -->
            <div class="login flex flex-col items-center justify-center relative z-10">
                <h1 class="text-white">Please Enter the Data to get your Account!</h1>
                <br>
                <div class="input-box">
                    <input type="text" placeholder="Enter your full name" required>
                </div>
             
                <div class="input-box">
                    <input type="text" placeholder="NIM" required>
                </div> 
                <div class="input-box">
                    <input type="text" placeholder="Password" required>
                </div> <br>
                <button type="submit" class="btn">Sign-In</button> <br>
                <h1 class="text-white"><a href="#sign-up"></a>Already Have an Account?</h1> <br>
                <button class="btn">Login</button>

                
        </div>
    </body>
</html>