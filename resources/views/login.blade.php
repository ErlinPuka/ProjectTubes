<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="Shortcut icon" href = "{{ asset('images/logo.png') }}"alt="">
    <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
    <body>
        <div class = "container">
            <header>
                <nav>
                    <div class="logoterbaru">
                        <img src="{{asset('images/Logoterbaru.png')}}" alt="Image" height="60" width="200" />
                    </div>
                    <input type="checkbox" id="click" />
                    <label for="click" class="menu-btn">
                        <i class="fas fa-bars"></i>
                    </label>
                    <ul>
                        <li><a href = "index">Home</a></li>
                        <li><a href = "#">About</a></li>
                        <li><a href = "#">Categories</a></li>
                        <li><a href = "Login" class="btn_login">Login</a></li>
                     </ul>
                </nav>
            </header>
            <main>
                <div class="center">
                    <div class="form-login">
                        <h3>Login To Your Account</h3>
                        <form action="">
                            <br>
                            <label for="products">Username</label>
                            <input class="input"type="text" name ="username"palceholder="username" />
                            <br>
                            <label for="products">Password</label>
                            <input class="input"type="password" name ="password"palceholder="password" /><br><br>
                            <center><a href="dashboard-admin" type="submit" class="btn_login" name="Login">Login</a></center>
                        </form>
                        <a href="register" class="link-register">Belum Punya Akun? Daftar disni!!!</a>
                    </div>
                </div>
            </main>
            {{-- <footer>
                <div class="footer">
                <h4> &copy; PT Chocolate Sikka </h4>
                </div>
            </footer> --}}
        </div>
    </body>
</html>