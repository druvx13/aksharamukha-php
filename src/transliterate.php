<?PHP


// Pre-Correction : Textual Replacements made in Harvard Kyoto Encoded Text
// Post-Correction : Textual Replacements made in Unicode Indic Text

function transliterate($text,$source,$target)

{

    include __DIR__ . "/config/diCrunch_config-en.php";
    include __DIR__ . "/diCrunch/diCrunch_charsets.php";
    include __DIR__ . "/diCrunch/diCrunch_preprocess.php";

    $text = stripslashes($text);

    if (!empty($text)) {
        $text = str_replace($ch[$source], $ch['hk'], $text);
        include __DIR__ . "/diCrunch/diCrunch_Pre_Correction.php";
        $text = str_replace($ch['hk'], $ch[$target], $text);
    }

    include __DIR__ . "/diCrunch/diCrunch_postprocess.php";

    /* Script cruncher */

    if (in_array($source, $indic_scripts)) {
        include __DIR__ . "/diCrunch/scripts/diCrunch_{$source}.php";
        include __DIR__ . "/diCrunch/diCrunch_indic_source.php";
        include __DIR__ . "/diCrunch/diCrunch_Pre_Correction.php";
        $text = str_replace($ch['hk'], $ch[$target], $text);

    }

    if (in_array($target, $indic_scripts)) {
        include __DIR__ . "/diCrunch/scripts/diCrunch_{$target}.php";
        include __DIR__ . "/diCrunch/diCrunch_indic_target.php";

    }

    include __DIR__ . "/diCrunch/diCrunch_Post_Correction.php";

    return $text;

}
