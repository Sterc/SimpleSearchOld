<?php

/**
 * The base MySQL class for SimpleSearch
 *
 * @package simplesearch
 */
require_once strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/simplesearchdriverbasic.class.php';
class SimpleSearchDriverBasic_mysql extends SimpleSearchDriverBasic {}