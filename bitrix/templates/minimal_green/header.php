<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowMeta("robots")?>
<?$APPLICATION->ShowMeta("keywords")?>
<?$APPLICATION->ShowMeta("description")?>
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead();?>
<?IncludeTemplateLangFile(__FILE__);?>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/template-styles.css" />
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main">something</a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">

				

				<h1 class="site-title"><a href="" rel="home"><?$APPLICATION->IncludeFile(
									SITE_TEMPLATE_PATH."/include_areas/site_name.php",
									Array(),
									Array("MODE"=>"html")
								);?></a></h1>
				<p class="site-description">Just another WPStash Sites site</p>
				

			</div><!-- .site-branding -->

			<div class="social-menu">
			<div id="menu-social" class="social-links">
				<ul id="menu-social" class="menu"><li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="https://www.facebook.com/"><span class="screen-reader-text">facebook</span></a></li>
<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="https://twitter.com/"><span class="screen-reader-text">twitter</span></a></li>
<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="https://plus.google.com/u/0/"><span class="screen-reader-text">google plus</span></a></li>
<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="https://www.linkedin.com"><span class="screen-reader-text">linkedin</span></a></li>
<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href="https://youtube.com"><span class="screen-reader-text">Youtube</span></a></li>
<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62"><a href="https://www.pinterest.com/"><span class="screen-reader-text">Pinterest</span></a></li>
</ul>
			</div>

		</div>

		</div>
</div>
	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">

			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">MENU</button>
			<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"personal_tab", 
						Array(
							"ROOT_MENU_TYPE"	=>	"top",
							"MAX_LEVEL"	=>	"1",
							"USE_EXT"	=>	"N"
						)
					);?>



		</div>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
<?if($APPLICATION->GetCurPage(true) != SITE_DIR."index.php")
					{
						echo "<h1>";
						$APPLICATION->ShowTitle(false);
						echo "</h1>";
					}
					?>	