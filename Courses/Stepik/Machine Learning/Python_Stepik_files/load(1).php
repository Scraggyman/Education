var mediaWikiLoadStart=(new Date()).getTime(),mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};mwPerformance.mark('mwLoadStart');function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<8)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||(ua.indexOf('Opera/')!==-1&&(ua.indexOf('Version/')===-1?parseFloat(ua.split('Opera/')[1])<10:parseFloat(ua.split('Version/')[1])<12))||(ua.indexOf('Opera ')!==-1&&parseFloat(ua.split(' Opera ')[1])<10)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||ua.match(/MeeGo/)||(ua.match(/Glass/)&&ua.match(/Android/)));}(function(){if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');return;}
function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/load.php"});mw.loader.register([["site","v6idLXQ4"],["noscript","IYds+GKz",[],"noscript"],["filepage","ILzop7sz"],["user.groups","Jc54ba8l",[],"user"],["user","rt3pVzet",[],"user"],["user.cssprefs","wJLzgHRt",[],"private"],["user.defaults","VirEzS8r"],["user.options","C9rS/VRT",[6],"private"],["user.tokens","Vv5SslSW",[],"private"],["mediawiki.language.data","bHbxm6Jh",[171]],["mediawiki.skinning.elements","ZRS5TJbd"],["mediawiki.skinning.content","ec0XY3as"],["mediawiki.skinning.interface","nJlxu0oR"],["mediawiki.skinning.content.parsoid","Yh0JTJ8O"],["mediawiki.skinning.content.externallinks","aOIAa/n0"],["jquery.accessKeyLabel","D5tppJCP",[25,131]],["jquery.appear","/GXo7b7K"],["jquery.arrowSteps","5FRHL63Y"],["jquery.async","OxVekxsf"],["jquery.autoEllipsis","T5A/oZJ6",[37]],["jquery.badge","oaz1Ws5T",[168]],["jquery.byteLength","OcPh0r75"],["jquery.byteLimit","MqGi1ts8",[21]],["jquery.checkboxShiftClick",
"hW9D8vL2"],["jquery.chosen","2yM05rRb"],["jquery.client","wGriwRAN"],["jquery.color","okjsX8G1",[27]],["jquery.colorUtil","Tj046mtS"],["jquery.confirmable","JrV5cEkv",[172]],["jquery.cookie","T3g/zOFE"],["jquery.expandableField","+ceCU13g"],["jquery.farbtastic","kMOFvv/N",[27]],["jquery.footHovzer","jV57W0Eg"],["jquery.form","mx0ZG2k+"],["jquery.fullscreen","gSMlNQ/o"],["jquery.getAttrs","ZGrpwkLq"],["jquery.hidpi","Y+UxKzAU"],["jquery.highlightText","sH7ONsxL",[231,131]],["jquery.hoverIntent","rrptqdxe"],["jquery.i18n","s9pZwGWm",[170]],["jquery.localize","YbjfLr56"],["jquery.makeCollapsible","AQjllL7G"],["jquery.mockjax","pfvAOXAT"],["jquery.mw-jump","bMgLkkQn"],["jquery.mwExtension","ZolwNx02"],["jquery.placeholder","IS9hP1U8"],["jquery.qunit","omIAowEu"],["jquery.qunit.completenessTest","uZ6k5J1C",[46]],["jquery.spinner","IPzClUmC"],["jquery.jStorage","GtEqcawI",[93]],["jquery.suggestions","T/Y23ce9",[37]],["jquery.tabIndex","ILnK+kuH"],["jquery.tablesorter","1a2Z5KRb",[231,131,
173]],["jquery.textSelection","8ud9NmRr",[25]],["jquery.throttle-debounce","qSqruFPN"],["jquery.validate","YijJ2Dm9"],["jquery.xmldom","Yt5lsqtb"],["jquery.tipsy","TUoC6Kqf"],["jquery.ui.core","iiHxhXfA",[59],"jquery.ui"],["jquery.ui.core.styles","Yjd+q/ye",[],"jquery.ui"],["jquery.ui.accordion","P+/cOkVz",[58,78],"jquery.ui"],["jquery.ui.autocomplete","08k+kNOn",[67],"jquery.ui"],["jquery.ui.button","64lGpW+y",[58,78],"jquery.ui"],["jquery.ui.datepicker","EI2KtVPE",[58],"jquery.ui"],["jquery.ui.dialog","fY3y5I2J",[62,65,69,71],"jquery.ui"],["jquery.ui.draggable","abQUN9tu",[58,68],"jquery.ui"],["jquery.ui.droppable","JaIa+myR",[65],"jquery.ui"],["jquery.ui.menu","USwBYjyG",[58,69,78],"jquery.ui"],["jquery.ui.mouse","Ztu0odQq",[78],"jquery.ui"],["jquery.ui.position","S2XOaeo4",[],"jquery.ui"],["jquery.ui.progressbar","dyLyToFN",[58,78],"jquery.ui"],["jquery.ui.resizable","iy4Ciz83",[58,68],"jquery.ui"],["jquery.ui.selectable","VKgy2s0s",[58,68],"jquery.ui"],["jquery.ui.slider",
"3uiuttp5",[58,68],"jquery.ui"],["jquery.ui.sortable","ZAO4IrE9",[58,68],"jquery.ui"],["jquery.ui.spinner","OeL3ViLo",[62],"jquery.ui"],["jquery.ui.tabs","Hzd5gN4z",[58,78],"jquery.ui"],["jquery.ui.tooltip","lbBhda4A",[58,69,78],"jquery.ui"],["jquery.ui.widget","5pG9xDnM",[],"jquery.ui"],["jquery.effects.core","hjE8Asra",[],"jquery.ui"],["jquery.effects.blind","heJTVH/S",[79],"jquery.ui"],["jquery.effects.bounce","Bbz6Ih8s",[79],"jquery.ui"],["jquery.effects.clip","iSYoLmbL",[79],"jquery.ui"],["jquery.effects.drop","ILVHzu+M",[79],"jquery.ui"],["jquery.effects.explode","jNL5w/ll",[79],"jquery.ui"],["jquery.effects.fade","nyYXRaPd",[79],"jquery.ui"],["jquery.effects.fold","IiFo2ehy",[79],"jquery.ui"],["jquery.effects.highlight","cX+nXbbv",[79],"jquery.ui"],["jquery.effects.pulsate","ZwYxzpzP",[79],"jquery.ui"],["jquery.effects.scale","MwnUt8Fj",[79],"jquery.ui"],["jquery.effects.shake","We1NdPgp",[79],"jquery.ui"],["jquery.effects.slide","TvLJz31c",[79],"jquery.ui"],[
"jquery.effects.transfer","w2MWxuru",[79],"jquery.ui"],["json","ZCCJcwcw",[],null,null,"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment","yLBab7tZ"],["mediawiki.apihelp","BJpwCw3t",[121]],["mediawiki.template","pessZVIA"],["mediawiki.template.mustache","mHMIJsaW",[96]],["mediawiki.template.regexp","U6nFfhVF",[96]],["mediawiki.apipretty","RrJUh9bD"],["mediawiki.api","iVVnJCak",[147,8]],["mediawiki.api.category","e/QybLEZ",[136,100]],["mediawiki.api.edit","JMKbX/Wu",[136,100]],["mediawiki.api.login","RuA/7bY5",[100]],["mediawiki.api.options","sfGMU5t3",[100]],["mediawiki.api.parse","lk5xDfYV",[100]],["mediawiki.api.upload","QCuOzTf8",[231,93,102]],["mediawiki.api.user","B4Nr3xry",[100]],["mediawiki.api.watch","A6Xv6wXY",[100]],["mediawiki.api.messages","IVTBEynp",[100]],["mediawiki.content.json","ni0/0rSs"],["mediawiki.confirmCloseWindow","dZjPAClI"],["mediawiki.debug","RzYZ943s",[32,57]],["mediawiki.debug.init","N7T2WoBy",[112]],["mediawiki.feedback",
"e0jcdrRo",[136,127,233]],["mediawiki.feedlink","YhSnrDtM"],["mediawiki.filewarning","X4wv3O6A",[233]],["mediawiki.ForeignApi","T0Xug+9y",[118]],["mediawiki.ForeignApi.core","dKZJkJcs",[100,232]],["mediawiki.helplink","7LSmqIgj"],["mediawiki.hidpi","qOtlDH5/",[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist","CXaDVerY",[25]],["mediawiki.htmlform","Bqyb5ilu",[22,131]],["mediawiki.htmlform.styles","xT023QJx"],["mediawiki.htmlform.ooui.styles","7adBFHjM"],["mediawiki.icon","5BSPzvnp"],["mediawiki.inspect","0d9onor5",[21,93,131]],["mediawiki.messagePoster","LKc70dyy",[117]],["mediawiki.messagePoster.wikitext","H1d2iXTi",[102,127]],["mediawiki.notification","FCgSpy+o",[180]],["mediawiki.notify","eqAdmzwE"],["mediawiki.RegExp","8u+vCu05"],["mediawiki.pager.tablePager","jRbwqFfS"],["mediawiki.searchSuggest","r0PGltmT",[35,45,50,100]],["mediawiki.sectionAnchor","WAQK+wHC"],["mediawiki.storage","Ly9N1L5y"],["mediawiki.Title","VfzdA8Kt",[21,147]],["mediawiki.Upload","KmpB98Xl",[
106]],["mediawiki.ForeignUpload","s4avhI9j",[117,137]],["mediawiki.ForeignStructuredUpload","gmVCf5Ph",[138]],["mediawiki.Upload.Dialog","qJVbB5SQ",[141]],["mediawiki.Upload.BookletLayout","e3F+Nb4N",[137,172,145,233]],["mediawiki.ForeignStructuredUpload.BookletLayout","cj2Z7707",[139,141,228,227,96]],["mediawiki.toc","WIe4IdSz",[148]],["mediawiki.Uri","xnlJRy13",[147,98]],["mediawiki.user","G+1c34dx",[107,148,7]],["mediawiki.userSuggest","xmZhucBN",[50,100]],["mediawiki.util","hR7A6JaV",[15,130]],["mediawiki.cookie","uCjxq/rZ",[29]],["mediawiki.toolbar","rOARU64J"],["mediawiki.experiments","r/YenjbF"],["mediawiki.raggett","QngrcQsP"],["mediawiki.action.edit","Xmy+U641",[22,53,153]],["mediawiki.action.edit.styles","I1KRuINV"],["mediawiki.action.edit.collapsibleFooter","rmR3fiG7",[41,148,125]],["mediawiki.action.edit.preview","1WPiL6VD",[33,48,53,158,100,172]],["mediawiki.action.edit.stash","e4z/KaeW",[35,100]],["mediawiki.action.history","Piq9lHcG"],["mediawiki.action.history.diff",
"DsNs9R8C"],["mediawiki.action.view.dblClickEdit","PiHVdn9F",[180,7]],["mediawiki.action.view.metadata","wmh5gTXt"],["mediawiki.action.view.categoryPage.styles","WMhTCi6E"],["mediawiki.action.view.postEdit","BsgwYe5w",[148,172,96]],["mediawiki.action.view.redirect","fNxIx+N/",[25]],["mediawiki.action.view.redirectPage","VJOxMyFO"],["mediawiki.action.view.rightClickEdit","8Tj/wq4u"],["mediawiki.action.edit.editWarning","oXSb8kqO",[53,111,172]],["mediawiki.action.view.filepage","PGrWCREZ"],["mediawiki.language","8sxlJ10r",[169,9]],["mediawiki.cldr","IYtXTnws",[170]],["mediawiki.libs.pluralruleparser","wWJL6W+B"],["mediawiki.language.init","3lE3ORgy"],["mediawiki.jqueryMsg","3BFJOerX",[231,168,147,7]],["mediawiki.language.months","8ibPhErS",[168]],["mediawiki.language.names","oEnx70Nf",[171]],["mediawiki.language.specialCharacters","lfy9K43n",[168]],["mediawiki.libs.jpegmeta","hYJ9XWLB"],["mediawiki.page.gallery","/YmIRuM2",[54,178]],["mediawiki.page.gallery.styles","cLTyDcoP"],[
"mediawiki.page.ready","oNhdRywQ",[15,23,41,43,45]],["mediawiki.page.startup","QGwb0l+n",[147]],["mediawiki.page.patrol.ajax","UaVwEmtq",[48,136,100,180]],["mediawiki.page.watch.ajax","RoJyqUCA",[108,180]],["mediawiki.page.image.pagination","sOhYOrzl",[48,144]],["mediawiki.special","s06fIq9w"],["mediawiki.special.block","N4Rturzk",[147]],["mediawiki.special.changeslist","R+XN29XK"],["mediawiki.special.changeslist.legend","+gP3Nz4/"],["mediawiki.special.changeslist.legend.js","UPa5o3rS",[41,148]],["mediawiki.special.changeslist.enhanced","dr63a2YM"],["mediawiki.special.edittags","Qyfavni8",[24]],["mediawiki.special.edittags.styles","9DOGsbFe"],["mediawiki.special.import","veaeGQJl"],["mediawiki.special.movePage","Iz8BmIDg",[225]],["mediawiki.special.movePage.styles","Zelbagc7"],["mediawiki.special.pageLanguage","GlMq/fLx"],["mediawiki.special.pagesWithProp","l1i2cTYg"],["mediawiki.special.preferences","i1CM2tUX",[111,168,129]],["mediawiki.special.preferences.styles","fivfDcyp"],[
"mediawiki.special.recentchanges","E7r0NlUO",[184]],["mediawiki.special.search","mpIaTn+q"],["mediawiki.special.undelete","77K+jfPA"],["mediawiki.special.upload","/ioomDFf",[48,136,100,111,172,176,96]],["mediawiki.special.userlogin.common.styles","dEoa2EG9"],["mediawiki.special.userlogin.signup.styles","MXXFpAIz"],["mediawiki.special.userlogin.login.styles","mqGaRhcY"],["mediawiki.special.userlogin.signup.js","b1AQvY6e",[54,100,172]],["mediawiki.special.unwatchedPages","mDte8hlc",[136,108]],["mediawiki.special.watchlist","KU0z+eLw"],["mediawiki.special.javaScriptTest","autAogwp",[144]],["mediawiki.special.version","qwkMrRVr"],["mediawiki.legacy.config","lz+hc2dg"],["mediawiki.legacy.commonPrint","udr36I+e"],["mediawiki.legacy.protect","bGA09u4t",[22]],["mediawiki.legacy.shared","Bqca59XM"],["mediawiki.legacy.oldshared","WyXDyS16"],["mediawiki.legacy.wikibits","neoIMo3X",[147]],["mediawiki.ui","uvUHjVlX"],["mediawiki.ui.checkbox","8l41nJMg"],["mediawiki.ui.radio","kWCsdX1Y"],[
"mediawiki.ui.anchor","dl2Ed8fN"],["mediawiki.ui.button","AteWI+Oi"],["mediawiki.ui.input","LJYV5Of2"],["mediawiki.ui.icon","CN5RG4F0"],["mediawiki.ui.text","ixFFRsIZ"],["mediawiki.widgets","3XWAWDMU",[19,22,228,226]],["mediawiki.widgets.styles","qtbuzjfn"],["mediawiki.widgets.DateInputWidget","h0BjelQF",[94,233]],["mediawiki.widgets.CategorySelector","1Jk+G5/z",[117,136,233]],["mediawiki.widgets.UserInputWidget","QZPKOQbh",[233]],["es5-shim","YTEhpY9e",[],null,null,"return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["dom-level2-shim","JGarVKXv",[],null,null,"return!!window.Node;"],["oojs","bDhtfd4H",[230,93]],["oojs-ui","3g06BHG0",[168,232,234,235,236,237]],["oojs-ui.styles","rxChuf3L"],["oojs-ui.styles.icons","lpqZCNMm"],["oojs-ui.styles.indicators","qjsjnqU0"],["oojs-ui.styles.textures","/tXemVJB"],["oojs-ui.styles.icons-accessibility","w5m4kBBQ"],["oojs-ui.styles.icons-alerts","SKLugCFp"],["oojs-ui.styles.icons-content","xaNBrbN0"],[
"oojs-ui.styles.icons-editing-advanced","ih6X6//C"],["oojs-ui.styles.icons-editing-core","idGmKUaf"],["oojs-ui.styles.icons-editing-list","/LqIJEWO"],["oojs-ui.styles.icons-editing-styling","PYKNDPmE"],["oojs-ui.styles.icons-interactions","R6zgKlmN"],["oojs-ui.styles.icons-layout","dkyximIm"],["oojs-ui.styles.icons-location","JShZUOGa"],["oojs-ui.styles.icons-media","Ck067GHQ"],["oojs-ui.styles.icons-moderation","t4x+bpTI"],["oojs-ui.styles.icons-movement","oO4pFFRw"],["oojs-ui.styles.icons-user","7iiKyr/H"],["oojs-ui.styles.icons-wikimedia","kMiJrTPZ"],["skins.cologneblue","x67KVXZ+"],["skins.modern","VWsyM7Ca"],["skins.monobook.styles","WahJiEtG"],["ext.nostalgia","XuApn2lV"],["skins.vector.styles","llgq3Dph"],["skins.vector.styles.responsive","gI9olokj"],["skins.vector.js","7uyiQ6h8",[51,54]],["jquery.wikiEditor","7tRl52XP",[53,168],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","Z3udC342",[51,64,265],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","xQj+2oOr",[50,261,142,140],
"ext.wikiEditor"],["jquery.wikiEditor.preview","C3RucqAs",[260,100],"ext.wikiEditor"],["jquery.wikiEditor.publish","dYpK8p5c",[261],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","Sgt6/M1J",[18,29,260,267],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","eWjGyGw+",[265,175],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","8c3CkGdw",[],"ext.wikiEditor"],["ext.wikiEditor","4KOErFCc",[260,145],"ext.wikiEditor"],["ext.wikiEditor.dialogs","IjB2cC/6",[272,262],"ext.wikiEditor"],["ext.wikiEditor.preview","2VIdSjNc",[268,263],"ext.wikiEditor"],["ext.wikiEditor.publish","Y3LIneJf",[268,264],"ext.wikiEditor"],["ext.wikiEditor.toolbar","mt8YBWr0",[268,266],"ext.wikiEditor"],["ext.wikiEditor.toolbar.styles","XGHJyxnn",[],"ext.wikiEditor"],["ext.categoryTree","7Af88Oyj"],["ext.categoryTree.css","bzlRkvgB"],["ext.math.styles","fSPWihOD"],["ext.math.desktop.styles","sUyu142J"],["ext.math.scripts","wrGMBK6v"],["ext.math.editbutton.enabler","LGl/t27y"],["ext.math.visualEditor","00+8SxWC",[
"ext.visualEditor.mwcore"]],["ext.math.visualEditor.data","pXtNsv6z",[280]],["ext.math.visualEditor.symbols","oXwqFC85",[281]],["ext.pygments","eKuwMm5l"],["ext.geshi.visualEditor","y8YVhAy4",["ext.visualEditor.mwcore"]],["ext.openid","asYNY3t6",[29],"ext.openid"],["ext.openid.plain","IhbyyFUp",[285],"ext.openid"],["ext.openid.icons","dHFdWEsm",[285],"ext.openid"],["ext.collection","vbmCzYZl",[289,74,168]],["ext.collection.bookcreator","WqJG4u/T",[49]],["ext.collection.checkLoadFromLocalStorage","xpaSCDAS",[288]],["ext.collection.suggest","lZYJZonC",[289]]]);;mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"vector","stylepath":"/skins","wgUrlProtocols":
"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/index.php/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"//wiki.stepik.org","wgServerName":"wiki.stepik.org","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.27.0-wmf.9","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Stepik Wiki","5":"Stepik Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":
"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"stepik_wiki":4,"stepik_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"Stepik Wiki","wgDBname":"mediawiki","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","nostalgia":"Nostalgia","vector":"Vector","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"mediawiki","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,
"wgResourceLoaderStorageEnabled":!1,"wgResourceLoaderLegacyModules":["mediawiki.legacy.wikibits"],"wgForeignUploadTargets":[],"wgEnableUploads":!0,"wgForeignUploadTestEnabled":!1,"wgForeignUploadTestDefault":1,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"}});window.RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};}var script=document.createElement('script');script.src="/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=vector&version=wsdFkgMp";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());