<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects — Mo Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body{margin:0}</style>
    <link rel="stylesheet" href="projects.css">
   
</head>
<body>
<?php
$projects = [
    [
        'title' => 'Portfolio Site',
        'desc'  => 'A fast, responsive personal portfolio built with PHP and Tailwind.',
        'image' => 'images/project-portfolio.png',
        'github'=> 'https://github.com/youruser/portfolio',
        'live'  => '#',
        'tags'  => ['php','tailwind','frontend']
    ],
    [
        'title' => 'Task Manager API',
        'desc'  => 'RESTful API for managing tasks with JWT auth and MySQL.',
        'image' => 'images/project-api.png',
        'github'=> 'https://github.com/youruser/task-api',
        'live'  => '#',
        'tags'  => ['php','api','mysql']
    ],
    [
        'title' => 'React Dashboard',
        'desc'  => 'Admin dashboard prototype using React, Chart.js and Tailwind.',
        'image' => 'images/project-dashboard.png',
        'github'=> 'https://github.com/youruser/react-dashboard',
        'live'  => '#',
        'tags'  => ['react','charts','ui']
    ]
];
?>
<header class="bg-white shadow sticky top-0 z-10">
  <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
    <div class="flex items-center gap-4">
      <a href="/" class="text-xl font-semibold">Mo Site</a>
      <h1 class="text-lg font-medium">My Projects</h1>
    </div>
    <div class="flex items-center gap-3">
      <a href="mailto:you@example.com" class="text-sm text-slate-600 hover:underline">Contact</a>
      <a href="index.php" class="text-sm px-3 py-1 border rounded hover:bg-slate-50">Home</a>
    </div>
  </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-8">
  <section class="mb-6">
    <p class="text-slate-700">A selection of projects I'm proud of. Click a card to view the repo or demo.</p>
  </section>

  <section class="mb-6 flex gap-3 items-center">
    <input id="search" type="search" placeholder="Search projects or tags..." class="flex-1 px-4 py-2 border rounded focus:outline-none focus:ring" />
    <div class="text-sm text-slate-500">Showing <span id="count"><?= count($projects) ?></span></div>
  </section>

  <section id="grid" class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($projects as $p): ?>
      <article class="project-card bg-white border rounded-lg shadow-sm overflow-hidden" data-title="<?= htmlspecialchars(strtolower($p['title'])) ?>" data-tags="<?= htmlspecialchars(strtolower(implode(' ', $p['tags']))) ?>">
        <div class="h-40 bg-slate-100 overflow-hidden flex items-center justify-center">
          <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>" class="object-cover w-full h-full" onerror="this.src='https://via.placeholder.com/600x400?text=Project'"/>
        </div>
        <div class="p-4">
          <h3 class="font-semibold text-lg"><?= htmlspecialchars($p['title']) ?></h3>
          <p class="text-sm text-slate-600 mt-1 mb-3"><?= htmlspecialchars($p['desc']) ?></p>
          <div class="flex items-center justify-between">
            <div class="flex gap-2 flex-wrap">
              <?php foreach ($p['tags'] as $tag): ?>
                <span class="text-xs px-2 py-1 bg-slate-100 text-slate-700 rounded"><?= htmlspecialchars($tag) ?></span>
              <?php endforeach; ?>
            </div>
            <div class="flex items-center gap-2">
              <a href="<?= htmlspecialchars($p['github']) ?>" target="_blank" rel="noopener" title="GitHub" class="text-slate-600 hover:text-slate-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .5C5.65.5.5 5.66.5 12.03c0 5.1 3.29 9.42 7.86 10.95.58.11.79-.25.79-.56 0-.28-.01-1.02-.02-2-3.2.7-3.88-1.54-3.88-1.54-.53-1.35-1.3-1.71-1.3-1.71-1.06-.72.08-.71.08-.71 1.18.08 1.8 1.21 1.8 1.21 1.04 1.78 2.73 1.27 3.4.97.11-.76.41-1.28.74-1.58-2.56-.29-5.26-1.28-5.26-5.69 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.47.11-3.06 0 0 .97-.31 3.18 1.18a11 11 0 0 1 2.9-.39c.99.01 1.99.13 2.92.39 2.2-1.49 3.17-1.18 3.17-1.18.64 1.59.24 2.77.12 3.06.74.81 1.19 1.84 1.19 3.1 0 4.42-2.7 5.39-5.28 5.67.42.36.8 1.07.8 2.15 0 1.55-.01 2.8-.01 3.18 0 .31.21.67.8.56A11.55 11.55 0 0 0 23.5 12.03C23.5 5.66 18.35.5 12 .5z"/></svg>
              </a>
              <a href="<?= htmlspecialchars($p['live']) ?>" target="_blank" rel="noopener" class="text-sm px-3 py-1 bg-indigo-600 text-white rounded hover:bg-indigo-700">Live</a>
            </div>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </section>

  <p id="no-results" class="mt-8 text-center text-slate-500 hidden">No projects found.</p>
</main>

<script>
(function(){
  const input = document.getElementById('search');
  const cards = Array.from(document.querySelectorAll('.project-card'));
  const countEl = document.getElementById('count');
  const noResults = document.getElementById('no-results');

  function filter(q){
    q = (q || '').trim().toLowerCase();
    let shown = 0;
    cards.forEach(card => {
      const title = card.dataset.title || '';
      const tags = card.dataset.tags || '';
      const match = !q || title.includes(q) || tags.includes(q);
      card.style.display = match ? '' : 'none';
      if(match) shown++;
    });
    countEl.textContent = shown;
    noResults.classList.toggle('hidden', shown > 0);
  }

  input.addEventListener('input', e => filter(e.target.value));
  // initialize
  filter('');
})();
</script>
</body>
</html>