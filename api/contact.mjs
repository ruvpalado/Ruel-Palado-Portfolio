import nodemailer from "nodemailer";

const OWNER_NAME = "Ruel V. Palado";
const OWNER_EMAIL = "ruvpalado@gmail.com";

function escapeHtml(s) {
  return String(s).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;");
}

function resultPage(title, heading, message, color) {
  return `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <title>${title} | Ruel V. Palado</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/css/styles.css" />
</head>
<body>
  <header class="site-header">
    <nav class="nav container" aria-label="Primary">
      <a href="/index.html" class="brand">Ruel Palado</a>
      <a href="/index.html" class="btn btn-outline btn-sm">Back to Portfolio</a>
    </nav>
  </header>
  <main>
    <section class="section">
      <div class="container ref-request-wrap">
        <div class="contact-form ref-request-card">
          <p class="kicker">Contact</p>
          <h2 class="ref-title">${heading}</h2>
          <p style="color: ${color}; font-size: 0.95rem; line-height: 1.6; margin-bottom: 10px;">${message}</p>
          <a href="/index.html#contact" class="btn btn-primary" style="margin-top:16px;">← Back to Contact</a>
        </div>
      </div>
    </section>
  </main>
  <footer class="site-footer">
    <div class="container footer-inner">
      <p>&copy; 2026 Ruel V. Palado. All rights reserved.</p>
      <a href="/index.html" class="back-to-top">&larr; Back to portfolio</a>
    </div>
  </footer>
</body>
</html>`;
}

function buildEmailHtml({ name, email, subject, message }) {
  return `
  <div style="font-family:Arial,Helvetica,sans-serif;max-width:640px;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e5e8ef;">
    <div style="background:#0b0f17;padding:28px 32px;">
      <h2 style="margin:0;color:#f0c274;font-size:20px;">New Message from Portfolio</h2>
      <p style="margin:6px 0 0;color:#aab3c5;font-size:13px;">Contact form submission</p>
    </div>
    <div style="padding:28px 32px;">
      <table style="width:100%;border-collapse:collapse;border:1px solid #e5e8ef;border-radius:8px;">
        <tr>
          <td style="padding:14px 16px;border-bottom:1px solid #e5e8ef;">
            <p style="margin:0 0 4px;font-size:12px;color:#7a849a;text-transform:uppercase;letter-spacing:0.08em;">From</p>
            <p style="margin:0;font-size:16px;font-weight:700;color:#1c2333;">${escapeHtml(name)}</p>
          </td>
        </tr>
        <tr>
          <td style="padding:14px 16px;border-bottom:1px solid #e5e8ef;">
            <p style="margin:0 0 4px;font-size:12px;color:#7a849a;text-transform:uppercase;letter-spacing:0.08em;">Email</p>
            <p style="margin:0;font-size:15px;color:#3d475c;"><a href="mailto:${escapeHtml(email)}" style="color:#b9822c;">${escapeHtml(email)}</a></p>
          </td>
        </tr>
        <tr>
          <td style="padding:14px 16px;border-bottom:1px solid #e5e8ef;">
            <p style="margin:0 0 4px;font-size:12px;color:#7a849a;text-transform:uppercase;letter-spacing:0.08em;">Subject</p>
            <p style="margin:0;font-size:15px;color:#3d475c;">${escapeHtml(subject) || "(no subject)"}</p>
          </td>
        </tr>
        <tr>
          <td style="padding:14px 16px;">
            <p style="margin:0 0 4px;font-size:12px;color:#7a849a;text-transform:uppercase;letter-spacing:0.08em;">Message</p>
            <p style="margin:0;font-size:15px;color:#3d475c;line-height:1.6;white-space:pre-wrap;">${escapeHtml(message)}</p>
          </td>
        </tr>
      </table>
    </div>
  </div>`;
}

export default async function handler(req, res) {
  if (req.method !== "POST") {
    res.setHeader("Allow", "POST");
    return res.status(405).send(resultPage("Method Not Allowed", "Method not allowed", "Only POST requests are accepted.", "#f08c8c"));
  }

  let fields = { name: "", email: "", subject: "", message: "" };
  try {
    const ct = req.headers["content-type"] || "";
    if (ct.includes("application/json")) {
      const body = typeof req.body === "string" ? JSON.parse(req.body) : req.body || {};
      fields.name = String(body.name ?? "").trim();
      fields.email = String(body.email ?? "").trim();
      fields.subject = String(body.subject ?? "").trim();
      fields.message = String(body.message ?? "").trim();
    } else {
      const chunks = [];
      for await (const chunk of req) chunks.push(chunk);
      const raw = Buffer.concat(chunks).toString();
      const params = new URLSearchParams(raw);
      fields.name = String(params.get("name") ?? "").trim();
      fields.email = String(params.get("email") ?? "").trim();
      fields.subject = String(params.get("subject") ?? "").trim();
      fields.message = String(params.get("message") ?? "").trim();
    }
  } catch {
    return res.status(400).send(resultPage("Bad Request", "Invalid request", "Could not read your message. Please try again.", "#f08c8c"));
  }

  if (!fields.name || !fields.email || !fields.message) {
    return res.status(400).send(resultPage("Incomplete", "Missing fields", "Please fill in your name, email, and message before sending.", "#f08c8c"));
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(fields.email)) {
    return res.status(400).send(resultPage("Invalid Email", "Invalid email address", "Please enter a valid email address and try again.", "#f08c8c"));
  }

  const user = process.env.GMAIL_USER;
  const pass = process.env.GMAIL_APP_PASSWORD;
  if (!user || !pass) {
    return res.status(503).send(resultPage("Not Configured", "Service not configured", `The contact form is still being set up. Please email <a href="mailto:${OWNER_EMAIL}" style="color:#b9822c;">${OWNER_EMAIL}</a> directly.`, "#f0c274"));
  }

  try {
    const transporter = nodemailer.createTransport({
      service: "gmail",
      auth: { user, pass },
    });

    await transporter.sendMail({
      from: `"Portfolio Contact — ${escapeHtml(fields.name)}" <${user}>`,
      to: OWNER_EMAIL,
      replyTo: fields.email,
      subject: fields.subject ? `[Portfolio] ${fields.subject}` : `[Portfolio] Message from ${fields.name}`,
      html: buildEmailHtml(fields),
    });

    return res.status(200).send(resultPage("Message Sent", "Message sent!", `Thank you, <strong>${escapeHtml(fields.name)}</strong>. Your message has been delivered. I'll get back to you within 24 hours.`, "#6ee7a0"));
  } catch (err) {
    console.error("Contact email failed:", err.message);
    return res.status(500).send(resultPage("Send Failed", "Something went wrong", `Your message could not be sent. Please email <a href="mailto:${OWNER_EMAIL}?subject=${encodeURIComponent(fields.subject)}&body=${encodeURIComponent(fields.message)}" style="color:#b9822c;">${OWNER_EMAIL}</a> directly.`, "#f08c8c"));
  }
}
