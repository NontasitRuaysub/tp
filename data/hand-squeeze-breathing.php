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
                            <li class="is-active has-text-weight-light"><a href="#">ชุดช่วยหายใจแบบมือบีบ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-5 has-text-weight-bold has-text-centered">ชุดช่วยหายใจแบบมือบีบ</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/ชุดช่วยหายใจแบบมือบีบ/ambu-bag-01.jpg" alt="ชุดช่วยหายใจแบบมือบีบ" title="ชุดช่วยหายใจแบบมือบีบ">
                            <p class="is-size-6 has-text-weight-light mt-4">ชุดช่วยหายใจแบบมือบีบ</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/ชุดช่วยหายใจแบบมือบีบ/ambu-bag-02.jpg" alt="ชุดช่วยหายใจแบบมือบีบ" title="ชุดช่วยหายใจแบบมือบีบ">
                            <p class="is-size-6 has-text-weight-light mt-4">ชุดช่วยหายใจแบบมือบีบ</p>
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