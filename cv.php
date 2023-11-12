<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['Ppassword'])) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<style>
    .container {
        background-color: rgb(240, 240, 240);
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    body {
        padding-bottom: 50px;
        padding-top: 30px;
    }

    img {
        border-radius: 10%;
        height: auto;
        width: 250px;
    }

    .col {
        padding: 50px;
    }

    div h1 {
        padding: 20px;
        font-size: 45px;
    }

    #satu h2, h3, p {
        text-align: left;
    }

    svg {
        margin-right: 10px;
        margin-left: 40px;
        margin-top: -5px;
    }
    #tiga {
        text-align: center;
        padding-top: 30px;
    }
    #empat{
        padding-top: 10px;
        padding-left: 30px;
        padding-right: 30px;
    }
</style>
<body>
    <div class="container text-center mt-5">
        <div><h1>PROFIL</h1></div>
        <hr>
        <div class="row" style="margin-top: -10px;" id="satu">
            <div class="col"><center><img src="<?php echo $_SESSION['Foto_Path']; ?>"></center></div>
            <div class="col" style="margin-left: -250px;">
                <h2><?php echo $_SESSION['Nama']; ?></h2>
                <h3><?php echo $_SESSION['ID']; ?></h3>
                <p style="font-size: 20px;"><?php echo $_SESSION['Deskripsi']; ?></p>
            </div>
        </div>
        <hr>
        <div class="row" style="background-color: rgb(210, 210, 210); padding: 0px;">
            <div class="col" style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
                <h4 style="text-align: center;"><?php echo $_SESSION['Email']; ?></h4>
            </div>
            <div class="col" style="display: flex;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
                <h4 style="text-align: center;"><?php echo $_SESSION['Telepon']; ?></h4>
            </div>
            <div class="col" style="display: flex;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
                <h4 style="text-align: center;"><?php echo $_SESSION['Instagram']; ?></h4>
            </div>
        </div>
        <hr>
        <div class="row" id="tiga">
            <h4>Data Pribadi</h4>
        </div>
        <div class="row" id="dua">
            <div class="col"></div>
            <div class="col" id="dua-dua">
                <p style="font-size: 20px;">Nama </p>
                <p style="font-size: 20px;">Tempat Tanggal Lahir </p>
                <p style="font-size: 20px;">Alamat </p>
                <p style="font-size: 20px;">Jenis Kelamin </p>
                <p style="font-size: 20px;">Kewarganegaraan </p>
                <p style="font-size: 20px;">Status </p>
            </div>
            <div class="col">
                <p style="font-size: 20px;">: <?php echo $_SESSION['Nama']; ?></p>
                <p style="font-size: 20px;">: <?php echo $_SESSION['TTL']; ?></p>
                <p style="font-size: 20px;">: <?php echo $_SESSION['Alamat']; ?></p>
                <p style="font-size: 20px;">: <?php echo $_SESSION['Jenis_Kelamin']; ?></p>
                <p style="font-size: 20px;">: <?php echo $_SESSION['Kewarganegaraan']; ?></p>
                <p style="font-size: 20px;">: <?php echo $_SESSION['Statuss']; ?></p>
            </div>
            <div class="col"></div>
        </div>
        <hr>
        <div class="row" id="empat" >
            <div class="col" style="background-color: rgb(210, 210, 210);">
                <h4>Pendidikan</h4>
                <p style="font-size: 20px;"><?php echo $_SESSION['Pendidikan']; ?></p>
                <h4>Hobi</h4>
                <p style="font-size: 20px;"><?php echo $_SESSION['Hobi']; ?></p>
            </div>
            <div class="empat-dua" style="border: 1px rgb(240, 240, 240) solid; height: 170px; width: 0px;" ></div>
            <div class="col" style="background-color: rgb(210, 210, 210);">
                <h4>Keterampilam</h4>
                <p style="font-size: 20px;"><?php echo $_SESSION['Keterampilan']; ?></p>
                <h4>Pengalaman</h4>
                <p style="font-size: 20px;"><?php echo $_SESSION['Pengalaman_Kerja']; ?></p>
            </div>
        </div>
        <div style="padding-top: 20px;">
        <button type="submit" class="btn btn-success"><a href="edit.php" style="color: white; text-decoration: none;">Update</a></button>
        <button type="submit" class="btn btn-primary"><a href="logout.php" style="color: white; text-decoration: none;">Logout</a></button>
       
        </div>
        
    </div>
</body>
</html>

<?php
} else {
    header('Location: index.php?error=Belum login');
    exit;
}
?>