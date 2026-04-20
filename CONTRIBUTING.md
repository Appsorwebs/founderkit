# Contributing to FounderKit

Thank you for considering contributions to FounderKit! This document outlines the process for contributing to the project.

## 🎯 How to Contribute

### Reporting Bugs

1. Check existing issues to avoid duplicates
2. Use the bug report template
3. Include: WordPress version, PHP version, steps to reproduce, expected vs actual behavior

### Suggesting Features

1. Open a discussion first via Discussions tab
2. Explain the use case and why this feature benefits the community
3. Include mockups or examples if applicable

### Pull Requests

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Follow the [coding standards](#coding-standards)
4. Add tests if applicable
5. Commit with clear, descriptive messages
6. Push and open a PR with a complete description
7. Ensure all CI checks pass

## 🛠️ Development Setup

### Requirements

- PHP 8.0+
- WordPress 6.4+
- Composer
- Node.js 18+ (if working on frontend assets)
- WP-CLI (optional)

### Local Environment

```bash
# Install PHP dependencies
composer install

# Install Node dependencies (optional, for asset changes)
npm install

# Build assets
npm run build

# Run tests
composer test

# Lint PHP files
composer cs-check
```

### Project Structure

```
founderkit/
├── admin/                # Admin interface, assets, views
├── assets/               # Public CSS & JS
│   ├── css/
│   └── js/
├── blocks/               # Gutenberg block definitions & renderers
├── includes/             # Core classes
│   ├── class-*.php       # Feature modules
│   └── class-blocks.php  # Block registry
└── founderkit.php        # Main plugin file
```

## 📝 Coding Standards

This project follows [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/) and [PSR-12](https://www.php-fig.org/psr/psr-12/).

### PHP

- 4-space indentation
- Opening braces on same line
- Fully qualified class names in use statements
- Strict comparison (`===`, `!==`)
- Type declarations for parameters and return values (PHP 8.0+)

### JavaScript/CSS

- Semicolons required
- 2-space indentation
- Single quotes for strings
- Max line length: 120 characters

Run `composer cs-check` to validate. Fix issues with `composer cs-fix`.

## 🧪 Testing

Unit tests live in `tests/`. Use PHPUnit.

```bash
composer test
```

Write tests for:

- All new features
- Bug fixes (regression tests)
- Refactoring that alters behavior

## 🔍 Code Review Process

1. At least one maintainer approval required
2. All CI checks must pass (lint, tests, security scanning)
3. PRs must be up-to-date with `main` before merge
4. Squash merge commits are preferred for clean history

## 📜 License

By contributing, you agree that your contributions will be licensed under the GPL v2+ (same as this project).

## 🙋 Questions?

Open a [Discussions](https://github.com/Appsorwebs/founderkit/discussions) thread for general questions.

Found a security issue? Contact us privately at security@founderkit.com.

---

Thank you for helping make FounderKit better!
