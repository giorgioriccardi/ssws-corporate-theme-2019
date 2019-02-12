<?php
/**
 * Template Name: Blog
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package SSWS
 * @subpackage SSWS
 * @since SSWS 1.0
 */

 get_header(); ?>
 
	<div class="content">
		<div class="background"></div>
		<h2 class="content__title">Carmeca</h2>
		<p class="content__tagline">Europe's most immersive LARP experience</p>
	</div>
	<nav class="menu">
		<div class="menu__item menu__item--1" data-direction="bt">
			<div class="menu__item-inner">
				<div class="mainmenu">
					<a href="#" class="mainmenu__item">Story</a>
					<a href="#" class="mainmenu__item">Chronicles</a>
					<a href="#" class="mainmenu__item">Tour</a>
					<a href="#" class="mainmenu__item">Contact</a>
				</div>
				<p class="label label--topleft label--vert-mirror">the important stuff</p>
				<p class="label label--bottomright label--vert">made in bannockburn</p>
			</div>
		</div>
		<div class="menu__item menu__item--2" data-direction="lr">
			<div class="menu__item-inner">
				<div class="menu__item-map"></div>
				<a href="#" class="menu__item-hoverlink">The location</a>
			</div>
		</div>
		<div class="menu__item menu__item--3" data-direction="bt">
			<div class="menu__item-inner">
				<div class="sidemenu">
					<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">The Gameplay</span></a>
					<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">About LARP</span></a>
					<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">The Rules</span></a>
					<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">History</span></a>
					<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">People</span></a>
					<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">Join</span></a>
					<a href="#" class="sidemenu__item"><span class="sidemenu__item-inner">...</span></a>
				</div>
			</div>
		</div>
		<div class="menu__item menu__item--4" data-direction="rl">
			<div class="menu__item-inner">
				<p class="label label--topleft label--line">Join us now</p>
				<a href="#" class="menu__item-link">Learn how to <br> participate</a>
			</div>
		</div>
		<div class="menu__item menu__item--5" data-direction="tb">
			<div class="menu__item-inner">
				<p class="quote">Hail to thee, our infantry, still brave, beyond the grave</p>
			</div>
		</div>
		<button class="action action--menu"><svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg></button>
		<button class="action action--close"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></button>
	</nav>
</main>

<?php get_footer(); ?>
