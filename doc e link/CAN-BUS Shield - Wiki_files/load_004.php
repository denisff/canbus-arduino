function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/wiki/load.php","apiScript":"/wiki/api.php"}});mw.loader.register([["site","1407743628",[],"site"],["noscript","1406528169",[],"noscript"],["startup","1410183077",[],"startup"],["filepage","1406528169"],["user.groups","1406528169",[],"user"],["user","1406528169",[],"user"],["user.cssprefs","1410183077",["mediawiki.user"],"private"],["user.options","1410183077",[],"private"],["user.tokens","1406528169",[],"private"],["mediawiki.language.data","1410165767",["mediawiki.language.init"]],["skins.chick","1406528169"],["skins.cologneblue","1406528169"],["skins.modern","1406528169"],["skins.monobook","1406528169"],["skins.nostalgia","1406528169"],["skins.simple","1406528169"],["skins.standard","1406528169"],["skins.vector","1406528169"],["jquery",
"1406528169"],["jquery.appear","1406528169"],["jquery.arrowSteps","1406528169"],["jquery.async","1406528169"],["jquery.autoEllipsis","1406528169",["jquery.highlightText"]],["jquery.badge","1406528169"],["jquery.byteLength","1406528169"],["jquery.byteLimit","1406528169",["jquery.byteLength"]],["jquery.checkboxShiftClick","1406528169"],["jquery.client","1406528169"],["jquery.collapsibleTabs","1406528169"],["jquery.color","1406528169",["jquery.colorUtil"]],["jquery.colorUtil","1406528169"],["jquery.cookie","1406528169"],["jquery.delayedBind","1406528169"],["jquery.expandableField","1406528169",["jquery.delayedBind"]],["jquery.farbtastic","1406528169",["jquery.colorUtil"]],["jquery.footHovzer","1406528169"],["jquery.form","1406528169"],["jquery.getAttrs","1406528169"],["jquery.highlightText","1406528169",["jquery.mwExtension"]],["jquery.hoverIntent","1406528169"],["jquery.json","1406528169"],["jquery.localize","1406528169"],["jquery.makeCollapsible","1410168695"],["jquery.mockjax",
"1406528169"],["jquery.mw-jump","1406528169"],["jquery.mwExtension","1406528169"],["jquery.placeholder","1406528169"],["jquery.qunit","1406528169"],["jquery.qunit.completenessTest","1406528169",["jquery.qunit"]],["jquery.spinner","1406528169"],["jquery.jStorage","1406528169",["jquery.json"]],["jquery.suggestions","1406528169",["jquery.autoEllipsis"]],["jquery.tabIndex","1406528169"],["jquery.tablesorter","1410170730",["jquery.mwExtension"]],["jquery.textSelection","1406528169",["jquery.client"]],["jquery.validate","1406528169"],["jquery.xmldom","1406528169"],["jquery.tipsy","1406528169"],["jquery.ui.core","1406528169",["jquery"],"jquery.ui"],["jquery.ui.widget","1406528169",[],"jquery.ui"],["jquery.ui.mouse","1406528169",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1406528169",[],"jquery.ui"],["jquery.ui.draggable","1406528169",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1406528169",["jquery.ui.core","jquery.ui.mouse",
"jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1406528169",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1406528169",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1406528169",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1406528169",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1406528169",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1406528169",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1406528169",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1406528169",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1406528169",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],[
"jquery.ui.slider","1406528169",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1406528169",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1406528169",["jquery"],"jquery.ui"],["jquery.effects.blind","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1406528169",["jquery.effects.core"],"jquery.ui"],[
"jquery.effects.shake","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1406528169",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1406528169",["jquery.effects.core"],"jquery.ui"],["mediawiki","1406528169"],["mediawiki.api","1406528169",["mediawiki.util"]],["mediawiki.api.category","1406528169",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1406528169",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1406528169",["mediawiki.api"]],["mediawiki.api.titleblacklist","1406528169",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.watch","1406528169",["mediawiki.api","user.tokens"]],["mediawiki.debug","1406528169",["jquery.footHovzer"]],["mediawiki.debug.init","1406528169",["mediawiki.debug"]],["mediawiki.feedback","1406528169",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.htmlform","1406528169"],["mediawiki.notification","1406528169",["mediawiki.page.startup"]],[
"mediawiki.notify","1406528169"],["mediawiki.searchSuggest","1410168695",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1406528169",["mediawiki.util"]],["mediawiki.Uri","1406528169"],["mediawiki.user","1406528169",["jquery.cookie","mediawiki.api"]],["mediawiki.util","1410168693",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1406528169",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1406528169",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1406528169",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1406528169",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1406528169",["mediawiki.util"]],["mediawiki.action.view.metadata","1410172658"],["mediawiki.action.view.rightClickEdit","1406528169"],["mediawiki.action.watch.ajax","1406528169",["mediawiki.page.watch.ajax"]],["mediawiki.language",
"1406528169",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1406528169",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1406528169"],["mediawiki.language.init","1406528169"],["mediawiki.jqueryMsg","1406528169",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1406528169"],["mediawiki.page.ready","1406528169",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1406528169",["jquery.client","mediawiki.util"]],["mediawiki.page.watch.ajax","1410170134",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1406528169"],["mediawiki.special.block","1406528169",["mediawiki.util"]],["mediawiki.special.changeemail","1406528169",["mediawiki.util"]],["mediawiki.special.changeslist","1406528169",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1406528169",[
"jquery.byteLimit"]],["mediawiki.special.preferences","1406528169"],["mediawiki.special.recentchanges","1406528169",["mediawiki.special"]],["mediawiki.special.search","1410169024"],["mediawiki.special.undelete","1406528169"],["mediawiki.special.upload","1406528169",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.javaScriptTest","1406528169",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1406528169",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1406528169",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1406528169"],["mediawiki.legacy.config","1406528169",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1406528169",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1406528169",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1406528169"],["mediawiki.legacy.oldshared","1406528169"],[
"mediawiki.legacy.upload","1406528169",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1406528169",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1406528169"],["ext.cite","1406528169",["jquery.tooltip"]],["jquery.tooltip","1406528169"],["ext.geshi.local","1406528169"],["contentCollector","1406528169",[],"ext.wikiEditor"],["jquery.wikiEditor","1406528169",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1406528169",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1406528169",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1406528169",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title"],"ext.wikiEditor"],[
"jquery.wikiEditor.highlight","1406528169",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1406528169",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1406528169",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1406528169",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1406528169",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1406528169",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1406528169",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1406528169",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],[
"jquery.wikiEditor.toolbar.config","1406528169",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1406528169",[],"ext.wikiEditor"],["ext.wikiEditor","1406528169",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1406528169",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1406528169",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1406528169",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1406528169",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1406528169",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1406528169",["ext.wikiEditor",
"ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1406528169",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1406528169",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1406528169",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1406528169",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1406528169",[],"ext.wikiEditor"],["ext.categoryTree","1406528169"],["ext.categoryTree.css","1406528169"],["ext.FancyBoxThumbs","1406528169"]]);mw.config.set({"wgLoadScript":"/wiki/load.php","debug":false,"skin":"vector","stylepath":"/wiki/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/wiki","wgScriptExtension":".php","wgScript":"/wiki/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://www.seeedstudio.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.20.3","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Wiki","5":"Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"wiki":4,"wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,
"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Wiki","wgFileExtensions":["png","gif","jpg","jpeg","doc","xls","mpp","pdf","ppt","tiff","bmp","docx","xlsx","pptx","ps","zip","rar","txt","svg"],"wgDBname":"seeedc6_wikidb2","wgFileCanRotate":true,"wgAvailableSkins":{"chick":"Chick","simple":"Simple","myskin":"MySkin","nostalgia":"Nostalgia","standard":"Standard","vector":"Vector","cologneblue":"CologneBlue","monobook":"MonoBook","modern":"Modern"},"wgExtensionAssetsPath":"/wiki/extensions","wgCookiePrefix":"seeedc6_wikidb2","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgWikiEditorToolbarClickTracking":false,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"}});};if(isCompatible()){document.write(
"\x3cscript src=\"/wiki/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=vector\x26amp;version=20130407T064622Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: seeedc6_wikidb2:resourceloader:filter:minify-js:7:86b0c6d89060bdfc79e7cef5c38e2124 */