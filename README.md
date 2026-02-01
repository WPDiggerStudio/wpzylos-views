# WPZylos Views

[![PHP Version](https://img.shields.io/badge/php-%5E8.0-blue)](https://php.net)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)
[![GitHub](https://img.shields.io/badge/GitHub-WPDiggerStudio-181717?logo=github)](https://github.com/WPDiggerStudio/wpzylos-views)

PHP template engine with optional Twig adapter for WPZylos framework.

📖 **[Full Documentation](https://wpzylos.com)** | 🐛 **[Report Issues](https://github.com/WPDiggerStudio/wpzylos-views/issues)**

---

## ✨ Features

- **PHP Templates** — Simple PHP-based templates
- **Twig Adapter** — Optional Twig template engine
- **Layouts** — Template inheritance
- **Sections** — Yield and extend sections
- **Escaping** — Auto-escaping for security

---

## 📋 Requirements

| Requirement | Version |
| ----------- | ------- |
| PHP         | ^8.0    |
| WordPress   | 6.0+    |

---

## 🚀 Installation

```bash
composer require wpdiggerstudio/wpzylos-views
```

---

## 📖 Quick Start

```php
use WPZylos\Framework\Views\ViewFactory;

$view = new ViewFactory($context);

// Render a template
echo $view->render('products.index', [
    'products' => $products,
]);

// Or use the helper
echo view('products.show', ['product' => $product]);
```

---

## 🏗️ Core Features

### Basic Templates

```php
// resources/views/products/index.php
<ul>
<?php foreach ($products as $product): ?>
    <li><?= esc_html($product->name) ?></li>
<?php endforeach; ?>
</ul>
```

### Layouts

```php
// resources/views/layouts/app.php
<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'My Plugin' ?></title>
</head>
<body>
    <?= $content ?>
</body>
</html>
```

```php
// Extend layout
echo $view->render('products.index', [
    'products' => $products,
], 'layouts.app');
```

### Partials

```php
// Include partial
<?php include $this->partial('partials.header') ?>

// Or using helper
<?= view('partials.product-card', ['product' => $product]) ?>
```

### Escaping

```php
// Auto-escaped
<?= $this->e($userInput) ?>

// Or use WordPress functions
<?= esc_html($title) ?>
<?= esc_attr($class) ?>
<?= esc_url($link) ?>
```

---

## 📦 Related Packages

| Package                                                                | Description            |
| ---------------------------------------------------------------------- | ---------------------- |
| [wpzylos-core](https://github.com/WPDiggerStudio/wpzylos-core)         | Application foundation |
| [wpzylos-routing](https://github.com/WPDiggerStudio/wpzylos-routing)   | URL routing            |
| [wpzylos-scaffold](https://github.com/WPDiggerStudio/wpzylos-scaffold) | Plugin template        |

---

## 📖 Documentation

For comprehensive documentation, tutorials, and API reference, visit **[wpzylos.com](https://wpzylos.com)**.

---

## ☕ Support the Project

If you find this package helpful, consider buying me a coffee! Your support helps maintain and improve the WPZylos ecosystem.

<a href="https://www.paypal.com/donate/?hosted_button_id=66U4L3HG4TLCC" target="_blank">
  <img src="https://img.shields.io/badge/Donate-PayPal-blue.svg?style=for-the-badge&logo=paypal" alt="Donate with PayPal" />
</a>

---

## 📄 License

MIT License. See [LICENSE](LICENSE) for details.

---

## 🤝 Contributing

Contributions are welcome! Please see [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines.

---

**Made with ❤️ by [WPDiggerStudio](https://github.com/WPDiggerStudio)**
