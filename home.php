<!DOCTYPE html>
<html lang="en">
    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="favicon.ico" />
        <title>Web Developer | Aline Fierobe</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <?php wp_head(); ?>
    </head>
  <body>
    <div class="first" id="home">
      <header class="headerHome">
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
              <a href="#home">home</a>
            </li>
            <li>
              <a href="#knowledge">knowledge</a>
            </li>
            <li>
              <a href="#projects">projects</a>
            </li>
            <li>
              <a href="#contact">contact</a>
            </li>
          </ul>
        </nav>
      </header>
      <section class="home">
        <h1><?php bloginfo('description'); ?></h1>
        <img src="https://www.aht.li/3561621/avatarhome.png" alt="avatar" class="avatar" />
        <p>
          Hi! I'm Aline, I use my skills in HTML & CSS to code beautiful
          webpages
        </p>
      </section>
    </div>
    <section class="knowledge" id="knowledge">
      <div class="knowledge-container">
        <h2>knowledge</h2>
        <div class="knowledge-elem">
          <img src="https://www.aht.li/3561622/avatarknowledge.png" alt="avatar" class="avatar" />
          <fieldset>
            <legend>languages</legend>
            <div class="language-items">
              <?php get_template_part('loop-languages'); ?>
            </div>
          </fieldset>
          <fieldset>
            <legend>tools</legend>
            <div class="tool-items">
              <?php get_template_part('loop-tools'); ?>
            </div>
          </fieldset>
        </div>
      </div>
    </section>
    <section class="projects" id="projects">
      <div class="projects-container">
        <h2>projects</h2>
        <div class="projects-elem">
          <img src="https://www.aht.li/3561623/avatarprojects.png" alt="avatar" class="avatar" />
          <div>
            <?php get_template_part('loop-projects'); ?>
          </div>

          <div class="projects-see-all">
            <a href="<?php echo get_permalink(9); ?>">see all project</a>
          </div>
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="contact-container">
        <h2>contact</h2>
        <div class="contact-elem">
          <div class="contact-items">
            <a href="#" class="btn-cv">check my CV</a>
            <img src="https://www.aht.li/3561624/avatarcontact.png" alt="avatar" class="avatar" />
            <div class="contact-items-logo">
              <a href="https://github.com/AlineFierobe" target="_blank">
                <svg
                  id="Layer_1"
                  viewBox="0 0 512 512"
                  xmlns="http://www.w3.org/2000/svg"
                  data-name="Layer 1"
                >
                  <path
                    d="m307.847 51.8936h-103.1063c-83.5954 0-151.4869 67.17-151.4869 149.8779v102.0107c0 82.7075 67.8915 149.878 151.4869 149.878h103.1063c83.5953 0 151.4867-67.17 151.4867-149.878v-102.0107c0-82.7075-67.8914-149.8779-151.4867-149.8779zm45.2258 199.84c-10.3515 22.2309-31.0542 30.7812-64.6958 34.2012 10.3514 6.84 13.8019 15.3906 13.8019 38.476v31.6363c.8621 8.55 13.8018 12.8261 12.9388 15.3906 0 2.5654-10.3515 2.5654-15.5271.8555-13.8018-5.1309-12.0766-16.2461-12.0766-16.2461l-.8622-30.7808s.8622-16.2451-5.1757-16.2451v50.4463c0 11.1147 7.7631 14.5356 7.7631 18.81 0 6.84-14.664-.8545-18.9775-5.13-6.9009-6.84-6.0379-20.52-6.0379-31.6362v-34.2008h-4.3138s1.7253 51.3018-2.5874 60.7076c-6.0388 11.97-22.428 15.3906-22.428 10.26 0-4.2749 3.4505-2.5654 6.0378-11.1157 1.7253-6.8394.8631-58.9966.8631-58.9966s-5.1757 3.42-5.1757 12.8257v37.6206c0 10.2612-13.8018 15.3911-20.7027 15.3911-3.45 0-7.764 0-7.764-1.71 0-4.2754 12.94-6.84 12.94-16.2461v-28.216a140.691 140.691 0 0 1 -15.5271.8554c-23.2911 0-30.192-14.5351-33.6424-22.23-4.3127-11.1153-10.3515-15.3907-16.3893-19.6656-3.45-2.5654-4.3135-5.1308 0-5.9853 19.84-4.2759 25.0154 22.23 38.8173 26.5053 10.3513 2.5655 22.4279 1.711 28.4667-2.5649a26.3037 26.3037 0 0 1 11.2136-18.8105c-34.5047-3.42-55.2074-15.3907-65.5588-34.2012l-4.3126-10.26c-3.4505-9.4048-5.1757-20.52-5.1757-32.4912 0-22.23 6.9009-29.9262 16.3892-41.896-6.9009-24.7964 2.5883-41.8969 2.5883-41.8969s14.664-2.5655 43.1308 17.1c15.527-6.84 56.07-6.84 75.047-1.71 12.0766-7.6948 33.6425-18.8106 42.2687-15.3906 2.5873 3.42 7.763 14.5351 3.45 38.477 2.5874 5.13 18.1144 16.2451 18.1144 47.8814 0 11.9707-.8621 21.3754-3.45 29.9257.863-.0001-2.5874 10.2602-3.4504 10.2602z"
                  />
                </svg>
              </a>
              <a href="https://fr.linkedin.com/in/aline-fierobe-9977575a" target="_blank">
                <svg
                  id="Layer_1"
                  viewBox="0 0 512 512"
                  xmlns="http://www.w3.org/2000/svg"
                  data-name="Layer 1"
                >
                  <path
                    d="m313.6067 56.6167h-103.1062c-83.5955 0-151.487 67.17-151.487 149.8777v102.011c0 82.708 67.8915 149.8784 151.487 149.8784h103.1062c83.5953 0 151.4868-67.17 151.4868-149.8784v-102.011c0-82.7073-67.8915-149.8777-151.4868-149.8777zm-120.6731 329.1074h-60.48v-170.9651h60.48zm-30.24-196.61c-16.4164 0-30.24-13.6772-30.24-29.918s13.824-29.9194 30.24-29.9194 30.24 13.6773 30.24 29.9194-13.8236 29.9179-30.2396 29.9179zm228.0964 102.5793v94.0307h-51.84v-82.9184c0-19.6612-1.7289-45.3055-29.376-45.3055s-31.9685 21.3706-31.9685 43.5967v84.6272h-50.112v-170.9651h47.52v23.081h.8637c6.912-13.6772 25.0565-23.0808 50.9764-23.0808 54.4315 0 64.8 30.7735 64.8 76.9344z"
                  />
                </svg>
              </a>
            </div>
          </div>
          <p>
            You can find me in Belfort, France <br />
            If you live far away, no worries,<br />
            you can send me an email at <br />
            <a href="mailto:contact@alinefierobe.com"
              >contact@alinefierobe.com</a
            >
            <br />
            I cannot accept pigeon sorry
          </p>
        </div>
      </div>
      <footer>
        <span id="anneeCopyright"></span>
      </footer>
    </section>
    <?php wp_footer(); ?>
  </body>
</html>
