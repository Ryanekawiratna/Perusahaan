<style>
    body {
        font-family: 'Times New Roman', sans-serif;
    }

    header {
        margin: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: black;
        color: white;
        padding: 30px;
        font-size: x-large;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin: 15px;
    }
</style>

<header>
    <title><?php echo $title ?></title>
    <div id="div_">Eureka</div>
    <nav>
        <a href="#">Tentang Kami</a>
        <a href="#">Kontak</a>
        <a href="<?= base_url('login') ?>">Login</a>
    </nav>
</header>