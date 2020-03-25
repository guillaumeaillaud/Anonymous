<section id="section_contact" class="contact">
    <h2>contactez-nous</h2>
    <div class="container-fluid">
        <div class="row">
            <form class="form" action="#section_contact.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom <span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="entrer votre nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email <span style="color:red">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="enter votre email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telephone <span style="color:red">*</span></label>
                    <input type="tel" class="form-control" name="telephone" id="phone" pattern="[0-9]{10}" placeholder="entrer votre telephone" required>
                    <small>Format: 1234567890</small>
                </div>
                <div class="form-group">
                    <label for="message">Message <span style="color:red">*</span></label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="entrer votre message" required></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark" type="submit">envoyer</button>
                </div>
        </div>
    </div>


    </form>
</section>