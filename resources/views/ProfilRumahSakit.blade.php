<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil RSU Fikri Medika</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-family: 'Poppins', sans-serif; 
            font-size: 20px; 
            font-weight: bold;
            color: #21BF73; 
        }

        .container {
            background: #FAF8ED;
            width: 100%;
            max-width: 480px; 
            margin: 0 auto;
            padding: 0px 0px 20px 0px;
        }

        .header {
            background: #F1F864;
            padding: 10px;
        }

        .logo {
            margin: 20px 0px 0px 0px;
        }

        .title-container {
            background: white;
            padding: 5px 0px 5px 0px;
        }

        .image {
            padding: 0px;
            margin: 0px;
            height: auto;
            width: 100%;
            max-width: 100%;
            object-fit: contain;
            object-position: center;
            align-items: center;
        }

        .header-title {
            color: #21BF73;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .main {
            padding: 10px;
            align-items: center;
            text-align: center;
            margin: 0px 100px 0px 100px;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .section h3 {
            font-size: 18px;
            margin-bottom: 5px;
            align-items: center;
        }

        .section p {
            line-height: 1.5;
            margin-bottom: 20px; /* Add spacing between sections */
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="RSU Fikri Medika Logo">
            </div>
        </header>

        <section class="title-container">
            <p class="header-title">Profil RSU Fikri Medika</p>
        </section>

        <div class="image">
            <img src="{{ asset('img/image 5.png') }}">
        </div>

        <main class="main">
            <section> 
                <h3>Visi</h3>
                <p>Menyediakan Rumah Sakit Swasta yang Menyediakan Layanan Berkualitas, Unggul dan Terpercaya Di Karawang</p>
            </section>

            <section>
                <img src="{{ asset('img/line.png') }}">
            </section>

            <section> 
                <h3>Misi</h3>
                <p>Memberikan pelayanan kesehatan dan media terbaik kepada masyarakat. Mewujudkan Kesejahteraan bagi seluruh stakeholder. Peduli kepada lingkungan, masyarakat dan bangsa.</p>
            </section>

            <section>
                <img src="{{ asset('img/line.png') }}">
            </section>

            <section> 
                <h3>Motto</h3>
                <p>Kesehatan Anda Prioritas Layanan Utama Kami</p>
            </section>
        </main>
    </div>
</body>
</html>
