<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <div class="container-fluid">


            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- root (/) di sini bisa diakses jika menggunakan php park serve -->

                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/pages/about">About</a>
                    <a class="nav-link" href="/pages/contact">Contact</a>
                    <a class="nav-link" href="/komik">Komik</a>

                    <!-- tetapi, jika menggunakan XAMPP harus echo  -->
                    <!-- <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                    <a class="nav-link" href=" <? //= base_url('/pages/about'); 
                                                ?> ">About</a>
                    <a class="nav-link" href="<? //= base_url('/pages/contact'); 
                                                ?> ">Contact</a>
                    <a class="nav-link" href="<? //= base_url('/komik'); 
                                                ?> ">Komik</a> -->
                </div>
            </div>
        </div>
    </div>
</nav>