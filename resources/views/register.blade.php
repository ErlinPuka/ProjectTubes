<!DOCTYPE html>
<html>
	<head>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            {{-- <img src="{{ asset('images/logoterbaru.png') }}"alt=""> --}}
            <title>PT Chosik</title>
            <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
            <link rel="preconnect" href="https://fonts.googleapis.com" />	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>
        <div class="container">
            <header>
                <nav>
                    <div class="logoterbaru">
                        <img src="{{asset ('images/Logoterbaru.png') }}" alt="Image" height="60" width="200" />
                    </div>
                    <input type="checkbox" id="click" />
                    <label for="click" class="menu-btn">
                        <i class = "fas fa-bars"></i>
                    </label>
                    <ul>
                        <li><a href = "index">Home</a></li>
                        <li><a href = "#">About</a></li>
                        <li><a href = "#">Categories</a></li>
                        <li><a href = "login">Login</a></li>
                        <li><a href = "Login" class="btn_login">Login</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="center">
                    <div class="form-register">
                     <h3>Form Register</h3>
                     <form action="">
                        <br />
                        <label for="text">Masukan Email</label>
                       <input class="input" type="email" name="email" placeholder="Email" />
                       <br />
                       <label for="text">Masukan Nama Lengkap</label>
                       <input class="input" type="text" name="username" placeholder="Username"/>
                       <br />
                       <label for="text">Masukan Password</label>
                       <input class="input" type="password" name="password"  placeholder="Password" />
                       <br />
                       <label for="text">Konfirmasi Password</label>
                       <input class="input" type="password" name="password"  placeholder="Password" />
                        <button type="submit" class="btn_login" name="register" id="register">
                           Register
                       </button>
                     </form>
                    </div>
                </main>
             </nav>
             </header>
             </div>
        {{-- <footer>
            <div class="footer">
            <h4> &copy; PT Chocolate Sikka </h4>
            </div>
        </footer> --}}
    </body>
</html>