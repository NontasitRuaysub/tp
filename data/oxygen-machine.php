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
                            <li class="is-active has-text-weight-light"><a href="#">เครื่องผลิตออกซิเจน</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-5 has-text-centered">เครื่องผลิตออกซิเจน</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เครื่องผลิตออกซิเจน/CONTEC21.jpg" alt="CONTECT21" title="CONTECT21">
                            <p class="is-size-6 has-text-weight-light mt-4">CONTECT21</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เครื่องผลิตออกซิเจน/OC3B.jpg" alt="OC3B" title="OC3B">
                            <p class="is-size-6 has-text-weight-light mt-4">OC3B</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เครื่องผลิตออกซิเจน/OC5B.jpg" alt="OC5B" title="OC5B">
                            <p class="is-size-6 has-text-weight-light mt-4">OC5B</p>
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