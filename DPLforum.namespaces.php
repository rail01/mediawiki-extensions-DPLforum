<?php
/**
 * Translations of the Forum namespace.
 *
 * @file
 */

$namespaceNames = array();

// For wikis where the DPLforum extension is not installed.
if( !defined( 'NS_FORUM' ) ) {
	define( 'NS_FORUM', 110 );
}

if( !defined( 'NS_FORUM_TALK' ) ) {
	define( 'NS_FORUM_TALK', 111 );
}

/** English */
$namespaceNames['en'] = array(
	NS_FORUM => 'Forum',
	NS_FORUM_TALK => 'Forum_talk',
);

$namespaceNames['no'] = array(
	NS_FORUM => 'Forum',
	NS_FORUM_TALK => 'Forumdiskusjon',
);

$namespaceNames['es'] = array(
	NS_FORUM => 'Foro',
	NS_FORUM_TALK => 'Foro_Discusión',
);

/** Finnish (Suomi) */
$namespaceNames['fi'] = array(
	NS_FORUM => 'Foorumi',
	NS_FORUM_TALK => 'Keskustelu_foorumista',
);

$namespaceNames['fa'] = array(
	NS_FORUM => 'فوروم',
	NS_FORUM_TALK => 'بحث_فوروم',
);

$namespaceNames['ja'] = array(
	NS_FORUM => 'フォーラム',
	NS_FORUM_TALK => 'フォーラム・トーク',
);

$namespaceNames['ko'] = array(
	NS_FORUM => '포럼',
	NS_FORUM_TALK => '포럼토론',
);

/** Polish (polski) */
$namespaceNames['pl'] = array(
	NS_FORUM => 'Forum',
	NS_FORUM_TALK => 'Dyskusja_forum',
);

$namespaceNames['ru'] = array(
	NS_FORUM => 'Форум',
	NS_FORUM_TALK => 'Обсуждение_форума',
);

$namespaceNames['vi'] = array(
	NS_FORUM => 'Diễn_đàn',
	NS_FORUM_TALK => 'Thảo_luận_Diễn_đàn',
);
