<?php

class GuguruSearch {
    public static function onOutputPageParserOutput( OutputPage $out, ParserOutput $parserOutput ) {
        global $wgGoogleSearchOptions;

        if (!$wgGoogleSearchOptions == null) {
            $opts = $wgGoogleSearchOptions;

            if (array_key_exists("googlebot", $opts) and $opts["googlebot"]) {
                $out->addMeta("googlebot", $opts["googlebot"]);
            }
            if (array_key_exists("sitesearch", $opts) and !$opts["sitesearch"]) {
                $out->addMeta("google", "nositelinkssearchbox");
            }
            if (array_key_exists("translate", $opts) and !$opts["translate"]) {
                $out->addMeta("google", "notranslate");
            }
            if (array_key_exists("verify", $opts) and $opts["verify"]) {
                $out->addMeta("google-site-verification", $opts["google-site-verification"]);
            }
            if (array_key_exists("unsafe", $opts) and $opts["unsafe"]) {
                $out->addMeta("rating", "adult");
            }
        }
        return true;
    }
}
