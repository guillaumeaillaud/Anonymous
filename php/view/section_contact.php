<section id="section_contact" class="contact">
    <form id="contact" action="#section_contact" method="post">
        <fieldset>
            <legend>contacter-nous</legend>
            <label for="nom"><span style="color:red">*</span>Nom</label>
            <div>
            <input type="text" name="nom" id="nom" placeholder="entrer votre nom" required>
            </div>
            <label for="email"><span style="color:red">*</span>Email</label>
            <div>
            <input type="email" name="email" id="email" placeholder="enter votre email" required>
            </div>
            <label for="phone"><span style="color:red">*</span>Telephone</label>
            <div>
            <input type="phone" name="telephone" id="phone" placeholder="entrer votre telephone" required>
            </div>
            <label for="message"><span style="color:red">*</span>message</label>
            <div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="entrer votre message" required></textarea>
            </div>
            <div>
                <input type="submit" value="envoyer">
            </div>
        </fieldset>
    </form>

</section>