# X Medical — Dermatology Website

A responsive 5-page PHP/HTML/CSS/JS starter website for a dermatology clinic.

## Pages
- `index.html` — Home
- `about.html` — Doctor profile + services
- `gallery.html` — Clinic gallery
- `reviews.html` — 5 sample reviews + review form
- `contact.html` — Contact details, Google Map, appointment and contact forms

## Important before publishing
This is a **demo template**. The doctor photo, reviews, phone number, email and clinic address are sample content. Do not publish them as real credentials/reviews.

### 1. Google Appointment Form
Create a Google Form with fields such as:
Name, Phone, Email, Preferred date, Preferred time, Concern, Message.

Then choose **Send → Embed HTML**, copy the iframe, and replace the appointment placeholder in `contact.html`.

### 2. Google Contact Form
Create a second Google Form with:
Name, Email, Message.

Copy its iframe and replace the contact-form placeholder in `contact.html`.

### 3. Email delivery
The PHP appointment/contact forms are configured to send to:

`mishrasuraj98765@gmail.com`

Change `FROM_EMAIL` in `php/config.php` to a real mailbox on your hosting domain.

The included code uses PHP `mail()`. Many shared hosts require you to enable/verify outgoing mail or use SMTP. For reliable production email, configure your host's SMTP service or add PHPMailer/SMTP.

### 4. Google Maps
The demo uses a searchable Google Maps embed centered on Raj Nagar, Ghaziabad. Replace it with the actual clinic address. For a production Google Maps Embed API implementation, use your own Google Maps API key.

### 5. Images
The website uses remote Unsplash image URLs as sample imagery. Replace them with your actual clinic/doctor photos before launch. The doctor portrait is explicitly presented as a sample/fictitious profile image.

## Hosting
Upload the folder to a PHP-enabled host (cPanel/shared hosting/VPS). Keep the folder structure intact.

Open `index.html` through your hosting domain. PHP forms will work only when served through a PHP-capable server.

## Recommended production changes
- Use HTTPS.
- Replace all sample doctor/clinic information.
- Add a privacy policy and consent checkbox for patient data.
- Add server-side spam protection/rate limiting.
- Store appointment records securely if you need a database.
- Configure SMTP rather than relying on `mail()` where possible.
- Only publish genuine, consented patient reviews.
