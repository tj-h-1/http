<?php 

// Capitalizes First Word Of Every Sentence
function Title($title)
    {
    $smallwordsarray = array(
    'of','a','the','and','an','or','nor','but','is','if','then','else','when',
    'at','from','by','on','off','for','in','out','over','to','into','with'
    );

    $words = explode(' ', $title);

    foreach ($words as $key => $word)
    {
    if ($key == 0 or !in_array($word, $smallwordsarray))
    $words[$key] = ucwords($word);
    }

    $newtitle = implode(' ', $words);

    return $newtitle;
    }

function LimitCharacters($text, $char_limit, $pad = '...') {
    if (mb_strlen($text) > $char_limit) {
        return mb_substr($text, 0, $char_limit) . $pad;
    }
    return $text;
}
?>