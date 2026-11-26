import nodemailer from "nodemailer";

const OWNER_NAME = "Ruel V. Palado";
const OWNER_EMAIL = "ruvpalado@gmail.com";

const REFERENCES = [
  {
    name: "Arriosto Fermin L. Flor",
    role: "Nurse II",
    org: "Department of Health — Camarines Norte",
    address: "Camarines Norte Provincial Hospital Compound, Daet, Camarines Norte 4600, Philippines",
    phone: "+63 961 542 5748",
  },
  {
    name: "Edrichelle P. Nazarrea",
    role: "Pharmacist",
    org: "Bicol Medical Center",
    address: "Panganiban Drive, Naga City, Camarines Sur 4400, Philippines",
    phone: "+63 906 087 5332",
  },
  {
    name: "Ronwald P. Gloriosa",
    role: "Physical Therapist",
    org: "Department of Health — Camarines Norte",
    address: "Camarines Norte Provincial Hospital Compound, Daet, Camarines Norte 4600, Philippines",
    phone: "+63 945 764 1487",
  },
];

function referenceRows() {
  return REFERENCES.map(
    (r) => `
    <tr>
      <td style="padding:14px 16px;border-bottom:1px solid #e5e8ef;">
        <p style="margin:0 0 4px;font-size:16px;font-weight:700;color:#1c2333;">${r.name}</p>
        <p style="margin:0 0 4px;font-size:14px;color:#3d475c;"><strong>${r.role}</strong> · ${r.org}</p>
        <p style="margin:0 0 2px;font-size:14px;color:#5a6478;">${r.address}</p>
        <p style="margin:0;font-size:14px;color:#5a6478;">${r.phone}</p>
      </td>
    </tr>`
  ).join("");
}

function buildEmailHtml(requesterEmail) {
  return `
  <div style="font-family:Arial,Helvetica,sans-serif;max-width:640px;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e5e8ef;">
    <div style="background:#0b0f17;padding:28px 32px;">
      <h2 style="margin:0;color:#f0c274;font-size:20px;">References & Contact Information — ${OWNER_NAME}</h2>
      <p style="margin:6px 0 0;color:#aab3c5;font-size:13px;">Virtual Assistant &amp; Administrative Support</p>
    </div>
    <div style="padding:28px 32px;">
      <p style="margin:0 0 8px;font-size:15px;color:#1c2333;">Hi,</p>
      <p style="margin:0 0 18px;font-size:15px;color:#3d475c;line-height:1.6;">
        Thank you for your interest in <strong>${OWNER_NAME}</strong>'s professional background.
        Below is his contact information and professional references. Please feel free to contact him or his references directly.
        This request was submitted by <strong>${requesterEmail}</strong>.
      </p>
      
      <div style="background:#f8f9fb;border:1px solid #e5e8ef;border-radius:8px;padding:20px;margin-bottom:24px;">
        <h3 style="margin:0 0 12px;font-size:16px;color:#1c2333;">Contact Information</h3>
        <p style="margin:0 0 8px;font-size:14px;color:#3d475c;"><strong>Email:</strong> <a href="mailto:${OWNER_EMAIL}" style="color:#b9822c;">${OWNER_EMAIL}</a></p>
        <p style="margin:0;font-size:14px;color:#3d475c;"><strong>Phone:</strong> <a href="tel:+639451388883" style="color:#b9822c;">+63 945 138 8883</a></p>
      </div>

      <h3 style="margin:0 0 12px;font-size:16px;color:#1c2333;">Professional References</h3>
      <table style="width:100%;border-collapse:collapse;border:1px solid #e5e8ef;border-radius:8px;">
        ${referenceRows()}
      </table>
      <p style="margin:24px 0 0;font-size:14px;color:#5a6478;line-height:1.6;">
        Should you need anything further — a full résumé, portfolio walk-through, or an interview —
        don't hesitate to reach out at <a href="mailto:${OWNER_EMAIL}" style="color:#b9822c;">${OWNER_EMAIL}</a>.
      </p>
      <p style="margin:26px 0 0;font-size:14px;color:#1c2333;">Warm regards,<br /><strong>${OWNER_NAME}</strong></p>
    </div>
  </div>`;
}

function htmlPage(title, heading, message, color) {
  return `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          <p class="kicker">References</p>
          <h2 class="ref-title">${heading}</h2>
          <p style="color: ${color}; font-size: 0.95rem; line-height: 1.6; margin-bottom: 10px;">${message}</p>
          <a href="/request-references.html" class="btn btn-primary" style="margin-top:16px;">← Try Again</a>
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

export default async function handler(req, res) {
  if (req.method !== "POST") {
    res.setHeader("Allow", "POST");
    return res.status(405).send(htmlPage("Method Not Allowed", "Method not allowed", "Only POST requests are accepted.", "#f08c8c"));
  }

  let email = "";
  try {
    const ct = req.headers["content-type"] || "";
    if (ct.includes("application/json")) {
      const body = typeof req.body === "string" ? JSON.parse(req.body) : req.body || {};
      email = String(body.email ?? "").trim().toLowerCase();
    } else {
      const chunks = [];
      for await (const chunk of req) chunks.push(chunk);
      const raw = Buffer.concat(chunks).toString();
      const params = new URLSearchParams(raw);
      email = String(params.get("email") ?? "").trim().toLowerCase();
    }
  } catch {
    return res.status(400).send(htmlPage("Bad Request", "Invalid request", "Could not read your request. Please try again.", "#f08c8c"));
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email)) {
    return res.status(400).send(htmlPage("Invalid Email", "Invalid email address", "Please enter a valid email address and try again.", "#f08c8c"));
  }

  const user = process.env.GMAIL_USER;
  const pass = process.env.GMAIL_APP_PASSWORD;
  if (!user || !pass) {
    return res.status(503).send(htmlPage("Not Configured", "Service not configured", `The reference request service is still being set up. Please email <a href="mailto:${OWNER_EMAIL}" style="color:#b9822c;">${OWNER_EMAIL}</a> directly.`, "#f0c274"));
  }

  try {
    const transporter = nodemailer.createTransport({
      service: "gmail",
      auth: { user, pass },
    });

    await transporter.sendMail({
      from: `"${OWNER_NAME} — Portfolio" <${user}>`,
      to: email,
      replyTo: OWNER_EMAIL,
      subject: `Professional References — ${OWNER_NAME}`,
      html: buildEmailHtml(email),
    });

    return res.status(200).send(htmlPage("References Sent", "References sent!", `The reference details have been sent to <strong>${email}</strong>. Please check your inbox and spam folder. You may now close this tab.`, "#6ee7a0"));
  } catch (err) {
    console.error("Reference email failed:", err.message);
    return res.status(500).send(htmlPage("Send Failed", "Something went wrong", `The email could not be sent. Please try again or email <a href="mailto:${OWNER_EMAIL}" style="color:#b9822c;">${OWNER_EMAIL}</a> directly.`, "#f08c8c"));
  }
}
