<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor">
        <h1>Contact</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="contact img">
        </picture>

        <h2>Fill out the contact form</h2>

        <form class="form">
            <fieldset>
                <legend>Personal Information</legend>

                <label for="name">NAME</label>
                <input type="text" placeholder="Your Name" id="name">

                <label for="email">E-MAIL</label>
                <input type="email" placeholder="Your E-Mail" id="email">

                <label for="phone">PHONE</label>
                <input type="tel" placeholder="Your Phone Number" id="phone">

                <label for="message">MESSAGE</label>
                <textarea id="message"></textarea>
            </fieldset>

            <fieldset>
                <legend>Property Information</legend>

                <label for="option">SELL OR BUY</label>
                <select id="option">
                    <option value="" disabled selected>-- Select an option --</option>
                    <option value="Sell">Sell</option>
                    <option value="Buy">buy</option>
                </select>

                <label for="budget">PRICE OR BUDGET</label>
                <input type="number" placeholder="Your Price or Budget" id="budget">
            </fieldset>

            <fieldset>
                <legend>Contact</legend>

                <p>How would you like to be contacted?</p>

                <div class="contact-form">
                    <label for="contact-phone">PHONE</label>
                    <input name="contact" type="radio" value="Phone" id="contact-phone">

                    <label for="contact-email">E-MAIL</label>
                    <input name="contact" type="radio" value="E-Mail" id="contact-email">
                </div>

                <p>If you chose phone, choose date and time.</p>

                <label for="date">DATE</label>
                <input type="date" id="date">

                <label for="time">TIME</label>
                <input type="time" id="time" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Sent" class="btn-green">
        </form>
    </main>

<?php include 'includes/templates/footer.php'; ?>