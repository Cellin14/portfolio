<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Marcellin Sezomana — Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;600;700&family=Syne:wght@700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #0a0f1e;
      --surface: #111827;
      --card: #1a2235;
      --accent: #00e5a0;
      --accent2: #4f6ef7;
      --text: #e8edf5;
      --muted: #7a8ba0;
      --border: rgba(255,255,255,0.07);
      --font-display: 'Syne', sans-serif;
      --font-body: 'Space Grotesk', sans-serif;
    }

    html { scroll-behavior: smooth; }

    body {
      background: var(--bg);
      color: var(--text);
      font-family: var(--font-body);
      font-size: 16px;
      line-height: 1.6;
      overflow-x: hidden;
    }

    /* NAV */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      display: flex; justify-content: space-between; align-items: center;
      padding: 1.2rem 2.5rem;
      background: rgba(10,15,30,0.85);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--border);
    }
    .nav-logo {
      font-family: var(--font-display);
      font-size: 1.3rem;
      color: var(--accent);
      letter-spacing: 0.05em;
    }
    .nav-links { display: flex; gap: 2rem; }
    .nav-links a {
      color: var(--muted);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      transition: color 0.2s;
    }
    .nav-links a:hover { color: var(--accent); }

    /* HERO */
    .hero {
      min-height: 100vh;
      display: flex; align-items: center; justify-content: center;
      padding: 7rem 2rem 4rem;
      position: relative;
      overflow: hidden;
    }
    .hero-bg {
      position: absolute; inset: 0; z-index: 0;
      background:
        radial-gradient(ellipse 60% 50% at 70% 40%, rgba(79,110,247,0.12) 0%, transparent 70%),
        radial-gradient(ellipse 40% 40% at 30% 60%, rgba(0,229,160,0.08) 0%, transparent 70%);
    }
    .hero-grid {
      position: absolute; inset: 0; z-index: 0;
      background-image:
        linear-gradient(var(--border) 1px, transparent 1px),
        linear-gradient(90deg, var(--border) 1px, transparent 1px);
      background-size: 60px 60px;
      mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 30%, transparent 100%);
    }
    .hero-content {
      position: relative; z-index: 1;
      max-width: 750px; text-align: center;
    }
    .hero-badge {
      display: inline-block;
      background: rgba(0,229,160,0.1);
      border: 1px solid rgba(0,229,160,0.25);
      color: var(--accent);
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 0.4rem 1.1rem;
      border-radius: 50px;
      margin-bottom: 1.5rem;
    }
    .hero-name {
      font-family: var(--font-display);
      font-size: clamp(2.8rem, 7vw, 5rem);
      font-weight: 800;
      line-height: 1.05;
      margin-bottom: 0.6rem;
      background: linear-gradient(135deg, #fff 40%, var(--accent) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .hero-title {
      font-size: 1.15rem;
      color: var(--muted);
      margin-bottom: 1.8rem;
      font-weight: 400;
    }
    .hero-desc {
      font-size: 1.05rem;
      color: var(--text);
      opacity: 0.75;
      max-width: 520px;
      margin: 0 auto 2.5rem;
    }
    .hero-cta {
      display: inline-flex; gap: 1rem; flex-wrap: wrap; justify-content: center;
    }
    .btn {
      padding: 0.75rem 1.8rem;
      border-radius: 8px;
      font-family: var(--font-body);
      font-size: 0.95rem;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.2s;
      display: inline-block;
    }
    .btn-primary {
      background: var(--accent);
      color: #0a0f1e;
      border: none;
    }
    .btn-primary:hover { background: #00fbb3; transform: translateY(-2px); }
    .btn-ghost {
      background: transparent;
      color: var(--text);
      border: 1px solid var(--border);
    }
    .btn-ghost:hover { border-color: var(--accent); color: var(--accent); }

    /* SECTIONS */
    section { padding: 5rem 2rem; }
    .container { max-width: 960px; margin: 0 auto; }
    .section-label {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 0.5rem;
    }
    .section-title {
      font-family: var(--font-display);
      font-size: clamp(1.8rem, 4vw, 2.5rem);
      font-weight: 800;
      margin-bottom: 3rem;
      color: var(--text);
    }

    /* SKILLS */
    #skills { background: var(--surface); }
    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
      gap: 1rem;
    }
    .skill-chip {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 1.1rem 1rem;
      text-align: center;
      transition: border-color 0.2s, transform 0.2s;
    }
    .skill-chip:hover { border-color: var(--accent); transform: translateY(-3px); }
    .skill-icon { font-size: 1.8rem; margin-bottom: 0.5rem; }
    .skill-name { font-size: 0.88rem; font-weight: 600; color: var(--text); }

    /* PROJECTS */
    .projects-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; }
    .project-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 1.8rem;
      transition: border-color 0.2s, transform 0.2s;
      position: relative; overflow: hidden;
    }
    .project-card::before {
      content: '';
      position: absolute; top: 0; left: 0; right: 0; height: 3px;
      background: linear-gradient(90deg, var(--accent), var(--accent2));
      border-radius: 14px 14px 0 0;
    }
    .project-card:hover { border-color: rgba(0,229,160,0.3); transform: translateY(-4px); }
    .project-tag {
      font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em;
      text-transform: uppercase; color: var(--accent);
      margin-bottom: 0.8rem;
    }
    .project-name {
      font-family: var(--font-display);
      font-size: 1.3rem; font-weight: 700;
      margin-bottom: 0.7rem; color: var(--text);
    }
    .project-desc { font-size: 0.92rem; color: var(--muted); line-height: 1.65; }

    /* FORMATION */
    #formation { background: var(--surface); }
    .formation-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 2rem;
      display: flex; gap: 1.5rem; align-items: flex-start;
    }
    .formation-icon {
      width: 52px; height: 52px; border-radius: 12px;
      background: rgba(0,229,160,0.12);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.5rem; flex-shrink: 0;
    }
    .formation-school { font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; margin-bottom: 0.3rem; }
    .formation-degree { color: var(--muted); font-size: 0.92rem; }
    .formation-year {
      margin-top: 0.6rem;
      display: inline-block;
      background: rgba(79,110,247,0.15);
      border: 1px solid rgba(79,110,247,0.3);
      color: var(--accent2);
      font-size: 0.75rem; font-weight: 600;
      padding: 0.2rem 0.7rem; border-radius: 50px;
    }

    /* CONTACT */
    .contact-box {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 2.5rem;
      text-align: center;
      position: relative; overflow: hidden;
    }
    .contact-box::after {
      content: '';
      position: absolute; bottom: -60px; right: -60px;
      width: 180px; height: 180px;
      background: radial-gradient(circle, rgba(0,229,160,0.1), transparent 70%);
    }
    .contact-email {
      display: inline-flex; align-items: center; gap: 0.6rem;
      font-size: 1.1rem; font-weight: 600;
      color: var(--accent);
      text-decoration: none;
      margin-top: 1rem;
      padding: 0.8rem 1.5rem;
      border: 1px solid rgba(0,229,160,0.25);
      border-radius: 10px;
      transition: background 0.2s;
    }
    .contact-email:hover { background: rgba(0,229,160,0.08); }

    /* FOOTER */
    footer {
      text-align: center; padding: 2rem;
      color: var(--muted); font-size: 0.85rem;
      border-top: 1px solid var(--border);
    }

    /* ANIMATIONS */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-content > * {
      animation: fadeUp 0.6s ease both;
    }
    .hero-badge   { animation-delay: 0.1s; }
    .hero-name    { animation-delay: 0.2s; }
    .hero-title   { animation-delay: 0.3s; }
    .hero-desc    { animation-delay: 0.4s; }
    .hero-cta     { animation-delay: 0.5s; }

    @media (max-width: 600px) {
      nav { padding: 1rem 1.2rem; }
      .nav-links { gap: 1rem; }
      .formation-card { flex-direction: column; }
    }
  </style>
</head>
<body>

  <!-- NAV -->
  <nav>
    <div class="nav-logo">MS/</div>
    <div class="nav-links">
      <a href="#skills">Skills</a>
      <a href="#projects">Projets</a>
      <a href="#formation">Formation</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-content">
      <div class="hero-badge">🇲🇬 Madagascar · Open to work</div>
      <h1 class="hero-name">Marcellin Sezomana</h1>
      <p class="hero-title">Étudiant en Informatique · Développeur & Innovateur</p>
      <p class="hero-desc">
        Passionné par le développement web, l'intelligence artificielle et les solutions technologiques adaptées au contexte malgache. Je travaille sur des projets concrets qui ont un impact réel.
      </p>
      <div class="hero-cta">
        <a href="#projects" class="btn btn-primary">Voir mes projets</a>
        <a href="#contact" class="btn btn-ghost">Me contacter</a>
      </div>
    </div>
  </section>

  <!-- SKILLS -->
  <section id="skills">
    <div class="container">
      <p class="section-label">Compétences</p>
      <h2 class="section-title">Ce que je maîtrise</h2>
      <div class="skills-grid">
        <div class="skill-chip"><div class="skill-icon">🌐</div><div class="skill-name">HTML</div></div>
        <div class="skill-chip"><div class="skill-icon">🎨</div><div class="skill-name">CSS</div></div>
        <div class="skill-chip"><div class="skill-icon">⚡</div><div class="skill-name">JavaScript</div></div>
        <div class="skill-chip"><div class="skill-icon">☕</div><div class="skill-name">Java</div></div>
        <div class="skill-chip"><div class="skill-icon">🐘</div><div class="skill-name">PHP</div></div>
        <div class="skill-chip"><div class="skill-icon">🤖</div><div class="skill-name">Intelligence Artificielle</div></div>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section id="projects">
    <div class="container">
      <p class="section-label">Réalisations</p>
      <h2 class="section-title">Mes projets</h2>
      <div class="projects-grid">

        <div class="project-card">
          <div class="project-tag">Application Mobile & Web</div>
          <div class="project-name">MassSMS</div>
          <p class="project-desc">
            Application d'envoi de SMS en masse dédiée aux établissements scolaires et institutions à Madagascar. Permet de communiquer efficacement avec des groupes de contacts via les réseaux locaux (Telma, Airtel).
          </p>
        </div>

        <div class="project-card">
          <div class="project-tag">Innovation Technologique</div>
          <div class="project-name">ESMIA Innovation</div>
          <p class="project-desc">
            Projet d'innovation au sein de l'établissement ESMIA, visant à développer des solutions numériques adaptées aux besoins locaux et à promouvoir la culture tech à Madagascar.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- FORMATION -->
  <section id="formation">
    <div class="container">
      <p class="section-label">Parcours</p>
      <h2 class="section-title">Formation</h2>
      <div class="formation-card">
        <div class="formation-icon">🎓</div>
        <div>
          <div class="formation-school">ESMIA — École Supérieure de Management, d'Informatique et d'Administration</div>
          <div class="formation-degree">Licence en Informatique · 1ère année</div>
          <div class="formation-year">En cours · 2024 – 2025</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="container">
      <p class="section-label">Contact</p>
      <h2 class="section-title">Travaillons ensemble</h2>
      <div class="contact-box">
        <p style="color: var(--muted); max-width: 420px; margin: 0 auto 1.2rem;">
          Disponible pour des collaborations, projets freelance ou opportunités académiques.
        </p>
        <a href="mailto:cellinsezomana@gmail.com" class="contact-email">
          ✉️ cellinsezomana@gmail.com
        </a>
      </div>
    </div>
  </section>

  <footer>
    <p>© 2025 Marcellin Sezomana · Conçu avec passion 🇲🇬</p>
  </footer>

</body>
</html>
