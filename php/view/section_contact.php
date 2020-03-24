<section id="section_contact" class="contact">
    <form id="contact" action="#section_contact.php" method="post">
        <fieldset>
            <legend>contacter-nous</legend>
            <div class="form-group">
                <label for="nom">Nom <span style="color:red">*</span></label><br>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="entrer votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email <span style="color:red">*</span></label><br>
                <input type="email" class="form-control" name="email" id="email" placeholder="enter votre email" required>
            </div>
            <div class="form-group">
                <label for="phone">Telephone <span style="color:red">*</span></label><br>
                <input type="tel" class="form-control" name="telephone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="entrer votre telephone" required><br>
                <p>Format: 123-456-7890</p>
            </div>
            <div class="form-group">
                <label for="message">message <span style="color:red">*</span></label><br>
                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="entrer votre message" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="envoyer">
            </div>
        </fieldset>
    </form>
</section>