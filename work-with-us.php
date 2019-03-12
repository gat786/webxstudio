<?php
    $title = "WEBXSTUDIO : Work with us";
    include("./includes/header.php");
?>
<body>
    <div id="loading"><span>Please Wait........</span></div>
    <?php
        include("./includes/navigation.php");
    ?>
    <header class="header header__work">
        <h1 class="heading-primary">Build your career with us.</h1>
        <h1 class="heading-primary--sub">Work with us</h1>
    </header>
    <div class="contact bgc ">
        <form action="./scripts/work.php" class="form" method="POST" enctype="multipart/form-data" id="form">
        <h1 class="heading-secondary">Send your resume</h1>
        <span class="contact__text">Feel free to contact us on phone during normal business hours. However, please fill the form below and we'll get to you as soon as possible.</span>
            <div class="form__group">
                <label for="name" class="form__label">Name</label>
                <input type="text" class="form__input" id="name" name="name">
            </div>
            <div class="form__group">
                <label for="email" class="form__label">Email</label>
                <input type="text" class="form__input" id="email" name="email">
            </div>
            <div class="form__group">
                <label for="number" class="form__label">Phone No.</label>
                <input type="number" class="form__input" id="number" name="number">
            </div>
            <div class="form__group">
                <label for="type" class="form__label">Want to apply for..</label>
                <select name="type" id="type" class="form__input">
                    <option value="website" selected>Designer</option>
                    <option value="graphics">Developer</option>
                    <option value="mobile" >Affiliate Program</option>
                </select>
            </div>
            <div class="form__group">
                <label for="resume" class="form__label">Attach your resume or cv</label>
                <input type="file" class="form__input" id="resume" accept=".docx, .doc, .odt,.pdf" name="resume">
            </div>
            <button class="btn btn--primary" value="submit" id="submit" name="submit">Send us a mail..</button>
            <span class="note">Please fill in the form and we will contact you as soon as possible or mail us on <a href="mailto:mail@webxstudio.in">mail@webxstudio.in</a> </span>
        </form>
    </div>
    <?php
        include("./includes/footer.php");
    ?>