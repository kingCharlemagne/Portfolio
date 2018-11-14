<h2 class="portfolio-title">Contact</h2>
    <div class="row form-position">
        <?php if (!empty($errors)) { ?>
            <div>
                <?php
                foreach ($errors as $error) { ?>
                    <article>
                        <p class="text-center text-uppercase "><?php echo $error; ?></p>
                    </article>
                <?php } ?>
            </div>
        <?php } ?>
        <form method="POST">
            <div class="form-group">
                <input type="text" class="contact-input" id="name" name="name" placeholder="Nom">
                <div class="required"></div>
            </div>

            <div class="form-group">
                <input class="contact-input" id="email" name="email" placeholder="Adresse mail">
                <div class="required"></div>
            </div>

            <div class="form-group">
                <input type="tel" class="contact-input" id="phone" name="phone" placeholder="Numéros de Télephone">
            </div>


            <div class="form-group">
                <textarea class="contact-input" id="message" name="message" rows="3" cols="100"
                          placeholder="Message"></textarea>
                <div class="required"></div>
            </div>

            <div>
                <button id="send" type="submit" class="btn btn-contact">Envoyer</button>
            </div>

        </form>
    </div>