#YouTube ShortCode Handler
[![Build Status](https://travis-ci.org/gordonbanderson/weboftalent-youtube.svg?branch=3.1)](https://travis-ci.org/gordonbanderson/weboftalent-youtube)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/badges/quality-score.png?b=3.1)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/?branch=3.1)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/badges/coverage.png?b=3.1)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/?branch=3.1)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/badges/build.png?b=3.1)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-youtube/build-status/3.1)
[![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-youtube/coverage.svg?branch=3.1)](https://codecov.io/github/gordonbanderson/weboftalent-youtube?branch=3.1)

[![Latest Stable Version](https://poser.pugx.org/weboftalent/silverstripe-shortcode-youtube/version)](https://packagist.org/packages/weboftalent/silverstripe-shortcode-youtube)
[![Latest Unstable Version](https://poser.pugx.org/weboftalent/silverstripe-shortcode-youtube/v/unstable)](//packagist.org/packages/weboftalent/silverstripe-shortcode-youtube)
[![Total Downloads](https://poser.pugx.org/weboftalent/silverstripe-shortcode-youtube/downloads)](https://packagist.org/packages/weboftalent/silverstripe-shortcode-youtube)
[![License](https://poser.pugx.org/weboftalent/silverstripe-shortcode-youtube/license)](https://packagist.org/packages/weboftalent/silverstripe-shortcode-youtube)
[![Monthly Downloads](https://poser.pugx.org/weboftalent/silverstripe-shortcode-youtube/d/monthly)](https://packagist.org/packages/weboftalent/silverstripe-shortcode-youtube)
[![Daily Downloads](https://poser.pugx.org/weboftalent/silverstripe-shortcode-youtube/d/daily)](https://packagist.org/packages/weboftalent/silverstripe-shortcode-youtube)

[![Dependency Status](https://www.versioneye.com/php/weboftalent:silverstripe-shortcode-youtube/badge.svg)](https://www.versioneye.com/php/weboftalent:silverstripe-shortcode-youtube)
[![Reference Status](https://www.versioneye.com/php/weboftalent:silverstripe-shortcode-youtube/reference_badge.svg?style=flat)](https://www.versioneye.com/php/weboftalent:silverstripe-shortcode-youtube/references)

![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-youtube/branch.svg?branch=3.1)
This module allows YouTube videos to be entered as short codes.  It is based on
the SSBits tutorial
http://www.ssbits.com/tutorials/2010/2-4-using-short-codes-to-embed-a-youtube-video/
and adpated to work with Silverstripe 3.

##Functionality
Videos can be entered into a page using the YouTube code (the v parameter in a YouTube URL).
```
[YouTube id='_yY3Gu8HbzE']
```
The following parameters are also permitted:
* _autoplay_ - set this value to anything, e.g. 1 or true, to enable autoplay on
the embedded video
- _caption_ - Text to display after an embedded video.  This can either be
passed as an attribute or as follows ```[YouTube id='_yY3Gu8HbzE']This is the
caption[/YouTube]```
- _height_ - set the height of the video
- _width_ - set the width of the video
