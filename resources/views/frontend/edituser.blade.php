<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet"/>
    <!-- Fonts and icons -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <style>
        /* Gaya CSS untuk latar belakang dan efek parallax */
        body {
            background: url('assets/img/landing.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .parallax {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Menempatkan latar belakang di belakang konten utama */
        }

        .parallax::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 0, 0, 0.5); /* Filter warna merah dengan transparansi */
        }

        .content {
            text-align: center;
            padding: 50px;
            color: #fff;
            z-index: 1; /* Menempatkan konten utama di depan latar belakang */
        }

        .account-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .account-box img.avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .account-box h4.title {
            color: #333;
        }

        .account-box p.description {
            color: #555;
            margin: 10px 0;
        }

        .edit-button {
            background-color: #337ab7; /* Warna tombol biru Bootstrap */
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    @include ('frontend.navbaruser')
    <div class="parallax filter filter-color-red"></div>
    <div class="content">
        <div class="account-box">
            <img class="avatar border-white" src="https://placehold.it/80x80" alt="User Avatar">
            <h4 class="title">Nama Akun</h4>
            <p class="description">
                <strong>Email:</strong> email@gmail.com<br>
                <strong>Phone:</strong> +62 8942i42
            </p>
            <a href="{{ url('edituser1') }}" class="btn btn-danger btn-fill">Edit</a>
        </div>
    </div>
</body>

</html>