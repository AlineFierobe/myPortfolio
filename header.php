<!DOCTYPE html>
<html lang="en">
<head <?php language_attributes(); ?>>
 <meta charset="<?php bloginfo('charset'); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title><?php the_title(); ?></title>
 <link rel="stylesheet" href="<?php
bloginfo('stylesheet_url'); ?>" type="text/css">
 <?php wp_head(); ?>
 </head>
  <body>
  <header>
        <a href="<?php bloginfo('wpurl'); ?>">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 1347 800"
        >
          <defs>
            <clipPath id="clip-Logo">
              <rect width="1347" height="800" />
            </clipPath>
          </defs>
          <g id="Logo" clip-path="url(#clip-Logo)">
            <g id="Gauche" transform="translate(32 -49)">
              <path
                id="accGaucheHaut"
                d="M0,0H90"
                transform="translate(550.5 286)"
                stroke-width="15"
              />
              <path
                id="accGaucheMontant"
                d="M0,0V171"
                transform="translate(558 279)"
                stroke-width="15"
              />
              <path
                id="accGaucheDescendant"
                d="M0,171V0"
                transform="translate(558 449)"
                stroke-width="15"
              />
              <path
                id="accGaucheBas"
                d="M0,0H90"
                transform="translate(550.5 613)"
                stroke-width="15"
              />
              <path
                id="ligneMillieuGauche"
                d="M0,0H250"
                transform="translate(309.5 437.5)"
                stroke-width="15"
              />
              <path
                id="ligneHautGauche"
                d="M0,0H200"
                transform="translate(359.5 437.5)"
                stroke-width="15"
              />
              <path
                id="ligneBasGauche"
                d="M0,0H200"
                transform="translate(359.5 437.5)"
                stroke-width="15"
              />
            </g>
            <g id="Droit" transform="translate(32 -49)">
              <path
                id="accDroitHaut"
                d="M90,0H0"
                transform="translate(640.5 286)"
                stroke-width="15"
              />
              <path
                id="accDroitMontant"
                d="M0,0V171"
                transform="translate(723 279)"
                stroke-width="15"
              />
              <path
                id="accDroitDescendant"
                d="M0,171V0"
                transform="translate(723 449)"
                stroke-width="15"
              />
              <path
                id="accDroitBas"
                d="M90,0H0"
                transform="translate(640.5 613)"
                stroke-width="15"
              />
              <path
                id="ligneMillieuDroit"
                d="M0,0H250"
                transform="translate(723.5 437.5)"
                stroke-width="15"
              />
              <path
                id="ligneHautDroit"
                d="M0,0H200"
                transform="translate(723.5 437.5)"
                stroke-width="15"
              />
              <path
                id="ligneBasDroit"
                d="M0,0H200"
                transform="translate(723.5 437.5)"
                stroke-width="15"
              />
            </g>
            <path
              id="lettreA"
              d="M4.465,0l40.42-190.35H70.5L111.155,0H86.01L77.315-47.94H38.54L29.375,0Zm37.6-66.975H73.79L57.81-152.75Z"
              transform="translate(614 494)"
              fill="transparent"
            />
          </g>
        </svg>
        </a>
        <nav>
          <ul>
            <li>
                <a href="<?php bloginfo('wpurl'); ?>">back to homepage</a>
            </li>
          </ul>
        </nav>
      </header>