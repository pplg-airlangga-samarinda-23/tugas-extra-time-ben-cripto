<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">

    <?php
    include('panggil.php');

    if ($_SESSION['login'] == false) {
        header('Location: index.php');

        die();
    }

    if (isset($_POST['logout'])) {
        $_SESSION['login'] = false;

        header('Location: index.php');
    }

    // $SQL = "SELECT*FROM isi_data ORDER BY id DESC";
    // $hasil = $conn->query($SQL);
    ?>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">Logo</div>
            <button class="menu-btn">Dashboard</button>
            <button class="menu-btn">Master Barang</button>
            <button class="menu-btn">Receiving</button>
            <button class="menu-btn">Issuing</button>
        </div>

        <div class="main-content">
            <div class="header">
                <div class="username-container">
                    <div class="username"></div>
                    <h3><?php echo $_SESSION['username']; ?></h3>
                    <img src="angzay.png" alt="User Profile" class="profile-logo">
                </div>
            </div>

            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Pencarian">
            </div>

            <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Pengadaan</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Baik</th>
                        <th>Rusak</th>
                    </tr>
                <tbody id="table-body">
                    <tr>
                        <td>1</td>
                        <td>Donat</td>
                        <td>2023-11-01</td>
                        <td>50</td>
                        <td>Baik</td>
                        <td>40</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pudding</td>
                        <td>2023-10-15</td>
                        <td>72</td>
                        <td>Rusak</td>
                        <td>5</td>
                        <td>67</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Roti</td>
                        <td>2023-11-12</td>
                        <td>300</td>
                        <td>Baik</td>
                        <td>270</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Sushi</td>
                        <td>2023-12-15</td>
                        <td>1192</td>
                        <td>Rusak</td>
                        <td>992</td>
                        <td>100</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>