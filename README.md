# Tin Apothecary Restock Mode

A lightweight maintenance mode plugin designed specifically for The Tin Apothecary to manage limited-edition "scent drops." This plugin allows administrators to hide the storefront during inventory updates while providing a branded botanical experience for visitors.

## Installation

1.  **Download/Prepare the Plugin**: Ensure all plugin files are contained within a folder named `tin-apothecary-restock`.
2.  **Upload to WordPress**:
    * Log in to your WordPress Dashboard.
    * Navigate to **Plugins > Add New > Upload Plugin**.
    * Select the `tin-apothecary-restock.zip` file and click **Install Now**.
    * Alternatively, upload the folder via FTP to the `/wp-content/plugins/` directory.
3.  **Activate**: Click the **Activate Plugin** button.

## How to Use the Toggle

1.  **Access Settings**: In the WordPress sidebar, go to **Settings > Restock Mode**.
2.  **Enable/Disable**:
    * Check the **Enable Restock Mode** box to turn on the maintenance page.
    * Uncheck it to restore public access to the storefront.
3.  **Customize Content**:
    * **Headline**: Enter a greeting (e.g., "Preparing the Apothecary").
    * **Short Message**: Provide details about the upcoming drop.
    * **Return Time**: Specify exactly when the shop will reopen (e.g., "Coming back at 6 PM EST").
4.  **Save Changes**: Click **Save Changes** to apply the settings.

*Note: Logged-in Administrators will always see the live storefront, even when Restock Mode is enabled, allowing for stock verification and layout checks.*

## How to Customize CSS

The splash page is styled with a "botanical apothecary" aesthetic (deep greens and cream backgrounds). If you need to further adjust the visuals:

1.  Navigate to the plugin folder: `/wp-content/plugins/tin-apothecary-restock/assets/`.
2.  Open `restock-style.css` in a text editor.
3.  **To change colors**: Modify the `background-color` (currently cream `#f5f2ed`) or the `color` (currently deep green `#1a3024`).
4.  **To change fonts**: The plugin loads *Playfair Display* and *Source Sans Pro* via Google Fonts. You can update the `font-family` declarations in this CSS file to match new brand guidelines.
5.  **Save and Refresh**: Save the file and refresh the splash page (as a non-logged-in user) to see the changes.

## Performance & SEO
When active, the plugin sends a **503 "Service Unavailable"** header. This informs search engines that the storefront is only temporarily down for maintenance, protecting your SEO rankings during restocks.
