<?php
// Cấu hình chung
header('Content-Type: text/html; charset=utf-8');

$title = "Đồ án Web PHP – Giới thiệu nhóm";
$semester = "Học kỳ I (2025–2026)";
$project_desc = "Trang web được xây dựng bằng PHP thuần, thể hiện kỹ năng cơ bản về lập trình web, HTML, CSS và xử lý dữ liệu phía server.";

// Thông tin nhóm
$team = [
  [
    "name" => "Phạm Tuấn Kiệt",
    "role" => "Trưởng nhóm / Full-stack Developer",
    "email" => "kiet@example.com",
    "bio" => "Sinh viên CNTT – phụ trách thiết kế cơ sở dữ liệu, code PHP & MySQL, triển khai website học bổng cho sinh viên."
  ],
  [
    "name" => "Trần Hải Long",
    "role" => "Frontend Developer / Kiểm thử",
    "email" => "long@example.com",
    "bio" => "Chịu trách nhiệm UI/UX, thiết kế giao diện, tối ưu CSS, và kiểm thử hệ thống trước khi bàn giao."
  ]
];
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    :root {
      --bg: #0f172a;
      --card: #1e293b;
      --text: #e2e8f0;
      --muted: #94a3b8;
      --accent: #38bdf8;
    }
    * { box-sizing: border-box; }
    body {
      margin: 0; font-family: "Segoe UI", sans-serif;
      background: var(--bg); color: var(--text);
    }
    header, footer {
      text-align: center; padding: 20px; background: #1e293b;
    }
    h1 { color: var(--accent); margin: 10px 0; }
    .container { max-width: 960px; margin: 0 auto; padding: 20px; }
    .desc { color: var(--muted); line-height: 1.6; }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 16px;
      margin-top: 24px;
    }
    .card {
      background: var(--card);
      border-radius: 12px;
      padding: 16px;
      border: 1px solid #334155;
      transition: transform .2s;
    }
    .card:hover { transform: translateY(-4px); }
    .card h3 { margin: 0 0 6px; color: var(--accent); }
    .card small { color: var(--muted); }
    .footer {
      color: var(--muted); font-size: 14px;
      border-top: 1px solid #334155; margin-top: 30px;
    }
    a { color: var(--accent); text-decoration: none; }
  </style>
</head>
<body>
  <header>
    <h1><?= htmlspecialchars($title) ?></h1>
    <p><?= htmlspecialchars($semester) ?></p>
  </header>

  <div class="container">
    <section>
      <h2>🎯 Giới thiệu đồ án</h2>
      <p class="desc"><?= htmlspecialchars($project_desc) ?></p>
    </section>

    <section>
      <h2>👥 Thành viên nhóm</h2>
      <div class="grid">
        <?php foreach ($team as $member): ?>
          <div class="card">
            <h3><?= htmlspecialchars($member["name"]) ?></h3>
            <p><strong><?= htmlspecialchars($member["role"]) ?></strong></p>
            <small>Email: <a href="mailto:<?= htmlspecialchars($member["email"]) ?>"><?= htmlspecialchars($member["email"]) ?></a></small>
            <p><?= htmlspecialchars($member["bio"]) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </div>

  <footer class="footer">
    &copy; <?= date("Y") ?> Nhóm Kiệt & Long — Đồ án Web PHP
  </footer>
</body>
</html>
