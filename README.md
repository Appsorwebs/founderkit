# FounderKit — Premium Gutenberg Block Suite for WordPress

![WordPress](https://img.shields.io/badge/WordPress-Plugin-23169b?logo=wordpress)
![PHP](https://img.shields.io/badge/PHP-8.0+-777bb4?logo=php)
![License](https://img.shields.io/badge/License-GPL%20v2%2B-green)

FounderKit is a standalone WordPress Gutenberg block plugin designed for tech founders, digital academies, agencies, and innovation-driven businesses. It provides a comprehensive suite of premium blocks to build modern, high-converting websites without page builders.

## ✨ Features

- **15 Premium Blocks** – Hero, Stats Counter, Case Study, Portfolio Grid, Tech Stack, Pricing Table, Quiz Embed, Course Card, Timeline, Digital Product Card, Testimonial Carousel, Job Listing, Team Member, Membership CTA, Resource Card
- **Built for Performance** – Zero bloat, native Gutenberg blocks, ~6KB CSS + ~1.6KB JS
- **Fully Customizable** – Custom accent colors, GSAP animation control, per-block toggles
- **Developer-Friendly** – 70+ action/filter hooks, REST API support, custom post types (Projects, Resources, Jobs) and capability system
- **License Management** – Remote API validation, daily wp-cron checks, multi-domain support
- **Extensible Architecture** – Addon marketplace framework ready for Pro extensions

## 📦 Installation

1. Upload the `founderkit` folder to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to **FounderKit → Blocks** to enable desired blocks
4. Use blocks in the Gutenberg editor under the "FounderKit" category

## 🎛️ Blocks Included

| Block | Description |
|-------|-------------|
| **FK Hero** | Full-viewport animated hero with mesh gradient |
| **FK Stats Counter** | Animated number counters with fade-in |
| **FK Case Study** | Feature showcase with staggered animation |
| **FK Portfolio Grid** | Responsive project grid with hover states |
| **FK Tech Stack** | Logo/tech stack display grid |
| **FK Pricing Table** | Three-column pricing comparison |
| **FK Quiz Embed** | Embedded quiz/assessment block |
| **FK Course Card** | Course/product showcase card |
| **FK Timeline** | Vertical milestone timeline |
| **FK Digital Product Card** | Product feature card |
| **FK Testimonial Carousel** | Auto-sliding testimonial carousel |
| **FK Job Listing** | Job board with basic styling |
| **FK Team Member** | Team profile cards |
| **FK Membership CTA** | Membership call-to-action |
| **FK Resource Card** | Downloadable resource card |

## ⚙️ Configuration

Access the admin panel at **FounderKit → Settings** to configure:

- **Animation** – Enable/disable GSAP, select intensity (subtle/medium/dramatic)
- **Brand Colors** – Primary and secondary accent colors
- **Block Manager** – Enable/disable individual blocks site-wide

Go to **FounderKit → License** to activate your license key for premium features.

## 🔌 Addons

Four addons are planned for future release:

- **Forms Pro** – Advanced lead forms and funnel flows (premium)
- **LMS Pro** – Cohorts, certificates, drip content, analytics (premium)
- **Woo Pro** – Digital checkout enhancements and funnels (premium)
- **Starter Templates** – Fast-import templates for agencies (free)

## 🔧 Developer Reference

### Custom Post Types
- `aw_project` – Projects/portfolio items
- `aw_resource` – Resource downloads
- `aw_job` – Job listings

### Hooks (70+)
Blocks, asset loading, CPT registration, and more. See inline documentation.

### REST API
Enable via **FounderKit → Settings** → "Enable REST API" (off by default).

### Database Options
- `founderkit_settings` – Plugin settings
- `founderkit_license` – License data

## 🧪 Requirements

- WordPress 6.4+
- PHP 8.0+ (recommended: 8.1+)
- Modern browser with CSS Grid support

## 📄 License

GPL v2+ (c) 2025 AppsOrWebs Limited

## 🙏 Credits

Built for founders, by founders.
