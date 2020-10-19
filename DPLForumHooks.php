<?php

class DPLForumHooks {
	/**
	 * Register the <forum> tag with the parser.
	 *
	 * @param Parser $parser
	 * @return bool
	 */
	public static function onParserFirstCallInit( &$parser ) {
		$parser->setHook( 'forum', array( __CLASS__, 'parseForum' ) );
		$parser->setFunctionHook( 'forumlink', array( new DPLForum(), 'link' ) );
		return true;
	}

	/**
	 * Callback for onParserFirstCallInit() above.
	 */
	public static function parseForum( $input, $argv, $parser ) {
		$f = new DPLForum();
		return $f->parse( $input, $parser );
	}
}
