# Aksharamukha - Universal Script Converter

Aksharamukha is a versatile and powerful web-based application for transliterating text between a wide array of scripts, with a primary focus on Indic and other Asian languages. It allows users to convert text snippets, entire uploaded documents, and even live websites from one script to another.

The core transliteration engine is based on the principles of the diCrunch system, adapted and expanded by Vinodh Rajan.

## Features

*   **Multi-Script Transliteration:** Supports a comprehensive range of scripts for conversion.
*   **Text Input:** Directly type or paste text into the interface for conversion.
*   **File Upload:** Upload `.txt` files for bulk transliteration.
*   **Webpage Transliteration:** Convert entire websites on-the-fly by providing a URL.
*   **API Access:** Provides a basic API for programmatic transliteration.
*   **Customizable Options:** Offers various script-specific options to tailor the transliteration output (e.g., handling of schwa, specific character variants, orthography styles).
*   **Font Customization:** Allows users to specify fonts for source and target scripts in the interface.

## Supported Scripts

Aksharamukha supports a vast number of scripts. Some of the prominent ones include:

*   Asokan Brahmi
*   Assamese
*   Bengali
*   Burmese
*   Devanagari (for Hindi, Sanskrit, Marathi, etc.)
*   Grantha
*   Gujarati
*   Kannada
*   Khmer (Cambodian)
*   Malayalam
*   Oriya
*   Punjabi (Gurmukhi)
*   Saurashtra
*   Sinhala
*   Tamil (Standard and Hybrid Tamil-Grantha)
*   Telugu
*   Thai
*   Tibetan
*   Urdu
*   And various Romanization schemes like Harvard-Kyoto, IAST, ISO 15919, ITRANS, Velthuis.

For a complete list, please refer to the source and target script dropdown menus within the application.
(Note: Script support is currently being expanded by integrating data from alternative Aksharamukha implementations, aiming for broader coverage.)

## Original Authorship and License

*   **Original Author:** Vinodh Rajan (virtualvinodh.com)
*   **Original Codebase:** The code was originally hosted at [Launchpad](https://launchpad.net/aksharamukha).
*   **License:** This project is licensed under the GNU General Public License v3.0 (GPLv3). See the [LICENSE](LICENSE) file for more details. The diCrunch engine, on which Aksharamukha is based, was developed by Madhavananda Das & Gaudiya Kutir, Inc.

## Repository Structure

This repository has been reorganized for clarity and maintainability:

*   `public/`: Web server's document root. Contains all publicly accessible files like `index.php`, CSS, and JavaScript.
*   `src/`: Contains the core PHP application logic, including the transliteration engine (`diCrunch/`), configuration (`config/`), and helper scripts.
*   `templates/`: (Placeholder) Intended for HTML template partials if the views are separated in the future.
*   `tests/`: (Placeholder) For unit and integration tests.
*   `LICENSE`: Contains the GPLv3 license text.
*   `README.md`: This file.
*   `CpanelSETUP.md`: Instructions for deploying the application on a cPanel hosting environment.
*   `Makefile`: Original Makefile (its current utility in this reorganized structure may need review).

## Setup and Installation (Local Development)

To set up Aksharamukha on your local machine for development or personal use:

1.  **Prerequisites:**
    *   A web server (e.g., Apache, Nginx) with PHP support. PHP 5.x or higher is recommended (the original code seems to be from that era, though it may work on newer versions).
    *   PHP `curl` extension (for webpage transliteration and API functionality).
    *   Git (for cloning the repository).

2.  **Clone the Repository:**
    ```bash
    git clone <repository_url>
    cd <repository_directory>
    ```

3.  **Configure Your Web Server:**
    *   Set the web server's **document root** (or "webroot") to the `public/` directory of the cloned repository.
        *   **Apache:** You might need to edit your `httpd.conf` or a virtual host configuration file. Example for a Virtual Host:
            ```apache
            <VirtualHost *:80>
                ServerName aksharamukha.local
                DocumentRoot "/path/to/your/aksharamukha/public"
                <Directory "/path/to/your/aksharamukha/public">
                    AllowOverride All
                    Require all granted
                    DirectoryIndex index.php
                </Directory>
            </VirtualHost>
            ```
        *   **Nginx:** Example server block:
            ```nginx
            server {
                listen 80;
                server_name aksharamukha.local;
                root /path/to/your/aksharamukha/public;
                index index.php;

                location / {
                    try_files $uri $uri/ /index.php?$query_string;
                }

                location ~ \.php$ {
                    include snippets/fastcgi-php.conf;
                    fastcgi_pass unix:/var/run/php/phpX.Y-fpm.sock; # Adjust to your PHP-FPM version
                }
            }
            ```
    *   Ensure your web server is configured to process `.php` files.

4.  **Permissions (if necessary):**
    *   Ensure the web server has read access to the project files.

5.  **Access Aksharamukha:**
    *   Open your web browser and navigate to the URL you configured (e.g., `http://localhost/`, `http://aksharamukha.local/`). This should load `public/index.php`.

6.  **Configuration (Optional):**
    *   The main application URL used for some internal links (especially by the API client and web transliteration features) is defined in `src/config/app_config.php`.
        ```php
        $config = array(
            'url' => "http://your_local_domain/", // e.g., http://aksharamukha.local/
        );
        ```
    *   For basic local use of `public/index.php`, changing this might not be necessary. However, for full functionality of API and website transliteration through the provided forms, ensure this URL correctly points to your setup.

## Usage

*   **Main Transliteration Interface:**
    *   Access the application through your configured URL (e.g., `http://aksharamukha.local/`).
    *   Select the **Source** and **Target** scripts from the dropdown menus.
    *   Type or paste your text into the "Source" text area.
    *   Choose any script-specific options displayed.
    *   Click "Convert." The transliterated text will appear in the "Target" text area.
    *   You can also upload a `.txt` file for conversion.

*   **Webpage Transliteration:**
    *   Navigate to the "Convert entire Website" link usually found on the main interface, or directly access `aksharamukha-web.php` (e.g., `http://aksharamukha.local/aksharamukha-web.php`).
    *   Enter the URL of the website you wish to transliterate.
    *   Select Source, Target scripts, and desired options.
    *   Click "Convert Website." The transliterated webpage will be displayed. (Note: Formatting of complex websites may vary).

*   **API Access:**
    *   Aksharamukha provides a simple API endpoint at `public/aksharamukha-api.php`.
    *   It accepts `GET` or `POST` requests with the following parameters:
        *   `src`: Source script code (e.g., `dtamil`, `devanagari`).
        *   `tgt`: Target script code.
        *   `text`: The text to transliterate.
        *   `natural` (optional): `true` or `false` to enable/disable script-specific nativization rules.
        *   Other script-specific options can also be passed as parameters.
    *   The API returns an XML response.
    *   An example client `public/apiclient.php` demonstrates its usage. The API internally calls `public/apioutput.php` which performs the transliteration and formats the XML.

## Deployment on cPanel

For instructions on deploying Aksharamukha to a cPanel hosting environment, please refer to the [CpanelSETUP.md](CpanelSETUP.md) file.

## Contributing

This repository is primarily a reorganized version of the original Aksharamukha codebase. While contributions are not actively solicited at this moment, if you have suggestions or find bugs related to the new structure, feel free to open an issue. For issues related to the core transliteration logic, referring to the original author or project might be more appropriate.

## License

This project is licensed under the **GNU General Public License v3.0**.
A copy of the license is available in the [LICENSE](LICENSE) file in this repository and can also be found online at [https://www.gnu.org/licenses/gpl-3.0.html](https://www.gnu.org/licenses/gpl-3.0.html).
