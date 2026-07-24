<div align="center">
  <img src="pterodactyl/vantablack/v1.2/public/vantablack/Vantablack.png" width="300" alt="Vantablack Theme">
  <h1>Vantablack Theme for Pterodactyl</h1>
  <p>A premium, sanitized, and fully-featured dark theme for Pterodactyl 1.14.1</p>
</div>

---

## 🌟 Features
- **Ultra-Modern UI:** Glassmorphism, tailored gradients, and premium typography.
- **Built-in Sounds:** Configurable UI interaction sounds out of the box.
- **Fully Sanitized:** Securely rebuilt, removing legacy trackers and telemetry.
- **100% Native Feel:** Integrates seamlessly into the Pterodactyl React frontend.

## 🚀 Installation

Ensure your server meets the Pterodactyl 1.14.1 requirements (Node 24.x, Yarn, PHP 8.3).

1. Upload the contents of the `pterodactyl/` directory to your Pterodactyl web root (e.g. `/var/www/pterodactyl`).
2. Run the interactive Vantablack installer:
```bash
php artisan vantablack install
```
3. When prompted, select version `v1.2`.
4. Run the post-install commands if necessary:
```bash
php artisan migrate --force
php artisan optimize:clear
php artisan optimize
```
5. Ensure file permissions are set correctly:
```bash
chown -R www-data:www-data /var/www/pterodactyl/*
```

## 🐛 Found a Bug?
If you find a bug, please create a new issue using our Bug Report template on GitHub! Ensure you provide the Pterodactyl panel version and any error logs.

## 💬 Community
Join our community on Discord for assistance and updates:
[Join Discord](https://discord.gg/geCjrRbAwC)

---
*Copyright © 2026. Vantablack Theme.*
