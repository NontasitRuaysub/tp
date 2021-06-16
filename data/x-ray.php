<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('elements/head.php') ?>
</head>

<body>
    <header>
        <?php include('elements/head-nav.php') ?>
    </header>

    <main>
        <!-- Breadcrumb -->
        <section id="breadcrumb" class="section">
            <div class="container">
                <div class="content">
                    <nav class="breadcrumb" aria-label="breadcrumbs">
                        <ul>
                            <li class="has-text-weight-light"><a href="../index.php">หมวดหมู่สินค้า</a></li>
                            <li class="is-active has-text-weight-light"><a href="#">เครื่องเอกซเรย์</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-5 has-text-weight-bold has-text-centered">เครื่องเอกซเรย์</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เครื่องเอ็กซ์เรย์/PIXX1212.jpg" alt="PIXX1212" title="PIXX1212">
                            <p class="is-size-6 has-text-weight-light mt-4">PIXX-1212</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เครื่องเอ็กซ์เรย์/PIXX-1417.jpg" alt="PIXX-1417" title="PIXX-1417">
                            <p class="is-size-6 has-text-weight-light mt-4">PIXX-1417</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เครื่องเอ็กซ์เรย์/PIXX-1717.jpg" alt="PIXX-1717" title="PIXX-1717">
                            <p class="is-size-6 has-text-weight-light mt-4">PIXX-1717</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact and footer Section -->
        <?php include('elements/contact-footer.php') ?>
    </main>

    <!-- Script -->
    <?php include('elements/script.php') ?>
</body>

</html>