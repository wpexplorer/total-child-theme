# Total Child Theme

A blank child theme for the [Total WordPress theme](https://totalwptheme.com/). Use it to add your own CSS, PHP snippets, and template overrides without touching the parent theme, so your changes survive Total updates.

## Requirements

- WordPress
- The Total theme installed (it does not need to be active — the child theme activates it as the parent)

## How to Download

**[Download total-child-theme.zip](https://github.com/wpexplorer/total-child-theme/releases/latest/download/total-child-theme.zip)**

> [!IMPORTANT]
> Use the link above, not the green **Code → Download ZIP** button. GitHub names that archive after the repository *and the branch*, so you end up with a theme folder called `total-child-theme-master`. It works, but the folder name becomes your theme's directory slug and it's confusing later. The release zip is already named correctly.

## Install

If Total is already installed and configured on this site, read [Switching an existing site](#switching-an-existing-site) before you activate anything.

**Via the dashboard**

1. Go to **Appearance → Themes → Add New → Upload Theme**.
2. Choose `total-child-theme.zip`.
3. Click **Install Now**, then **Activate**.

**Via FTP/SFTP**

1. Unzip the file.
2. Upload the `total-child-theme` folder to `wp-content/themes/`.
3. Activate it under **Appearance → Themes**.

## Switching an existing site

Installing the child theme is safe. **Activating** it on a site you've already set up is where things go sideways, so export your settings first.

WordPress stores Customizer settings per theme, keyed to the theme's folder name. A child theme has a different folder name, so WordPress treats it as a separate theme and hands it a blank set of settings. Your posts, pages, and media are never touched, but on activation you can lose:

- Customizer settings — colors, typography, layout, header and footer options
- Menu **location** assignments. The menus and their items are safe, they just come back unassigned
- Widget placement, in some cases

The fix is to export before you switch and import after:

1. Export your Total settings.
2. Activate the child theme.
3. Import the settings back in.
4. Check your menu locations under **Appearance → Menus → Manage Locations** and reassign anything that came back empty.

Do this on a staging site first if you have one, and take a database backup either way.

## Renaming it

Renaming isn't required, but it's a good idea if you're building a site for a client or you want the theme to show up with your own name in the dashboard.

There are two separate names, and they do different things:

**1. The folder name** — this is the theme's directory slug. It shows up in file paths and in the database.

**2. The `Theme Name` in `style.css`** — this is the label shown in **Appearance → Themes**.

To change both, unzip the download and rename the folder, then open `style.css` and edit the header:

```css
/*
Theme Name: My Site
Template: Total
*/
```

Re-zip the folder and upload as usual.

> [!WARNING]
> Rename the folder **before** you upload. WordPress stores the active theme by its folder name, so renaming a folder that's already active will deactivate the child theme and drop you back to the parent. If that happens, just re-activate it under **Appearance → Themes**.

Leave `Template: Total` exactly as-is — that's the parent theme's folder name, and changing it will break the child theme.

## What's inside

```
total-child-theme/
├── functions.php   # enqueues the parent stylesheet
└── style.css       # theme header + your custom CSS
```

That's it. Nothing else is needed for a working child theme.

## Customizing

**CSS** — add it to the bottom of `style.css`, below the header comment.

**PHP** — add it to `functions.php`. Unlike `style.css`, a child theme's `functions.php` does not replace the parent's, it loads in addition to it, so you don't need to copy anything over.

**Templates** — copy the file you want to change from the Total theme into the child theme at the same relative path, then edit your copy. WordPress will load the child version instead.

**Important**: don't rename the `total_child_enqueue_parent_theme_style()` function in `functions.php` unless you also update the `add_action()` call below it.

## A note on child themes and Total

Total includes a **Custom CSS** panel and a **Custom PHP/JS** section in the Theme Panel, plus a large set of hooks and filters. For small tweaks, those are often easier than a child theme and they carry over between themes. A child theme is the better choice when you're overriding templates or writing enough code that you want it in version control.

## Support

Bugs and questions about the Total theme itself go through the [Total support system](https://totalwptheme.com/). This repository is just the child theme starter — there's not much to it, but if something here is wrong or out of date, let me know through support and I'll get it fixed.

## License

GPLv2 or later, same as WordPress.
