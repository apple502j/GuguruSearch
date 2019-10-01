<?php

class GuguruSearch {
    public static function onOutputPageParserOutput( OutputPage &$out, ParserOutput $parserOutput ) {
        global $wgGoogleSearchOptions;

        if (!$wgGoogleSearchOptions == null) {
            $opts = $wgGoogleSearchOptions;

            if ($opts["googlebot"]) {
                $out->addMeta("googlebot", $opts["googlebot"]);
            }
            if (!$opts["sitesearch"]) {
                $out->addMeta("google", "nositelinkssearchbox");
            }
            if (!$opts["translate"]) {
                $out->addMeta("google", "notranslate");
            }
            if ($opts["verify"]) {
                $out->addMeta("google-site-verification", $opts["google-site-verification"]);
            }
            if ($opts["unsafe"]) {
                $out->addMeta("rating", "adult");
            }
        }
        return true;
    }
}
