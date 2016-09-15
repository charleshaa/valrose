var Mailgen = require('mailgen');

// Configure mailgen by setting a theme and your product info
var mailGenerator = new Mailgen({
    theme: 'cerberus',
    product: {
        // Appears in header & footer of e-mails
        name: 'Le Valrose',
        link: 'http://levalrose.com/',
        // Optional product logo
        logo: 'http://www.surfatoll.com/valrose/images/logo_blanc.png'
    }
});
    var email = {
        body: {
            name: '{{name}}',
            intro: 'Welcome to Mailgen! We’re very excited to have you on board.',
            dictionary: {
                "arrival":"{{arrival}}",
                "departure":"{{departure}}",
                "adults":"{{num_adults}}",
                "children":"{{num_children}}",
                "rooms":"{{num_rooms}}"
            },
            outro: 'Need help, or have questions? Just reply to this email, we\'d love to help.'
        }
    };

    // Generate an HTML email with the provided contents
    var emailBody = mailGenerator.generate(email);

    // Generate the plaintext version of the e-mail (for clients that do not support HTML)
    var emailText = mailGenerator.generatePlaintext(email);

    // Optionally, preview the generated HTML e-mail by writing it to a local file
    require('fs').writeFileSync('preview.html', emailBody, 'utf8');
