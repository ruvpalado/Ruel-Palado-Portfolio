<?php
get_header();
?>

<?php
$photo_url    = get_template_directory_uri() . '/assets/images/ruel-palado.png';
$resume_url   = get_template_directory_uri() . '/assets/docs/Ruel_Palado_Resume.pdf';
$request_url  = esc_url( home_url( '/request-references/' ) );
?>

<main>

  <section class="hero section" id="home">
    <div class="container hero-inner">
      <div class="hero-text reveal">
        <h1 class="hero-title">Hi, I'm <span class="accent">Ruel Palado</span></h1>
        <p class="hero-sub">Data management and IT professional — 8+ years running data validation, cleaning, and reporting for the Philippines' Integrated Tuberculosis Information System (ITIS), sustaining 100% reporting completeness across 53 health facilities. A career in IT support and administration since 2009.</p>
        <div class="hero-actions">
          <a href="#contact" class="btn btn-primary">Get in Touch</a>
          <a href="<?php echo esc_url( $resume_url ); ?>" class="btn btn-outline" download>Download Résumé (PDF)</a>
        </div>
        <ul class="hero-stats">
          <li><strong>15+</strong><span>Years of Experience</span></li>
          <li><strong>8+</strong><span>Years National Program Support</span></li>
          <li><strong>100%</strong><span>Reporting Completeness</span></li>
        </ul>
      </div>
      <div class="hero-photo reveal delay-1">
        <img src="<?php echo esc_url( $photo_url ); ?>" alt="Portrait of Ruel V. Palado" />
      </div>
    </div>
  </section>

  <section class="section about" id="about">
    <div class="container">
      <header class="section-head reveal">
        <p class="kicker">About Me</p>
        <h2>Your data, kept accurate, complete, and on time</h2>
      </header>
      <div class="about-grid">
        <div class="about-text reveal">
          <p>I'm Ruel — a data management and IT professional. For 8+ years I've run data validation, cleaning, and reporting for the Philippines' Integrated Tuberculosis Information System (ITIS) under the National TB Control Program, within a career in IT support and administration that began in 2009. I'm known for accurate, complete, and compliant reporting, and for training health facility staff to work confidently with digital health systems.</p>
          <p>That experience taught me how much depends on data quality in high-stakes environments. At Dubai International Airport's Facility Management Department, I operated complaint and feedback tracking, technician dispatch, and reporting that kept operations accountable. I bring the same discipline to every dataset, every report, and every deadline I own.</p>
          <ul class="about-highlights">
            <li>Sustained 100% reporting completeness across 53 health facilities</li>
            <li>8+ years running data validation and cleaning for the national TB program</li>
            <li>Hands-on user training — at least one trained user in every facility supported</li>
            <li>15+ years in IT and administrative operations across healthcare, aviation, and corporate settings</li>
            <li>Civil Service Professional eligible</li>
            <li>Intuit Academy bookkeeping certified</li>
            <li>UN / UNICEF-certified in safety, conduct, and accountability</li>
          </ul>
        </div>
        <aside class="about-info reveal delay-1">
          <dl>
            <div><dt>Name</dt><dd>Ruel V. Palado</dd></div>
            <div><dt>Location</dt><dd>Camarines Sur, Bicol Region, PH (Remote)</dd></div>
            <div><dt>Email</dt><dd><a href="mailto:ruvpalado@gmail.com">ruvpalado@gmail.com</a></dd></div>
            <div><dt>Phone</dt><dd><a href="tel:+639451388883">+63 945 138 8883</a></dd></div>
            <div><dt>Availability</dt><dd><span class="badge-available">Open to opportunities</span></dd></div>
            <div><dt>Languages</dt><dd>English, Filipino (Native)</dd></div>
          </dl>
        </aside>
      </div>
    </div>
  </section>

  <section class="section services" id="services">
    <div class="container">
      <header class="section-head reveal">
        <p class="kicker">Services</p>
        <h2>How I can support you and your business</h2>
      </header>
      <div class="services-grid">
        <article class="service-card reveal">
          <div class="service-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"/></svg>
          </div>
          <h3>Data Entry &amp; Data Validation</h3>
          <p>Fast, accurate encoding with rigorous validation and cleaning — spreadsheets, CRMs, and information systems kept complete, consistent, and audit-ready.</p>
        </article>
        <article class="service-card reveal delay-1">
          <div class="service-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M8 13h8M8 17h8M8 9h2"/></svg>
          </div>
          <h3>Reporting &amp; Compliance Support</h3>
          <p>Complete, accurate, on-time reports and submissions — data consolidated, reconciled, and traceable for management, funders, or audit.</p>
        </article>
        <article class="service-card reveal delay-2">
          <div class="service-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
          </div>
          <h3>Inbox &amp; Calendar Management</h3>
          <p>Organized inboxes and well-planned schedules — meetings, follow-ups, and priorities handled across time zones.</p>
        </article>
        <article class="service-card reveal">
          <div class="service-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/><path d="m6 8 3 3-3 3"/></svg>
          </div>
          <h3>Technical Support &amp; User Training</h3>
          <p>Hands-on training and patient troubleshooting that get teams confident with digital tools — at least one trained user in every facility I support.</p>
        </article>
        <article class="service-card reveal delay-1">
          <div class="service-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
          </div>
          <h3>Customer &amp; Facility Coordination</h3>
          <p>Complaint and feedback tracking, technician dispatch, and follow-through to resolution — service accountability that holds.</p>
        </article>
        <article class="service-card reveal delay-2">
          <div class="service-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1.6"/><circle cx="19" cy="21" r="1.6"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57L23 6H6.16"/></svg>
          </div>
          <h3>Documents &amp; Procurement Support</h3>
          <p>Polished documents, minutes, and accomplishment reports — plus procurement coordination for materials and vendors.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section skills" id="skills">
    <div class="container">
      <header class="section-head reveal">
        <p class="kicker">Skills &amp; Tools</p>
        <h2>What I bring to the table</h2>
      </header>
      <div class="skills-grid">
        <div class="skills-bars reveal">
          <h3 class="skills-subhead">Core Skills</h3>
          <div class="skill">
            <div class="skill-label"><span>Data Validation &amp; Cleaning</span></div>
          </div>
          <div class="skill">
            <div class="skill-label"><span>Health Information Systems (ITIS)</span></div>
          </div>
          <div class="skill">
            <div class="skill-label"><span>Reporting &amp; Compliance</span></div>
          </div>
          <div class="skill">
            <div class="skill-label"><span>Technical Support &amp; User Training</span></div>
          </div>
          <div class="skill">
            <div class="skill-label"><span>IT &amp; Administrative Operations</span></div>
          </div>
          <div class="skill">
            <div class="skill-label"><span>Bookkeeping &amp; Inventory Management</span></div>
          </div>
        </div>
        <div class="skills-tools reveal delay-1">
          <h3 class="skills-subhead">Tools &amp; Software</h3>
          <ul class="tools-list">
            <li>Microsoft Office</li>
            <li>Google Workspace</li>
            <li>ITIS Health Information System</li>
            <li>IBM Maximo</li>
            <li>QuickBooks Online</li>
            <li>AI Assistants (Claude)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section experience" id="experience">
    <div class="container">
      <header class="section-head reveal">
        <p class="kicker">Experience</p>
        <h2>Where I've worked</h2>
      </header>
      <ol class="timeline">
        <li class="timeline-item reveal">
          <div class="timeline-meta"><span class="timeline-date">Dec 2017 — Present</span><span class="timeline-type">Mandaluyong City, Philippines</span></div>
          <div class="timeline-body">
            <h3>Project Associate — ITIS Access TB Project</h3>
            <p class="timeline-org">Philippine Business for Social Progress (PBSP)</p>
            <ul>
              <li>Support the National TB Control Program (NTP) through daily ITIS operations for 53 health facilities across Camarines Norte, Catanduanes, and Sorsogon.</li>
              <li>Validate and clean TB case records before submission, sustaining 100% reporting completeness across all 53 facilities.</li>
              <li>Consolidate and reconcile data from health units for national TB reports, keeping submissions complete and on schedule.</li>
              <li>Train and support health facility staff on ITIS — at least one trained user in every facility, with retraining as needed.</li>
              <li>Coordinate with Knowledge Management and IT Service to resolve system issues and escalate technical concerns.</li>
              <li>Monitor ITIS submissions to strengthen program compliance and reporting reliability.</li>
            </ul>
          </div>
        </li>
        <li class="timeline-item reveal">
          <div class="timeline-meta"><span class="timeline-date">Mar 2014 — Dec 2016</span><span class="timeline-type">Dubai, UAE</span></div>
          <div class="timeline-body">
            <h3>Data Entry Operator / Administrative Officer</h3>
            <p class="timeline-org">Dubai International Airport — Facility Management Department</p>
            <ul>
              <li>Operated a feedback and complaint tracking system that improved service accountability across airport facilities.</li>
              <li>Dispatched technicians to facility issues and tracked each case through to resolution.</li>
              <li>Kept complete, accurate complaint monitoring records and prepared detailed shift accomplishment reports.</li>
              <li>Coordinated procurement of materials to keep operations running.</li>
            </ul>
          </div>
        </li>
        <li class="timeline-item reveal">
          <div class="timeline-meta"><span class="timeline-date">Jun 2013 — Mar 2014</span><span class="timeline-type">Makati City, Philippines</span></div>
          <div class="timeline-body">
            <h3>Information Technology Specialist</h3>
            <p class="timeline-org">Ramesh Trading Corporation</p>
            <ul>
              <li>Maintained reliable IT systems and equipment functionality.</li>
              <li>Performed troubleshooting for hardware and software issues.</li>
              <li>Ensured continuous business operations through responsive technical support.</li>
              <li>Assisted warehouse operations when required.</li>
            </ul>
          </div>
        </li>
        <li class="timeline-item reveal">
          <div class="timeline-meta"><span class="timeline-date">Nov 2009 — Jan 2013</span><span class="timeline-type">Quezon City, Philippines</span></div>
          <div class="timeline-body">
            <h3>IT Staff / Web Administrator</h3>
            <p class="timeline-org">Philippine Council on Accreditation of Healthcare Organizations</p>
            <ul>
              <li>Maintained computer hardware and software performance.</li>
              <li>Updated and managed website content.</li>
              <li>Provided administrative and technical support to staff.</li>
              <li>Supported technical needs during healthcare seminars and events.</li>
            </ul>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <section class="section education" id="education">
    <div class="container">
      <header class="section-head reveal">
        <p class="kicker">Education &amp; Certifications</p>
        <h2>Credentials and continuous learning</h2>
      </header>
      <div class="edu-group">
        <h3 class="skills-subhead">Education</h3>
        <div class="edu-grid">
          <article class="edu-card reveal">
            <p class="edu-year">2024 — 2025</p>
            <h3>BS in Business Administration, Major in Operations Management</h3>
            <p class="edu-org">University of Nueva Caceres</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2009</p>
            <h3>Computer Hardware Servicing</h3>
            <p class="edu-org">Elite Business School of Science and Technology</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2006 — 2008</p>
            <h3>Computer Programming (2 Years)</h3>
            <p class="edu-org">Vineyard Asia Technological College</p>
          </article>
        </div>
      </div>
      <div class="edu-group">
        <h3 class="skills-subhead">Certifications</h3>
        <div class="edu-grid">
          <article class="edu-card reveal">
            <p class="edu-year">2026 · Intuit Academy</p>
            <h3>Bookkeeping Specialization</h3>
            <p class="edu-org">Bookkeeping Basics; Tracking Assets and Sales; Tracking Expenses, Liabilities, and Equity; Reconciling Accounts</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2025 · University of California, Irvine</p>
            <h3>Inventory Management</h3>
            <p class="edu-org">Certificate</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2025 · University of Pennsylvania</p>
            <h3>Introduction to Operations Management</h3>
            <p class="edu-org">Certificate</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2025 · University of Pennsylvania</p>
            <h3>Improving Communication Skills</h3>
            <p class="edu-org">Certificate</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2017 · Civil Service Commission</p>
            <h3>Civil Service Eligibility — Professional</h3>
            <p class="edu-org">Qualified for Philippine public sector employment</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2012 · TESDA</p>
            <h3>Mechatronics NC II</h3>
            <p class="edu-org">National Certificate II</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2009 · TESDA</p>
            <h3>Computer Programming NC IV</h3>
            <p class="edu-org">National Certificate IV</p>
          </article>
          <article class="edu-card reveal">
            <p class="edu-year">2009 · TESDA</p>
            <h3>Computer Hardware Servicing NC II</h3>
            <p class="edu-org">National Certificate II</p>
          </article>
        </div>
      </div>
      <div class="trainings reveal">
        <h3 class="skills-subhead">Selected Trainings</h3>
        <ul class="tools-list">
          <li>QuickBooks Online Certification Training (2024)</li>
          <li>BSAFE — UN &amp; UN Agencies / UNICEF (2023)</li>
          <li>PSEA — UNICEF (2023)</li>
          <li>Prevention of Sexual Harassment — UN (2023)</li>
          <li>Code of Conduct for CCM Members (2023)</li>
          <li>ITIS Users Conference (2020, 2022) and ITIS Mentoring for Project Associates (2024)</li>
          <li>NTP MOP 6th Ed. Training of Trainers (2020)</li>
          <li>Overview of TB &amp; Xpert MTB/RIF Assay (2020)</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section work" id="work">
    <div class="container">
      <header class="section-head reveal">
        <p class="kicker">My Work</p>
        <h2>A look at what I've worked on</h2>
      </header>
      <div class="work-grid">
        <article class="work-card featured reveal">
          <div class="work-top">
            <span class="work-badge">Surveillance Dashboard</span>
          </div>
          <h3><a class="work-link" href="https://ntp-bicol-dashboard.vercel.app/" target="_blank" rel="noopener">NTP Bicol Dashboard</a></h3>
          <p class="work-org">Department of Health — National TB Program, Bicol Region</p>
          <p>A tuberculosis surveillance and case-management system developed for the Department of Health's National TB Program in the Bicol Region.</p>
          <div class="work-cols">
            <div class="work-col">
              <h4>Key Features</h4>
              <ul>
                <li><strong>Region-wide integration</strong> — consolidates TB data across Albay, Camarines Norte, Camarines Sur, Catanduanes, Masbate, Sorsogon, and Naga City</li>
                <li><strong>Real-time reporting</strong> — replaces manual province-by-province spreadsheets with a live, unified dashboard</li>
                <li><strong>Case notification tracking</strong> — monitors TB notifications, treatment outcomes, and program performance</li>
                <li><strong>Decision support</strong> — gives health managers actionable insights for resource allocation and intervention planning</li>
              </ul>
            </div>
            <div class="work-col">
              <h4>Impact</h4>
              <ul>
                <li>Streamlined reporting workflows across multiple provinces</li>
                <li>Improved visibility of TB program performance at both provincial and regional levels</li>
                <li>Strengthened compliance and monitoring for the National TB Program</li>
              </ul>
            </div>
          </div>
          <ul class="tools-list">
            <li>Public Health</li>
            <li>TB Surveillance</li>
            <li>Data Integration</li>
          </ul>
        </article>
        <article class="work-card featured reveal">
          <div class="work-top">
            <span class="work-badge">Leave Monitoring System</span>
          </div>
          <h3><a class="work-link" href="https://pdoho-camarines-norte-leave-monitoring.vercel.app/" target="_blank" rel="noopener">PDOHO Camarines Norte Leave Monitoring</a></h3>
          <p>A centralized web application that modernizes leave management — replacing paper forms and scattered spreadsheets with structured, timestamped records for every request, approval, balance adjustment, and administrative action, ensuring accuracy, transparency, and reliable data for decision-making.</p>
          <div class="work-cols">
            <div class="work-col">
              <h4>System Workflow</h4>
              <ul>
                <li><strong>Submission</strong> — employees submit leave applications via a public form (no login required); working days are auto-calculated and a confirmation email is triggered</li>
                <li><strong>Review &amp; decision</strong> — admins approve, reject, or cancel through the dashboard, with applicants notified automatically</li>
                <li><strong>Leave balances</strong> — opening balances are set once per leave type; approved days are deducted automatically in real time</li>
                <li><strong>Access control &amp; accountability</strong> — admin accounts require developer approval, with every action logged and attributed for a full audit trail</li>
                <li><strong>Reporting</strong> — individual and aggregate reports generate directly from approved data, filterable by date range and printable</li>
              </ul>
            </div>
            <div class="work-col">
              <h4>Significance</h4>
              <ul>
                <li><strong>Single source of truth</strong> — unified records eliminate discrepancies between paper logs, spreadsheets, and email approvals</li>
                <li><strong>Built-in accountability</strong> — timestamped, attributed actions ensure transparency and audit readiness</li>
                <li><strong>Data quality by design</strong> — mandatory fields, attachment validation, and automated calculations prevent errors at submission</li>
                <li><strong>Faster turnaround</strong> — applicants get instant confirmations while admins process requests through an efficient queue</li>
                <li><strong>Institutional continuity</strong> — leave history persists beyond individual staff records, supporting audits and staff transitions</li>
              </ul>
            </div>
          </div>
          <ul class="tools-list">
            <li>Leave Management</li>
            <li>Workflow Automation</li>
            <li>Audit Trail</li>
            <li>Web App</li>
          </ul>
        </article>
        <article class="work-card featured reveal">
          <div class="work-top">
            <span class="work-badge">Rotation Management System</span>
          </div>
          <h3><a class="work-link" href="https://obgyn-hospital-rotation.up.railway.app/" target="_blank" rel="noopener">OBGYN Rotation System</a></h3>
          <p>A role-based web application that plans and tracks resident physician rotations across nine hospital sites and their departments, aligned to the OBGYN training curriculum of thirteen four-week blocks — replacing manual spreadsheets with a single authoritative source of truth for rotation assignments, coverage, curriculum compliance, and program performance against defined KPIs.</p>
          <div class="work-cols">
            <div class="work-col">
              <h4>How the System Works</h4>
              <ul>
                <li><strong>Reference data</strong> — nine hospital sites (SQUH, Royal, Khoula, Nizwa, Sohar, Medical City, Local Health Centers, SQCCCRC, National Genetics Center), their departments, and the thirteen curriculum blocks form the foundation</li>
                <li><strong>Physician management</strong> — physicians are drawn from an uploaded list that updates automatically as names are added or removed</li>
                <li><strong>Scheduling</strong> — admins assign physicians to sites and departments per block; each assignment generates four weekly attendance records</li>
                <li><strong>Weekly attendance</strong> — physicians propose attendance status (attended, leave, absent), which admins approve; rotations count as complete only when at least three of four weeks are attended</li>
                <li><strong>Governance</strong> — change requests, account approvals, notifications, and audit logs ensure accountability, with role-based dashboards tailoring modules to each user's permissions</li>
              </ul>
            </div>
            <div class="work-col">
              <h4>Significance</h4>
              <ul>
                <li><strong>Curriculum integrity</strong> — ensures residents rotate through required specialties and blocks, flagging gaps early</li>
                <li><strong>Coverage assurance</strong> — confirms critical units and sites are staffed throughout the year</li>
                <li><strong>Fairness &amp; accountability</strong> — promotes equitable workload distribution and maintains immutable audit trails</li>
                <li><strong>Security by design</strong> — role-based access, least-privilege restrictions, password policies, audit logging, and automated code scanning safeguard sensitive data</li>
              </ul>
            </div>
          </div>
          <ul class="tools-list">
            <li>Healthcare Scheduling</li>
            <li>Role-Based Access</li>
            <li>Audit Trail</li>
          </ul>
        </article>
        <article class="work-card featured reveal">
          <div class="work-top">
            <span class="work-badge">Clinic Management System</span>
          </div>
          <h3><a class="work-link" href="https://physio-clinic-jade.vercel.app/" target="_blank" rel="noopener">JG Physio Therapy Clinic System</a></h3>
          <p>A full-stack clinic platform pairing a public website with a secure staff admin dashboard — modernizing how a physical therapy clinic handles appointment booking, patient records, treatments, and certificates by replacing manual paperwork with a centralized, cloud-based system.</p>
          <div class="work-cols">
            <div class="work-col">
              <h4>How the System Works</h4>
              <ul>
                <li><strong>Online booking</strong> — patients schedule appointments through the clinic website, with every request stored in a cloud PostgreSQL database</li>
                <li><strong>Email notifications</strong> — serverless functions send automatic booking confirmations and updates straight to patients' inboxes</li>
                <li><strong>Staff admin dashboard</strong> — a protected dashboard lets staff manage appointments, update statuses, and maintain patient records, diagnoses, treatments, and medical certificates</li>
                <li><strong>Secure access</strong> — token-based authentication safeguards staff accounts, keeping sensitive patient information private</li>
                <li><strong>Quality assurance</strong> — automated end-to-end browser tests verify critical flows before every release</li>
              </ul>
            </div>
            <div class="work-col">
              <h4>Significance</h4>
              <ul>
                <li><strong>24/7 accessibility</strong> — patients can book anytime without calling or visiting the clinic</li>
                <li><strong>Organized records</strong> — a unified digital database replaces paper charts and scattered files</li>
                <li><strong>Faster front-desk workflow</strong> — real-time appointment status cuts manual coordination and phone tag</li>
                <li><strong>Data privacy</strong> — authenticated, least-exposure design keeps health records confidential</li>
                <li><strong>Reliability</strong> — tested, serverless infrastructure scales smoothly with zero server maintenance</li>
              </ul>
            </div>
          </div>
          <ul class="tools-list">
            <li>Clinic Management</li>
            <li>PostgreSQL</li>
            <li>Vercel Serverless</li>
            <li>Email Automation</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <section class="section contact" id="contact">
    <div class="container">
      <header class="section-head reveal">
        <p class="kicker">Contact</p>
        <h2>Let's work together</h2>
        <p class="section-sub">Tell me about your business and what you need help with — I usually reply within 24 hours.</p>
      </header>
      <div class="contact-grid">
        <div class="contact-info reveal">
          <a class="contact-item" href="mailto:ruvpalado@gmail.com">
            <span class="contact-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
            </span>
            <span><strong>Email</strong><br />ruvpalado@gmail.com</span>
          </a>
          <a class="contact-item" href="tel:+639451388883">
            <span class="contact-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </span>
            <span><strong>Phone / Viber / WhatsApp</strong><br />+63 945 138 8883</span>
          </a>
          <div class="contact-item static">
            <span class="contact-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </span>
            <span><strong>Location</strong><br />Camarines Sur, Bicol Region, Philippines — open to remote work</span>
          </div>
          <div class="socials">
            <a href="https://www.linkedin.com/in/ruel-v-palado-046386371/" target="_blank" rel="noopener" aria-label="LinkedIn profile">LinkedIn</a>
            <a href="<?php echo $request_url; ?>" target="_blank" rel="noopener" class="socials-static">Request for Reference</a>
          </div>
        </div>
        <div class="contact-form reveal delay-1">
          <?php echo ruel_palado_cf7( 'contact' ); ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();