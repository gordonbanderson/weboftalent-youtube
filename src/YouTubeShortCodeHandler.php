<?php

class YouTubeShortCodeHandler {

	// taken from http://www.ssbits.com/tutorials/2010/2-4-using-short-codes-to-embed-a-youtube-video/ and adapted for SS3
	public static function parse_youtube($arguments, $caption = null, $parser = null, $tagName) {
		// first things first, if we dont have a video ID, then we don't need to
		// go any further
		if (empty($arguments['id'])) {
			return;
		}

		$customise = array();

		// YouTube video id
		$customise['YouTubeID'] = $arguments['id'];

		//play the video on page load
		$set = isset($arguments['autoplay']);
		$customise['AutoPlay'] = $set ? true : false;

		//set the caption
		$customise['Caption'] = $caption ? Convert::raw2xml($caption) : false;

		//set dimensions
		$widthSet = isset($arguments['width']);
		$heightSet = isset($arguments['height']);
		$customise['Width'] = $widthSet ? $arguments['width'] : 560;
		$customise['Height'] = $heightSet ? $arguments['height'] : 315;

		//get our YouTube template
		$template = new SSViewer('YouTube');

		//return the customised template
		return $template->process(new ArrayData($customise));
	}
}
