# Deploying Aksharamukha on cPanel Hosting

This guide provides step-by-step instructions for deploying the Aksharamukha Universal Script Converter on a typical cPanel web hosting environment.

## Prerequisites

*   A cPanel hosting account.
*   Access to cPanel's File Manager or an FTP client (e.g., FileZilla, Cyberduck).
*   The Aksharamukha project files (downloaded as a ZIP archive from the repository).
*   Basic familiarity with the cPanel interface.

## Deployment Steps

### Step 1: Prepare the Project Files

1.  **Download Aksharamukha:**
    *   Go to the Aksharamukha GitHub repository.
    *   Click on "Code" -> "Download ZIP".
2.  **Extract Files:**
    *   Once downloaded, extract the ZIP archive on your local computer. You should have a folder named something like `aksharamukha-main` containing all the project files and directories (`public/`, `src/`, `LICENSE`, `README.md`, etc.).

### Step 2: Upload Files to cPanel

You can use either cPanel's File Manager or an FTP client.

**Option A: Using cPanel File Manager**

1.  Log in to your cPanel account.
2.  Navigate to **Files > File Manager**.
3.  Decide where you want to install Aksharamukha:
    *   **For your primary domain (e.g., `yourdomain.com`):** Navigate into the `public_html` directory.
    *   **For a subdirectory (e.g., `yourdomain.com/aksharamukha`):** Navigate into `public_html` and create a new folder (e.g., `aksharamukha`). Then, enter this folder.
4.  Click **Upload** from the File Manager's top menu.
5.  **Important:** Instead of uploading individual files, it's easier to re-zip the *contents* of the `aksharamukha-main` folder (i.e., the `public`, `src` folders, etc., directly, not the `aksharamukha-main` folder itself) and upload this single ZIP file.
6.  After uploading the ZIP file, select it in File Manager and click **Extract** from the top menu. Ensure it extracts into the correct current directory.
    *   You should now see the `public/`, `src/`, and other project files directly in your chosen location (e.g., `public_html/` or `public_html/aksharamukha/`).

**Option B: Using an FTP Client (e.g., FileZilla)**

1.  Connect to your server using your FTP credentials (host, username, password, port 21).
2.  Navigate to the desired installation directory on the server:
    *   **For your primary domain:** `public_html/`
    *   **For a subdirectory:** `public_html/your_chosen_subdirectory/` (e.g., `public_html/aksharamukha/`)
3.  On your local machine, navigate into the extracted `aksharamukha-main` folder.
4.  Upload all files and folders from your local `aksharamukha-main` directory (i.e., `public/`, `src/`, `LICENSE`, etc.) to the chosen directory on the server. Ensure the directory structure is maintained.

### Step 3: Configure the Document Root

Aksharamukha is designed to serve content from its `public/` directory. This is the most crucial and potentially tricky step in cPanel.

**Recommended Method: Using a Subdomain**

This is the cleanest way if you're installing Aksharamukha not as your absolute primary website but as a tool under your domain (e.g., `transliterate.yourdomain.com`).

1.  In cPanel, go to **Domains > Subdomains**.
2.  Create a new subdomain:
    *   **Subdomain:** e.g., `transliterate` (this will become `transliterate.yourdomain.com`)
    *   **Domain:** Select your main domain.
    *   **Document Root:** This is key. By default, cPanel might suggest `public_html/transliterate`. **Change this** to point directly to the `public` folder of your Aksharamukha installation.
        *   If you uploaded Aksharamukha to `public_html/aksharamukha/`, the document root for the subdomain should be `public_html/aksharamukha/public`.
        *   If you uploaded Aksharamukha directly into `public_html/` (intending it for the subdomain), the document root would be `public_html/public`.
3.  Click **Create**.

Now, `http://transliterate.yourdomain.com` should correctly serve `index.php` from the `public/` directory.

**Alternative Method: Installation in a Subdirectory (e.g., `yourdomain.com/aksharamukha/`)**

If you don't use a subdomain and uploaded files to `public_html/aksharamukha/`, Aksharamukha will be accessible via `http://yourdomain.com/aksharamukha/public/`.
This is functional, but the `/public/` in the URL is less neat. Ensure the URL in `app_config.php` (Step 5) reflects this path.

**Advanced Method: Primary Domain with `.htaccess` Rewrite (if Aksharamukha is in `public_html`)**

If you installed Aksharamukha directly into `public_html` and want `yourdomain.com` to serve from `public_html/public/` without showing `/public/` in the URL, you need to place an `.htaccess` file in your main `public_html` directory (i.e., one level above Aksharamukha's `public/` directory).

Create or edit `/public_html/.htaccess` with the following (if it's empty):

```apache
RewriteEngine On
RewriteCond %{REQUEST_URI} !^/public/
RewriteRule ^(.*)$ /public/$1 [L,QSA]
```

If `/public_html/.htaccess` already has rules (e.g., from WordPress), this can be more complex and might require careful integration.

**Note:** The `.htaccess` method for the primary domain can sometimes be finicky on shared hosting or conflict with cPanel's own configurations. The subdomain method is generally more reliable for this specific project structure.

### Step 4: Check PHP Version and Extensions

1.  In cPanel, find **Software > Select PHP Version** or **MultiPHP Manager**.
2.  Ensure a compatible PHP version is selected for your domain/subdomain. Aksharamukha was originally developed in the PHP 5.x era. It might work on newer versions (e.g., 7.x), but testing is recommended. Start with PHP 5.6 or 7.0 if available, and test.
3.  In "Select PHP Version," you can also manage extensions. Make sure the `curl` extension is enabled (it usually is by default). This is needed for the "Convert Website" feature and API.

### Step 5: Configure `app_config.php`

The application needs to know its base URL for certain features like the API client and generating links during website transliteration.

1.  Using File Manager or FTP, navigate to `src/config/app_config.php` within your Aksharamukha installation.
2.  Edit the file. You will see:
    ```php
    <?php

    $config = array(
        'url' => "http://www.virtualvinodh.com/aksharamkh/", // Default
        //'url' => 'http://127.0.0.1:7692/',
    );
    ```
3.  Change the `'url'` value to the correct public URL where your Aksharamukha installation is accessible:
    *   If using the subdomain method (e.g., `transliterate.yourdomain.com`):
        `'url' => "http://transliterate.yourdomain.com/",`
    *   If installed in a subdirectory without a subdomain pointing to `public/` (e.g., accessed via `http://yourdomain.com/aksharamukha/public/`):
        `'url' => "http://yourdomain.com/aksharamukha/public/",`
    *   If installed in `public_html` and using the `.htaccess` rewrite for the primary domain:
        `'url' => "http://yourdomain.com/",`
    *   **Important:** Ensure the URL ends with a trailing slash `/`.

### Step 6: Test the Application

1.  Open your web browser and navigate to the URL where you've set up Aksharamukha (e.g., `http://transliterate.yourdomain.com` or `http://yourdomain.com/aksharamukha/public/`).
2.  You should see the Aksharamukha interface.
3.  Test basic transliteration between a few scripts.
4.  Test the "Convert entire Website" feature with a simple website URL to ensure `curl` and URL configurations are working.

## Troubleshooting

*   **500 Internal Server Error:**
    *   Often caused by syntax errors in `.htaccess` files. Double-check any `.htaccess` modifications.
    *   Could also be PHP errors. Check cPanel's **Metrics > Errors** log for details.
*   **404 Not Found Error:**
    *   Usually indicates the document root is not configured correctly, or files were uploaded to the wrong location. Verify your subdomain's document root or your `.htaccess` rules.
*   **PHP Errors Displayed / Blank Page:**
    *   Check the cPanel Error Log.
    *   For temporary debugging (NOT for live sites), you can try adding `display_errors = On` in a `php.ini` file or via "Select PHP Version" > "Options," but remember to turn it off.
*   **"Convert Website" or API features not working:**
    *   Most likely due to an incorrect URL in `src/config/app_config.php`.
    *   Ensure the `curl` PHP extension is enabled.
*   **File Permissions:**
    *   cPanel usually handles permissions well. If you suspect issues, standard permissions are `755` for directories and `644` for files.

This concludes the cPanel setup guide for Aksharamukha.
