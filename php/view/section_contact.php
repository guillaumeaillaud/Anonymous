<section id="section_contact" class="contact">
    <form id="contact" action="#section_contact.php" method="post">
        <fieldset>
            <div>
                <legend>contacter-nous</legend>
            </div>
            <label for="nom">Nom <span style="color:red">*</span></label>
            <div>
                <input type="text" name="nom" id="nom" placeholder="entrer votre nom" required>
            </div>
            <label for="email">Email <span style="color:red">*</span></label>
            <div>
                <input type="email" name="email" id="email" placeholder="enter votre email" required>
            </div>
            <label for="phone">Telephone <span style="color:red">*</span></label>
            <div>
                <input type="tel" name="telephone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="entrer votre telephone" required><br>
                <p>Format: 123-456-7890</p>
            </div>
            <label for="message">message <span style="color:red">*</span></label>
            <div>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="entrer votre message" required></textarea>
            </div>
            <div>
                <input type="submit" value="envoyer">
            </div>
            </div>
        </fieldset>
    </form>
</section>