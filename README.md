# wn-listfiles-plugin

**A WinterCMS plugin that displays a list of files from the Media Library.**

ListFiles allows you to drop a component on any CMS Page or Partial and automatically display a list of all files in a given Media Library folder. Each item is a clickable link showing the filename and file size.

---

## Credits

This plugin is published by **[Nia Interactive](https://niainteractive.com)**.

Originally developed by [Hardik Satasiya](https://www.fiverr.com/hardik_satasiya) for OctoberCMS. Ported to WinterCMS by Nia Interactive.

---

## Installation

```bash
composer require niainteractive/wn-listfiles-plugin
```

Then run:

```bash
php artisan winter:up
```

---

## Usage

1. Install the plugin — there is nothing in Settings or Backend navigation. ListFiles exists solely as a component.
2. Create or open a CMS Page or Partial.
3. Add the **ListFiles** component.
4. Set the **Folder Path** property to the Media Library directory you want to display (e.g., `/board-meetings/2024/november`).
5. Add as many ListFiles components as needed — one per folder.

---

## Customization

The default template renders a simple `<ul>` list. To customize:

1. Copy `plugins/niainteractive/listfiles/components/listfiles/default.htm`
2. Paste into your theme at `themes/your-theme/partials/listfiles/default.htm`
3. Edit as needed

---

## License

MIT — see [LICENSE](LICENSE).
