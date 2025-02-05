<style>
    .container-fluid {
        padding: 0;
    }

    body {
        font-family: 'jakarta-sans', sans-serif;
    }

    header {
        margin: 5;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: black;
        border-radius: 20px;
        color: white;
        padding: 10px;
        font-size: x-large;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin: 15px;
    }

    #header-search {
        border-radius: 20px;
        text-align: center;
        width: 10em;
    }
</style>
<header>
    <title><?php echo $title ?></title>
    <div id="div_">Eureka</div>
    <nav>
        <a href="<?= base_url('login') ?>">Login</a>
        <input id="header-search" type="text" placeholder="Mencari">
        <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
    </nav>
</header>