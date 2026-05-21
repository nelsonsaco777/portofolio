<?php
// ============================================
// DADOS DO PORTFÓLIO — Edita só aqui!
// ============================================
$dados = [
    'nome'          => 'Nelson Bernardo Gouveia Saco',
    'nome_curto'    => 'Nelson Saco',
    'idade'         => 18,
    'escola'        => 'Instituto Politécnico Industrial de Luanda (IPIL)',
    'curso'         => 'Técnico de Informática',
    'ano'           => '12.º Ano',
    'numero'        => 21,
    'turma'         => 'II12B',
    'sala'          => 64,
    'periodo'       => 'Tarde',
    'telefone'      => '+244 930 348 451',
    'email'         => 'nelsonsaco08@gmail.com',
    'localizacao'   => 'Luanda, Angola',
];

$habilidades = [
    ['icon'=>'🌐','nome'=>'HTML',       'pct'=>40,'desc'=>'Estrutura de páginas web'],
    ['icon'=>'🎨','nome'=>'CSS',        'pct'=>35,'desc'=>'Estilização & layouts'],
    ['icon'=>'⚡','nome'=>'JavaScript', 'pct'=>25,'desc'=>'Lógica e interatividade'],
    ['icon'=>'🐘','nome'=>'PHP',        'pct'=>30,'desc'=>'Back-end & servidor'],
    ['icon'=>'💠','nome'=>'C#',         'pct'=>20,'desc'=>'Programação orientada a objetos'],
    ['icon'=>'🗄️','nome'=>'MySQL',      'pct'=>35,'desc'=>'Bases de dados relacionais'],
];

$educacao = [
    [
        'tag'      => '● Actual',
        'tag_cls'  => 'tag-main',
        'inst'     => 'Instituto Politécnico Industrial de Luanda',
        'curso'    => 'Técnico de Informática',
        'periodo'  => '2025/26 — Presente · 12.º Ano',
        'desc'     => 'Formação técnica em programação, sistemas informáticos, bases de dados, cabeamento estruturado, física aplicada e empreendedorismo. Período lectivo: tarde.',
        'main'     => true,
    ],
    [
        'tag'      => 'Web',
        'tag_cls'  => 'tag-skill',
        'inst'     => 'Aprendizagem Autónoma',
        'curso'    => 'Desenvolvimento Web — HTML, CSS & PHP',
        'periodo'  => '2025',
        'desc'     => 'Estudo independente de desenvolvimento web, incluindo criação de interfaces, estilização e aplicações server-side com PHP e MySQL via XAMPP.',
        'main'     => false,
    ],
    [
        'tag'      => 'BD',
        'tag_cls'  => 'tag-skill',
        'inst'     => 'Aprendizagem Autónoma',
        'curso'    => 'SQL & Bases de Dados Relacionais',
        'periodo'  => '2026',
        'desc'     => 'Fundamentos de SQL: criação de tabelas, constraints, consultas SELECT, INSERT, UPDATE e gestão de dados relacionais.',
        'main'     => false,
    ],
];

function e($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($dados['nome_curto']) ?> — Portfólio</title>
<link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Syne:wght@400;600;800&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --bg:#07070f;--surface:#0f0f1a;--surface2:#161625;
  --border:#1e1e35;--accent:#7c3aed;--accent2:#06b6d4;
  --green:#22d3a5;--text:#e8e8f0;--muted:#5a5a7a;--highlight:#b39dfa;
}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:'Syne',sans-serif;overflow-x:hidden;cursor:none}
#cur{width:10px;height:10px;background:var(--accent);border-radius:50%;position:fixed;pointer-events:none;z-index:9999;transform:translate(-50%,-50%);transition:transform .15s,background .2s}
#cur-ring{width:38px;height:38px;border:1.5px solid var(--accent);border-radius:50%;position:fixed;pointer-events:none;z-index:9998;transform:translate(-50%,-50%);opacity:.45;transition:transform .38s cubic-bezier(.4,0,.2,1)}
body::before{content:'';position:fixed;inset:0;
  background-image:linear-gradient(rgba(124,58,237,.07) 1px,transparent 1px),linear-gradient(90deg,rgba(124,58,237,.07) 1px,transparent 1px);
  background-size:64px 64px;pointer-events:none;z-index:0}
.blob{position:fixed;border-radius:50%;filter:blur(140px);pointer-events:none;z-index:0;opacity:.09}
.b1{width:700px;height:700px;background:#7c3aed;top:-250px;left:-250px}
.b2{width:500px;height:500px;background:#06b6d4;bottom:-150px;right:-150px}
.b3{width:300px;height:300px;background:#22d3a5;top:50%;left:50%;transform:translate(-50%,-50%)}
nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:1.1rem 5rem;backdrop-filter:blur(24px) saturate(1.5);background:rgba(7,7,15,.75);border-bottom:1px solid var(--border)}
.logo{font-family:'Space Mono',monospace;font-size:.95rem;color:var(--accent);letter-spacing:3px;display:flex;align-items:center;gap:.5rem}
.logo-dot{width:8px;height:8px;border-radius:50%;background:var(--green);animation:pulse 2s ease-in-out infinite}
@keyframes pulse{0%,100%{opacity:1;box-shadow:0 0 0 0 rgba(34,211,165,.4)}50%{opacity:.7;box-shadow:0 0 0 6px rgba(34,211,165,0)}}
.nav-links{display:flex;gap:2.5rem;list-style:none}
.nav-links a{color:var(--muted);text-decoration:none;font-size:.78rem;letter-spacing:1.5px;text-transform:uppercase;transition:color .25s;position:relative}
.nav-links a::after{content:'';position:absolute;bottom:-4px;left:0;right:0;height:1px;background:var(--accent);transform:scaleX(0);transition:transform .25s;transform-origin:left}
.nav-links a:hover{color:var(--highlight)}
.nav-links a:hover::after{transform:scaleX(1)}
section{position:relative;z-index:1}
.hero{min-height:100vh;display:flex;align-items:center;padding:0 5rem;padding-top:90px}
.hero-inner{max-width:850px}
.badge{display:inline-flex;align-items:center;gap:.6rem;background:rgba(34,211,165,.08);border:1px solid rgba(34,211,165,.25);border-radius:100px;padding:.45rem 1.1rem;font-family:'Space Mono',monospace;font-size:.72rem;color:var(--green);margin-bottom:2.2rem;animation:fadeUp .6s ease both}
.badge-dot{width:6px;height:6px;border-radius:50%;background:var(--green);animation:pulse 2s ease-in-out infinite}
.hero-age{font-family:'Space Mono',monospace;font-size:.78rem;color:var(--muted);margin-bottom:.6rem;letter-spacing:1px;animation:fadeUp .6s ease .05s both}
h1.hero-name{font-size:clamp(2.8rem,7vw,6.2rem);font-weight:800;line-height:1.02;margin-bottom:.3rem;animation:fadeUp .7s ease .1s both}
h1.hero-name .first{color:var(--text)}
h1.hero-name .last{background:linear-gradient(120deg,var(--accent) 0%,var(--accent2) 60%,var(--green) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.hero-role{font-family:'Space Mono',monospace;font-size:.95rem;color:var(--accent2);margin-bottom:1.6rem;letter-spacing:.5px;display:flex;align-items:center;gap:.75rem;animation:fadeUp .7s ease .2s both}
.hero-role::before{content:'>';color:var(--accent)}
.hero-desc{color:var(--muted);font-size:1rem;max-width:520px;line-height:1.8;margin-bottom:2.8rem;animation:fadeUp .7s ease .3s both}
.hero-desc strong{color:var(--highlight);font-weight:600}
.hero-cta{display:flex;gap:1rem;flex-wrap:wrap;animation:fadeUp .7s ease .4s both}
.btn{display:inline-flex;align-items:center;gap:.5rem;padding:.9rem 2rem;border-radius:10px;font-family:'Syne',sans-serif;font-size:.88rem;font-weight:700;text-decoration:none;cursor:none;transition:all .25s;letter-spacing:.5px;border:none}
.btn-primary{background:linear-gradient(135deg,var(--accent),#5b21b6);color:#fff;box-shadow:0 4px 20px rgba(124,58,237,.3)}
.btn-primary:hover{transform:translateY(-3px);box-shadow:0 10px 35px rgba(124,58,237,.5)}
.btn-outline{background:transparent;color:var(--text);border:1px solid var(--border)}
.btn-outline:hover{border-color:var(--accent);color:var(--highlight);transform:translateY(-3px);background:rgba(124,58,237,.06)}
.hero-stats{position:absolute;right:5rem;top:50%;transform:translateY(-50%);display:flex;flex-direction:column;gap:1.5rem;animation:fadeUp .7s ease .5s both}
.stat-card{background:var(--surface);border:1px solid var(--border);border-radius:14px;padding:1.25rem 1.5rem;text-align:center;position:relative;overflow:hidden;transition:border-color .3s,transform .3s}
.stat-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--accent),var(--accent2))}
.stat-card:hover{border-color:rgba(124,58,237,.4);transform:translateX(-4px)}
.stat-num{font-size:2rem;font-weight:800;color:var(--highlight);display:block;line-height:1}
.stat-label{font-size:.68rem;color:var(--muted);font-family:'Space Mono',monospace;letter-spacing:1px;margin-top:.3rem}
.scroll-hint{position:absolute;bottom:2.5rem;left:5rem;display:flex;align-items:center;gap:.75rem;color:var(--muted);font-size:.7rem;font-family:'Space Mono',monospace;letter-spacing:2px;animation:fadeUp .7s ease .7s both}
.scroll-line{width:44px;height:1px;background:linear-gradient(90deg,var(--accent),transparent);animation:scrollP 2s ease-in-out infinite}
@keyframes scrollP{0%,100%{opacity:.3}50%{opacity:1}}
.sc{max-width:1100px;margin:0 auto;padding:6rem 5rem}
.s-label{font-family:'Space Mono',monospace;font-size:.68rem;color:var(--green);letter-spacing:3px;text-transform:uppercase;margin-bottom:.75rem;display:flex;align-items:center;gap:.75rem}
.s-label::before{content:'#';color:var(--accent)}
.s-title{font-size:clamp(1.9rem,4vw,2.8rem);font-weight:800;margin-bottom:3rem;line-height:1.1}
.s-title span{background:linear-gradient(120deg,var(--accent),var(--accent2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}
.about-text p{color:var(--muted);line-height:1.85;font-size:.97rem;margin-bottom:1.2rem}
.about-text p strong{color:var(--highlight)}
.about-card{background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:2.5rem;position:relative;overflow:hidden}
.about-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--accent),var(--accent2),var(--green))}
.about-info-item{display:flex;align-items:center;gap:1rem;padding:.85rem 0;border-bottom:1px solid var(--border)}
.about-info-item:last-child{border-bottom:none}
.info-icon{font-size:1.1rem;width:38px;height:38px;background:var(--surface2);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.info-key{font-size:.65rem;color:var(--muted);font-family:'Space Mono',monospace;letter-spacing:1px;margin-bottom:.2rem}
.info-val{font-size:.9rem;font-weight:600;color:var(--text)}
.skills-wrap{background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
.skills-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1.5rem}
.skill-card{background:var(--surface2);border:1px solid var(--border);border-radius:14px;padding:1.4rem 1.5rem;transition:border-color .3s,transform .3s}
.skill-card:hover{border-color:rgba(124,58,237,.4);transform:translateY(-3px)}
.skill-top{display:flex;justify-content:space-between;align-items:center;margin-bottom:.85rem}
.skill-name{font-size:.92rem;font-weight:700;display:flex;align-items:center;gap:.5rem}
.skill-icon{font-size:1.1rem}
.skill-pct{font-size:.78rem;color:var(--highlight);font-family:'Space Mono',monospace;background:rgba(124,58,237,.12);padding:.15rem .5rem;border-radius:6px}
.skill-bar{height:5px;background:var(--border);border-radius:100px;overflow:hidden}
.skill-fill{height:100%;border-radius:100px;background:linear-gradient(90deg,var(--accent),var(--accent2));transition:width 1.4s cubic-bezier(.4,0,.2,1)}
.skill-lvl{font-size:.67rem;color:var(--muted);font-family:'Space Mono',monospace;margin-top:.5rem;letter-spacing:.5px}
.edu-timeline{display:flex;flex-direction:column;gap:1.5rem;position:relative;padding-left:2rem}
.edu-timeline::before{content:'';position:absolute;left:0;top:12px;bottom:12px;width:1px;background:linear-gradient(180deg,var(--accent),var(--accent2),transparent)}
.edu-card{background:var(--surface);border:1px solid var(--border);border-radius:16px;padding:2rem 2rem 2rem 2.5rem;position:relative;transition:border-color .3s,transform .3s}
.edu-card::before{content:'';position:absolute;left:-2.55rem;top:1.6rem;width:10px;height:10px;border-radius:50%;background:var(--accent);border:2px solid var(--bg);box-shadow:0 0 10px rgba(124,58,237,.6)}
.edu-card:hover{border-color:rgba(124,58,237,.35);transform:translateX(6px)}
.edu-card.main{border-color:rgba(124,58,237,.3);background:linear-gradient(135deg,rgba(124,58,237,.07),var(--surface))}
.edu-card.main::before{background:var(--green);box-shadow:0 0 12px rgba(34,211,165,.6)}
.edu-tag{display:inline-block;font-size:.65rem;font-family:'Space Mono',monospace;padding:.2rem .65rem;border-radius:100px;margin-bottom:.75rem;letter-spacing:.5px}
.tag-main{background:rgba(34,211,165,.1);color:var(--green);border:1px solid rgba(34,211,165,.25)}
.tag-skill{background:rgba(6,182,212,.1);color:var(--accent2);border:1px solid rgba(6,182,212,.25)}
.edu-inst{font-size:.72rem;color:var(--muted);font-family:'Space Mono',monospace;margin-bottom:.3rem;letter-spacing:.5px}
.edu-curso{font-size:1.05rem;font-weight:700;margin-bottom:.3rem}
.edu-periodo{font-size:.72rem;color:var(--accent2);font-family:'Space Mono',monospace;margin-bottom:.85rem}
.edu-desc{color:var(--muted);font-size:.88rem;line-height:1.7}
.contact-wrap{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start}
.contact-intro{color:var(--muted);line-height:1.8;margin-bottom:2rem;font-size:.97rem}
.contact-item{display:flex;align-items:center;gap:1rem;padding:1rem;background:var(--surface);border:1px solid var(--border);border-radius:12px;margin-bottom:.75rem;text-decoration:none;transition:border-color .3s,transform .3s}
.contact-item:hover{border-color:var(--accent);transform:translateX(4px)}
.c-icon{width:42px;height:42px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.2rem;flex-shrink:0}
.c-key{font-size:.65rem;color:var(--muted);font-family:'Space Mono',monospace;letter-spacing:.5px;margin-bottom:.2rem}
.c-val{font-size:.9rem;font-weight:600;color:var(--text)}
.form-wrap{display:flex;flex-direction:column;gap:1rem}
.f-group{display:flex;flex-direction:column;gap:.4rem}
.f-label{font-size:.68rem;color:var(--muted);font-family:'Space Mono',monospace;letter-spacing:1.5px}
.f-input,.f-area{background:var(--surface);border:1px solid var(--border);border-radius:10px;padding:.85rem 1rem;color:var(--text);font-family:'Syne',sans-serif;font-size:.9rem;outline:none;transition:border-color .25s,box-shadow .25s;cursor:none;width:100%}
.f-input:focus,.f-area:focus{border-color:var(--accent);box-shadow:0 0 0 3px rgba(124,58,237,.12)}
.f-area{resize:vertical;min-height:120px}
.divider{height:1px;background:linear-gradient(90deg,transparent,var(--border),transparent)}
footer{border-top:1px solid var(--border);padding:2rem 5rem;display:flex;align-items:center;justify-content:space-between;position:relative;z-index:1}
.f-text{color:var(--muted);font-size:.75rem;font-family:'Space Mono',monospace}
.f-text span{color:var(--highlight)}
.f-badge{display:flex;align-items:center;gap:.5rem;background:var(--surface);border:1px solid var(--border);border-radius:100px;padding:.35rem .9rem;font-family:'Space Mono',monospace;font-size:.7rem;color:var(--muted)}
.f-badge::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--green);animation:pulse 2s ease-in-out infinite}
@keyframes fadeUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
.reveal{opacity:0;transform:translateY(30px);transition:opacity .7s ease,transform .7s ease}
.reveal.visible{opacity:1;transform:none}
.reveal-left{opacity:0;transform:translateX(-30px);transition:opacity .7s ease,transform .7s ease}
.reveal-left.visible{opacity:1;transform:none}
.reveal-right{opacity:0;transform:translateX(30px);transition:opacity .7s ease,transform .7s ease}
.reveal-right.visible{opacity:1;transform:none}
@media(max-width:900px){
  nav{padding:1rem 1.5rem}.nav-links{display:none}
  .hero{padding:0 1.5rem;padding-top:85px}.hero-stats{display:none}.scroll-hint{left:1.5rem}
  .sc{padding:4rem 1.5rem}.about-grid,.contact-wrap{grid-template-columns:1fr;gap:2.5rem}
  footer{flex-direction:column;gap:.75rem;padding:1.5rem;text-align:center}
}
</style>
</head>
<body>

<div id="cur"></div>
<div id="cur-ring"></div>
<div class="blob b1"></div>
<div class="blob b2"></div>
<div class="blob b3"></div>

<!-- NAV -->
<nav>
  <div class="logo"><div class="logo-dot"></div>NELSON.DEV</div>
  <ul class="nav-links">
    <li><a href="#sobre">Sobre</a></li>
    <li><a href="#habilidades">Habilidades</a></li>
    <li><a href="#educacao">Educação</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ul>
</nav>

<!-- HERO -->
<section class="hero" id="inicio">
  <div class="hero-inner">
    <div class="badge"><div class="badge-dot"></div>Aberto a oportunidades &amp; projetos</div>
    <p class="hero-age">// <?= $dados['idade'] ?> anos · <?= e($dados['localizacao']) ?></p>
    <h1 class="hero-name">
      <span class="first">Nelson</span><br>
      <span class="last">Saco</span>
    </h1>
    <p class="hero-role">Estudante de Informática &amp; Dev em formação</p>
    <p class="hero-desc">
      Estudante de <strong><?= e($dados['curso']) ?></strong> no IPIL, Luanda.<br>
      Turma <strong><?= e($dados['turma']) ?></strong> · Nº <strong><?= $dados['numero'] ?></strong> · Sala <strong><?= $dados['sala'] ?></strong><br>
      A aprender todos os dias — uma linha de código de cada vez.
    </p>
    <div class="hero-cta">
      <a href="#habilidades" class="btn btn-primary">Ver Habilidades →</a>
      <a href="#contacto" class="btn btn-outline">Contactar</a>
    </div>
  </div>
  <div class="hero-stats">
    <div class="stat-card">
      <span class="stat-num"><?= count($habilidades) ?>+</span>
      <div class="stat-label">LINGUAGENS</div>
    </div>
    <div class="stat-card">
      <span class="stat-num"><?= $dados['idade'] ?></span>
      <div class="stat-label">ANOS</div>
    </div>
    <div class="stat-card">
      <span class="stat-num">Nº<?= $dados['numero'] ?></span>
      <div class="stat-label">TURMA <?= e($dados['turma']) ?></div>
    </div>
  </div>
  <div class="scroll-hint">
    <div class="scroll-line"></div>
    SCROLL
  </div>
</section>

<div class="divider"></div>

<!-- SOBRE -->
<section id="sobre">
  <div class="sc">
    <div class="s-label reveal">Quem sou eu</div>
    <h2 class="s-title reveal">Sobre <span>Mim</span></h2>
    <div class="about-grid">
      <div class="about-text reveal-left">
        <p>Olá! Sou o <strong><?= e($dados['nome']) ?></strong>, tenho <?= $dados['idade'] ?> anos e estudo no <strong><?= e($dados['escola']) ?></strong>, no curso Técnico de Informática.</p>
        <p>Estou no início da minha jornada no mundo da programação, a explorar linguagens como <strong>HTML, CSS, JavaScript, PHP, C# e MySQL</strong>. Cada dia é uma oportunidade de aprender algo novo e evoluir.</p>
        <p>O meu objetivo é crescer como programador e, no futuro, <strong>criar soluções tecnológicas</strong> que façam diferença na minha comunidade e no mundo.</p>
      </div>
      <div class="about-card reveal-right">
        <div class="about-info-item">
          <div class="info-icon">👤</div>
          <div><div class="info-key">NOME COMPLETO</div><div class="info-val"><?= e($dados['nome']) ?></div></div>
        </div>
        <div class="about-info-item">
          <div class="info-icon">🎂</div>
          <div><div class="info-key">IDADE</div><div class="info-val"><?= $dados['idade'] ?> Anos</div></div>
        </div>
        <div class="about-info-item">
          <div class="info-icon">🏫</div>
          <div><div class="info-key">ESCOLA</div><div class="info-val">IPIL — <?= e($dados['localizacao']) ?></div></div>
        </div>
        <div class="about-info-item">
          <div class="info-icon">📚</div>
          <div><div class="info-key">CURSO</div><div class="info-val"><?= e($dados['curso']) ?></div></div>
        </div>
        <div class="about-info-item">
          <div class="info-icon">🔢</div>
          <div><div class="info-key">NÚMERO DE ALUNO</div><div class="info-val">Nº <?= $dados['numero'] ?></div></div>
        </div>
        <div class="about-info-item">
          <div class="info-icon">🏷️</div>
          <div><div class="info-key">TURMA</div><div class="info-val"><?= e($dados['turma']) ?></div></div>
        </div>
        <div class="about-info-item">
          <div class="info-icon">🚪</div>
          <div><div class="info-key">SALA</div><div class="info-val">Sala <?= $dados['sala'] ?></div></div>
        </div>
        <div class="about-info-item">
          <div class="info-icon">🌅</div>
          <div><div class="info-key">PERÍODO</div><div class="info-val"><?= e($dados['periodo']) ?></div></div>
        </div>
        <div class="about-info-item">
          <div class="info-icon">📍</div>
          <div><div class="info-key">LOCALIZAÇÃO</div><div class="info-val"><?= e($dados['localizacao']) ?></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- HABILIDADES -->
<section id="habilidades" class="skills-wrap">
  <div class="sc">
    <div class="s-label reveal">Stack tecnológico</div>
    <h2 class="s-title reveal">Habilidades <span>Técnicas</span></h2>
    <div class="skills-grid">
      <?php foreach ($habilidades as $i => $s): ?>
      <div class="skill-card reveal" style="transition-delay:<?= $i * 0.08 ?>s">
        <div class="skill-top">
          <span class="skill-name"><span class="skill-icon"><?= $s['icon'] ?></span> <?= e($s['nome']) ?></span>
          <span class="skill-pct"><?= $s['pct'] ?>%</span>
        </div>
        <div class="skill-bar"><div class="skill-fill" data-w="<?= $s['pct'] ?>" style="width:0%"></div></div>
        <div class="skill-lvl">🟡 Iniciante · <?= e($s['desc']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- EDUCAÇÃO -->
<section id="educacao">
  <div class="sc">
    <div class="s-label reveal">Percurso académico</div>
    <h2 class="s-title reveal">Educação &amp;<br><span>Formação</span></h2>
    <div class="edu-timeline">
      <?php foreach ($educacao as $i => $ed): ?>
      <div class="edu-card <?= $ed['main'] ? 'main' : '' ?> reveal" style="transition-delay:<?= $i * 0.12 ?>s">
        <span class="edu-tag <?= e($ed['tag_cls']) ?>"><?= e($ed['tag']) ?></span>
        <div class="edu-inst"><?= e($ed['inst']) ?></div>
        <div class="edu-curso"><?= e($ed['curso']) ?></div>
        <div class="edu-periodo"><?= e($ed['periodo']) ?></div>
        <p class="edu-desc"><?= e($ed['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- CONTACTO -->
<section id="contacto">
  <div class="sc">
    <div class="s-label reveal">Vamos conversar</div>
    <h2 class="s-title reveal">Entrar em <span>Contacto</span></h2>
    <div class="contact-wrap">
      <div class="reveal-left">
        <p class="contact-intro">Tens uma ideia, projeto ou simplesmente queres bater um papo sobre tecnologia? Estou disponível! 🚀</p>
        <a href="tel:<?= preg_replace('/\s+/', '', $dados['telefone']) ?>" class="contact-item">
          <div class="c-icon" style="background:rgba(34,211,165,.1)">📱</div>
          <div><div class="c-key">TELEFONE / WHATSAPP</div><div class="c-val"><?= e($dados['telefone']) ?></div></div>
        </a>
        <a href="mailto:<?= e($dados['email']) ?>" class="contact-item">
          <div class="c-icon" style="background:rgba(124,58,237,.1)">✉️</div>
          <div><div class="c-key">EMAIL</div><div class="c-val"><?= e($dados['email']) ?></div></div>
        </a>
        <a href="#" class="contact-item">
          <div class="c-icon" style="background:rgba(6,182,212,.1)">📍</div>
          <div><div class="c-key">LOCALIZAÇÃO</div><div class="c-val"><?= e($dados['localizacao']) ?></div></div>
        </a>
      </div>
      <form class="form-wrap reveal-right" action="#" method="POST">
        <div class="f-group">
          <label class="f-label">NOME</label>
          <input type="text" name="nome" class="f-input" placeholder="O teu nome">
        </div>
        <div class="f-group">
          <label class="f-label">EMAIL</label>
          <input type="email" name="email" class="f-input" placeholder="teu@email.com">
        </div>
        <div class="f-group">
          <label class="f-label">MENSAGEM</label>
          <textarea name="mensagem" class="f-area" placeholder="Escreve aqui a tua mensagem..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center">Enviar Mensagem ✉️</button>
      </form>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <p class="f-text">© <?= date('Y') ?> <span><?= e($dados['nome_curto']) ?></span> — Todos os direitos reservados</p>
  <div class="f-badge">Feito com PHP &amp; ♥ em Luanda</div>
</footer>

<script>
const cur = document.getElementById('cur');
const ring = document.getElementById('cur-ring');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY});
(function anim(){
  cur.style.left=mx+'px';cur.style.top=my+'px';
  rx+=(mx-rx)*.11;ry+=(my-ry)*.11;
  ring.style.left=rx+'px';ring.style.top=ry+'px';
  requestAnimationFrame(anim);
})();
document.querySelectorAll('a,button,.skill-card,.edu-card,.contact-item,.stat-card').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.style.transform='translate(-50%,-50%) scale(2.2)';ring.style.opacity='1';ring.style.borderColor='var(--green)'});
  el.addEventListener('mouseleave',()=>{cur.style.transform='translate(-50%,-50%) scale(1)';ring.style.opacity='.45';ring.style.borderColor='var(--accent)'});
});
const obs=new IntersectionObserver(entries=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      e.target.classList.add('visible');
      e.target.querySelectorAll('.skill-fill').forEach(b=>{
        setTimeout(()=>{b.style.width=b.dataset.w+'%'},250);
      });
    }
  });
},{threshold:0.1});
document.querySelectorAll('.reveal,.reveal-left,.reveal-right').forEach(r=>obs.observe(r));
</script>
</body>
</html>
