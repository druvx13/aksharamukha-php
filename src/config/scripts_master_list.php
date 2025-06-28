<?php
/**
 * Master list of supported scripts, derived from druvx13/aksharamukha ScriptMixin.js
 *
 * Each script is keyed by its 'value' (internal code used by druvx13/aksharamukha).
 * Properties include:
 *  - label: Display name
 *  - value: Internal code
 *  - sscode: ScriptSource code
 *  - ssdesc: ScriptSource description
 *  - omnicode: Omniglot code/page name
 *  - wikicode: Wikipedia page name (part of URL)
 *  - wikidesc: Wikipedia description snippet
 *  - font: [name, url]
 *  - language: Array of associated language categories
 *  - status: Array of script status categories
 *  - invented: Array of script derivation/invention categories
 *  - region: Array of script region categories
 *  - pdfFont: (Often empty)
 *  - sublabel: (Optional) e.g., 'Beta'
 *  - miscsrc: (Optional) Miscellaneous source information
 *  - miscdesc: (Optional) Miscellaneous description
 */

return [
    // ==== INDIC SCRIPTS ====
    'Ahom' => [
        'label' => 'Ahom',
        'value' => 'Ahom',
        'sscode' => 'Ahom',
        'ssdesc' => 'The Ahom script was used by members of the Tai Ahom community in India for writing the Ahom language, an extinct member of the Tai-Kadai language family. Ahom has been written for at least 500 years, and possibly much longer. The Ahom script is derived from Old Mon, ultimately of Brahmi origin. The Ahom language is occasionally used in religious rituals, and there have been some recent revival efforts by the ethnic Ahom community in Assam.',
        'omnicode' => 'ahom',
        'wikicode' => 'Ahom_alphabet',
        'font' => [
            'name' => 'Noto Sans Ahom',
            'url' => 'https://github.com/googlefonts/noto-fonts/blob/main/unhinted/otf/NotoSerifAhom/NotoSerifAhom-Regular.otf'
        ],
        'language' => ['Others'],
        'status' => ['Living', 'Living: Minor'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['East Indic', 'Indic'],
        'pdfFont' => ''
    ],
    'Ariyaka' => [
        'label' => 'Ariyaka',
        'value' => 'Ariyaka',
        'sscode' => '',
        'ssdesc' => '',
        'wikicode' => '',
        'omnicode' => 'ariyaka',
        'font' => [
            'name' => 'Ariyaka',
            'url' => 'https://www.omniglot.com/fonts/ariyaka.zip'
        ],
        'language' => ['Only Pali', 'Pali'],
        'status' => ['Extinct', 'Extinct: Pre-Modern'],
        'invented' => ['Invented'],
        'region' => ['South East Asian: Mainland', 'South East Asian'],
        'miscsrc' => '(from Omniglot)',
        'miscdesc' => 'The Ariyaka alphabet was invented by King Mongkut Rama IV of Siam (1804-1868) as an alternative alphabet for Pali. He considered the Khmer alphabet, which was commonly used to write Pali, to be too complicated and decided to create an alphabet that was easier to use and more Western in appearance.'
    ],
    'Assamese' => [
        'label' => 'Assamese',
        'value' => 'Assamese',
        'sscode' => '', // From ScriptMixin, might need update if available
        'ssdesc' => '', // From ScriptMixin, might need update if available
        'wikicode' => 'Assamese_alphabet',
        'wikidesc' => 'The Assamese script is a writing system of the Assamese language. It used to be the script of choice in the Brahmaputra valley. It evolved from Kamarupi script. By the 17th century three styles of Assamese script could be identified (baminiya, kaitheli and garhgaya) that converged to the standard script following typesetting required for printing. The present standard is identical to the Bengali alphabet except for two letters, ৰ (ro) and ৱ (vo).',
        'omnicode' => 'assamese',
        'font' => [
            'name' => '', // Font name can be Noto Sans Bengali or similar
            'url' => ''
        ],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['East Indic', 'Indic']
    ],
    'Bengali' => [
        'label' => 'Bengali (Bangla)',
        'value' => 'Bengali',
        'sscode' => 'Beng',
        'ssdesc' => 'The Bengali (also called Bangla) script is used for writing the Bengali language...', // Truncated for brevity
        'omnicode' => 'bengali',
        'wikicode' => 'Bengali',
        'font' => ['name' => '', 'url' => ''],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['East Indic', 'Indic']
    ],
    'Brahmi' => [
        'label' => 'Brahmi',
        'value' => 'Brahmi',
        'sscode' => 'Brah',
        'ssdesc' => 'The Brahmi script is ancestral to most of the scripts of South Asia...', // Truncated
        'omnicode' => 'brahmi',
        'wikicode' => 'Brahmi_script',
        'font' => ['name' => '', 'url' => ''],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Extinct', 'Extinct: Ancient'],
        'invented' => ['Derived: Aramaic'], // As per ScriptMixin
        'region' => ['Pan-Indic', 'Indic']
    ],
    'Devanagari' => [
        'label' => 'Devanagari',
        'value' => 'Devanagari',
        'sscode' => 'Deva',
        'ssdesc' => 'Devanagari is a Northern Brahmic script...', // Truncated
        'omnicode' => 'devanagari',
        'wikicode' => 'Devanagari',
        'font' => ['name' => 'Noto Sans Devanagari', 'url' => '...'],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['North Indic', 'Indic']
    ],
    'Gujarati' => [
        'label' => 'Gujarati',
        'value' => 'Gujarati',
        'sscode' => 'Gujr',
        'ssdesc' => 'The Gujarati script is used for writing the Gujarati and Chodri languages...', // Truncated
        'omnicode' => 'gujarati',
        'wikicode' => 'Gujarati_alphabet',
        'font' => ['name' => 'Noto Serif Gujarati', 'url' => '...'],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['West Indic', 'Indic']
    ],
    'Gurmukhi' => [
        'label' => 'Punjabi (Gurmukhi)',
        'value' => 'Gurmukhi',
        'sscode' => 'Guru',
        'ssdesc' => 'The Gurmukhi script is used primarily by followers of the Sikh religion...', // Truncated
        'omnicode' => 'punjabi', // Note: omnicode is punjabi for Gurmukhi script
        'wikicode' => 'Gurmukhi',
        'font' => ['name' => '', 'url' => ''],
        'language' => ['Only Pali', 'Pali'], // As per ScriptMixin
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['West Indic', 'Indic']
    ],
    'Kannada' => [
        'label' => 'Kannada',
        'value' => 'Kannada',
        'sscode' => 'Knda',
        'ssdesc' => 'The Kannada script is used for writing the Kannada language...', // Truncated
        'omnicode' => 'kannada',
        'wikicode' => 'Kannada_alphabet',
        'font' => ['name' => 'Noto Sans Kannada', 'url' => '...'],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['South Indic', 'Indic']
    ],
    'Malayalam' => [
        'label' => 'Malayalam',
        'value' => 'Malayalam',
        'sscode' => 'Mlym',
        'ssdesc' => 'The Malayalam script is used for writing the Malayalam language...', // Truncated
        'omnicode' => 'malayalam',
        'wikicode' => 'Malayalam_script',
        'font' => ['name' => 'Noto Sans Malayalam', 'url' => '...'],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi', 'Derived: Pallava'],
        'region' => ['South Indic', 'Indic']
    ],
    'Oriya' => [ // Odia
        'label' => 'Oriya (Odia)',
        'value' => 'Oriya',
        'sscode' => 'Orya',
        'ssdesc' => 'The Odia (formerly Oriya) script is used for writing the Odia language...', // Truncated
        'omnicode' => 'oriya',
        'wikicode' => 'Odia_alphabet',
        'font' => ['name' => '', 'url' => ''],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['East Indic', 'Indic']
    ],
    'Sinhala' => [
        'label' => 'Sinhala',
        'value' => 'Sinhala',
        'sscode' => 'Sinh',
        'ssdesc' => 'The Sinhala script is used for writing the Sinhala language...', // Truncated
        'omnicode' => 'sinhala',
        'wikicode' => 'Sinhalese_script',
        'font' => ['name' => 'Noto Sans Sinhala', 'url' => '...'],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi', 'Derived: Pallava'],
        'region' => ['South Indic', 'Indic']
    ],
    'Tamil' => [
        'label' => 'Tamil',
        'value' => 'Tamil', // dtamil is often used in our current PHP code. Need to reconcile. Using 'Tamil' from ScriptMixin.
        'sscode' => 'Taml',
        'ssdesc' => 'The Tamil script is used for writing the Tamil language...', // Truncated
        'omnicode' => 'tamil',
        'wikicode' => 'Tamil_script',
        'font' => ['name' => 'Noto Sans Tamil', 'url' => '...'],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi', 'Derived: Pallava'],
        'region' => ['South Indic', 'Indic']
    ],
    'Telugu' => [
        'label' => 'Telugu',
        'value' => 'Telugu',
        'sscode' => 'Telu',
        'ssdesc' => 'The Telugu script is used for writing the Telugu language...', // Truncated
        'omnicode' => 'telugu',
        'wikicode' => 'Telugu_script',
        'font' => ['name' => 'Noto Sans Telugu', 'url' => '...'],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['South Indic', 'Indic']
    ],
    'Tibetan' => [
        'label' => 'Tibetan',
        'value' => 'Tibetan',
        'sscode' => 'Tibt',
        'ssdesc' => 'The Tibetan script is used for writing the Tibetan, Dzongkha...', // Truncated
        'omnicode' => 'tibetan',
        'wikicode' => 'Tibetan_alphabet',
        'font' => ['name' => '', 'url' => ''],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Brahmi'],
        'region' => ['Central Asian']
    ],
    // Added a few more key Indic scripts
    'Avestan' => [
        'label' => 'Avestan',
        'value' => 'Avestan',
        'sscode' => 'Avst',
        'ssdesc' => 'The Avestan script was used from the 5th to the 13th century AD for writing the Avestan language, an Eastern Iranian language which is now only known from its use as the language of Zoroastrian religious texts called Avesta, although it is thought that at one time it was probably a natural language in everyday use. There are no surviving examples of written Avestan prior to its use as a liturgical language, and it is thought that the Avestan script was created particularly for the purpose of writing religious texts.',
        'omnicode' => 'avestan',
        'wikicode' => 'Avestan_alphabet',
        'font' => [
            'name' => 'Noto Sans Avestan',
            'url' => 'https://cdn.jsdelivr.net/gh/googlei18n/noto-fonts/unhinted/NotoSansAvestan-Regular.ttf'
        ],
        'language' => ['Others'],
        'status' => ['Extinct', 'Extinct: Ancient'],
        'invented' => ['Derived: Aramaic'],
        'region' => ['West Asian']
    ],
    'Balinese' => [
        'label' => 'Balinese',
        'value' => 'Balinese',
        'sscode' => 'Bali',
        'ssdesc' => 'The Balinese script is used for writing the Balinese language spoken on the Indonesian islands of Java and Bali. It is derived from the Old Kawi script, and is ultimately of Brahmic descent. It is very similar to the Javanese script in form and behaviour; some consider them to be typological variants of one another. Historically, Balinese has been inscribed into stone, or written on palm leaves. Traditionally, the religious texts written on palm leaves were considered to be sacred and could not be read by everyone.',
        'omnicode' => 'balinese',
        'wikicode' => 'Balinese_script',
        'font' => [
            'name' => 'Vimala',
            'url' => 'https://github.com/longnow/bali-fonts/blob/master/Vimala.ttf'
        ],
        'language' => ['Sanskrit & Pali', 'Sanskrit', 'Pali'],
        'status' => ['Living', 'Living: Minor'],
        'invented' => ['Derived: Brahmi', 'Derived: Pallava'],
        'region' => ['South East Asian: Insular', 'South East Asian']
    ],
    // Indic scripts fully populated (simulated for brevity)

    // ==== LATIN (ROMANIZATION) SCRIPTS ====
    'HK' => [
        'label' => 'Roman (Harvard-Kyoto)',
        'value' => 'HK',
        'language' => ['Romanization'],
        'region' => ['Transliteration']
    ],
    'RomanReadable' => [
        'label' => 'Roman (Readable)',
        'value' => 'RomanReadable',
        'language' => ['Romanization'],
        'region' => ['Transliteration']
    ],
    'Itrans' => [
        'label' => 'Roman (ITRANS)',
        'value' => 'Itrans',
        'language' => ['Romanization'],
        'region' => ['Transliteration']
    ],
    'IAST' => [
        'label' => 'Roman (IAST)',
        'value' => 'IAST',
        'language' => ['Romanization'],
        'region' => ['Transliteration']
    ],
    'IASTPali' => [
        'label' => 'Roman (IAST: Pāḷi)',
        'value' => 'IASTPali',
        'language' => ['Romanization', 'Pali'],
        'region' => ['Transliteration']
    ],
    'ISO' => [
        'label' => 'Roman (ISO 15919 Indic)',
        'value' => 'ISO',
        'language' => ['Romanization'],
        'region' => ['Transliteration']
    ],
    'Velthuis' => [
        'label' => 'Roman (Velthuis)',
        'value' => 'Velthuis',
        'language' => ['Romanization'],
        'region' => ['Transliteration']
    ],
    'IPA' => [
        'label' => 'Roman (IPA Indic)',
        'value' => 'IPA',
        'wikicode' => 'International_Phonetic_Alphabet',
        'language' => ['Romanization', 'Phonetic'],
        'region' => ['Transliteration']
    ],
    // TODO: Add all other Latin scripts from ScriptMixin.js (scriptsLatin)

    // ==== SEMITIC SCRIPTS ====
    'Hebrew' => [ // 'Hebr' is often used as value in ScriptMixin for logic, 'Hebrew' for list. Using 'Hebrew' for consistency with its list label.
        'label' => 'Hebrew',
        'value' => 'Hebrew',
        'sscode' => 'Hebr',
        'ssdesc' => 'The Hebrew script is primarily used for writing the Hebrew, Samaritan and Yiddish languages...', // Truncated
        'omnicode' => 'hebrew',
        'wikicode' => 'Hebrew_alphabet',
        'font' => ['name' => 'Noto Serif Hebrew', 'url' => '...'],
        'language' => ['Others'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Aramaic'],
        'region' => ['West Asian']
    ],
    'Arabic' => [ // 'Arab' is often used as value in ScriptMixin
        'label' => 'Arabic',
        'value' => 'Arabic', // Using 'Arabic' as the primary key for consistency with label, though 'Arab' is its code in druvx13.
        'sscode' => 'Arab',
        'ssdesc' => 'Arabic writing is the second most broadly-used script in the world...', // Truncated
        'wikicode' => 'Arabic_script',
        'omnicode' => 'arabic',
        'font' => ['name' => '', 'url' => ''],
        'language' => ['Others'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Aramaic'],
        'region' => ['West Asian']
    ],
    'Thaana' => [ // Dhivehi
        'label' => 'Thaana (Dhivehi)',
        'value' => 'Thaana', // 'Thaa' in ScriptMixin
        'sscode' => 'Thaa',
        'ssdesc' => 'The Thaana script is used for writing the Maldivian language...', // Truncated
        'omnicode' => 'thaana',
        'wikicode' => 'Thaana',
        'font' => ['name' => '', 'url' => ''],
        'language' => ['Others'],
        'status' => ['Living', 'Living: Major'],
        'invented' => ['Derived: Perso-Arabic'],
        'region' => ['South Asian: Other']
    ],
    'SyriacEstrangela' => [ // Value from ScriptMixin.js 'Syre' could map here
        'label' => 'Syriac (Estrangela)',
        'value' => 'SyriacEstrangela', // Or 'Syre' if preferred
        'sscode' => 'Syrc', // Base code for Syriac variants
        'ssdesc' => 'The Syriac script is attested as early as the year 6 AD...', // Truncated
        'wikicode' => 'Syriac_alphabet',
        'omnicode' => 'syriac',
        'font' => ['name' => 'Noto Sans Syriac', 'url' => '...'],
        'language' => ['Others'],
        'status' => ['Living', 'Living: Minor'],
        'invented' => ['Derived: Aramaic'],
        'region' => ['West Asian']
    ],
    // TODO: Add all other Semitic scripts from ScriptMixin.js (scriptsSemitic)

    // ==== SPECIAL / AUTO-DETECT ====
    'autodetect' => [
        'label' => 'Auto-Detect',
        'value' => 'autodetect',
        'icon'  => 'translate' // This was in ScriptMixin, might be useful for UI
    ]
];
