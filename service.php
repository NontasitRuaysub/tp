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
        <!-- breadcrumb -->
        <section id="breadcrumb" class="section">
            <div class="container">
                <div class="content">
                    <nav class="breadcrumb" aria-label="breadcrumbs">
                        <ul>
                            <li class="has-text-weight-light"><a href="index.php">หน้าแรก</a></li>
                            <li class="is-active has-text-weight-light"><a href="#">บริการของเรา</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>


        <!-- Service section -->
        <section id="company-service" class="section">
            <div class="container">
                <div class="columns is-multiline is-vcentered">
                    <div class="column is-6-tablet">
                        <div class="content">
                            <img src="images/service-img/technician-fixed-equipment.jpg" alt="บริการซ่อมอุปกรณ์ทางการแพทย์ทุกชนิด" title="บริการซ่อมอุปกรณ์ทางการแพทย์ทุกชนิด">
                        </div>
                    </div>
                    <div class="column is-6-tablet">
                        <div class="content">
                            <h1 class="title is-size-5 has-text-weight-bold">บริการซ่อมอุปกรณ์ทางการแพทย์ทุกชนิด</h1>
                            <p class="is-size-6 has-text-weight-light">บริการซ่อมเครื่องมือแพทย์ งานซ่อมบำรุง ให้บริการครบวงจร ในงานซ่อมบำรุงรักษา จัดหาอะไหล่ สำหรับ เครื่องผลิตออกซิเจน, เครื่องมือและอุปกรณ์การแพทย์, เครื่อง CPAP, เครื่อง BiPAP, เตียงผู้ป่วย, เครื่องปั่นเลือด, เครื่องวัดสัญญาณชีพ เป็นต้น โดยมุ่งเน้นการแก้ไขเฉพาะอุปกรณ์ที่ชำรุดเสียหาย ไม่ยกเปลี่ยนทั้งบอร์ด เพื่อเป็นการลดค่าใช้จ่ายให้กับลูกค้า และผู้รับบริการทุกท่าน อีกทั้งยังมีโปรแกรม การตรวจเช็คและบำรุงรักษาเครื่องมือแพทย์ ประจำปี(PM) ให้อีกด้วย</p>
                        </div>
                    </div>

                </div>
                <div class="columns is-multiline is-vcentered second-service-columns">
                    <div class="column is-6-tablet">
                        <div class="content">
                            <img src="images/service-img/expert-writing-docs.jpg" alt="บริการสอบเทียบเครื่องมือแพทย์" title="บริการสอบเทียบเครื่องมือแพทย์">
                        </div>
                    </div>
                    <div class="column is-6-tablet">
                        <div class="content">
                            <h1 class="title is-size-5 has-text-weight-bold">บริการสอบเทียบเครื่องมือแพทย์</h1>
                            <p class="is-size-6 has-text-weight-light">ให้บริการบำรุงรักษา (Preventive Maintenance, PM) และสอบเทียบมาตรฐาน (Calibration, CAL) เครื่องมือการแพทย์ (Medical Equipment) เครื่องวิเคราะห์และเครื่องมือวิทยาศาสตร์ สำหรับห้องปฏิบัติการทางการแพทย์ (Laboratory & Scientific Equipment) โดยทีมวิศวกรทางการแพทย์ที่มีประสบการณ์ ด้วยเครื่องมือและอุปกรณ์ที่ทันสมัย</p>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Contact Banner + Footer -->
        <?php include('elements-for-contact/contact-footer.php') ?>
    </main>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
    <!-- Jquey CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Owl Carousel CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- JS File -->
    <script src="js/app.js" type="text/javascript"></script>
</body>

</html>