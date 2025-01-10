
<h1 align="center">🌐 Roleplay Website</h1>
<p align="center">
    A professional and immersive website designed for roleplay servers, featuring an application system, a gallery, and Discord integration.
</p>

---

<h2>📦 Features</h2>
<ul>
    <li>✅ <strong>Application System:</strong> Allows users to submit applications directly through the website.</li>
    <li>✅ <strong>Discord Integration:</strong> Application submissions are sent to a designated Discord channel.</li>
    <li>✅ <strong>Image Gallery:</strong> A visual gallery showcasing server highlights and images.</li>
    <li>✅ <strong>Modern Design:</strong> Built with a clean, modern look using PHP, CSS, and JavaScript.</li>
</ul>

---

<h2>📂 File Structure</h2>
<p>The following structure ensures proper organization of the website files:</p>



---

<h2>📥 How to Use the Website</h2>

<h3>📝 Application System</h3>
<ol>
    <li>Visit the <code>apply.php</code> page.</li>
    <li>Fill out the application form with the required information.</li>
    <li>Once submitted, the information is sent to your Discord server using a webhook.</li>
    <li>After submission, the user is redirected to the <code>thank_you.php</code> page.</li>
</ol>

<h3>📸 Gallery</h3>
<ul>
    <li>Visit the <code>gallery.php</code> page to view server highlights.</li>
    <li>Images are stored in the <code>img/</code> directory.</li>
</ul>

<h3>📖 FAQ Section</h3>
<ul>
    <li>The <code>faq.php</code> page provides answers to common server questions.</li>
</ul>

---

<h2>🔗 Discord Integration</h2>
<p>The website includes a Discord webhook integration for application submissions:</p>
<ol>
    <li>Edit the <code>submit_application.php</code> file.</li>
    <li>Replace the placeholder webhook URL with your Discord Webhook URL:</li>
</ol>

<h2>📦 Installation Guide</h2> <h3>1. Upload to Server</h3> <ul> <li>Upload all website files to your preferred web server (e.g., Apache, NGINX).</li> </ul> <h3>2. Set Up Discord Webhook</h3> <ul> <li>Ensure the webhook URL is set correctly in <code>submit_application.php</code>.</li> </ul> <h3>3. Configure CSS</h3> <ul> <li>Modify the <code>css/style.css</code> file to adjust the color scheme if needed.</li> </ul>
<h2>⚙️ Customization</h2> <h3>Gallery Images</h3> <p>To add more images to the gallery:</p> <ul> <li>Add your images to the <code>img/</code> directory.</li> <li>Ensure the <code>gallery.php</code> file dynamically loads them.</li> </ul>
<h2>📩 Support and Contributions</h2> <p>For support, reach out via the contact form on the website or through your Discord server.</p> <p>Contributions are welcome! Feel free to submit pull requests for new features.</p>
<h2>📄 License</h2> <p> Feel free to use this Website, just please do not redistribute, and please give the correct credit.</p>
<h3 align="center">🎯 Thank you for using the Roleplay Website! 🎯</h3> ```
