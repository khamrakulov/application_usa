<!-- ======= Contact Section ======= -->
<?php
if (isset($_SESSION['xabar'])){
    if ($_SESSION['xabar'] == "kam"){
        $alert = '<div class="alert alert-danger" role="alert">
  So\'zlar soni 250 tadan kam
</div>';
    }elseif ($_SESSION['xabar'] == "ko'p"){
        $alert = '<div class="alert alert-danger" role="alert">
  So\'zlar soni 500 tadan ko\'p
</div>';
    }
}


?>

<section id="apply-now" class="contact">
      <div class="container" data-aos="fade-up">

        <form class="apply-now-form" action="forms/apply-now.php" method="POST">
            <h1 class="apply-now-h1">Бесплатная консультация</h1>
            <p class="apply-now-p">Ответим на все ваши вопросы и сориентируем по дальнейшим действиям для поступления</p>
            <input class="apply-now" type="text" name="first_name" placeholder="First name" required>
            <input class="apply-now" type="text" name="last_name" placeholder="Last name" required>
            <input class="apply-now" type="email" name="email" placeholder="Email" required>
            <input class="apply-now" type="date" name="birthday" placeholder="Birthday" required>
            <input class="apply-now" type="text" name="country" placeholder="City, Country" required>
            <input class="apply-now" type="tel" name="tel" placeholder="Phone Number (Telegram)" required>
            <input class="apply-now" type="text" name="gpa" placeholder="Estimated GPA" required>
            <input class="apply-now" type="text" name="english_test_scores" placeholder="English test scores" required>
            <input class="apply-now" type="text" name="school" placeholder="High school" required>
            <input class="apply-now" type="text" name="grad" placeholder="Date of graduation" required>
            <input class="apply-now" type="text" name="col_list" placeholder="Collage list" required>
            <div>
                <textarea minlength="250" maxlength="500" class="apply-now" id="apply-now-message" name="message" cols="50" rows="10" placeholder="Why do you want to apply this program? (Minimum 250 words, maximum 500 words)" required></textarea>
                <span id="count-word"></span>
            </div>
            <input name="submit" class="apply-now-btn" class="submit" type="submit" value="Submit">
        </form>
    </div>
</section><!-- End Contact Section -->