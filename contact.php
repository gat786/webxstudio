<?php
    $title = "WEBXSTUDIO : Get in touch";
    include("./includes/header.php");
?>
<body>
    <div id="loading"><span>Please Wait........</span></div>
    <?php
        include("./includes/navigation.php");
    ?>
    <header class="header header__contact">
        <h1 class="heading-primary">Want to Talk to us?</h1>
        <h1 class="heading-primary--sub">Contact now</h1>
    </header>
    <div class="contact">
        <form action="scripts/contact.php" class="form" enctype="multipart/form-data" method="post" id="form">
        <h1 class="heading-secondary">Get in touch</h1>
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
                <label for="type" class="form__label">What kind of project is it?</label>
                <select name="type" id="type" class="form__input" name="type">
                    <option value="website" selected>Website</option>
                    <option value="graphics">Graphics Design</option>
                    <option value="mobile" >Mobile Application</option>
                    <option value="software" >Computer Software</option>
                    <option value="digital">digital Marketing</option>
                    <option value="seo">SEO</option>
                </select>
            </div>
            <div class="form__group">
                <label for="desc" class="form__label">Description about the project</label>
                <textarea type="text" class="form__input" id="desc" name="description"></textarea>
            </div>
            <button class="btn btn--primary" type="submit" id="submit" name="submit">Send us a mail..</button>
            <span class="note">Please fill in the form and we will contact you as soon as possible or Call Us on <a href="tel:+917558228045">+917558228045</a>/<a href="tel:+919763124441">+919763124441</a></span>
        </form>
    </div>
    <?php
        include("./includes/footer.php");
    ?>