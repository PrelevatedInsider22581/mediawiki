<?php

namespace MediaWiki\Linker;

use IContextSource;
use Language;
use MediaWiki\Revision\RevisionRecord;
use Parser;
use Title;
use User;

/**
 * @since 1.18
 */
class DummyLinker {

	public function link(
		$target,
		$html = null,
		$customAttribs = [],
		$query = [],
		$options = []
	) {
		return Linker::link(
			$target,
			$html,
			$customAttribs,
			$query,
			$options
		);
	}

	public function linkKnown(
		$target,
		$html = null,
		$customAttribs = [],
		$query = [],
		$options = [ 'known' ]
	) {
		return Linker::linkKnown(
			$target,
			$html,
			$customAttribs,
			$query,
			$options
		);
	}

	public function makeSelfLinkObj(
		$nt,
		$html = '',
		$query = '',
		$trail = '',
		$prefix = ''
	) {
		return Linker::makeSelfLinkObj(
			$nt,
			$html,
			$query,
			$trail,
			$prefix
		);
	}

	public function getInvalidTitleDescription(
		IContextSource $context,
		$namespace,
		$title
	) {
		return Linker::getInvalidTitleDescription(
			$context,
			$namespace,
			$title
		);
	}

	public function makeExternalImage( $url, $alt = '' ) {
		return Linker::makeExternalImage( $url, $alt );
	}

	public function makeImageLink(
		Parser $parser,
		Title $title,
		$file,
		$frameParams = [],
		$handlerParams = [],
		$time = false,
		$query = "",
		$widthOption = null
	) {
		return Linker::makeImageLink(
			$parser,
			$title,
			$file,
			$frameParams,
			$handlerParams,
			$time,
			$query,
			$widthOption
		);
	}

	public function makeThumbLinkObj(
		Title $title,
		$file,
		$label = '',
		$alt = '',
		$align = 'right',
		$params = [],
		$framed = false,
		$manualthumb = ""
	) {
		return Linker::makeThumbLinkObj(
			$title,
			$file,
			$label,
			$alt,
			$align,
			$params,
			$framed,
			$manualthumb
		);
	}

	public function makeThumbLink2(
		Title $title,
		$file,
		$frameParams = [],
		$handlerParams = [],
		$time = false,
		$query = ""
	) {
		return Linker::makeThumbLink2(
			$title,
			$file,
			$frameParams,
			$handlerParams,
			$time,
			$query
		);
	}

	public function processResponsiveImages( $file, $thumb, $hp ) {
		Linker::processResponsiveImages(
			$file,
			$thumb,
			$hp
		);
	}

	public function makeBrokenImageLinkObj(
		$title,
		$label = '',
		$query = '',
		$unused1 = '',
		$unused2 = '',
		$time = false
	) {
		return Linker::makeBrokenImageLinkObj(
			$title,
			$label,
			$query,
			$unused1,
			$unused2,
			$time
		);
	}

	public function makeMediaLinkObj( $title, $html = '', $time = false ) {
		return Linker::makeMediaLinkObj(
			$title,
			$html,
			$time
		);
	}

	public function makeMediaLinkFile( Title $title, $file, $html = '' ) {
		return Linker::makeMediaLinkFile(
			$title,
			$file,
			$html
		);
	}

	public function specialLink( $name, $key = '' ) {
		return Linker::specialLink( $name, $key );
	}

	public function makeExternalLink(
		$url,
		$text,
		$escape = true,
		$linktype = '',
		$attribs = [],
		$title = null
	) {
		return Linker::makeExternalLink(
			$url,
			$text,
			$escape,
			$linktype,
			$attribs,
			$title
		);
	}

	public function userLink( $userId, $userName, $altUserName = false ) {
		return Linker::userLink(
			$userId,
			$userName,
			$altUserName
		);
	}

	public function userToolLinks(
		$userId,
		$userText,
		$redContribsWhenNoEdits = false,
		$flags = 0,
		$edits = null
	) {
		return Linker::userToolLinks(
			$userId,
			$userText,
			$redContribsWhenNoEdits,
			$flags,
			$edits
		);
	}

	public function userToolLinksRedContribs( $userId, $userText, $edits = null ) {
		return Linker::userToolLinksRedContribs(
			$userId,
			$userText,
			$edits
		);
	}

	public function userTalkLink( $userId, $userText ) {
		return Linker::userTalkLink( $userId, $userText );
	}

	public function blockLink( $userId, $userText ) {
		return Linker::blockLink( $userId, $userText );
	}

	public function emailLink( $userId, $userText ) {
		return Linker::emailLink( $userId, $userText );
	}

	public function revUserLink( RevisionRecord $revRecord, $isPublic = false ) {
		return Linker::revUserLink( $revRecord, $isPublic );
	}

	public function revUserTools( RevisionRecord $revRecord, $isPublic = false ) {
		return Linker::revUserTools( $revRecord, $isPublic );
	}

	public function formatComment(
		$comment,
		$title = null,
		$local = false,
		$wikiId = null
	) {
		return Linker::formatComment(
			$comment,
			$title,
			$local,
			$wikiId
		);
	}

	public function formatLinksInComment(
		$comment,
		$title = null,
		$local = false,
		$wikiId = null
	) {
		return Linker::formatLinksInComment(
			$comment,
			$title,
			$local,
			$wikiId
		);
	}

	public function normalizeSubpageLink( $contextTitle, $target, &$text ) {
		return Linker::normalizeSubpageLink(
			$contextTitle,
			$target,
			$text
		);
	}

	public function commentBlock(
		$comment,
		$title = null,
		$local = false,
		$wikiId = null
	) {
		return Linker::commentBlock(
			$comment,
			$title,
			$local,
			$wikiId
		);
	}

	public function revComment( RevisionRecord $revRecord, $local = false, $isPublic = false ) {
		return Linker::revComment( $revRecord, $local, $isPublic );
	}

	public function formatRevisionSize( $size ) {
		return Linker::formatRevisionSize( $size );
	}

	public function tocIndent() {
		return Linker::tocIndent();
	}

	public function tocUnindent( $level ) {
		return Linker::tocUnindent( $level );
	}

	public function tocLine( $anchor, $tocline, $tocnumber, $level, $sectionIndex = false ) {
		return Linker::tocLine(
			$anchor,
			$tocline,
			$tocnumber,
			$level,
			$sectionIndex
		);
	}

	public function tocLineEnd() {
		return Linker::tocLineEnd();
	}

	public function tocList( $toc, Language $lang = null ) {
		return Linker::tocList( $toc, $lang );
	}

	public function generateTOC( $tree, Language $lang = null ) {
		return Linker::generateTOC( $tree, $lang );
	}

	public function makeHeadline(
		$level,
		$attribs,
		$anchor,
		$html,
		$link,
		$legacyAnchor = false
	) {
		return Linker::makeHeadline(
			$level,
			$attribs,
			$anchor,
			$html,
			$link,
			$legacyAnchor
		);
	}

	public function splitTrail( $trail ) {
		return Linker::splitTrail( $trail );
	}

	public function generateRollback(
		RevisionRecord $revRecord,
		IContextSource $context = null,
		$options = [ 'verify' ]
	) {
		return Linker::generateRollback(
			$revRecord,
			$context,
			$options
		);
	}

	public function getRollbackEditCount( RevisionRecord $revRecord, $verify ) {
		return Linker::getRollbackEditCount( $revRecord, $verify );
	}

	public function buildRollbackLink(
		RevisionRecord $revRecord,
		IContextSource $context = null,
		$editCount = false
	) {
		return Linker::buildRollbackLink(
			$revRecord,
			$context,
			$editCount
		);
	}

	public function formatHiddenCategories( $hiddencats ) {
		return Linker::formatHiddenCategories( $hiddencats );
	}

	public function titleAttrib( $name, $options = null, array $msgParams = [] ) {
		return Linker::titleAttrib(
			$name,
			$options,
			$msgParams
		);
	}

	public function accesskey( $name ) {
		return Linker::accesskey( $name );
	}

	public function getRevDeleteLink( User $user, RevisionRecord $revRecord, Title $title ) {
		return Linker::getRevDeleteLink(
			$user,
			$revRecord,
			$title
		);
	}

	public function revDeleteLink( $query = [], $restricted = false, $delete = true ) {
		return Linker::revDeleteLink(
			$query,
			$restricted,
			$delete
		);
	}

	public function revDeleteLinkDisabled( $delete = true ) {
		return Linker::revDeleteLinkDisabled( $delete );
	}

	public function tooltipAndAccesskeyAttribs( $name, array $msgParams = [] ) {
		return Linker::tooltipAndAccesskeyAttribs(
			$name,
			$msgParams
		);
	}

	public function tooltip( $name, $options = null ) {
		return Linker::tooltip( $name, $options );
	}

}

class_alias( DummyLinker::class, 'DummyLinker' );
