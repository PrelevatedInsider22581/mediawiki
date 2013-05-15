<?php
/** Uzbek (oʻzbekcha)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Abdulla
 * @author Akmalzhon
 * @author Behzod Saidov <behzodsaidov@gmail.com>
 * @author Casual
 * @author CoderSI
 * @author Lyncos
 * @author Nataev
 * @author Sociologist
 * @author Urhixidur
 * @author Xexdof
 */

$fallback8bitEncoding = 'windows-1252';

$linkPrefixExtension = true;

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Maxsus',
	NS_TALK             => 'Munozara',
	NS_USER             => 'Foydalanuvchi',
	NS_USER_TALK        => 'Foydalanuvchi_munozarasi',
	NS_PROJECT_TALK     => '$1_munozarasi',
	NS_FILE             => 'Tasvir',
	NS_FILE_TALK        => 'Tasvir_munozarasi',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_munozarasi',
	NS_TEMPLATE         => 'Andoza',
	NS_TEMPLATE_TALK    => 'Andoza_munozarasi',
	NS_HELP             => 'Yordam',
	NS_HELP_TALK        => 'Yordam_munozarasi',
	NS_CATEGORY         => 'Turkum',
	NS_CATEGORY_TALK    => 'Turkum_munozarasi',
);

$namespaceAliases = array(
	'Mediya'                => NS_MEDIA,
	'MediyaViki'            => NS_MEDIAWIKI,
	'MediyaViki_munozarasi' => NS_MEDIAWIKI_TALK,
	'Shablon'               => NS_TEMPLATE,
	'Shablon_munozarasi'    => NS_TEMPLATE_TALK,
	'Kategoriya'            => NS_CATEGORY,
	'Kategoriya_munozarasi' => NS_CATEGORY_TALK,
);

$magicWords = array(
	'redirect'                  => array( '0', '#YOʻNALTIRISH', '#YONALTIRISH', '#REDIRECT' ),
	'notoc'                     => array( '0', '__ICHIDAGILARYOQ__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__GALEREYAYOQ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__ICHIDAGILARMAJBURIY__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__ICHIDAGILARI__', '__ICHIDAGILAR__', '__TOC__' ),
	'noeditsection'             => array( '0', '__TAHRIRYOQ__', '__TARTIBLASHYOQ__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'JORIYOY', 'JORIYOY2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'JORIYOY1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'JORIYOYNOMI', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'JORIYOYNOMIQARATQICH', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'JORIYOYQISQARTMASI', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'JORIYKUN', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'JORIYKUN2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'JORIYKUNNOMI', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'JORIYYIL', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'JORIYVAQT', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'JORIYSOAT', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'MAHALLIYOY', 'MAHALLIYOY2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'MAHALLIYOY1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'MAHALLIYOYNOMI', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'MAHALLIYOYQARATQICH', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'MAHALLIYOYQISQARTMASI', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'MAHALLIYKUN', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'MAHALLIYKUN2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'MAHALLIYKUNNOMI', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'MAHALLIYYIL', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'MAHALLIYVAQT', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'MAHALLIYSOAT', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'SAHIFASONI', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'MAQOLASONI', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'FAYLSONI', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'FOYDALANUVCHISONI', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'FAOLFOYDALANUVCHISONI', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'OZGARISHSONI', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'KORISHSONI', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'SAHIFANOMI', 'PAGENAME' ),
	'namespace'                 => array( '1', 'NOMFAZO', 'NAMESPACE' ),
	'gender'                    => array( '0', 'JINS', 'GENDER:' ),
	'currentweek'               => array( '1', 'JORIYHAFTA', 'CURRENTWEEK' ),
	'language'                  => array( '0', '#TIL:', '#LANGUAGE:' ),
	'numberofadmins'            => array( '1', 'ADMINISTRATORSONI', 'NUMBEROFADMINS' ),
	'special'                   => array( '0', 'maxsus', 'special' ),
	'tag'                       => array( '0', 'yorliq', 'tag' ),
	'hiddencat'                 => array( '1', '__YASHIRINTURKUM__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'TURKUMDAGISAHIFALAR', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'SAHIFAHAJMI', 'PAGESIZE' ),
	'index'                     => array( '1', '__INDEKS__', '__INDEX__' ),
	'noindex'                   => array( '1', '__INDEKSYOQ__', '__NOINDEX__' ),
	'url_wiki'                  => array( '0', 'VIKI', 'WIKI' ),
);

$linkTrail = '/^([a-zʻʼ“»]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline' => 'Havolalarning tagiga chizish:',
'tog-justify' => 'Matnni sahifaning eni boʻyicha tekislash',
'tog-hideminor' => 'Yangi oʻzgarishlar roʻyxatida kichik tahrirlarni yashirish',
'tog-hidepatrolled' => 'Yangi oʻzgarishlar roʻyxatida tekshirilgan tahrirlarni yashirish',
'tog-newpageshidepatrolled' => 'Yangi sahifalar roʻyxatida tekshirilgan sahifalarni yashirish',
'tog-extendwatchlist' => 'Kengaytirilgan kuzatuv roʻyxati: faqat oxirgi paytdagi emas, barcha oʻzgarishlar koʻrsatiladi',
'tog-usenewrc' => 'Yangi oʻzgarishlar va kuzatuv roʻyxatidagi sahifalarni guruhlarga boʻlish (JavaScript orqali)',
'tog-numberheadings' => 'Sarlavhalarni avtomatik raqamlash',
'tog-showtoolbar' => 'Tahrirlash asboblari joylashgan yoʻlakchani koʻrsatish (JavaScript orqali)',
'tog-editondblclick' => 'Sichqoncha tugmasini ikki marta bosish orqali tahrirlashni boshlash',
'tog-editsection' => '[tahrir] havolasini har bir boʻlim boshida koʻrsatish',
'tog-editsectiononrightclick' => 'Boʻlim sarlavhasiga sichqonchaning oʻng tugmasi bilan bosib tahrirlashni boshlash',
'tog-showtoc' => 'Mundarijani koʻrsatish (3 tadan koʻproq sarlavha bor sahifalarda)',
'tog-rememberpassword' => 'Hisob ma’lumotlarim ushbu brauzerda eslab qolinsin (ko‘pi bilan $1 {{PLURAL:$1|kunga|kunga}})',
'tog-watchcreations' => 'Men yaratgan sahifalarni va yuklagan fayllarni kuzatuv roʻyxatimga qoʻsh',
'tog-watchdefault' => 'Men tahrirlagan sahifa va fayllarni kuzatuv roʻyxatimga qoʻsh',
'tog-watchmoves' => 'Men koʻchirgan sahifa va fayllarni kuzatuv roʻyxatimga qoʻsh',
'tog-watchdeletion' => 'Men oʻchirgan sahifa va fayllarni kuzatuv roʻyxatimga qoʻsh',
'tog-minordefault' => 'Sukut boʻyicha barcha tahrirlarimni «kichik tahrir» etib belgilash',
'tog-previewontop' => 'Tahrir oynasi tepasida koʻrib chiqish',
'tog-previewonfirst' => 'Tahrirlashga oʻtiboq koʻrib chiqishni boshlash',
'tog-nocache' => 'Brauzer sahifalarni kesh xotirasida saqlamasin',
'tog-enotifwatchlistpages' => 'Kuzatuv roʻyxatimdagi sahifa yoki fayllar oʻzgartirilsa, menga bu haqda xat yuborilsin',
'tog-enotifusertalkpages' => 'Munozara sahifam oʻzgartirilsa, menga bu haqda xat yuborilsin',
'tog-enotifminoredits' => 'Kichik tahrir qilinsa ham e-pochtamga bu haqda xat yuborilsin',
'tog-enotifrevealaddr' => 'Xabar beruvchi xatlarda e-pochta manzilim koʻrsatilsin',
'tog-shownumberswatching' => 'Sahifani kuzatuv roʻyxatiga olgan foydalanuvchilar sonini koʻrsatish',
'tog-oldsig' => 'Joriy imzo:',
'tog-fancysig' => 'Imzoni viki-belgi qilib koʻrsatish (avtomatik ishoratsiz)',
'tog-showjumplinks' => 'Yordamchi «tez oʻtish» havolalarini yoqish',
'tog-uselivepreview' => 'Tez koʻrib chiqish (JavaScript orqali) (sinovda)',
'tog-forceeditsummary' => 'Qisqa tavsif oynasi toʻldirilmagani haqida ogohlantirish koʻrsatilsin',
'tog-watchlisthideown' => 'Oʻz tahrirlarim kuzatuv roʻyxatimda koʻrsatilmasin',
'tog-watchlisthidebots' => 'Botlar qilgan tahrirlar kuzatuv roʻyxatimda koʻrsatilmasin',
'tog-watchlisthideminor' => 'Kichik tahrirlar kuzatuv roʻyxatimda koʻrsatilmasin',
'tog-watchlisthideliu' => 'Tizimga kirgan foydalanuvchilar tahrirlari kuzatuv roʻyxatimda koʻrsatilmasin',
'tog-watchlisthideanons' => 'Anonim foydalanuvchilar tahrirlari kuzatuv roʻyxatimda koʻrsatilmasin',
'tog-watchlisthidepatrolled' => 'Tekshirilgan tahrirlar kuzatuv roʻyxatimda koʻrsatilmasin',
'tog-ccmeonemails' => 'Boshqa ishtirokchilarga yozgan xatimning nusxasi oʻzimga yuborilsin',
'tog-diffonly' => 'Versiyalar taqqoslanayotganda, pastda sahifa matni koʻrsatilmasin',
'tog-showhiddencats' => 'Yashirin turkumlarni koʻrsatish',
'tog-noconvertlink' => "Sarlavhaga aylantirish dastagini o'chirib qo'yish",
'tog-norollbackdiff' => 'Tahrir qaytarilganda, versiyalar taqqosi koʻrsatilmasin',
'tog-useeditwarning' => 'Kiritgan oʻzgarishlarimni saqlamay sahifadan chiqib ketayotganim haqida ogohlantirilsin',

'underline-always' => 'Har doim',
'underline-never' => 'Hech qachon',
'underline-default' => 'Brauzer moslamari boʻyicha',

# Font style option in Special:Preferences
'editfont-style' => 'Tahrirlash maydonidagi shrift turi:',
'editfont-default' => 'Brauzer moslamari boʻyicha',
'editfont-monospace' => 'Teng enli shrift (Monospaced)',
'editfont-sansserif' => 'Kertiksiz shrift (Sans-serif)',
'editfont-serif' => 'Kertikli shrift (Serif)',

# Dates
'sunday' => 'Yakshanba',
'monday' => 'Dushanba',
'tuesday' => 'Seshanba',
'wednesday' => 'Chorshanba',
'thursday' => 'Payshanba',
'friday' => 'Juma',
'saturday' => 'Shanba',
'sun' => 'Yak',
'mon' => 'Dsh',
'tue' => 'Ssh',
'wed' => 'Chr',
'thu' => 'Pay',
'fri' => 'Jum',
'sat' => 'Shn',
'january' => 'yanvar',
'february' => 'fevral',
'march' => 'mart',
'april' => 'aprel',
'may_long' => 'may',
'june' => 'iyun',
'july' => 'iyul',
'august' => 'avgust',
'september' => 'sentabr',
'october' => 'oktabr',
'november' => 'noyabr',
'december' => 'dekabr',
'january-gen' => 'yanvarning',
'february-gen' => 'fevralning',
'march-gen' => 'martning',
'april-gen' => 'aprelning',
'may-gen' => 'mayning',
'june-gen' => 'iyunning',
'july-gen' => 'iyulning',
'august-gen' => 'avgustning',
'september-gen' => 'sentabrning',
'october-gen' => 'oktabrning',
'november-gen' => 'noyabrning',
'december-gen' => 'dekabrning',
'jan' => 'yan',
'feb' => 'fev',
'mar' => 'mar',
'apr' => 'apr',
'may' => 'may',
'jun' => 'iyn',
'jul' => 'iyl',
'aug' => 'avg',
'sep' => 'sen',
'oct' => 'okt',
'nov' => 'noy',
'dec' => 'dek',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Turkum}}',
'category_header' => '"$1" turkumidagi maqolalar.',
'subcategories' => 'Ostturkumlar',
'category-media-header' => '"$1" turkumidagi fayllar',
'category-empty' => "''Ushbu turkumda hozircha sahifa yoki fayllar yoʻq.''",
'hidden-categories' => '{{PLURAL:$1|Yashirin turkum}}',
'hidden-category-category' => 'Yashirin turkumlar',
'category-subcat-count' => '{{PLURAL:$2|Ushbu turkumda faqat bitta ostturkum mavjud.|Quyida ushbu turkumga kiruvchi $2 ta ostturkumdan $1 tasi koʻrsatilgan.}}',
'category-subcat-count-limited' => 'Ushbu turkumda $1 ta ostturkum mavjud.',
'category-article-count' => '{{PLURAL:$2|Ushbu turkumda faqat bitta sahifa mavjud.|Quyida ushbu turkumga kiruvchi $2 ta sahifadan $1 tasi koʻrsatilgan.}}',
'category-article-count-limited' => 'Ushbu turkumda $1 ta sahifa mavjud.',
'category-file-count' => '{{PLURAL:$2|Ushbu turkumda faqat bitta fayl mavjud.|Quyida ushbu turkumga kiruvchi $2 ta fayldan $1 tasi koʻrsatilgan.}}',
'category-file-count-limited' => 'Ushbu turkumda $1 ta fayl mavjud.',
'listingcontinuesabbrev' => 'davomi',
'index-category' => 'Indekslanadigan sahifalar',
'noindex-category' => 'Indekslanmaydigan sahifalar',
'broken-file-category' => 'Ishlamaydigan fayl havolalari bor sahifalar',

'linkprefix' => '/^(.*?)([a-zA-Z\\x80-\\xffʻʼ«„]+)$/sDu',

'about' => 'Haqida',
'article' => 'Sahifa',
'newwindow' => '(yangi oynada ochiladi)',
'cancel' => 'Bekor qilish',
'moredotdotdot' => 'Batafsil...',
'morenotlisted' => 'Boshqa hech nima yoʻq...',
'mypage' => 'Sahifa',
'mytalk' => 'Munozara',
'anontalk' => 'Ushbu IP-manzil munozarasi',
'navigation' => 'Saytda harakatlanish',
'and' => '&#32;va',

# Cologne Blue skin
'qbfind' => 'Qidiruv',
'qbbrowse' => 'Koʻrish',
'qbedit' => 'Tahrirlash',
'qbpageoptions' => 'Ushbu sahifa moslamalari',
'qbmyoptions' => 'Moslamalarim',
'qbspecialpages' => 'Maxsus sahifalar',
'faq' => 'TSS',
'faqpage' => 'Project:TSS',

# Vector skin
'vector-action-addsection' => 'Mavzu qoʻshish',
'vector-action-delete' => 'O‘chirish',
'vector-action-move' => 'Ko‘chirish',
'vector-action-protect' => 'Himoyalash',
'vector-action-undelete' => 'Tiklash',
'vector-action-unprotect' => 'Himoyalashni oʻzgartirish',
'vector-simplesearch-preference' => 'Soddalashtirilgan qidiruv qatorini koʻrsat (faqat «Vektorli» tashqi koʻrinish uchun)',
'vector-view-create' => 'Yaratish',
'vector-view-edit' => 'Tahrirlash',
'vector-view-history' => 'Tarix',
'vector-view-view' => 'Mutolaa',
'vector-view-viewsource' => 'Manbasini koʻrish',
'actions' => 'Amallar',
'namespaces' => 'Nomfazolar',
'variants' => 'Variantlar',

'navigation-heading' => 'Navigatsiya',
'errorpagetitle' => 'Xato',
'returnto' => '$1 sahifasiga qaytish.',
'tagline' => '{{SITENAME}} dan olingan',
'help' => 'Yordam',
'search' => 'Qidiruv',
'searchbutton' => 'Qidirish',
'go' => 'Oʻtish',
'searcharticle' => 'O‘tish',
'history' => 'Sahifa tarixi',
'history_short' => 'Tarix',
'updatedmarker' => 'oxirgi tashrifimdan keyingi oʻzgarishlar',
'printableversion' => 'Bosma uchun versiya',
'permalink' => 'Doimiy ishorat',
'print' => 'Chop etish',
'view' => 'Koʻrish',
'edit' => 'Tahrirlash',
'create' => 'Yaratish',
'editthispage' => 'Ushbu sahifani tahrirlash',
'create-this-page' => 'Ushbu sahifani yaratish',
'delete' => 'O‘chirish',
'deletethispage' => 'Ushbu sahifani o‘chirish',
'undelete_short' => '$1 ta tahrirni tiklash',
'viewdeleted_short' => '$1 ta oʻchirilgan tahrirni koʻrish',
'protect' => 'Himoyalash',
'protect_change' => 'Oʻzgartirish',
'protectthispage' => 'Ushbu sahifani himoyalash',
'unprotect' => 'Himoyadan chiqarish',
'unprotectthispage' => 'Ushbu sahifaning himoyasini oʻzgaritish',
'newpage' => 'Yangi sahifa',
'talkpage' => 'Bu sahifa haqida munozara',
'talkpagelinktext' => 'Munozara',
'specialpage' => 'Maxsus sahifa',
'personaltools' => 'Shaxsiy uskunalar',
'postcomment' => 'Yangi boʻlim',
'articlepage' => 'Maqolani koʻrib chiqish',
'talk' => 'Munozara',
'views' => 'Qarashlar',
'toolbox' => 'Asboblar',
'userpage' => 'Foydalanuvchi sahifasini koʻrish',
'projectpage' => 'Loyiha sahifasini koʻrish',
'imagepage' => 'Fayl sahifasini koʻrish',
'mediawikipage' => 'Xabar sahifasini koʻrsatish',
'templatepage' => 'Andoza sahifasini koʻrish',
'viewhelppage' => 'Yordam olish',
'categorypage' => 'Turkum sahifasini koʻrish',
'viewtalkpage' => 'Munozarani koʻrish',
'otherlanguages' => 'Boshqa tillarda',
'redirectedfrom' => '($1dan yoʻnaltirildi)',
'redirectpagesub' => 'Yoʻnaltiruvchi sahifa',
'lastmodifiedat' => 'Bu sahifa oxirgi marta $1 soat $2 da tahrirlangan.',
'viewcount' => 'Bu sahifaga {{PLURAL:$1|bir marta|$1 marta}} murojaat qilingan.',
'protectedpage' => 'Himoyalangan sahifa',
'jumpto' => 'Oʻtish:',
'jumptonavigation' => 'saytda harakatlanish',
'jumptosearch' => 'qidiruv',
'view-pool-error' => 'Uzr, ayni paytda serverlarga ortiqcha yuk tushgan.
Bu sahifaga birdaniga koʻpchilik kirmoqchi boʻldi.
Iltimos, biroz kutib turing va keyin yangitdan kirishga urinib koʻring.

$1',
'pool-timeout' => 'Toʻsishni kutish vaqti tugadi',
'pool-queuefull' => 'Soʻrovlar jamlanmasi toʻldi',
'pool-errorunknown' => 'Nomaʼlum xato',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => '{{SITENAME}} haqida',
'aboutpage' => 'Project:Haqida',
'copyright' => 'Keltirilgan maʼlumotlar $1 orqali tarqatilmoqda.',
'copyrightpage' => '{{ns:project}}:Mualliflik huquqlari',
'currentevents' => 'Joriy hodisalar',
'currentevents-url' => 'Project:Joriy hodisalar',
'disclaimers' => 'Ogohlantirishlar',
'disclaimerpage' => 'Project:Umumiy ogohlantirish',
'edithelp' => 'Tahrirlash yordami',
'edithelppage' => 'Help:Tahrirlash',
'helppage' => 'Help:Mundarija',
'mainpage' => 'Bosh sahifa',
'mainpage-description' => 'Bosh sahifa',
'policy-url' => 'Project:Qoida',
'portal' => 'Jamoa portali',
'portal-url' => 'Project:Jamoa portali',
'privacy' => 'Maxfiylik siyosati',
'privacypage' => 'Project:Maxfiylik siyosati',

'badaccess' => 'Ruxsatlilik xatosi',
'badaccess-group0' => "Siz so'ralgan amallarni bajara olmaysiz",
'badaccess-groups' => "So'ralgan amallarni kamida $1 {{PLURAL:$2|guruhi|guruhlari}} foydalanuvchilarigina amalga oshirishi mumkin.",

'versionrequired' => '$1 versiyasidagi MediaWiki talab etiladi',
'versionrequiredtext' => 'Bu sahifada ishlash uchun MediaWikining $1-versiyasi talab etiladi.
[[Special:Version|Dasturiy taʼminot haqida axborot]]ni koʻring.',

'ok' => 'OK',
'retrievedfrom' => ' "$1" dan olindi',
'youhavenewmessages' => 'Sizga $1 keldi ($2).',
'newmessageslink' => 'yangi xabarlar',
'newmessagesdifflink' => 'soʻnggi oʻzgarish',
'youhavenewmessagesfromusers' => 'Siz {{PLURAL:$3|$3 ta foydalanuvchidan}} $1 oldingiz ($2).',
'youhavenewmessagesmanyusers' => "Siz ko'p foydalanuvchilardan $1 oldingiz ($2).",
'newmessageslinkplural' => '{{PLURAL:$1|yangi xabar|yangi xabarlar}}',
'newmessagesdifflinkplural' => "oxirgi {{PLURAL:$1|o'zgarish|o'zgarishlar}}",
'youhavenewmessagesmulti' => 'Siz $1ga yangi xat oldingiz',
'editsection' => 'tahrirlash',
'editold' => 'tahrirlash',
'viewsourceold' => 'manbasini koʻrish',
'editlink' => 'tahrirlash',
'viewsourcelink' => 'manbasini koʻrish',
'editsectionhint' => 'Boʻlimni tahrirlash: $1',
'toc' => 'Mundarija',
'showtoc' => 'koʻrsatish',
'hidetoc' => 'yashirish',
'collapsible-collapse' => "Yig'ish",
'collapsible-expand' => 'Yoyish',
'thisisdeleted' => "$1ni ko'rib chiqasizmi yoki tiklaysizmi?",
'viewdeleted' => "$1ni ko'rib chiqasizmi?",
'restorelink' => "{{PLURAL:$1|o'chirilgan tahrir|$1 ta o'chirilgan tahrirlar}}ni",
'feedlinks' => "Ko'rinishida:",
'feed-invalid' => "Obuna uchun no'tog'ri turdagi kanal",
'feed-unavailable' => "Sindikatsiya tasmalariga yo'lashning imkoni yo'q",
'site-rss-feed' => '$1 — RSS-tasmasi',
'site-atom-feed' => '$1 — Atom-tasma',
'page-rss-feed' => '"$1" — RSS-tasmasi',
'page-atom-feed' => '«$1» — Atom-lenta',
'red-link-title' => '$1 (sahifa yaratilmagan)',
'sort-descending' => "Kamayish bo'yicha tartiblash",
'sort-ascending' => "O'sish bo'yicha tartiblash",

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Maqola',
'nstab-user' => 'Foydalanuvchi',
'nstab-media' => 'Media sahifasi',
'nstab-special' => 'Maxsus sahifa',
'nstab-project' => 'Vikipediya',
'nstab-image' => 'Fayl',
'nstab-mediawiki' => 'Xabar',
'nstab-template' => 'Andoza',
'nstab-help' => 'Yordam',
'nstab-category' => 'Turkum',

# Main script and global functions
'nosuchaction' => 'Bunday amal yoʻq',
'nosuchspecialpage' => 'Bunday maxsus sahifa yoʻq',

# General errors
'error' => 'Xato',
'laggedslavemode' => "'''Diqqat:''' sahifada oxirgi yangilanishlar koʻrsatilmagan boʻlishi mumkin.",
'readonly' => 'Maʼlumotlar bazasiga yozish toʻsilgan',
'missingarticle-rev' => '(versiya №: $1)',
'missingarticle-diff' => '(Farq: $1, $2)',
'internalerror' => 'Ichki xato',
'internalerror_info' => 'Ichki xato: $1',
'badtitle' => 'Notoʻgʻri sarlavha',
'viewsource' => 'Manbasini koʻrish',
'viewsource-title' => "$1 sahifasining manbasini ko'rish",
'actionthrottled' => "Tezlik bo'yicha cheklov",
'protectedpagetext' => 'Bu sahifa tahrirlash va boshqa oʻzgartirishlar kiritishdan himoyalangan.',
'viewsourcetext' => 'Siz bu sahifaning manbasini koʻrishingiz va uni nusxasini olishingiz mumkin:',
'editinginterface' => "'''Diqqat:''' Siz dasturiy taʼminot interfeysi matni mavjud boʻlgan sahifani tahrirlamoqdasiz.
Uning oʻzgartirilishi ushbu vikidagi boshqa foydalanuvchilar uchun ham interfeys oʻzgarishiga olib keladi.
Ushbu xabar tarjimasini qoʻshish yoki oʻzgartirish uchun, iltimos, MediaWikining [//translatewiki.net/ translatewiki.net] mahalliylashtirish saytidan foydalaning.",
'namespaceprotected' => "Sizda '''$1''' nomfazosi sahifalarini tahrirlash huquqi yoʻq",
'customcssprotected' => 'Sizda uchbu CSS sahifani tahrirlash huquqi yoʻq, chunki bu yerda boshqa foydalanuvchining shaxsiy moslamalari saqlanadi.',
'customjsprotected' => 'Sizda uchbu JavaScript sahifani tahrirlash huquqi yoʻq, chunki bu yerda boshqa foydalanuvchining shaxsiy moslamalari saqlanadi.',
'ns-specialprotected' => '"{{ns:special}}" nomfazosi sahifalari tahrirlanishi mumkin emas.',
'exception-nologin' => "Siz tizimda o'zingizni tanishtirmadingiz",
'exception-nologin-text' => "Bu sahifani ko'rish yoki so'ralgan amalni bajarish uchun o'zingizni tizimda tanitishingiz zarur.",

# Virus scanner
'virus-badscanner' => "Moslamada xato. Noma'lum virus aniqlovchi: ''$1''",
'virus-scanfailed' => 'tekshirishda xatolik (kod $1)',
'virus-unknownscanner' => "noma'lum antivirus:",

# Login and logout pages
'logouttext' => "'''Siz saytdan muvaffaqiyatli chiqdingiz.'''

{{SITENAME}} saytidan anonim holda foydalanishda davom etishindiz mumkin. Yoki siz yana hozirgi yoki boshqa foydalanuvchi nomi bilan qaytadan tizimga kirishingiz mumkin.
Shuni e'tiborga olingki, ayrim sahifalar siz brauzeringiz keshini tozalamaguningizga qadar xuddi tizimga kirganingizdagidek ko'rinishda davom etaverishi mumkin.",
'yourname' => 'Foydalanuvchi nomi',
'yourpassword' => 'Maxfiy soʻz:',
'yourpasswordagain' => 'Maxfiy so‘zni qayta kiriting:',
'remembermypassword' => 'Hisob ma’lumotlarim ushbu brauzerda eslab qolinsin (ko‘pi bilan $1 {{PLURAL:$1|kunga|kunga}})',
'securelogin-stick-https' => "Kirgandan keyin HTTPS bo'yicha ulanishni davom ettirish",
'yourdomainname' => 'Sizning domeningiz:',
'password-change-forbidden' => 'Siz bu vikida maxfiy soʻzni oʻzgartira olmaysiz.',
'login' => 'Kirish',
'nav-login-createaccount' => 'Kirish / Hisob yaratish',
'loginprompt' => "{{SITENAME}}ga kirish uchun kukilar yoqilgan bo'lishi kerak.",
'userlogin' => 'Kirish / Hisob yaratish',
'userloginnocreate' => 'Kirish',
'logout' => 'Chiqish',
'userlogout' => 'Chiqish',
'notloggedin' => 'Siz tizimga kirmagansiz',
'nologin' => "Hisobingiz yoʻqmi? '''$1'''.",
'nologinlink' => 'Hisob yaratish',
'createaccount' => 'Hisob yaratish',
'gotaccount' => "Hisobingiz bormi? '''$1'''.",
'gotaccountlink' => 'Kirish',
'userlogin-resetlink' => 'Kirish maʻlumotlaringiz esdan chiqdimi?',
'createaccountmail' => "E-mail orqali maxfiy so'zni jo'natish",
'createaccountreason' => 'Sabab:',
'badretype' => "Siz tomondan kiritilgan maxfiy so'zlar mos kelmayapti.",
'loginerror' => 'Foydalanuvchini aniqlashda xatolik',
'createaccounterror' => "Hisob yozuvini yaratishning iloji yo'q: $1",
'loginsuccesstitle' => 'Kirish muvaffaqiyatli amalga oshdi',
'loginsuccess' => "'''{{SITENAME}}ga \"\$1\" foydalanuvchi nomi bilan kirdingiz.'''",
'nosuchusershort' => '"$1" ismli foydalanuvchi yoʻq.
Ism yozilishini tekshirib koʻring.',
'nouserspecified' => "Siz foydalanuvchining ismini ko'rsatishingiz lozim.",
'login-userblocked' => "Bu foydalanuvchi muhosara qilingan. Tizimga kirishga ruxsat yo'q.",
'wrongpassword' => 'Kiritgan mahfiy soʻzingiz notoʻgʻri. Iltimos, qaytadan kiritib koʻring.',
'wrongpasswordempty' => "Iltimos, bo'sh bo'lmagan maxfiy so'z kiriting.",
'mailmypassword' => "Elektron pochta orqali yangi maxfiy so'zni jo'natish",
'passwordremindertitle' => "{{SITENAME}} uchun vaqtinchalik yangi maxfiy so'z",
'emailauthenticated' => 'Sizning elektron pochta manzilingiz $2, $3 da tasdiqlangan.',
'emailconfirmlink' => 'Sizning elektron pochta manzilingizni tasdiqlash',
'emaildisabled' => 'Bu sayt elektron pochta xatlarini yubora olmaydi.',
'accountcreated' => 'Hisob yozuvi yaratildi',
'login-abort-generic' => 'Tizimga kirishga mufavvaqiyatsiz urinish',
'loginlanguagelabel' => 'Til: $1',

# Change password dialog
'resetpass' => 'Maxfiy soʻzni oʻzgartirish',
'resetpass_header' => "Hisob mahfiy so'zini o'zgartirish",
'oldpassword' => "Eski mahfiy so'z:",
'newpassword' => "Yangi mahfiy so'z:",
'retypenew' => 'Yangi mahfiy soʻzni qayta tering:',
'resetpass_submit' => "Maxfiy so'zni o'rnatish va kirish",
'resetpass_forbidden' => "Maxfiy so'z o'zgartirilishi mumkin emas",
'resetpass-submit-loggedin' => 'Maxfiy soʻzni oʻzgartirish',
'resetpass-submit-cancel' => 'Bekor',

# Special:PasswordReset
'passwordreset-legend' => "Maxfiy so'zni yo'q qilish",
'passwordreset-username' => 'Foydalanuvchi nomi:',
'passwordreset-domain' => 'Domen:',
'passwordreset-email' => 'Elektron pochta manzili:',
'passwordreset-emailelement' => "Foydalanuvchi ismi: $1
Vaqtinchalik maxfiy so'z: $2",

# Special:ChangeEmail
'changeemail' => "Elektron pochta manzilini o'zgartirish",
'changeemail-header' => "Elektron pochta manzilini o'zgaritish",
'changeemail-oldemail' => 'Joriy elektron pochta manzili',
'changeemail-newemail' => 'Elektron pochtaning yangi manzili',
'changeemail-none' => "(yo'q)",
'changeemail-submit' => "Manzilni o'zgartirish",
'changeemail-cancel' => 'Bekor',

# Edit page toolbar
'bold_sample' => 'Qalin matn',
'bold_tip' => 'Qalin matn',
'italic_sample' => 'Yotiq matn',
'italic_tip' => 'Yotiq matn',
'link_sample' => 'Ishorat nomi',
'link_tip' => 'Ichki ishorat',
'extlink_sample' => 'http://www.example.com ishorat nomi',
'extlink_tip' => 'Tashqi ishorat (http:// prefiksini unutmang)',
'headline_sample' => 'Sarlavha',
'headline_tip' => '2-darajadagi sarlavha',
'nowiki_sample' => "Bu yerga formatlash zarur bo'lmagan matnni qo'ying",
'nowiki_tip' => "Viki-formatlashga e'tibor qilmaslik",
'image_tip' => 'Qoʻshilgan tasvir',
'media_tip' => 'Faylga havola',
'sig_tip' => 'Imzoingiz va sana',
'hr_tip' => "Yotiq (gorizontal) chiziq (ko'p ishlatmang)",

# Edit pages
'summary' => 'Qisqa izoh:',
'subject' => 'Mavzu/sarlavha',
'minoredit' => 'Bu kichik tahrir',
'watchthis' => 'Sahifani kuzatish',
'savearticle' => 'Saqlash',
'preview' => 'Ko‘rib chiqish',
'showpreview' => 'Ko‘rib chiqish',
'showlivepreview' => "Tezkor ko'rib chiqish",
'showdiff' => 'O‘zgarishlarni ko‘rsatish',
'anoneditwarning' => "'''Diqqat:''' Siz tizimga kirmagansiz. Ushbu sahifa tarixida Sizning IP manzilingiz yozib qolinadi.",
'missingcommenttext' => 'Iltimos sharh qoldiring.',
'summary-preview' => "Tavsif shunday bo'ladi:",
'subject-preview' => "Sarlavha shunday bo'ladi:",
'blockedtitle' => 'Foydalanuvchi chetlashtirildi',
'blockedtext' => "'''Siz (foydalanuvchi nomingiz yoki IP manzilingiz) tahrir qilishdan chetlashtirildingiz.'''

Sizni $1 chetlashtirdi. Bunga sabab: ''$2''.

* Chetlashtirish muddati boshi: $8
* Chetlashtirish muddati yakuni: $6
* Chetlashtirish maqsadi: $7

Siz $1 yoki boshqa [[{{MediaWiki:Grouppage-sysop}}|administrator]] bilan bogʻlanib, arz qilishingiz mumkin.
Siz «foydalanuvchiga maktub» xizmatidan foydalana olmaysiz, agarda: a) shaxsiy moslamalaringizda haqiqiy e-pochta manzilingiz koʻrsatilmagan yoki tasdiqlanmagan boʻlsa, b) chetlatish shartlarida bu xizmat toʻsilgan boʻlsa.
Sizning hozirgi IP manzilingiz - $3, chetlashtirish raqamingiz - #$5. Arizaga bularni ilova qilishingiz mumkin.",
'blockednoreason' => "sabab ko'rsatilmadi",
'whitelistedittext' => "Siz sahifalarni o'zgartirish uchun $1.",
'nosuchsectiontitle' => "Bo'limni topishning iloji yo'q",
'nosuchsectiontext' => "Siz mavjud bo'lmagan bo'limni sharhlamoqchi bo'ldingiz.
Siz sharhlamoqchi bo'lgan bo'lim o'chirilgan yoki boshqa sarlavhaga jildirilgan bo'lishi mumkin.",
'loginreqtitle' => 'Shaxsiyatni aniqlash talab etiladi',
'loginreqlink' => 'Kirish',
'loginreqpagetext' => "Boshqa sahifalarni ko'rish uchun $1",
'accmailtitle' => "Mahfiy so'z jo'natildi.",
'newarticle' => '(Yangi)',
'newarticletext' => "Bu sahifa hali mavjud emas.
Sahifani yaratish uchun quyida matn kiritishingiz mumkin (qoʻshimcha axborot uchun [[{{MediaWiki:Helppage}}|yordam sahifasini]] koʻring).
Agar bu sahifaga xatolik sabab kelib qolgan boʻlsangiz brauzeringizning '''orqaga''' tugmasini bosing.",
'anontalkpagetext' => "----''Ushbu munozara sahifasi hali hisob yozuvini yaratmagan, yoki undan foydalanmaydigan anonim ishtirokchiga tegishli.
Shu sababli tenglashtirish uchun raqamli IP-manzildan foydalaniladi.
Ushbu manzilning oʻzi bir nechta boshqa ishtirokchilarga ham mos kelishi mumkin.
Agar siz anonim ishtirokchi boʻlsangiz va siz oʻzingizga yoʻnaltirilmagan xabar oldim deb taxmin qilsangiz, iltimos, boshqa anonim ishtirokchilar bilan mumkin boʻlgan chalkashliklarni chetlab oʻtish uchun [[Special:UserLogin/signup|hisob yozuvi yarating]] yoki [[Special:UserLogin|tizimga kiring]].''",
'noarticletext' => 'Bu sahifada hozircha hech qanday matn yoʻq. Siz bu sarlavhani boshqa sahifalardan [[Special:Search/{{PAGENAME}}|qidirishingiz]], <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} tegishli qaydlarga qarashingiz] yoki bu sahifani [{{fullurl:{{FULLPAGENAME}}|action=edit}} tahrirlashingiz]</span> mumkin.',
'clearyourcache' => "'''Eslatma.''' Saqlaganingizdan so'ng o'zgarishlarni ko'rish uchun siz o'z brauzeringiz keshini tozalashingizga to'gri kelishi mumkin.
* '''Firefox / Safari:''' ''Shift'' tugmasini bosgan holda, ''Yangilash'' unsurlar darchasini bosing, yoki ''Ctrl-F5'' yoki ''Ctrl-R'' (Macda ''⌘-R'') ni bosing
* '''Google Chrome:''' ''Ctrl-Shift-R'' (Macda ''⌘-Shift-R'') ni bosing
* '''Internet Explorer:''' ''Ctrl''ni bosgan holda, ''Yangilash''ni bosing, yoki ''Ctrl-F5''ni bosing
* '''Opera:''' ''Asboblar → Moslamalar'' menyusidan keshni tozalashni tanlang",
'updated' => '(Yangilandi)',
'note' => "'''Izoh:'''",
'previewnote' => "'''Bu shunchaki ko‘rib chiqish. O‘zgartirishlar hali saqlangani yo‘q!'''",
'continue-editing' => 'tahrirlashni davom ettirish',
'editing' => '$1 tahrirlanmoqda',
'creating' => '«$1» sahifasini yaratish',
'editingsection' => '$1 (boʻlim) tahrirlanmoqda',
'copyrightwarning' => "Iltimos, {{SITENAME}}ga yuklangan har qanday axborot $2 ostida tarqatilishiga diqqat qiling (batafsil ma'lumot uchun $1ni ko'ring).
Agar yozganlaringiz keyinchalik tahrir qilinishi va qayta tarqatilishiga rozi bo'lmasangiz, u holda bu yerga yozmang.<br />
Siz shuningdek bu yozganlaringiz sizniki yoki erkin litsenziya ostida ekanligini va'da qilmoqdasiz.
'''MUALLIFLIK HUQUQLARI BILAN HIMOYALANGAN ISHLARNI ZINHOR BERUXSAT YUBORMANG!'''",
'copyrightwarning2' => "Iltimos, shuni esda tutingki, {{SITENAME}} sahifalaridagi barcha matnlar boshqa foydalanuvchilar tomonidan tahrirlanishi, almashtirilishi yoki o'chirilishi mumkin. Agar siz yozgan ma'lumotlaringizni bunday tartibda tahrirlanishiga rozi bo'lmasangiz, unda uni bu yerga joylashtirmang.<br />
Bundan tashqari, siz ushbu ma'lumotlarni o'zingiz yozgan bo'lishingiz yoki ruxsat berilgan internet manzilidan yoki shu kabi erkin resursdan nusxa olgan bo'lishingiz lozim (Qo'shimcha ma'lumotlar uchun $1 sahifasiga murojaat qiling).
'''MUALLIFLIK HUQUQI QO'YILGAN ISHLARNI RUXSATSIZ BU YERGA JOYLASHTIRMANG!'''",
'templatesused' => 'Ushbu sahifada foydalanilgan {{PLURAL:$1|andoza|andozalar}}:',
'templatesusedpreview' => 'Ushbu sahifada foydalanilgan {{PLURAL:$1|andoza|andozalar}}:',
'templatesusedsection' => "Ushbu bo'limda foydalanilgan {{PLURAL:$1|andoza|andozalar}}:",
'template-protected' => '(himoyalangan)',
'template-semiprotected' => '(yarim-himoyalangan)',
'hiddencategories' => 'Ushbu sahifa {{PLURAL:$1|1 yashirin turkum|$1 yashirin turkumlar}}ga kiradi:',
'nocreatetext' => 'Ushbu saytda yangi sahifalar yaratish taqiqlagan.
Ortga qaytib, mavjud sahifani tahrirlashingiz yoki [[Special:UserLogin|tizimga kirishingiz]] mumkin.',
'nocreate-loggedin' => "Sizda yangi sahifalar yaratishga ruxsat yo'q.",
'sectioneditnotsupported-title' => "Bo'limlarni tahrirlash imkoniyati yo'q",
'sectioneditnotsupported-text' => "Ushbu sahifada bo'limlarni tahrirlash imkoniyati yo'q.",
'permissionserrors' => 'Ruxsat huquqida xato',
'permissionserrorstext-withaction' => "Sizda quyidagi {{PLURAL:$1|sabab|sabablar}}ga koʻra '''$2'''ga ruxsat mavjud emas:",
'recreate-moveddeleted-warn' => "'''Diqqat: Siz avval yoʻqotilgan sahifani yana yaratmoqchisiz.'''

Bu sahifani yaratishda davom etishdan avval uning nega avval yoʻqotilgani bilan qiziqib koʻring.
Qulaylik uchun quyida yoʻqotilish qaydlari keltirilgan:",
'moveddeleted-notice' => 'Bu sahifa oʻchirilgan.
Maʼlumot uchun quyida oʻchirish va qayta nomlash jurnallaridan mos yozuvlar keltirilgan.',
'log-fulllog' => "Qaydlarni to'liq ko'rish",
'edit-conflict' => "Tashrirlash to'qnashuvi.",
'defaultmessagetext' => "Boshlang'ich matn",

# Parser/template warnings
'post-expand-template-inclusion-warning' => "'''Diqqat:''' Qo'llanilayotgan andozalarning jami hajmi juda katta.
Ayrim andozalar qo'shilmaydi.",
'post-expand-template-inclusion-category' => "Qo'llaniladigan andozalarning mumkin bo'lgan miqdoridan oshgan sahifalar",
'post-expand-template-argument-category' => "Andozalarning to'ldirilmagan o'zgaruvchilariga ega sahifalar",

# "Undo" feature
'undo-summary' => '[[Special:Contributions/$2|$2]] tomonidan qilingan $1 tahriri qaytarildi ([[User talk:$2|mun.]])',

# History pages
'viewpagelogs' => 'Ushbu sahifaga doir qaydlarni koʻrsat',
'nohistory' => 'Ushbu sahifa uchun oʻzgarishlar tarixi mavjud emas.',
'currentrev' => 'Hozirgi koʻrinishi',
'currentrev-asof' => '$1dagi, joriy koʻrinishi',
'revisionasof' => '$1 paytdagi koʻrinishi',
'revision-info' => '$1; $2 dagi versiya',
'previousrevision' => '←Avvalgi koʻrinishi',
'nextrevision' => 'Yangiroq koʻrinishi→',
'currentrevisionlink' => 'Hozirgi koʻrinishi',
'cur' => 'joriy',
'next' => 'keyingi',
'last' => 'oxirgi',
'page_first' => 'birinchi',
'page_last' => 'oxirgi',
'histlegend' => 'Farqlar: solishtirish uchun kerakli radiobokslarni belgilang va pastdagi tugmani yoki Enterni bosing.<br />
Bu yerda: (joriy) = hozirgi koʻrinish bilan farq,
(oxirgi) = avvalgi koʻrinish bilan farq, k = kichkina tahrir.',
'history-fieldset-title' => 'Tarixni koʻrish',
'history-show-deleted' => 'Faqat o‘chirilganlari',
'histfirst' => 'Eng avvalgi',
'histlast' => 'Eng soʻnggi',
'historysize' => '({{PLURAL:$1|1 bayt|$1 bayt}})',
'historyempty' => '(boʻsh)',

# Revision feed
'history-feed-title' => 'Oʻzgarishlar tarixi',
'history-feed-description' => 'Vikidagi mazkur sahifaning oʻzgarishlar tarixi',
'history-feed-item-nocomment' => '$1 $2 da',

# Revision deletion
'rev-deleted-comment' => "(tahrir izohi o'chirildi)",
'rev-deleted-user' => '(muallif nomi oʻchirilgan)',
'rev-deleted-event' => "(qayd yozuvi o'chirildi)",
'rev-delundel' => 'koʻrsatish/yashirish',
'rev-showdeleted' => 'koʻrsatish',
'revdelete-show-file-submit' => 'Ha',
'revdelete-hide-text' => 'Sahifaning ushbu versiyasi matnini yashirish',
'revdelete-radio-same' => "(o'zgartirilmasin)",
'revdelete-radio-set' => 'Ha',
'revdelete-radio-unset' => "Yo'q",
'revdelete-log' => 'Sabab:',
'revdel-restore' => "Ko'rinuvchanlikni o'zgartirish",
'revdel-restore-deleted' => "o'chirilgan versiyalar",
'revdel-restore-visible' => "ko'rinuvchan versiyalar",
'revdelete-otherreason' => 'Boshqa/qoʻshimcha sabab:',
'revdelete-reasonotherlist' => 'Boshqa sabab',

# History merging
'mergehistory' => 'Tahrirlar tarixlarini birlashtirish',
'mergehistory-box' => 'Ikkita sahifa tahrirlari tarixini birlashtirish:',
'mergehistory-from' => 'Manba sahifa:',
'mergehistory-into' => "Mo'ljal sahifa:",
'mergehistory-list' => 'Birlashtiriladigan tahrirlar tarixi',
'mergehistory-go' => "Birlashtiriladigan tahrirlarni ko'rsatish",
'mergehistory-submit' => 'Tahrirlarni birlashtirish',
'mergehistory-reason' => 'Sabab:',

# Merge log
'mergelog' => 'Birlashtirish qaydlari',
'pagemerge-logentry' => "[[$1]] va [[$2]]lar birlashtirildi ($3 gacha bo'lgan versiyalar)",
'revertmerge' => "Bo'lish",

# Diffs
'history-title' => '$1 - oʻzgarishlar tarixi',
'difference-title' => '$1 — versiyalar orasidagi farq',
'difference-title-multipage' => '"$1" va "$2" sahifalar orasidagi farq',
'difference-multipage' => '(Sahifalar orasidagi farq)',
'lineno' => 'Qator $1:',
'compareselectedversions' => 'Tanlangan versiyalarni solishtir',
'showhideselectedversions' => "Tanlangan versiyalarni ko'rsatish/yashirish",
'editundo' => 'qaytarish',
'diff-multi' => "({{PLURAL:$2|$2 ta foydalanuvching}} {{PLURAL:$1|$1 ta oraliq versiyasi|$1 ta oraliq versiyalari}} ko'rsatilmadi)",

# Search results
'searchresults' => 'Qidiruv natijalari',
'searchresults-title' => '"$1" uchun qidiruv natijalari',
'searchresulttext' => '{{SITENAME}}da qidirish haqida qoʻshimcha maʼlumot olish uchun [[{{MediaWiki:Helppage}}|yordam]] sahifasiga qarang.',
'searchsubtitle' => '\'\'\'[[:$1]]\'\'\'ni qidirdingiz ([[Special:Prefixindex/$1|"$1" bilan boshlanadigan sahifalar]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|"$1"ga bogʻlangan sahifalar]])',
'searchsubtitleinvalid' => "'''$1'''ni qidirdingiz",
'toomanymatches' => "Juda ko'p o'xshashliklar topildi, iltimos, boshqa so'rov bilan urinib ko'ring",
'titlematches' => 'Sahifalar nomlaridagi mos kelishlar',
'notitlematches' => 'Bunday sarlavha topilmadi',
'textmatches' => 'Sahifalar matnlaridagi mos kelishlar',
'notextmatches' => 'Bunday matn topilmadi',
'prevn' => 'oldingi {{PLURAL:$1|$1}}',
'nextn' => 'keyingi {{PLURAL:$1|$1}}',
'prevn-title' => 'Avvalgi $1 {{PLURAL:$1|natija|natijalar}}',
'nextn-title' => 'Keyingi $1 {{PLURAL:$1|natija|natijalar}}',
'shown-title' => 'Sahifada $1 ta {{PLURAL:$1|natija}} koʻrsatish',
'viewprevnext' => 'Koʻrish ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Qidiruv shartlari',
'searchmenu-exists' => "'''Ushbu vikida \"[[:\$1]]\" nomli sahifa mavjud.'''",
'searchmenu-new' => "'''Ushbu vikida \"[[:\$1]]\" sahifasini yarat!'''",
'searchhelp-url' => 'Help:Mundarija',
'searchmenu-prefix' => "[[Special:PrefixIndex/$1|Ushbu prefiks mavjud bo'lgan sahifalarni ko'rsatish]]",
'searchprofile-articles' => 'Asosiy sahifalar',
'searchprofile-project' => 'Yordam va loyiha sahifalari',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Har yerda',
'searchprofile-advanced' => 'Kengaytirilgan',
'searchprofile-articles-tooltip' => '$1da qidirish',
'searchprofile-project-tooltip' => '$1da qidirish',
'searchprofile-images-tooltip' => 'Fayllarni qidir',
'searchprofile-everything-tooltip' => "Barcha sahifalardan (munozara sahifalarini qo'shgan holda) qidirish",
'searchprofile-advanced-tooltip' => 'Belgilangan nomfazolardan qidirish',
'search-result-size' => '$1 ({{PLURAL:$2|1 ta soʻz|$2 ta soʻz}})',
'search-result-category-size' => "$1 {{PLURAL:$1|a'zo|a'zolar}} ($2 {{PLURAL:$2|ostturkum|ostturkumlar}}, $3 {{PLURAL:$3|fayl|fayllar}}).",
'search-result-score' => 'Relavantlik: $1%.',
'search-redirect' => '(yoʻnaltirish $1)',
'search-section' => '($1 boʻlimi)',
'search-suggest' => 'Balki buni nazarda tutgandirsiz: $1',
'search-interwiki-caption' => 'Aloqador loyihalar',
'search-interwiki-default' => '$1 natijalar:',
'search-interwiki-more' => '(yana)',
'search-relatedarticle' => "Bog'liq",
'mwsuggest-disable' => 'Qidiruv takliflarini oʻchirib qoʻyish',
'searcheverything-enable' => 'Barcha nomfazolarda qidir',
'searchrelated' => 'bogʻlangan',
'searchall' => 'barchasi',
'showingresults' => "Quyida №'''$2'''dan boshlab '''$1''' ta {{PLURAL:$1|natija}} ko'rsatildi.",
'showingresultsnum' => "Quyida №'''$2'''dan boshlab '''$1''' ta {{PLURAL:$1|natija}} ko'rsatildi.",
'showingresultsheader' => "$4 uchun {{PLURAL:$5|'''$3'''dan '''$1''' natija|'''$3'''dan '''$1 - $2''' natijalar}}",
'search-nonefound' => 'Talabga javob beradigan natija topilmadi.',
'powersearch' => 'Qidiruv',
'powersearch-legend' => 'Kengaytirilgan qidiruv',
'powersearch-ns' => 'Bu nom-fazolarda izla:',
'powersearch-redir' => 'Qayta yoʻnaltirishlarni koʻrsatish',
'powersearch-field' => 'Qidiruv',
'powersearch-togglelabel' => 'Belgilash:',
'powersearch-toggleall' => 'Hammasini',
'powersearch-togglenone' => 'Hech qaysini',
'search-external' => 'Tashqi qidiruv',

# Preferences page
'preferences' => 'Moslamalar',
'mypreferences' => 'Moslamalarim',
'prefs-edits' => 'Tahrirlar soni:',
'prefsnologin' => "Siz tizimda o'zingizni tanitmadingiz",
'changepassword' => 'Maxfiy soʻzni oʻzgartirish',
'prefs-skin' => 'Tashqi ko‘rinishi',
'skin-preview' => 'Ko‘rib chiqish',
'datedefault' => 'Farqi yoʻq',
'prefs-beta' => 'Beta-imkoniyatlar',
'prefs-datetime' => 'Sana va vaqt',
'prefs-labs' => 'Tajribaviy imkoniyatlar',
'prefs-user-pages' => 'Foydalanuvchi sahifalari',
'prefs-personal' => 'Shaxsiy ma’lumotlar',
'prefs-rc' => 'Yangi o‘zgartirishlar',
'prefs-watchlist' => "Kuzatuv ro'yxati",
'prefs-watchlist-days' => 'Kunlar soni:',
'prefs-watchlist-days-max' => 'Eng ko‘pi bilan $1 {{PLURAL:$1|kun}}',
'prefs-watchlist-edits-max' => 'Eng katta son: 1000',
'prefs-misc' => 'Boshqa moslamalar',
'prefs-resetpass' => 'Maxfiy soʻzni oʻzgartirish',
'prefs-changeemail' => 'Elektron pochta manzilini oʻzgartirish',
'prefs-email' => 'Elektron pochta moslamalari',
'prefs-rendering' => 'Tashqi ko‘rinishi',
'saveprefs' => 'Saqlash',
'resetprefs' => 'Bekor qilish',
'restoreprefs' => 'Barcha moslamalarni dastlabki holatiga qaytarish',
'prefs-editing' => 'Tahrirlash',
'prefs-edit-boxsize' => 'Tahrir oynasining oʻlchami',
'rows' => 'Qatorlar soni:',
'columns' => 'Ustunlar soni:',
'searchresultshead' => 'Qidiruv',
'resultsperpage' => 'Sahifaga topilgan yozuvlar miqdori',
'stub-threshold' => '<a href="#" class="stub">Chala maqolalarga ishorat</a> keltirish uchun pastki chegara (baytlarda):',
'stub-threshold-disabled' => "O'chirib qo'yilgan",
'recentchangesdays' => 'Necha kunlik tahrirlar koʻrsatiladi:',
'recentchangesdays-max' => 'Eng koʻpi — $1 kun',
'recentchangescount' => 'Sukut boʻyicha koʻrsatiladigan tahrirlar soni:',
'prefs-help-recentchangescount' => 'Yangi oʻzgarishlar, tarix va qaydlar uchun.',
'savedprefs' => 'Sizning moslamalaringiz saqlandi.',
'timezonelegend' => 'Vaqt mintaqangiz:',
'localtime' => 'Mahalliy vaqt:',
'timezoneuseserverdefault' => 'Server moslamalaridan foydalanish ($1)',
'timezoneuseoffset' => "Boshqa (siljishni ko'rsating)",
'timezoneoffset' => 'Siljish¹:',
'servertime' => 'Server vaqti:',
'guesstimezone' => "Brauzerdan to'ldirish",
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktika',
'timezoneregion-arctic' => 'Arktika',
'timezoneregion-asia' => 'Osiyo',
'timezoneregion-atlantic' => 'Atlantika okeani',
'timezoneregion-australia' => 'Avstraliya',
'timezoneregion-europe' => 'Yevropa',
'timezoneregion-indian' => 'Hind okeani',
'timezoneregion-pacific' => 'Tinch okeani',
'allowemail' => 'Boshqa foydalanuvchilardan elektron xat olishga ruxsat berish',
'prefs-searchoptions' => 'Qidiruv',
'prefs-namespaces' => 'Nomfazolar',
'defaultns' => 'Aks holda quyidagi nomfazolardan qidirish:',
'default' => 'Sukut boʻyicha',
'prefs-files' => 'Fayllar',
'prefs-custom-css' => 'Shaxsiy CSS',
'prefs-custom-js' => 'Shaxsiy JavaScript',
'prefs-common-css-js' => 'Umumiy CSS/JavaScript (barcha tashqi koʻrinishlar uchun):',
'prefs-emailconfirm-label' => 'Elektron pochta manzilini tasdiqlash:',
'prefs-textboxsize' => 'Tahrir oynasining oʻlchami',
'youremail' => 'E-mail:',
'username' => 'Foydalanuvchi nomi',
'uid' => 'Identifikator:',
'prefs-memberingroups' => 'Qaysi {{PLURAL:$1|guruh|guruhlar}} aʼzosi:',
'prefs-registration' => 'Hisob yaratilgan vaqt:',
'yourrealname' => 'Haqiqiy ism *:',
'yourlanguage' => 'Til:',
'yourvariant' => 'Yozuv turi (lotin/kirill):',
'prefs-help-variant' => 'Ushbu vikidagi sahifalar qaysi tilda va yozuvda koʻrsatilishi.',
'yournick' => 'Yangi imzo:',
'prefs-help-signature' => 'Munozara sahifalarida imzo "<nowiki>~~~~</nowiki>" orqali qoʻyiladi, u sizning imzoingiz va joriy vaqtga aylantiriladi.',
'yourgender' => 'Jinsi:',
'gender-unknown' => 'Koʻrsatilmagan',
'gender-male' => 'Erkak',
'gender-female' => 'Ayol',
'prefs-help-gender' => 'Koʻrsatilishi majburiy emas: taʼminot xizmatining foydalanuvchi jinsiga qarab yuboradigan ayrim xabarlarida foydalaniladi.
Bu maʼlumot hammaga koʻrsatiladi.',
'email' => 'E-mail:',
'prefs-help-realname' => "Haqiqiy ism (ixtiyoriy maydon).
Agar siz uni ko'rsatsangiz, undan sahifa tahriri kim tomonidan kiritilganligini ko'rsatish uchun foydalaniladi.",
'prefs-help-email' => 'Elektron pochta manzilini koʻrsatish majburiy emas, lekin u siz maxfiy soʻzni unutib qoʻysangiz kerak boʻladi.',
'prefs-help-email-others' => 'Shuningdek, u boshqa foydalanuvchilarga Siz bilan shaxsiy sahifangiz yoki munozara sahifangizdagi havola orqali bogʻlanish imkonini beradi. Bunda Siz bilan bogʻlanmoqchi boʻlgan foydalanuvchiga pochta manzilingiz koʻrsatilmaydi.',
'prefs-help-email-required' => 'E-mail manzilni koʻrsatish shart emas',
'prefs-info' => 'Asosiy maʼlumot',
'prefs-i18n' => 'Baynalmilallashtirish',
'prefs-signature' => 'Imzo',
'prefs-dateformat' => 'Sana formati',
'prefs-timeoffset' => 'Vaqt farqi',
'prefs-advancedediting' => 'Qoʻshimcha moslamalar',
'prefs-advancedrc' => 'Qoʻshimcha moslamalar',
'prefs-advancedrendering' => 'Qoʻshimcha moslamalar',
'prefs-advancedsearchoptions' => 'Qoʻshimcha moslamalar',
'prefs-advancedwatchlist' => 'Qoʻshimcha moslamalar',
'prefs-displayrc' => 'Tasvirlash moslamalari',
'prefs-displaysearchoptions' => 'Tasvirlash moslamalari',
'prefs-displaywatchlist' => 'Tasvirlash moslamalari',
'prefs-diffs' => 'Versiyalar farqi',

# User rights
'editusergroup' => 'Foydalanuvchi guruxlarni taxrirlash',
'userrights-groupsmember' => 'Aʼzolik:',
'userrights-groupsmember-auto' => "Noaniq a'zo",
'userrights-reason' => 'Sabab:',
'userrights-changeable-col' => "Siz o'zgartirishingiz mumkin bo'lgan guruhlar",
'userrights-unchangeable-col' => "Siz o'zgartira olmaydigan guruhlar",

# Groups
'group' => 'Guruh',
'group-user' => 'Foydalanuvchilar',
'group-autoconfirmed' => 'Tasdiqlangan foydalanuvchilar',
'group-bot' => 'Botlar',
'group-sysop' => 'Administratorlar',
'group-bureaucrat' => 'Rasmiyatchilar',
'group-suppress' => 'Tekshiruvchilar',
'group-all' => '(hamma)',

'group-user-member' => '{{GENDER:$1|foydalanuvchi}}',
'group-autoconfirmed-member' => '{{GENDER:$1|avtotasdiqlangan foydalanuvchi}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|administrator}}',
'group-bureaucrat-member' => '{{GENDER:$1|rasmiyatchi}}',
'group-suppress-member' => '{{GENDER:$1|tekshiruvchi}}',

'grouppage-user' => '{{ns:project}}:Foydalanuvchilar',
'grouppage-autoconfirmed' => '{{ns:project}}:Tasdiqlangan foydalanuvchilar',
'grouppage-bot' => '{{ns:project}}:Botlar',
'grouppage-sysop' => '{{ns:project}}:Administratorlar',
'grouppage-bureaucrat' => '{{ns:project}}:Rasmiyatchilar',
'grouppage-suppress' => '{{ns:project}}:Tekshiruvchilar',

# Rights
'right-read' => "Sahifalarni o'qish",
'right-edit' => 'Sahifalarni tahrirlash',

# Special:Log/newusers
'newuserlogpage' => 'Foydalanuvchilarni roʻyxatga olish qaydlari',
'newuserlogpagetext' => 'Yaqinda roʻyxatdan oʻtgan foydalanuvchilar roʻyxati',

# User rights log
'rightslog' => 'Foydalanuvchi huquqlari koʻrsatilgan qaydlar',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'ushbu sahifani tahrirlash',
'action-move' => 'bu sahifani koʻchirish',
'action-move-subpages' => 'Bu sahifani va uning ostsahifalarini koʻchirish',
'action-sendemail' => "elektron xatlar jo'natish",

# Recent changes
'nchanges' => "$1 {{PLURAL:$1|o'zgarish|o'zgarishlar}}",
'recentchanges' => 'Yangi oʻzgarishlar',
'recentchanges-legend' => 'Yangi oʻzgarishlar moslamalari',
'recentchanges-summary' => 'Bu sahifada siz oxirgi oʻzgarishlarni koʻrishingiz mumkin',
'recentchanges-feed-description' => 'Vikida mazkur oqimdagi oxirgi oʻzgarishlarni kuzatish',
'recentchanges-label-newpage' => 'Bu tahrir orqali yangi sahifa yaratildi',
'recentchanges-label-minor' => 'Bu kichik tahrir',
'recentchanges-label-bot' => 'Bu tahrirni bot bajardi',
'recentchanges-label-unpatrolled' => 'Bu tahrir hali tekshirilmagan',
'rcnote' => "Quyida $4 soat $5 ga koʻra oxirgi '''$2''' kun davomida sodir boʻlgan {{PLURAL:$1|'''1''' oʻzgarish|'''$1''' oʻzgarishlar}} koʻrsatilgan.",
'rcnotefrom' => "Quyida <strong>$2</strong> dan (<strong>$1</strong> gacha) bo'lgan o'zgarishlar keltirilgan.",
'rclistfrom' => '$1 dan boshlab yangi oʻzgarishlarni koʻrsat.',
'rcshowhideminor' => 'Kichik tahrirlarni $1',
'rcshowhidebots' => '$1 ta bot',
'rcshowhideliu' => 'Ro‘yxatdan o‘tgan foydalanuvchilar: $1 ta',
'rcshowhideanons' => 'Anonim foydalanuvchilar: $1 ta',
'rcshowhidepatr' => 'Tekshirilgan tahrirlarni $1',
'rcshowhidemine' => 'Oʻz tahrirlarimni $1',
'rclinks' => 'Oxirgi $2 kun ichida sodir boʻlgan $1 oʻzgarishlar koʻrsatildi.<br />$3',
'diff' => 'farq',
'hist' => 'tarix',
'hide' => 'Yashir',
'show' => 'Koʻrsat',
'minoreditletter' => 'k',
'newpageletter' => 'Y',
'boteditletter' => 'b',
'newsectionsummary' => '/* $1 */ yangi mavzu',
'rc-enhanced-expand' => 'Tasfilotlarni koʻrsatish (JavaScript talab qilinadi)',
'rc-enhanced-hide' => 'Tafsilotlolarni yashirish',
'rc-old-title' => 'dastlab "$1" sifatida yaratilgan',

# Recent changes linked
'recentchangeslinked' => 'Bogʻlangan oʻzgarishlar',
'recentchangeslinked-feed' => 'Bogʻliq oʻzgarishlar',
'recentchangeslinked-toolbox' => 'Bogʻliq oʻzgarishlar',
'recentchangeslinked-title' => '"$1"ga aloqador oʻzgarishlar',
'recentchangeslinked-noresult' => 'Berilgan davrda bogʻlangan sahifalarda oʻzgarishlar boʻlmagan.',
'recentchangeslinked-summary' => "Ushbu maxsus sahifa unga bogʻlangan sahifalardagi soʻnggi oʻzgarishlarni koʻrsatadi. [[Special:Watchlist|Kuzatuv roʻyxatingizdagi]] sahifalar '''qalin''' qilib koʻrsatilgan.",
'recentchangeslinked-page' => 'Sahifa nomi:',
'recentchangeslinked-to' => "Teskarisiga, ko'rsatilgan sahifaga yo'naltirilgan sahifalardagi o'zgarishlarni ko'rish",

# Upload
'upload' => 'Fayl yuklash',
'uploadbtn' => 'Fayl yuklash',
'uploaderror' => 'Yuklashda xatolik',
'uploadlogpage' => 'Yuklash qaydlari',
'filename' => 'Fayl nomi',
'filedesc' => 'Qisqa izoh',
'fileuploadsummary' => 'Qisqa izoh:',
'filereuploadsummary' => 'Fayldagi oʻzgarishlar:',
'filestatus' => 'Tarqatish shartlari:',
'filesource' => 'Manba:',
'uploadedfiles' => 'Yuklangan fayllar',
'uploadedimage' => '"[[$1]]"ni yukladi',
'overwroteimage' => '"[[$1]]"ning yangi versiyasini yukladi',

'license' => 'Litsenziyalash:',
'license-header' => 'Litsenziyalash',

# Special:ListFiles
'imgfile' => 'fayl',
'listfiles' => 'Fayllar roʻyxati',
'listfiles_thumb' => 'Miniatura',
'listfiles_date' => 'Sana',
'listfiles_name' => 'Nomi',
'listfiles_user' => 'Foydalanuvchi',
'listfiles_size' => 'Oʻlchami',
'listfiles_description' => 'Taʼrif',
'listfiles_count' => 'Versiyalar',

# File description page
'file-anchor-link' => 'Fayl',
'filehist' => 'Fayl tarixi',
'filehist-help' => 'Faylning biror paytdagi holatini koʻrish uchun tegishli sana/vaqtga bosingiz.',
'filehist-deleteall' => "barini o'chirish",
'filehist-deleteone' => 'o‘chirish',
'filehist-revert' => 'qaytarish',
'filehist-current' => 'joriy',
'filehist-datetime' => 'Sana/Vaqt',
'filehist-thumb' => 'Miniatura',
'filehist-thumbtext' => '$1 dagi versiya uchun tasvir',
'filehist-nothumb' => "Miniatura yo'q",
'filehist-user' => 'Foydalanuvchi',
'filehist-dimensions' => 'Oʻlchamlari',
'filehist-filesize' => 'Fayl hajmi',
'filehist-comment' => 'Izoh',
'filehist-missing' => 'Fayl mavjud emas',
'imagelinks' => 'Fayllarga ishoratlar',
'linkstoimage' => 'Bu faylga quyidagi {{PLURAL:$1|sahifa|$1 sahifalar}} bogʻlangan:',
'nolinkstoimage' => 'Bu faylga bogʻlangan sahifalar yoʻq.',
'sharedupload' => "Ushbu fayl $1dan va boshqa loyihalarda ham qo'llanilishi mumkin.",
'sharedupload-desc-here' => 'Ushbu fayl $1dan boʻlib, boshqa loyihalarda ham ishlatilishi mumkin.
Uning [$2 fayl tavsifi sahifasidan] olingan tavsifi quyida keltirilgan.',
'uploadnewversion-linktext' => 'Bu faylning yangi versiyasini yuklash',

# File reversion
'filerevert-comment' => 'Sabab:',

# File deletion
'filedelete-comment' => 'Sabab:',
'filedelete-submit' => 'O‘chirish',

# MIME search
'mimetype' => 'MIME-tur:',
'download' => 'yuklash',

# Unused templates
'unusedtemplates' => 'Ishlatilinmagan andozalar',

# Random page
'randompage' => 'Tasodifiy sahifa',

# Statistics
'statistics' => 'Statistika',
'statistics-header-pages' => 'Sahifalar statistikasi',
'statistics-header-edits' => 'Tahrirlar statistikasi',
'statistics-header-users' => 'Foydalanuvchilar statistikasi',
'statistics-articles' => 'Maqolalar',
'statistics-pages' => 'Sahifalar',
'statistics-pages-desc' => 'Ushbu vikidagi barcha sahifalar, jumladan munozara, yoʻnaltirish va hk.',
'statistics-files' => 'Yuklangan fayllar',
'statistics-edits' => '{{SITENAME}} qurilganidan beri qilingan tahrirlar',
'statistics-edits-average' => 'Sahifa boshiga tahrirlar',
'statistics-users' => 'Qayd etilgan [[Special:ListUsers|foydalanuvchilar]]',
'statistics-users-active' => 'Faol foydalanuvchilar',
'statistics-users-active-desc' => 'Oxirgi $1 kun ichida kamida bitta amal qilgan foydalanuvchilar',

'disambiguationspage' => '{{ns:template}}:Disambig',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|bayt}}',
'ncategories' => '$1 {{PLURAL:$1|turkum|turkumlar}}',
'nmembers' => "$1 {{PLURAL:$1|ta a'zo}}",
'lonelypages' => 'Yetim sahifalar',
'uncategorizedpages' => 'Turkumlashtirilmagan sahifalar',
'uncategorizedcategories' => 'Turkumlashtirilmagan turkumlar',
'uncategorizedimages' => 'Turkumlashtirilmagan fayllar',
'uncategorizedtemplates' => 'Turkumlashtirilmagan andozalar',
'unusedcategories' => 'Ishlatilinmagan turkumlar',
'unusedimages' => 'Ishlatilinmagan fayllar',
'wantedcategories' => 'Talab qilinayotgan turkumlar',
'mostcategories' => 'Eng koʻp turkumli sahifalar',
'prefixindex' => 'Prefiksli barcha sahifalar',
'protectedpages' => 'Himoyalangan sahifalar',
'listusers' => 'Foydalanuvchilar roʻyxati',
'usercreated' => "$1 $2da {{GENDER:$3|ro'yxatdan o'tdi}}",
'newpages' => 'Yangi sahifalar',
'move' => 'Ko‘chirish',
'movethispage' => 'Bu sahifani koʻchirish',
'pager-newer-n' => '{{PLURAL:$1|yangiroq 1|yangiroq $1}}',
'pager-older-n' => '{{PLURAL:$1|eskiroq 1|eskiroq $1}}',
'suppress' => 'Bekitish',

# Book sources
'booksources' => 'Kitob manbalari',
'booksources-search-legend' => "Kitob haqida ma'lumot qidirish",
'booksources-go' => 'O‘tish',

# Special:Log
'specialloguserlabel' => 'Ijrochi:',
'speciallogtitlelabel' => 'Moʻljal (nom yoki foydalanuvchi):',
'log' => 'Qaydlar',
'all-logs-page' => 'Barcha ochiq qaydlar',
'logempty' => 'Qaydnomada mos keladigan yozuvlar mavjud emas.',
'log-title-wildcard' => 'Shu matndan boshlanuvchi sarlavhalarni izlash',

# Special:AllPages
'allpages' => 'Barcha sahifalar',
'alphaindexline' => '$1 dan $2 ga',
'nextpage' => 'Keyingi sahifa ($1)',
'prevpage' => 'Avvalgi sahifa ($1)',
'allpagesfrom' => 'Quyidagidan boshlanuvchi sahifalarni koʻrsatish:',
'allarticles' => 'Barcha sahifalar',
'allnotinnamespace' => 'Barcha sahifalar ("$1" nomfazolaridan tashqari)',
'allpagesprev' => 'Oldingi',
'allpagesnext' => 'Keyingi',
'allpagessubmit' => 'Oʻtish',
'allpagesprefix' => 'Shunday prefiksli sahifalarni koʻrsatish:',
'allpages-hide-redirects' => 'Yoʻnaltirishlarni yashirish',

# SpecialCachedPage
'cachedspecial-refresh-now' => "Oxirgi versiyasini ko'rish",

# Special:Categories
'categories' => 'Turkumlar',
'categoriespagetext' => 'The following {{PLURAL:$1|category contains|categories contain}} pages or media.
[[Special:UnusedCategories|Unused categories]] are not shown here.
Also see [[Special:WantedCategories|wanted categories]].',
'categoriesfrom' => 'Quyidagidan boshlanuvchi turkumlarni koʻrsatish:',
'special-categories-sort-count' => 'miqdori bo‘yicha saralash',
'special-categories-sort-abc' => 'alifbo bo‘yicha saralash',

# Special:DeletedContributions
'deletedcontributions' => 'Foydalanuvchining o‘chirilgan hissasi',
'deletedcontributions-title' => 'O‘chirilgan foydalanuvchilar hissalari',
'sp-deletedcontributions-contribs' => 'hissa',

# Special:LinkSearch
'linksearch' => 'Tashqi havolalarni qidirish',
'linksearch-pat' => 'Qidiruv uchun andaza',
'linksearch-ns' => 'Nomfazo:',
'linksearch-ok' => 'Qidirish',
'linksearch-line' => '$2 ichidan $1 ga havola',

# Special:ListUsers
'listusersfrom' => 'Quyidagidan boshlanuvchi foydalanuvchilarni koʻrsatish:',
'listusers-submit' => 'Koʻrsatish',
'listusers-noresult' => 'Foydalanuvchilar topilmadi.',
'listusers-blocked' => '(chetlashtirilgan)',

# Special:ActiveUsers
'activeusers' => 'Faol foydalanuvchilar roʻyxati',
'activeusers-from' => 'Quyidagidan boshlanuvchi foydalanuvchilarni koʻrsatish:',
'activeusers-hidebots' => 'Botlarni yashirish',
'activeusers-hidesysops' => 'Maʼmurlarni yashirish',
'activeusers-noresult' => 'Foydalanuvchilar topilmadi.',

# Special:ListGroupRights
'listgrouprights' => 'Foydalanuvchilar guruhi huquqlari',
'listgrouprights-group' => 'Guruh',
'listgrouprights-rights' => 'Huquqlar',
'listgrouprights-helppage' => 'Help:Guruhlar huquqlari',
'listgrouprights-members' => '(a’zolar ro‘yxati)',

# Email user
'emailuser' => 'Foydalanuvchiga maktub',
'emailuser-title-target' => 'Ushbu {{GENDER:$1|foydalanuvchi}}ga maktub joʻnatish',
'emailuser-title-notarget' => 'Foydalanuvchiga elektron maktub yozish',
'emailpage' => 'Foydalanuvchiga maktub',
'usermailererror' => 'Elektron pochta xabarini joʻnatishda xatolik yuz berdi:',
'defemailsubject' => '{{SITENAME}} — $1 tomonidan maktub',
'usermaildisabled' => 'Foydalanuvchi elektron pochtasi o‘chirilgan',
'noemailtitle' => 'Elektron pochta manzili mavjud emas',
'noemailtext' => 'Bu foydalanuvchi e-mail manzil koʻrsatgani yoʻq.',
'nowikiemailtitle' => 'Maktub joʻnatishga ruxsat yoʻq',
'emailtarget' => 'Oluvchi ishtirokchining ismini kiriting',
'emailusername' => 'Foydalanuvchi nomi:',
'emailusernamesubmit' => "Jo'natish",
'email-legend' => "Boshqa {{SITENAME}} ishtirokchisiga xat jo'natish",
'emailfrom' => 'Kimdan:',
'emailto' => 'Kimga:',
'emailsubject' => 'Sarlavha:',
'emailmessage' => 'Xabar',
'emailsend' => 'Joʻnatish',
'emailccme' => 'Maktub nusxasi mening elektron pochtamga joʻnatilsin',
'emailccsubject' => '$1ga maktubingizning nusxasi: $2',
'emailsent' => "Xat jo'natildi",
'emailsenttext' => "Sizning elektron maktubingiz jo'natildi.",

# User Messenger
'usermessage-summary' => 'Tizimli xabar qoldirish.',
'usermessage-editor' => 'Tizimli etkazish',

# Watchlist
'watchlist' => 'Kuzatuv roʻyxatim',
'mywatchlist' => 'Kuzatuv roʻyxatim',
'watchlistfor2' => '$1 uchun $2',
'nowatchlist' => "Kuzatuv ro'yxatingizda hech narsa yo'q.",
'watchnologin' => "Siz tizimda o'zingizni tanishtirmadingiz",
'addwatch' => "Kuzatuv ro'yxatiga qo'shish",
'addedwatchtext' => "\"[[:\$1]]\" sahifasi sizning [[Special:Watchlist|kuzatuv ro'yxatingizga]] qo'shildi. Bu sahifada va unga mos munozara sahifasida bo'ladigan kelajakdagi o'zgarishlar bu yerda ro'yxatga olinadi, hamda bu sahifa topish qulay bo'lishi uchun [[Special:RecentChanges|yangi o'zgarishlar ro'yxati]]da '''qalin''' harflar bilan ko'rsatiladi.

Agar siz bu sahifani kuzatuv ro'yxatingizdan o'chirmoqchi bo'lsangiz \"Kuzatmaslik\" yozuvini bosing.",
'removewatch' => "Kuzatuv ro'yxatidan o'chirish",
'removedwatchtext' => '"[[:$1]]" sahifasi [[Special:Watchlist|kuzatuv roʻyxatingizdan]] oʻchirildi.',
'watch' => 'Kuzatish',
'watchthispage' => 'Sahifani kuzatish',
'unwatch' => 'Kuzatmaslik',
'unwatchthispage' => "Kuzatuvni to'xtatish",
'notanarticle' => 'Maqola emas',
'watchlist-details' => "Sizning kuzatuv ro'yxatingizda $1 {{PLURAL:$1|ta sahifa}} (munozara sahifalarini hisobga olmaganda)",
'wlnote' => "Below {{PLURAL:$1|is the last change|are the last '''$1''' changes}} in the last {{PLURAL:$2|hour|'''$2''' hours}}, as of $3, $4.",
'wlshowlast' => 'Oxirgi $1 soatdagi $2 kundagi tahrirlarni ko‘rsatish. $3 tahrirlarni ko‘rsatish',
'watchlist-options' => "Kuzatuv ro'yxati moslamalari",

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Kuzatish...',
'unwatching' => "Kuzatuv ro'yxatidan o'chirish...",

'enotif_mailer' => "{{SITENAME}} Pochta orqali e'lon qilish xizmati",
'enotif_reset' => "Hamma sahifalarni ko'rib chiqilgan deb belgilash",
'enotif_impersonal_salutation' => '{{SITENAME}} ishtirokchisi',
'enotif_subject_deleted' => '{{SITENAME}} loyihasining $1 nomli sahifasi foydalanuvchi {{gender:$2|$2}} tomonidan o‘chirildi',
'enotif_subject_created' => '{{SITENAME}} loyihasining $1 nomli sahifasi foydalanuvchi {{gender:$2|$2}} tomonidan yaratildi',
'enotif_subject_moved' => '{{SITENAME}} loyihasining $1 nomli sahifasi foydalanuvchi {{gender:$2|$2}} tomonidan qayta nomlandi',
'enotif_subject_restored' => '{{SITENAME}} loyihasining $1 nomli sahifasi foydalanuvchi {{gender:$2|$2}} tomonidan tiklandi',
'enotif_subject_changed' => '{{SITENAME}} loyihasining $1 nomli sahifasi foydalanuvchi {{gender:$2|$2}} tomonidan oʻzgartirildi',
'enotif_body_intro_deleted' => '{{SITENAME}} loyihasining $1 nomli sahifasi $PAGEEDITDATEda foydalanuvchi {{gender:$2|$2}} tomonidan o‘chirildi, qarang: $3.',
'enotif_body_intro_created' => '{{SITENAME}} loyihasining $1 nomli sahifasi $PAGEEDITDATEda foydalanuvchi {{gender:$2|$2}} tomonidan yaratildi, joriy variantini ko‘rish uchun $3 ga qarang.',
'enotif_body_intro_moved' => '{{SITENAME}} loyihasining $1 nomli sahifasi $PAGEEDITDATEda foydalanuvchi {{gender:$2|$2}} tomonidan qayta nomlandi, joriy variantini ko‘rish uchun $3 ga qarang.',
'enotif_body_intro_restored' => '{{SITENAME}} loyihasining $1 nomli sahifasi $PAGEEDITDATEda foydalanuvchi {{gender:$2|$2}} tomonidan tiklandi, joriy variantini ko‘rish uchun $3 ga qarang.',
'enotif_body_intro_changed' => '{{SITENAME}} loyihasining $1 nomli sahifasi $PAGEEDITDATEda foydalanuvchi {{gender:$2|$2}} tomonidan o‘zgartirildi, joriy variantini ko‘rish uchun $3 ga qarang.',
'enotif_lastvisited' => "Oxirgi tashrifingizdan buyon sodir bo'lgan barcha o'zgarishlarni ko'rish uchun $1 ga qarang.",
'enotif_lastdiff' => "O'zgarishlar bilan tanishish uchun $1 ga qarang.",
'enotif_anon_editor' => 'anonim foydalanuvchi $1',
'enotif_body' => 'Hurmatli $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

O‘zgarish bo‘yicha qisqacha izoh: $PAGESUMMARY $PAGEMINOREDIT

Tahrirlovchiga murojaat qilish:
el. pochta: $PAGEEDITOR_EMAIL
viki: $PAGEEDITOR_WIKI

Agar siz sahifaga o‘tib ko‘rmasangiz, u holda uning keyingi o‘zgarishlari bo‘yicha boshqa bildirish xabarlari kelmaydi. Siz, shuningdek o‘z kuzatuv ro‘yxatingizda barcha sahifalar uchun xabar berish moslamasini o‘chirishingiz mumkin.

{{SITENAME}}ning xabar berish tizimi

--
Xabar berish moslamalarini o‘zgartirish uchun quyidagi havola bo‘yicha o‘ting
{{canonicalurl:{{#special:Preferences}}}}

Oʻz kuzatuv roʻyxatingiz moslamalarini o‘zgartirish uchun quyidagi havola bo‘yicha o‘ting
{{canonicalurl:{{#special:EditWatchlist}}}}

Oʻz kuzatuv roʻyxatingizdan sahifani o‘chirish uchun quyidagi havola bo‘yicha o‘ting
$UNWATCHURL

Qayta aloqa va yordam
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'yaratildi',
'changed' => 'o‘zgartirildi',

# Delete
'deletepage' => "Sahifani o'chirish",
'confirm' => 'Tasdiqlash',
'excontent' => 'tarkibi: "$1"',
'exblank' => 'sahifa boʻsh edi',
'delete-confirm' => '$1 — oʻchirish',
'delete-legend' => 'O‘chirish',
'actioncomplete' => 'Bajarildi',
'actionfailed' => 'Jarayon amalga oshmadi',
'deletedtext' => '"$1" yoʻqotildi.
Yaqinda sodir etilgan yoʻqotishlar uchun $2ni koʻring.',
'dellogpage' => 'Yoʻqotish qaydlari',
'dellogpagetext' => 'Quyida oxirgi oʻchirish qaydlari keltirilgan',
'deletionlog' => 'yoʻqotish qaydlari',
'reverted' => 'Eski holiga keltirildi',
'deletecomment' => 'Sabab:',
'deleteotherreason' => 'Boshqa/qoʻshimcha sabab:',
'deletereasonotherlist' => 'Boshqa sabab',
'delete-edit-reasonlist' => 'Sabablar roʻyxatini tahrirlash',

# Rollback
'rollback' => 'Oʻzgarishlarni eski holiga keltirish',
'rollback_short' => 'Eski holiga keltirish',
'rollbacklink' => 'eski holiga keltirish',
'rollbacklinkcount' => '$1 {{PLURAL:$1| ta tahrir}}ni eski holiga keltirish',
'rollbacklinkcount-morethan' => '$1 {{PLURAL:$1| tadan koʻp tahrir}}ni eski holiga keltirish',
'rollbackfailed' => 'Eski holiga keltirishda xatolik',
'revertpage' => '[[Special:Contributions/$2|$2]] ([[User talk:$2|munozara]]) tahrirlari [[User:$1|$1]] versiyasiga qaytarildi',

# Edit tokens
'sessionfailure-title' => 'Seansda xatolik',

# Protect
'protectlogpage' => 'Himoyalash qaydlari',
'protectedarticle' => '"[[$1]]" sahifasi himoyalandi',
'modifiedarticleprotection' => '"[[$1]]" uchun himoyalash darajasini o\'zgartirdi',
'movedarticleprotection' => 'himoyalash moslamalarini "[[$2]]"dan "[[$1]]"ga o\'tkazdi',
'protect-legend' => 'Himoya oʻrnatishni tasdiqlang',
'protectcomment' => 'Sabab:',
'protectexpiry' => 'Tugaydi:',
'protect-level-sysop' => 'Faqat administratorlar uchun',
'protect-summary-cascade' => 'pog‘onali',
'protect-expiring-local' => '$1da tugaydi',
'protect-expiry-indefinite' => 'muddatsiz',
'protect-othertime' => 'Boshqa vaqt:',
'protect-othertime-op' => 'boshqa vaqt',
'protect-existing-expiry' => 'Joriy tugash vaqti: $2, $3',
'protect-otherreason' => 'Boshqa/qo‘shimcha sabab',
'protect-otherreason-op' => 'Boshqa sabab',
'protect-edit-reasonlist' => "Sabablar ro'yxatini tahrirlash",
'protect-expiry-options' => '1 soat:1 hours,1 kun:1 day,1 hafta:1 week,2 hafta:2 weeks,1 oy:1 month,3 oy:3 months,6 oy:6 months,1 yil:1 year,cheksiz:infinite',
'restriction-type' => 'Huquqlar:',
'restriction-level' => 'Ruxsat etilganlik darajasi:',
'minimum-size' => 'Eng kichik hajm',
'maximum-size' => 'Eng katta hajm:',
'pagesize' => '(bayt)',

# Restrictions (nouns)
'restriction-edit' => 'Tahrirlash',
'restriction-move' => "Ko'chirish",
'restriction-create' => 'Yaratish',
'restriction-upload' => 'Yuklash',

# Restriction levels
'restriction-level-sysop' => "to'liq himoya",
'restriction-level-autoconfirmed' => 'qisman himoya',
'restriction-level-all' => 'barcha darajalar',

# Undelete
'undelete' => "O'chirilgan sahifalarni ko'rish",
'undeletepage' => "O'chirilgan sahifalarni ko'rish va tiklash",
'viewdeletedpage' => "O'chirilgan sahifalarni ko'rish",
'undelete-nodiff' => 'Oldingi versiya topilmadi.',
'undeletebtn' => 'Tiklash',
'undeletelink' => 'ko‘rib chiqish/tiklash',
'undeleteviewlink' => "ko'rib chiqish",
'undeletereset' => 'Tozalash',
'undeleteinvert' => 'Tanlash tartibini almashtirish',
'undeletecomment' => 'Sabab:',
'undelete-search-title' => "O'chirilgan sahifalarni qidirish",
'undelete-search-box' => "O'chirilgan sahifalarni qidirish",
'undelete-search-prefix' => "Bundan boshlangan sahifalarni ko'rsatish:",
'undelete-search-submit' => 'Qidirish',
'undelete-show-file-submit' => 'Ha',

# Namespace form on various pages
'namespace' => 'Nomfazo:',
'invert' => 'Tanlash tartibini almashtirish',
'namespace_association' => 'Bogʻliq nomfazo',
'blanknamespace' => '(asosiy)',

# Contributions
'contributions' => '{{GENDER:$1|Foydalanuvchi}} hissasi',
'contributions-title' => '{{GENDER:$1|Foydalanuvchi}} $1 hissasi',
'mycontris' => 'Hissam',
'contribsub2' => '$1 uchun ($2)',
'nocontribs' => 'Belgilangan shartlarga muvofiq oʻzgarishlar topilmadi',
'uctop' => '(oxirgi)',
'month' => 'Oydan (va avvalroq)',
'year' => 'Yildan (va avvalroq)',

'sp-contributions-newbies' => 'Faqatgina yangi foydalanuvchilarning hissalarini koʻrsat',
'sp-contributions-newbies-sub' => 'Yangi hisob yozuvlaridan',
'sp-contributions-newbies-title' => 'Yangi hisob yozuvlarining hissalari',
'sp-contributions-blocklog' => 'chetlatishlar',
'sp-contributions-deleted' => "o'chirilgan tahrirlar",
'sp-contributions-uploads' => 'yuklamalar',
'sp-contributions-logs' => 'qaydlar',
'sp-contributions-talk' => 'munozara',
'sp-contributions-userrights' => 'foydalanuvchining huquqlarini boshqarish',
'sp-contributions-search' => 'Hissalarni qidirish',
'sp-contributions-username' => 'IP-manzil yoki foydalanuvchi nomi:',
'sp-contributions-toponly' => 'Faqat oxirgi deb hisoblangan tahrirlarni koʻrsat',
'sp-contributions-submit' => 'Qidirish',

# What links here
'whatlinkshere' => "Bu sahifaga bog'langan sahifalar",
'whatlinkshere-title' => '"$1"ga bogʻlangan sahifalar',
'whatlinkshere-page' => 'Sahifa:',
'linkshere' => "Quyidagi sahifalar '''[[:$1]]''' sahifasiga bog'langan:",
'nolinkshere' => "'''[[:$1]]''' sahifasiga hech qaysi sahifa bog‘lanmagan.",
'nolinkshere-ns' => "Tanlangan nomfazoda '''[[:$1]]'''ga bog‘langan sahifalar mavjud emas.",
'isredirect' => 'yoʻnaltiruvchi sahifa',
'istemplate' => 'qoʻshimcha',
'isimage' => 'faylli havola',
'whatlinkshere-prev' => '{{PLURAL:$1|oldingi}} $1',
'whatlinkshere-next' => '{{PLURAL:$1|keyingi}} $1',
'whatlinkshere-links' => '← ishoratlar',
'whatlinkshere-hideredirs' => "$1 qayta yo'naltirishlar",
'whatlinkshere-hidetrans' => '$1 kiritmalar',
'whatlinkshere-hidelinks' => '$1 havolalar',
'whatlinkshere-hideimages' => '$1 fayllar uchun havolalar',
'whatlinkshere-filters' => 'Filtrlar',

# Block/unblock
'autoblockid' => 'Avtochetlashtirish #$1',
'block' => 'Foydalanuvchini muhosara qilish',
'unblock' => "Foydalanuvchiga yo'l ochish",
'blockip' => 'Foydalanuvchini chetlashtir',
'blockip-title' => 'Foydalanuvchini muhosara qilish',
'blockip-legend' => 'Foydalanuvchini muhosara qilish',
'ipadressorusername' => 'IP-manzil yoki foydalanuvchi nomi:',
'ipbexpiry' => 'Tugaydi:',
'ipbreason' => 'Sabab:',
'ipbreasonotherlist' => 'Boshqa sabab',
'ipbreason-dropdown' => "* Chetlashtirishning andazaviy sabablari
** Yolg'on axborot kiritish
** Sahifa matnini o'chirish
** Tashqi saytlarga spam-yo'llanmalar
** Ma'nosiz matn/axlat qo'shish
** Tahdid, ishtirokchilarni ta'qib qilish
** Bir necha hisob yozuvlaridan o'z manfaatlarida foydalanish
** Ishtirokchining nomaqbul ismi",
'ipbsubmit' => 'Ushbu foydalanuvchini chetlashtirish',
'ipbother' => 'Boshqa vaqt:',
'ipboptions' => '2 soat:2 hours,1 kun:1 day,3 kun:3 days,1 hafta:1 week,2 hafta:2 weeks,1 oy:1 month,3 oy:3 months,6 oy:6 months,1 yil:1 year,cheksiz:infinite',
'ipbotheroption' => 'boshqa',
'ipbotherreason' => 'Boshqa/qo‘shimcha sabab',
'ipb-edit-dropdown' => 'Sabablar ro‘yxatini tahrirlash',
'ipb-unblock-addr' => '$1dan toʻsiqni olish',
'unblockip' => 'Foydalanuvchidan to‘siqni olib tashlash',
'ipusubmit' => 'Ushbu chetlashtirishni olib tashlash',
'unblocked' => '[[User:$1|$1]]dan to‘siq olib tashlandi',
'unblocked-range' => '$1dan to‘siq olib tashlandi',
'blocklist' => 'Chetlashtirilgan foydalanuvchilar',
'ipblocklist' => 'Chetlashtirilgan foydalanuvchilar',
'blocklist-timestamp' => 'Sana/vaqt',
'blocklist-target' => 'Maqsad',
'blocklist-expiry' => 'Tugaydi',
'blocklist-by' => 'Chetlashtirgan maʻmur',
'blocklist-params' => 'Chetlashtirish moslamalari',
'blocklist-reason' => 'Sabab',
'ipblocklist-submit' => 'Qidiruv',
'ipblocklist-localblock' => 'Mahalliy chetlashtirish',
'ipblocklist-otherblocks' => 'Boshqa {{PLURAL:$1|chetlashtirishlar}}',
'infiniteblock' => 'muddatsiz',
'expiringblock' => '$1 soat $2da tugaydi',
'anononlyblock' => 'faqat anonimlar',
'noautoblockblock' => 'avtochetlashtirish o‘chirilgan',
'createaccountblock' => 'hisob yozuvi yaratish taqiqlangan',
'emailblock' => "xatlar jo'natish taqiqlandi",
'blocklist-nousertalk' => 'o‘zining munozara sahifasini tahrirlay olmaydi',
'ipblocklist-empty' => 'Toʻsiqlar roʻyxati boʻsh.',
'blocklink' => 'chetlashtirish',
'unblocklink' => "muhosarani (to'sishni) bekor qilish",
'change-blocklink' => "Muhosarani (to'siqni) o'zgartirmoq",
'contribslink' => 'hissa',
'emaillink' => 'e-maktub jo‘natish',
'blocklogpage' => 'Chetlatish qaydlari',
'blocklogentry' => '$2 muddatga [[$1]]ni chetlashtirdi $3',
'block-log-flags-nocreate' => 'hisob ochish toʻxtatilgan',
'block-log-flags-nousertalk' => "o'zining munozara sahifasini tahrirlay olmaydi",
'proxyblocksuccess' => 'Bajarildi.',

# Move page
'move-page' => '$1 — qayta nomlash',
'move-page-legend' => 'Sahifani qayta nomlash',
'movearticle' => 'Sahifani qayta nomlash',
'movenologin' => 'Siz tizimga kirmagansiz',
'newtitle' => 'Yangi nom:',
'move-watch' => 'Ushbu sahifani kuzatuv roʻyxatiga qoʻshish',
'movepagebtn' => 'Sahifani koʻchirish',
'pagemovedsub' => 'Sahifa qayta nomlandi',
'movepage-moved' => '\'\'\'"$1" nomli sahifa "$2" nomli sahifaga koʻchirildi\'\'\'',
'movepage-moved-redirect' => 'Qayta yo‘naltirish yaratildi.',
'movedto' => 'quyidagiga qayta nomlandi',
'movetalk' => 'Mos munozara sahifasini qayta nomlash',
'movelogpage' => 'Koʻchirish qaydlari',
'movesubpage' => '{{PLURAL:$1|Ostsahifa|Ostsahifalar}}',
'movesubpagetext' => 'Ushbu sahifada $1 {{PLURAL:$1| ta ostsahifa}} mavjud.',
'movenosubpage' => 'Bu sahifa ostsahifalarga ega emas.',
'movereason' => 'Sabab:',
'revertmove' => 'qaytarish',
'delete_and_move' => 'O‘chirish va qayta nomlash',
'delete_and_move_confirm' => 'Ha, ushbu sahifa o‘chirilsin',
'move-over-sharedrepo' => '== Fayl allaqachon mavjud ==
Umumiy omborda [[:$1]] mavjud. Faylning bu nomga qayta nomlanishi faylning umumiy omborda to‘silishiga olib keladi.',

# Export
'export' => 'Sahifalar eksporti',
'export-submit' => 'Eksport',
'export-addcattext' => "Shu turkumdan sahifalarni qo'shish:",
'export-addcat' => "Qo'shish",
'export-addnstext' => "Shu nomfazodan sahifalarni qo'shish:",
'export-addns' => "Qo'shish",
'export-download' => 'Fayl sifatida saqlash',
'export-templates' => 'Andozalarni kiritish',
'export-pagelinks' => 'Teranligi quyidagicha bo‘lgan bog‘langan sahifalarni kiritish:',

# Namespace 8 related
'allmessages' => 'Tizim xabarlari',
'allmessagesname' => 'Nomi',
'allmessagesdefault' => 'Boshlangʻich matn',
'allmessagescurrent' => 'Joriy xabar matni',
'allmessages-filter-all' => 'Barcha',
'allmessages-language' => 'Til:',
'allmessages-filter-submit' => 'Oʻtish',

# Thumbnails
'thumbnail-more' => 'Kattalashtir',
'thumbnail_error' => 'Tasvir yaratishda xatolik: $1',

# Import log
'importlogpage' => 'Import qilish qaydlari',
'import-logentry-upload' => '"[[$1]]"ni yuklash yo\'li bilan import qildi',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Foydalanuvchi sahifangiz',
'tooltip-pt-anonuserpage' => 'Siznig ip manzilingiz foydalanuvchi sahifasi',
'tooltip-pt-mytalk' => 'Suhbat sahifangiz',
'tooltip-pt-anontalk' => 'Bu ip manzildan amalga oshirilgan tahrirlar munozarasi',
'tooltip-pt-preferences' => 'Moslamalaringiz',
'tooltip-pt-watchlist' => "Siz kuzatib borayotgan sahifalar ro'yxati.",
'tooltip-pt-mycontris' => 'Hissalaringiz roʻyxati',
'tooltip-pt-login' => 'Bu majburiyat mavjud bo‘lmasa-da, kirishingiz taklif qilinadi.',
'tooltip-pt-anonlogin' => "Bu majburiyat bo'lmasada, kirishingiz taklif qilinadi.",
'tooltip-pt-logout' => 'Chiqish',
'tooltip-ca-talk' => 'Sahifa matni borasida munozara',
'tooltip-ca-edit' => 'Siz bu sahifani tahrirlashingiz mumkin. Iltimos, saqlashdan oldin koʻrib chiqish tugmasidan foydalaning',
'tooltip-ca-addsection' => 'Yangi boʻlim ochish',
'tooltip-ca-viewsource' => 'Bu sahifa himoyalangan. Siz uning manbasini koʻrishingiz mumkin.',
'tooltip-ca-history' => 'Bu sahifaning oʻzgarishlar tarixi',
'tooltip-ca-protect' => 'Bu sahifani himoyalash',
'tooltip-ca-unprotect' => "Ushbu sahifaning himoyasini o'zgaritish",
'tooltip-ca-delete' => 'Ushbu sahifani o‘chirish',
'tooltip-ca-undelete' => "Bu sahifa o'chirilmasdan oldin qilingan tahrirlarni tiklash",
'tooltip-ca-move' => 'Bu sahifani koʻchir',
'tooltip-ca-watch' => "Bu sahifani kuzatuv ro'yxatingizga qo'shish",
'tooltip-ca-unwatch' => "Bu sahifani kuzatuv ro'yxatingizga o'chirish",
'tooltip-search' => '{{SITENAME}}dan qidirish',
'tooltip-search-go' => 'Xuddi shu nomli sahifa bor boʻlsa, uni och',
'tooltip-search-fulltext' => 'Sahifalarda ushbu matnni izlash',
'tooltip-p-logo' => 'Bosh sahifaga o‘tish',
'tooltip-n-mainpage' => 'Bosh sahifaga oʻtish',
'tooltip-n-mainpage-description' => 'Bosh sahifaga o‘tish',
'tooltip-n-portal' => 'Loyiha haqida, nimalar qilishingiz mumkin, nimalarni qayerdan topish mumkin',
'tooltip-n-currentevents' => 'Joriy hodisalar haqida ma’lumot olish',
'tooltip-n-recentchanges' => 'Wikidagi eng so‘nggi o‘zgartirishlar ro‘yxati',
'tooltip-n-randompage' => 'Tasodifiy sahifani yuklash',
'tooltip-n-help' => 'O‘rganish uchun manzil',
'tooltip-t-whatlinkshere' => "Bu sahifaga bog'langan sahifalar ro'yxati",
'tooltip-t-recentchangeslinked' => "Bu sahifa bog'langan sahifalardagi yangi o'zgarishlar",
'tooltip-feed-rss' => "Bu sahifa uchun RSS ta'minot",
'tooltip-feed-atom' => "Bu sahifa uchun Atom ta'minot",
'tooltip-t-contributions' => "Bu foydalanuvchinig qo'shgan hissasini ko'rish",
'tooltip-t-emailuser' => 'Ushbu foydalanuvchiga xat jo‘natish',
'tooltip-t-upload' => 'Rasmlar yoki media fayllar yuklash',
'tooltip-t-specialpages' => 'Maxsus sahifalar ro‘yxati',
'tooltip-t-print' => 'Ushbu sahifaning bosma uchun versiyasi',
'tooltip-t-permalink' => 'Sahifaning ushbu versiyasiga doimiy ishorat',
'tooltip-ca-nstab-main' => 'Sahifani ko‘rish',
'tooltip-ca-nstab-user' => 'Foydalanuvchi sahifasini koʻrish',
'tooltip-ca-nstab-media' => 'Media sahifasini koʻrish',
'tooltip-ca-nstab-special' => 'Bu maxsus sahifa, uni tahrirlay olmaysiz.',
'tooltip-ca-nstab-project' => 'Loyiha sahifasini koʻrish',
'tooltip-ca-nstab-image' => 'Rasm sahifasini koʻrish',
'tooltip-ca-nstab-mediawiki' => 'MediaWiki tizimining xabarini koʻrish',
'tooltip-ca-nstab-template' => 'Andozani koʻrish',
'tooltip-ca-nstab-help' => 'Yordam sahifasini koʻrish',
'tooltip-ca-nstab-category' => 'Turkum sahifasini koʻrish',
'tooltip-minoredit' => 'Kichik o‘zgartirish sifatida belgilash',
'tooltip-save' => 'Oʻzgarishlarni saqlash',
'tooltip-preview' => "O'zgarishlarni saqlash. Iltimos saqlashdan oldin uni ishlating!",
'tooltip-diff' => "Matnga qanday o'zgarishlar kiritganligingizni ko'rish.",
'tooltip-compareselectedversions' => "Bu sahifaning ikki tanlangan versiyalari o'rtasidagi farqni ko'rish.",
'tooltip-watch' => 'Ushbu sahifani kuzatuv ro‘yxatingizga qo‘shish',
'tooltip-recreate' => "Bu sahifani u o'chirilgan bo'lishiga qaramasdan qayta yaratish",
'tooltip-summary' => 'Qisqa mazmun kiriting',

# Attribution
'others' => 'boshqalar',

# Info page
'pageinfo-title' => '"$1" sahifasi haqida maʼlumot',
'pageinfo-header-basic' => 'Asosiy maʼlumot',
'pageinfo-header-edits' => 'Oʻzgarishlar tarixi',
'pageinfo-display-title' => 'Koʻrsatiladigan sarlavha',
'pageinfo-article-id' => 'Sahifa identifikatori',
'pageinfo-watchers' => 'Sahifa kuzatuvchilari soni',
'pageinfo-edits' => 'Jami tahrirlar soni',
'pageinfo-toolboxlink' => 'Sahifa haqida maʼlumot',
'pageinfo-redirectsto' => 'Qayta yoʻnaltirish',

# Skin names
'skinname-cologneblue' => 'Kyolncha sogʻinch',
'skinname-modern' => 'Zamonaviy',
'skinname-vector' => 'Vektor',

# Patrol log
'patrol-log-page' => 'Patrullash qaydlari',

# Browsing diffs
'previousdiff' => '← Avvalgi tahrir',
'nextdiff' => 'Keyingi tahrir →',

# Media information
'imagemaxsize' => "Tasvir oʻlchamining chegarasi:<br />
''(fayl taʼrifi sahifasi uchun)''",
'thumbsize' => 'Tasvirning kichiklashtirilgan versiyasining oʻlchami:',
'file-info-size' => '$1 × $2 piksel, fayl hajmi: $3, MIME tipi: $4',
'file-nohires' => 'Bundan kattaroq tasvir yoʻq.',
'svg-long-desc' => 'SVG fayl, asl oʻlchamlari $1 × $2 piksel, fayl hajmi: $3',
'show-big-image' => 'Toʻliq hajmdagi tasvir',

# Special:NewFiles
'noimages' => 'Tasvir mavjud emas.',
'ilsubmit' => 'Qidirish',

# Metadata
'metadata' => 'Metama’lumot',
'metadata-expand' => 'Batafsil axborotni koʻrsatish',
'metadata-collapse' => 'Batafsil axborotni yashirish',

# Exif tags
'exif-imagewidth' => 'Eni',
'exif-imagelength' => 'Boʻyi',
'exif-artist' => 'Muallif',
'exif-source' => 'Manba',
'exif-iimcategory' => 'Turkum',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Shimoliy kenglik',
'exif-gpslatitude-s' => 'Janubiy kenglik',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Sharqiy uzunlik',
'exif-gpslongitude-w' => 'Gʻarbiy uzunlik',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometr',
'exif-gpsdestdistance-m' => 'Mil',

'exif-iimcategory-clj' => 'Jinoyat va qonun',
'exif-iimcategory-dis' => 'Halokatlar',
'exif-iimcategory-fin' => 'Iqtisodiyot va biznes',
'exif-iimcategory-edu' => 'Maʼrifat',
'exif-iimcategory-evn' => 'Atrofimizdagi olam',
'exif-iimcategory-hum' => 'Inson huquqlari',
'exif-iimcategory-lab' => 'Mehnat',
'exif-iimcategory-lif' => 'Turmush tarzi va hordiq',
'exif-iimcategory-pol' => 'Siyosat',
'exif-iimcategory-rel' => 'Din va imon',
'exif-iimcategory-sci' => 'Fan va texnologiyalar',
'exif-iimcategory-spo' => 'Sport',
'exif-iimcategory-wea' => 'Ob-havo',

# External editor support
'edit-externally' => 'Bu faylni tashqi dasturiy ilovalar yordamida tahrirla',
'edit-externally-help' => "(Batafsil ma'lumotlar uchun [//www.mediawiki.org/wiki/Manual:External_editors bu yerga] qarang)",

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'Barcha',
'namespacesall' => 'Barchasi',
'monthsall' => 'barchasi',

'unit-pixel' => ' piksel',

# Multipage image navigation
'imgmultipageprev' => '← oldingi sahifa',
'imgmultipagenext' => 'keyingi sahifa →',
'imgmultigoto' => '$1 sahifasiga oʻtish',

# Table pager
'table_pager_next' => 'Keyingi sahifa',
'table_pager_prev' => 'Oldingi sahifa',
'table_pager_first' => 'Birinchi sahifa',
'table_pager_last' => 'Oxirgi sahifa',

# Auto-summaries
'autoredircomment' => '[[$1]]ga yoʻnaltirildi',
'autosumm-new' => '"$1" yozuvi orqali yangi sahifa yaratildi',

# Size units
'size-bytes' => '$1 bayt',

# Watchlist editing tools
'watchlisttools-view' => "Muhim o'zgarishlarni ko'rish",
'watchlisttools-edit' => 'Kuzatuv roʻyxatimni koʻrish/oʻzgartirish',
'watchlisttools-raw' => 'Kuzatuv roʻyxatimni tahrirlash',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|munozara]])',

# Core parser functions
'duplicate-defaultsort' => "'''Diqqat:''' \"\$2\" boshlang'ich saralash kaliti oldingi \"\$1\" boshlang'ich saralash kalitini qayta aniqlayapti.",

# Special:Version
'version-specialpages' => 'Maxsus sahifalar',

# Special:SpecialPages
'specialpages' => 'Maxsus sahifalar',

# Special:Tags
'tag-filter' => '[[Special:Tags|Nishonlar]] filtri:',

# HTML forms
'htmlform-reset' => 'Oʻzgarishlarni bekor qilish',
'htmlform-selectorother-other' => 'Boshqa',

# New logging system
'logentry-move-move' => '$1 $3 sahifasini $4ga koʻchirdi',
'logentry-patrol-patrol-auto' => '$1 $3 sahifasining $4 versiyasini avtomatik patrulladi',
'logentry-newusers-newusers' => '$1 hisob yozuvi yaratildi',
'logentry-newusers-create' => '$1 hisob yozuvi yaratildi',

# Feedback
'feedback-close' => 'Bajarildi',

# Search suggestions
'searchsuggest-search' => 'Qidiruv',

# API errors
'api-error-unknown-code' => 'Noaniq xato: "$1".',
'api-error-unknownerror' => 'Noaniq xato: "$1".',

);
