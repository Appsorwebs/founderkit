# Changelog

All notable changes to FounderKit will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] – 2026-04-20

### Added

- Initial public release
- 15 premium Gutenberg blocks:
  - Hero (animated full-viewport with mesh gradient)
  - Stats Counter (animated counters)
  - Case Study, Portfolio Grid, Tech Stack, Pricing Table
  - Quiz Embed, Course Card, Timeline, Digital Product Card
  - Testimonial Carousel, Job Listing, Team Member
  - Membership CTA, Resource Card
- Block Manager UI with per-block enable/disable toggles
- Settings panel: GSAP animation control, color pickers
- License system with remote API validation and daily wp-cron checks
- Custom Post Types: Projects, Resources, Jobs
- Capability system with `manage_founderkit` role
- 70+ action/filter hooks for extensibility
- REST API support (opt-in via settings)
- Addon Marketplace framework (4 planned Pro addons)

### Security

- CSRF protection with nonce verification on all forms
- Improved AJAX permission logic to prevent unauthorized access
- Input validation: whitelist animation_intensity, validate block slugs
- Rate limiting: 100 requests per 5 minutes per IP on AJAX endpoints
- Secure public endpoints with nonce verification

### Developer

- PSR-12 compliant code structure
- Meets WordPress PHPCS standards (8.0+)
- Full text domain support for translations

---

## [Unreleased]

### Added (in development)

- [ ] Additional Pro blocks (Forms LMS, WooCommerce integrations)
- [ ] Starter Templates one-click importer
- [ ] Library of pre-built section templates

### Changed

- TBD

### Fixed

- TBD

---

## Upgrade Notices

### 1.0.0

First stable release. No migration required from previous versions (beta/none).
