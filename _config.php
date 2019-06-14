<?php
use SilverStripe\View\Parsers\ShortcodeParser;
ShortcodeParser::get('default')->register('YouTube',array('WebOfTalent\ShortCode\YouTube\YouTubeShortCodeHandler','handle_shortcode'));
