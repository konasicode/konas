<!doctype html>
<html lang="en" class="h-full bg-neutral-950 text-base antialiased">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
      wp_head();
    ?>
  </head>
  <body class="font-mona flex min-h-full flex-col">
    <?php wp_body_open(); ?>
    <header>
      <div class="absolute left-0 right-0 top-2 z-40 pt-14">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <div class="flex items-center justify-between">
              <a id="logo" href="<?php echo get_home_url(); ?>" aria-label="Home">
                <svg
                  viewBox="0 0 32 32"
                  aria-hidden="true"
                  class="h-8 sm:hidden"
                >
                  <rect
                    clip-path="url(#:R1ata:-clip)"
                    class="h-8 transition-all duration-300 fill-neutral-950 w-0 group-hover/logo:w-8"
                  ></rect>
                  <use
                    href="#:R1ata:-path"
                    class="stroke-neutral-950"
                    fill="none"
                    stroke-width="1.5"
                  ></use>
                  <defs>
                    <path
                      id=":R1ata:-path"
                      d="M3.25 26v.75H7c1.305 0 2.384-.21 3.346-.627.96-.415 1.763-1.02 2.536-1.752.695-.657 1.39-1.443 2.152-2.306l.233-.263c.864-.975 1.843-2.068 3.071-3.266 1.209-1.18 2.881-1.786 4.621-1.786h5.791V5.25H25c-1.305 0-2.384.21-3.346.627-.96.415-1.763 1.02-2.536 1.751-.695.658-1.39 1.444-2.152 2.307l-.233.263c-.864.975-1.843 2.068-3.071 3.266-1.209 1.18-2.881 1.786-4.621 1.786H3.25V26Z"
                    ></path>
                    <clipPath id=":R1ata:-clip">
                      <use href="#:R1ata:-path"></use>
                    </clipPath>
                  </defs>
                </svg>
                <svg
                  viewBox="0 0 130 32"
                  aria-hidden="true"
                  class="hidden h-8 sm:block"
                >
                  <svg
                    viewBox="0 0 32 32"
                    aria-hidden="true"
                    preserveAspectRatio="xMinYMid meet"
                  >
                    <rect
                      data-header="logo-icon"
                      clip-path="url(#:R6ata:-clip)"
                      class="h-8 transition-all duration-300 fill-neutral-950 w-0 group-hover/logo:w-8"
                    ></rect>
                    <use
                      href="#:R6ata:-path"
                      class="stroke-neutral-950"
                      fill="none"
                      stroke-width="1.5"
                    ></use>
                    <defs>
                      <path
                        id=":R6ata:-path"
                        d="M3.25 26v.75H7c1.305 0 2.384-.21 3.346-.627.96-.415 1.763-1.02 2.536-1.752.695-.657 1.39-1.443 2.152-2.306l.233-.263c.864-.975 1.843-2.068 3.071-3.266 1.209-1.18 2.881-1.786 4.621-1.786h5.791V5.25H25c-1.305 0-2.384.21-3.346.627-.96.415-1.763 1.02-2.536 1.751-.695.658-1.39 1.444-2.152 2.307l-.233.263c-.864.975-1.843 2.068-3.071 3.266-1.209 1.18-2.881 1.786-4.621 1.786H3.25V26Z"
                      ></path>
                      <clipPath id=":R6ata:-clip">
                        <use href="#:R6ata:-path"></use>
                      </clipPath>
                    </defs>
                  </svg>
                  <path
                    class="fill-neutral-950"
                    d="M52.928 23.716c5.184 0 7.992-1.992 7.992-5.28 0-3.888-2.688-4.8-7.512-5.376-3.36-.408-4.728-.672-4.728-2.448 0-1.464 1.44-2.376 3.912-2.376 2.4 0 3.936.864 4.104 2.784h3.576c-.24-3.288-3-5.232-7.536-5.232-4.728 0-7.68 1.896-7.68 5.208 0 3.48 2.712 4.464 7.416 5.04 3.216.408 4.8.648 4.8 2.664 0 1.584-1.392 2.544-4.224 2.544-3.048 0-4.68-1.176-4.752-3.288H44.6c.072 3.408 2.616 5.76 8.328 5.76Zm14.175-.216h3.312v-2.928h-1.968c-.84 0-1.272-.24-1.272-1.104v-6.144h3.24v-2.592h-3.24V6.676l-3.36.648v3.408h-2.496v2.592h2.496v7.2c0 2.04 1.248 2.976 3.288 2.976Zm10.078.216c2.16 0 4.104-1.008 4.944-2.64h.168l.144 2.424h3.288V10.732h-3.432v6.336c0 2.4-1.584 4.032-3.984 4.032-2.328 0-3.264-1.368-3.264-3.936v-6.432h-3.432v7.032c0 4.416 2.256 5.952 5.568 5.952Zm16.24.048c2.52 0 4.2-1.008 4.944-2.496h.168l.072 2.232h3.264V6.004h-3.408v7.008h-.168c-.792-1.56-2.592-2.52-4.848-2.52-3.816 0-6.384 2.592-6.384 6.624 0 4.056 2.568 6.648 6.36 6.648Zm1.032-2.616c-2.472 0-3.96-1.536-3.96-4.032s1.488-4.008 3.96-4.008 3.984 1.512 3.984 3.648v.744c0 2.136-1.536 3.648-3.984 3.648Zm9.485-12.216h3.408V6.004h-3.408v2.928Zm0 14.568h3.408V10.732h-3.408V23.5Zm12.481.24c4.584 0 7.56-2.52 7.56-6.624 0-4.152-3-6.624-7.56-6.624s-7.56 2.52-7.56 6.624c0 4.128 3.024 6.624 7.56 6.624Zm0-2.64c-2.592 0-4.128-1.56-4.128-3.984s1.536-3.984 4.128-3.984c2.616 0 4.152 1.536 4.152 3.984 0 2.424-1.56 3.984-4.152 3.984Zm8.794 2.4h3.384v-2.88h-3.384v2.88Z"
                  ></path>
                </svg>
              </a>
              <div class="flex items-center gap-x-8">
                <a
                  href="/contact"
                  class="inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition bg-neutral-950 text-white hover:bg-neutral-800"
                >
                  <span class="relative">Связаться с нами</span>
                </a>
                <button
                  type="button"
                  aria-expanded="false"
                  aria-controls=":R5a:"
                  class="group -m-2.5 rounded-full p-2.5 transition hover:bg-neutral-950/10"
                  aria-label="Toggle navigation"
                >
                  <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                    class="h-6 w-6 fill-neutral-950 group-hover:fill-neutral-700"
                  >
                    <path d="M2 6h20v2H2zM2 16h20v2H2z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        id=":R5a:"
        class="relative z-50 overflow-hidden bg-neutral-950 pt-2 h-[0.5rem]"
        aria-hidden="true"
      >
        <div class="bg-neutral-800">
          <div class="bg-neutral-950 pb-16 pt-14">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="flex items-center justify-between">
                  <a aria-label="Home" href="/"
                    >
                    <svg
                      viewBox="0 0 32 32"
                      aria-hidden="true"
                      class="h-8 sm:hidden"
                    >
                      <rect
                        clip-path="url(#:R2mkta:-clip)"
                        class="h-8 transition-all duration-300 fill-white w-0 group-hover/logo:w-8"
                      ></rect>
                      <use
                        href="#:R2mkta:-path"
                        class="stroke-white"
                        fill="none"
                        stroke-width="1.5"
                      ></use>
                      <defs>
                        <path
                          id=":R2mkta:-path"
                          d="M3.25 26v.75H7c1.305 0 2.384-.21 3.346-.627.96-.415 1.763-1.02 2.536-1.752.695-.657 1.39-1.443 2.152-2.306l.233-.263c.864-.975 1.843-2.068 3.071-3.266 1.209-1.18 2.881-1.786 4.621-1.786h5.791V5.25H25c-1.305 0-2.384.21-3.346.627-.96.415-1.763 1.02-2.536 1.751-.695.658-1.39 1.444-2.152 2.307l-.233.263c-.864.975-1.843 2.068-3.071 3.266-1.209 1.18-2.881 1.786-4.621 1.786H3.25V26Z"
                        ></path>
                        <clipPath id=":R2mkta:-clip">
                          <use href="#:R2mkta:-path"></use>
                        </clipPath>
                      </defs>
                    </svg>
                    <svg
                      viewBox="0 0 130 32"
                      aria-hidden="true"
                      class="hidden h-8 sm:block"
                    >
                      <svg
                        viewBox="0 0 32 32"
                        aria-hidden="true"
                        preserveAspectRatio="xMinYMid meet"
                      >
                        <rect
                          clip-path="url(#:Rcmkta:-clip)"
                          class="h-8 transition-all duration-300 fill-white w-0 group-hover/logo:w-8"
                        ></rect>
                        <use
                          href="#:Rcmkta:-path"
                          class="stroke-white"
                          fill="none"
                          stroke-width="1.5"
                        ></use>
                        <defs>
                          <path
                            id=":Rcmkta:-path"
                            d="M3.25 26v.75H7c1.305 0 2.384-.21 3.346-.627.96-.415 1.763-1.02 2.536-1.752.695-.657 1.39-1.443 2.152-2.306l.233-.263c.864-.975 1.843-2.068 3.071-3.266 1.209-1.18 2.881-1.786 4.621-1.786h5.791V5.25H25c-1.305 0-2.384.21-3.346.627-.96.415-1.763 1.02-2.536 1.751-.695.658-1.39 1.444-2.152 2.307l-.233.263c-.864.975-1.843 2.068-3.071 3.266-1.209 1.18-2.881 1.786-4.621 1.786H3.25V26Z"
                          ></path>
                          <clipPath id=":Rcmkta:-clip">
                            <use href="#:Rcmkta:-path"></use>
                          </clipPath>
                        </defs>
                      </svg>
                      <path
                        class="fill-white"
                        d="M52.928 23.716c5.184 0 7.992-1.992 7.992-5.28 0-3.888-2.688-4.8-7.512-5.376-3.36-.408-4.728-.672-4.728-2.448 0-1.464 1.44-2.376 3.912-2.376 2.4 0 3.936.864 4.104 2.784h3.576c-.24-3.288-3-5.232-7.536-5.232-4.728 0-7.68 1.896-7.68 5.208 0 3.48 2.712 4.464 7.416 5.04 3.216.408 4.8.648 4.8 2.664 0 1.584-1.392 2.544-4.224 2.544-3.048 0-4.68-1.176-4.752-3.288H44.6c.072 3.408 2.616 5.76 8.328 5.76Zm14.175-.216h3.312v-2.928h-1.968c-.84 0-1.272-.24-1.272-1.104v-6.144h3.24v-2.592h-3.24V6.676l-3.36.648v3.408h-2.496v2.592h2.496v7.2c0 2.04 1.248 2.976 3.288 2.976Zm10.078.216c2.16 0 4.104-1.008 4.944-2.64h.168l.144 2.424h3.288V10.732h-3.432v6.336c0 2.4-1.584 4.032-3.984 4.032-2.328 0-3.264-1.368-3.264-3.936v-6.432h-3.432v7.032c0 4.416 2.256 5.952 5.568 5.952Zm16.24.048c2.52 0 4.2-1.008 4.944-2.496h.168l.072 2.232h3.264V6.004h-3.408v7.008h-.168c-.792-1.56-2.592-2.52-4.848-2.52-3.816 0-6.384 2.592-6.384 6.624 0 4.056 2.568 6.648 6.36 6.648Zm1.032-2.616c-2.472 0-3.96-1.536-3.96-4.032s1.488-4.008 3.96-4.008 3.984 1.512 3.984 3.648v.744c0 2.136-1.536 3.648-3.984 3.648Zm9.485-12.216h3.408V6.004h-3.408v2.928Zm0 14.568h3.408V10.732h-3.408V23.5Zm12.481.24c4.584 0 7.56-2.52 7.56-6.624 0-4.152-3-6.624-7.56-6.624s-7.56 2.52-7.56 6.624c0 4.128 3.024 6.624 7.56 6.624Zm0-2.64c-2.592 0-4.128-1.56-4.128-3.984s1.536-3.984 4.128-3.984c2.616 0 4.152 1.536 4.152 3.984 0 2.424-1.56 3.984-4.152 3.984Zm8.794 2.4h3.384v-2.88h-3.384v2.88Z"
                      ></path>
                    </svg>
                  </a>
                  <div class="flex items-center gap-x-8">
                    <a
                      class="inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition bg-white text-neutral-950 hover:bg-neutral-200"
                      href="/contact"
                      >
                      <span class="relative top-px">Связаться с нами</span>
                    </a>
                    <button
                      type="button"
                      aria-expanded="false"
                      aria-controls=":R5a:"
                      class="group -m-2.5 rounded-full p-2.5 transition hover:bg-white/10"
                      aria-label="Toggle navigation"
                    >
                      <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                        class="h-6 w-6 fill-white group-hover:fill-neutral-200"
                      >
                        <path
                          d="m5.636 4.223 14.142 14.142-1.414 1.414L4.222 5.637z"
                        ></path>
                        <path
                          d="M4.222 18.363 18.364 4.22l1.414 1.414L5.636 19.777z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav
            class="mt-px font-display text-5xl font-medium tracking-tight text-white"
          >
            <div class="even:mt-px sm:bg-neutral-950">
              <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                  <div class="grid grid-cols-1 sm:grid-cols-2">
                    <a
                      class="group relative isolate -mx-6 bg-neutral-950 px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16"
                      href="/work"
                      >Наши работы<span
                        class="absolute inset-y-0 -z-10 w-screen bg-neutral-900 opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100"
                      ></span></a>
                    <a
                      class="group relative isolate -mx-6 bg-neutral-950 px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16"
                      href="/about"
                      >О нас<span
                        class="absolute inset-y-0 -z-10 w-screen bg-neutral-900 opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100"
                      ></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="even:mt-px sm:bg-neutral-950">
              <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                  <div class="grid grid-cols-1 sm:grid-cols-2">
                    <a
                      class="group relative isolate -mx-6 bg-neutral-950 px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16"
                      href="/process"
                      >Наши процессы<span
                        class="absolute inset-y-0 -z-10 w-screen bg-neutral-900 opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100"
                      ></span>
                    </a>
                    <a
                      class="group relative isolate -mx-6 bg-neutral-950 px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16"
                      href="/blog"
                      >Блог<span
                        class="absolute inset-y-0 -z-10 w-screen bg-neutral-900 opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100"
                      ></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          <div
            class="relative bg-neutral-950 before:absolute before:inset-x-0 before:top-0 before:h-px before:bg-neutral-800"
          >
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:max-w-none">
                <div
                  class="grid grid-cols-1 gap-y-10 pb-16 pt-10 sm:grid-cols-2 sm:pt-16"
                >
                  <div>
                    <h2 class="font-display text-base font-semibold text-white">
                      Наш офис
                    </h2>
                    <ul
                      role="list"
                      class="mt-6 grid grid-cols-1 gap-8 sm:grid-cols-2"
                    >
                      <li>
                        <address class="text-sm not-italic text-neutral-300">
                          <strong class="text-white">La Vila Joyosa</strong><br />
                          partida Paraiso, 55<br />03570, Alicante, Spain
                        </address>
                      </li>
                    </ul>
                  </div>
                  <div class="sm:border-l sm:border-transparent sm:pl-16">
                    <h2 class="font-display text-base font-semibold text-white">
                      Наши соцсети
                    </h2>
                    <ul role="list" class="flex gap-x-10 text-white mt-6">
                      <li>
                        <a
                          target="_blank"
                          aria-label="WhatsApp"
                          class="transition hover:text-neutral-200"
                          href="https://wa.me/34610869936?text=Im%20interested%20in%20website"
                          >
                          <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            x="0px" 
                            y="0px" 
                            viewBox="0 0 30 30"
                            aria-hidden="true"
                            class="h-6 w-6 fill-current"
                          >
                            <path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z"></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a
                          target="_blank"
                          aria-label="GitHub"
                          class="transition hover:text-neutral-200"
                          href="https://github.com/konasicode"
                          >
                          <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                            class="h-6 w-6 fill-current"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2Z"
                            ></path>
                            </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="relative flex flex-auto overflow-hidden bg-white pt-14 rounded-t-[40px]">
      <div class="relative isolate flex w-full flex-col pt-9">
        <svg aria-hidden="true" class="absolute inset-x-0 -top-14 -z-10 h-[1000px] w-full fill-neutral-50 stroke-neutral-950/5 [mask-image:linear-gradient(to_bottom_left,white_40%,transparent_50%)]">
          <rect width="100%" height="100%" fill="url(#:R1lda:)" stroke-width="0"></rect>
          <svg x="50%" y="-96" stroke-width="0" class="overflow-visible">
            <path transform="translate(64 160)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
            <path transform="translate(128 320)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
            <path transform="translate(288 480)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
            <path transform="translate(512 320)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
            <path transform="translate(544 640)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
            <path transform="translate(320 800)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
          </svg>
          <defs>
            <pattern id=":R1lda:" width="96" height="480" x="50%" patternUnits="userSpaceOnUse" patternTransform="translate(0 -96)" fill="none">
              <path d="M128 0 98.572 147.138A16 16 0 0 1 82.883 160H13.117a16 16 0 0 0-15.69 12.862l-26.855 134.276A16 16 0 0 1-45.117 320H-116M64-160 34.572-12.862A16 16 0 0 1 18.883 0h-69.766a16 16 0 0 0-15.69 12.862l-26.855 134.276A16 16 0 0 1-109.117 160H-180M192 160l-29.428 147.138A15.999 15.999 0 0 1 146.883 320H77.117a16 16 0 0 0-15.69 12.862L34.573 467.138A16 16 0 0 1 18.883 480H-52M-136 480h58.883a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1-18.883 320h69.766a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1 109.117 160H192M-72 640h58.883a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1 45.117 480h69.766a15.999 15.999 0 0 0 15.689-12.862l26.856-134.276A15.999 15.999 0 0 1 173.117 320H256M-200 320h58.883a15.999 15.999 0 0 0 15.689-12.862l26.856-134.276A16 16 0 0 1-82.883 160h69.766a16 16 0 0 0 15.69-12.862L29.427 12.862A16 16 0 0 1 45.117 0H128"></path>
            </pattern>
          </defs>
        </svg>
        <main class="w-full flex-auto">
          <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-24 sm:mt-32 md:mt-56">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <div class="max-w-3xl">
                <h1 class="font-display text-5xl font-medium tracking-tight text-neutral-950 [text-wrap:balance] sm:text-7xl">Веб-студия разработки из Испании.</h1>
                <p class="mt-6 text-xl text-neutral-600">Мы — студия разработки, специализирующаяся на инновационных веб- и мобильных приложениях. Наша команда создает креативные решения, сочетая дизайн и технологии.</p>
              </div>
            </div>
          </div>
          <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-16">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <div>
                <dl class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:auto-cols-fr lg:grid-flow-col lg:grid-cols-none">
                  <div class="flex flex-col-reverse pl-8 relative before:absolute after:absolute before:bg-neutral-950 after:bg-neutral-950/10 before:left-0 before:top-0 before:h-6 before:w-px after:bottom-0 after:left-0 after:top-8 after:w-px" style="opacity: 1; transform: none;">
                    <dt class="mt-2 text-base text-neutral-600">от &euro;700</dt>
                    <dt class="mt-2 text-base text-neutral-600">от 14 дней</dt>
                    <dd class="font-display text-3xl font-semibold text-neutral-950 sm:text-4xl">Лендинг</dd>
                  </div><div class="flex flex-col-reverse pl-8 relative before:absolute after:absolute before:bg-neutral-950 after:bg-neutral-950/10 before:left-0 before:top-0 before:h-6 before:w-px after:bottom-0 after:left-0 after:top-8 after:w-px" style="opacity: 1; transform: none;">
                    <dt class="mt-2 text-base text-neutral-600">от &euro;700</dt>
                    <dt class="mt-2 text-base text-neutral-600">от 21 дней</dt>
                    <dd class="font-display text-3xl font-semibold text-neutral-950 sm:text-4xl">Вебсайт</dd>
                  </div>
                  <div class="flex flex-col-reverse pl-8 relative before:absolute after:absolute before:bg-neutral-950 after:bg-neutral-950/10 before:left-0 before:top-0 before:h-6 before:w-px after:bottom-0 after:left-0 after:top-8 after:w-px" style="opacity: 1; transform: none;">
                    <dt class="mt-2 text-base text-neutral-600">от &euro;200</dt>
                    <dt class="mt-2 text-base text-neutral-600">от 4 дней</dt>
                    <dd class="font-display text-3xl font-semibold text-neutral-950 sm:text-4xl">Чат-бот</dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
          <div class="mt-24 rounded-[40px] bg-neutral-950 py-20 sm:mt-32 sm:py-32 lg:mt-56">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="flex items-center gap-x-8">
                  <h2 class="text-center font-display text-sm font-semibold tracking-wider text-white sm:text-left">У нас есть опыт сотрудничества со многими замечательными людьми.</h2>
                  <div class="h-px flex-auto bg-neutral-800"></div>
                </div>
                <div>
                  <ul role="list" class="mt-10 grid grid-cols-2 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <li>
                      <div>
                        <img alt="Phobia" loading="lazy" width="184" height="36" decoding="async" data-nimg="1" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-light.ph.svg">
                      </div>
                    </li>
                    <li>
                      <div>
                        <img alt="Family Fund" loading="lazy" width="184" height="36" decoding="async" data-nimg="1" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-light.ff.svg">
                      </div>
                    </li>
                    <li>
                      <div>
                        <img alt="Unseal" loading="lazy" width="184" height="36" decoding="async" data-nimg="1" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-light.bp.svg">
                      </div>
                    </li>
                    <li>
                      <div>
                        <img alt="Mail Smirk" loading="lazy" width="184" height="36" decoding="async" data-nimg="1" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-light.gl.svg">
                      </div>
                    </li>
                    <li>
                      <div>
                        <img alt="Home Work" width="184" height="36" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-light.hw.svg">
                      </div>
                    </li>
                    <li>
                      <div>
                        <img alt="Green Life" width="184" height="36" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-light.ms.svg">
                      </div>
                    </li>
                    <li>
                      <div>
                        <img alt="Bright Path" width="184" height="36" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-light.na.svg">
                      </div>
                    </li>
                    <li>
                      <div>
                        <img alt="North Adventures" width="184" height="36" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-light.un.svg">
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-24 sm:mt-32 lg:mt-40">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <div class="max-w-2xl">
                <h2>
                  <span class="block font-display tracking-tight [text-wrap:balance] text-4xl font-medium sm:text-5xl text-neutral-950">Использование технологий для светлого будущего</span>
                </h2>
                <div class="mt-6 text-xl text-neutral-600">
                  <p>Мы считаем, что технологии могут решить самые большие проблемы, с которыми мы сталкиваемся в мире. Но это также часть проблемы, которая ставит нас в сложную ситуацию Catch-22.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-16">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="flex">
                  <article class="relative flex w-full flex-col rounded-3xl p-6 ring-1 ring-neutral-950/5 transition hover:bg-neutral-50 sm:p-8">
                    <h3>
                      <a href="/work/family-fund">
                        <span class="absolute inset-0 rounded-3xl"></span>
                        <img alt="FamilyFund" width="36" height="36" class="h-16 w-16" src="<?php echo get_template_directory_uri(); ?>/build/images/logomark-dark.ff.svg">
                      </a>
                    </h3>
                    <p class="mt-6 flex gap-x-2 text-sm text-neutral-950">
                      <time datetime="2023" class="font-semibold">2023</time>
                      <span class="text-neutral-300" aria-hidden="true">/</span>
                      <span>Case study</span>
                    </p>
                    <p class="mt-6 font-display text-2xl font-semibold text-neutral-950">Избегайте очередей в банке, обращайтесь за кредитами к проверенным друзьям</p>
                    <p class="mt-4 text-base text-neutral-600">FamilyFund — это краудфандинговая платформа, на которой могут участвовать ваши друзья и родственники. Она позволяет вам занимать деньги у знакомых, минуя необходимость в банке.</p>
                  </article>
                </div>
                <div class="flex">
                  <article class="relative flex w-full flex-col rounded-3xl p-6 ring-1 ring-neutral-950/5 transition hover:bg-neutral-50 sm:p-8">
                    <h3>
                      <a href="/work/unseal">
                        <span class="absolute inset-0 rounded-3xl"></span>
                        <img alt="Unseal" width="36" height="36" class="h-16 w-16" src="<?php echo get_template_directory_uri(); ?>/build/images/logomark-dark.un.svg">
                      </a>
                    </h3>
                    <p class="mt-6 flex gap-x-2 text-sm text-neutral-950">
                      <time datetime="2022" class="font-semibold">2022</time>
                      <span class="text-neutral-300" aria-hidden="true">/</span>
                      <span>Case study</span>
                    </p>
                    <p class="mt-6 font-display text-2xl font-semibold text-neutral-950">Возьмите под контроль свое благополучие</p>
                    <p class="mt-4 text-base text-neutral-600">Unseal — это платформа, которая преобразует ваши медицинские записи в безопасные, продаваемые цифровые активы, известные как NFT, предоставляя вам право собственности и контроля над вашими личными медицинскими данными.</p>
                  </article>
                </div>
                <div class="flex">
                  <article class="relative flex w-full flex-col rounded-3xl p-6 ring-1 ring-neutral-950/5 transition hover:bg-neutral-50 sm:p-8">
                    <h3>
                      <a href="/work/phobia">
                        <span class="absolute inset-0 rounded-3xl"></span>
                        <img alt="Phobia" width="36" height="36" class="h-16 w-16" src="<?php echo get_template_directory_uri(); ?>/build/images/logomark-dark.ph.svg">
                      </a>
                    </h3>
                    <p class="mt-6 flex gap-x-2 text-sm text-neutral-950">
                      <time datetime="2022" class="font-semibold">2022</time>
                      <span class="text-neutral-300" aria-hidden="true">/</span>
                      <span>Case study</span>
                    </p>
                    <p class="mt-6 font-display text-2xl font-semibold text-neutral-950">Преодолейте свои страхи, найдите свою пару</p>
                    <p class="mt-4 text-base text-neutral-600">Боритесь со своими страхами и найдите идеальную пару.</p>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div class="relative isolate bg-neutral-50 py-16 sm:py-28 md:py-32 mt-24 sm:mt-32 lg:mt-40">
            <svg aria-hidden="true" class="absolute inset-0 -z-10 h-full w-full fill-neutral-100 stroke-neutral-950/5 [mask-image:linear-gradient(to_bottom_left,white_50%,transparent_60%)]">
              <rect width="100%" height="100%" fill="url(#:R6bqlda:)" stroke-width="0"></rect>
              <svg x="50%" y="-256" stroke-width="0" class="overflow-visible">
                <path transform="translate(64 160)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
                <path transform="translate(128 320)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
                <path transform="translate(288 480)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
                <path transform="translate(512 320)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
                <path transform="translate(544 640)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
                <path transform="translate(320 800)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path>
              </svg>
              <defs>
                <pattern id=":R6bqlda:" width="96" height="480" x="50%" patternUnits="userSpaceOnUse" patternTransform="translate(0 -256)" fill="none">
                  <path d="M128 0 98.572 147.138A16 16 0 0 1 82.883 160H13.117a16 16 0 0 0-15.69 12.862l-26.855 134.276A16 16 0 0 1-45.117 320H-116M64-160 34.572-12.862A16 16 0 0 1 18.883 0h-69.766a16 16 0 0 0-15.69 12.862l-26.855 134.276A16 16 0 0 1-109.117 160H-180M192 160l-29.428 147.138A15.999 15.999 0 0 1 146.883 320H77.117a16 16 0 0 0-15.69 12.862L34.573 467.138A16 16 0 0 1 18.883 480H-52M-136 480h58.883a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1-18.883 320h69.766a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1 109.117 160H192M-72 640h58.883a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1 45.117 480h69.766a15.999 15.999 0 0 0 15.689-12.862l26.856-134.276A15.999 15.999 0 0 1 173.117 320H256M-200 320h58.883a15.999 15.999 0 0 0 15.689-12.862l26.856-134.276A16 16 0 0 1-82.883 160h69.766a16 16 0 0 0 15.69-12.862L29.427 12.862A16 16 0 0 1 45.117 0H128"></path>
                </pattern>
              </defs>
            </svg>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:max-w-none">
                <div>
                  <figure class="mx-auto max-w-4xl">
                    <blockquote class="relative font-display text-3xl font-medium tracking-tight text-neutral-950 sm:text-4xl">
                      <p class="before:content-['“'] after:content-['”'] sm:before:absolute sm:before:right-full">Команда KonasStudio смогла пойти дальше и даже нашла способ получить доступ к микрофону пользователя, не вызывая ни одного из этих надоедливых диалоговых окон для разрешений.</p>
                    </blockquote>
                    <figcaption class="mt-10">
                      <img alt="Phobia" width="184" height="36" src="<?php echo get_template_directory_uri(); ?>/build/images/logo-dark.ph.svg">
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-24 sm:mt-32 lg:mt-40">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <div class="max-w-2xl">
                <h2>
                  <span class="mb-6 block font-display text-base font-semibold text-neutral-950">Сервисы</span>
                  <span class="sr-only"> - </span>
                  <span class="block font-display tracking-tight [text-wrap:balance] text-4xl font-medium sm:text-5xl text-neutral-950">Наша команда дает вам возможность обнаруживать, исследовать и реагировать на инновационные возможности.</span>
                </h2>
                <div class="mt-6 text-xl text-neutral-600">
                  <p>При условии, что эти возможности включают финансовую компенсацию за активизацию предыдущих инициатив, мы обладаем способностью генерировать безграничный набор таких предложений.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-16">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <div class="lg:flex lg:items-center lg:justify-end">
                <div class="flex justify-center lg:w-1/2 lg:justify-end lg:pr-12">
                  <div class="w-[33.75rem] flex-none lg:w-[45rem]">
                    <div class="justify-center lg:justify-end relative flex aspect-[719/680] w-full grayscale">
                      <svg viewBox="0 0 655 680" fill="none" class="h-full">
                        <g clip-path="url(#:S1:-clip)" class="group">
                          <g class="origin-center scale-100 transition duration-500 motion-safe:group-hover:scale-105">
                            <foreignObject width="655" height="680">
                              <img alt="" width="2400" height="3000" class="w-full bg-neutral-100 object-cover" src="<?php echo get_template_directory_uri(); ?>/build/images/laptop.webp">
                            </foreignObject>
                          </g>
                          <use href="#:S1:-shape" stroke-width="2" class="stroke-neutral-950/10"></use>
                        </g>
                        <defs>
                          <clipPath id=":S1:-clip">
                            <path id=":S1:-shape" d="M537.827 9.245A11.5 11.5 0 0 1 549.104 0h63.366c7.257 0 12.7 6.64 11.277 13.755l-25.6 128A11.5 11.5 0 0 1 586.87 151h-28.275a15.999 15.999 0 0 0-15.689 12.862l-59.4 297c-1.98 9.901 5.592 19.138 15.689 19.138h17.275l.127.001c.85.009 1.701.074 2.549.009 11.329-.874 21.411-7.529 24.88-25.981.002-.012.016-.016.023-.007.008.009.022.005.024-.006l24.754-123.771A11.5 11.5 0 0 1 580.104 321h63.366c7.257 0 12.7 6.639 11.277 13.755l-25.6 128A11.5 11.5 0 0 1 617.87 472H559c-22.866 0-28.984 7.98-31.989 25.931-.004.026-.037.035-.052.014-.015-.02-.048-.013-.053.012l-24.759 123.798A11.5 11.5 0 0 1 490.87 631h-29.132a14.953 14.953 0 0 0-14.664 12.021c-4.3 21.502-23.18 36.979-45.107 36.979H83.502c-29.028 0-50.8-26.557-45.107-55.021l102.4-512C145.096 91.477 163.975 76 185.902 76h318.465c10.136 0 21.179-5.35 23.167-15.288l10.293-51.467Zm-512 160A11.5 11.5 0 0 1 37.104 160h63.366c7.257 0 12.7 6.639 11.277 13.755l-25.6 128A11.5 11.5 0 0 1 74.87 311H11.504c-7.257 0-12.7-6.639-11.277-13.755l25.6-128Z" fill-rule="evenodd" clip-rule="evenodd"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                </div>
                <div>
                  <ul role="list" class="text-base text-neutral-600 mt-16 lg:mt-0 lg:w-1/2 lg:min-w-[33rem] lg:pl-4">
                    <li class="group mt-10 first:mt-0">
                      <div>
                        <div class="pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden relative before:absolute after:absolute before:bg-neutral-950 after:bg-neutral-950/10 before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px">
                          <strong class="font-semibold text-neutral-950">Веб-разработка. </strong>Наш опыт заключается в создании потрясающих маркетинговых страниц премиум-класса. Остальная часть веб-сайта служит основой, заполненной преимущественно текстом-заполнителем.
                        </div>
                      </div>
                    </li>
                    <li class="group mt-10 first:mt-0">
                      <div>
                        <div class="pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden relative before:absolute after:absolute before:bg-neutral-950 after:bg-neutral-950/10 before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px">
                          <strong class="font-semibold text-neutral-950">Разработка приложений. </strong>В нашу команду входят опытные разработчики, владеющие современными платформами приложений, включая Angular 1 и Google Web Toolkit.</div>
                        </div>
                      </li>
                      <li class="group mt-10 first:mt-0">
                        <div>
                          <div class="pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden relative before:absolute after:absolute before:bg-neutral-950 after:bg-neutral-950/10 before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px">
                            <strong class="font-semibold text-neutral-950">E-commerce. </strong>Наш опыт заключается в том, чтобы возглавлять эволюцию платформ электронной коммерции. Это включает в себя персонализацию проверенного дизайна магазина Shopify с использованием вашего отличительного бренда — шаблона, который уже более полувека является основой нашего успеха.
                          </div>
                        </div>
                      </li>
                      <li class="group mt-10 first:mt-0">
                        <div>
                          <div class="pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden relative before:absolute after:absolute before:bg-neutral-950 after:bg-neutral-950/10 before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px">
                            <strong class="font-semibold text-neutral-950">Пользовательское управление контентом. </strong>В KonasStudio мы осознаём острую необходимость в мощной и адаптированной CMS. Следовательно, мы управляем всеми инициативами наших клиентов с помощью единой обширной настройки Wordpress, чтобы обеспечить оптимальную производительность и кастомизацию.
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
          <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-24 sm:mt-32 lg:mt-40">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <div class="-mx-6 rounded-4xl bg-neutral-950 px-6 py-20 sm:mx-0 sm:py-32 md:px-12">
                <div class="mx-auto max-w-4xl">
                  <div class="max-w-xl">
                    <h2 class="font-display text-3xl font-medium text-white [text-wrap:balance] sm:text-4xl">Расскажите нам о своём проекте</h2>
                    <div class="mt-6 flex">
                      <a class="inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition bg-white text-neutral-950 hover:bg-neutral-200" href="/contact">
                        <span class="relative top-px">Скажите привет</span>
                      </a>
                    </div>
                    <div class="mt-10 border-t border-white/10 pt-10">
                      <h3 class="font-display text-base font-semibold text-white">Наш офис</h3>
                      <ul role="list" class="mt-6 grid grid-cols-1 gap-8 sm:grid-cols-2">
                        <li>
                          <address class="text-sm not-italic text-neutral-300">
                            <strong class="text-white">La Vila Joyosa</strong><br>partida Paraiso, 55<br>05370, Alicante, Spain
                          </address>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <footer class="mx-auto max-w-7xl px-6 lg:px-8 mt-24 w-full sm:mt-32 lg:mt-40">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <div>
              <div class="grid grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2">
                <nav>
                  <ul role="list" class="grid grid-cols-2 gap-8 sm:grid-cols-3">
                    <li>
                      <div class="font-display text-sm font-semibold tracking-wider text-neutral-950">Работы</div>
                      <ul role="list" class="mt-4 text-sm text-neutral-700">
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="/work/family-fund">FamilyFund</a>
                        </li>
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="/work/unseal">Unseal</a>
                        </li>
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="/work/phobia">Phobia</a>
                        </li>
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="/work">Смотреть все <span aria-hidden="true">→</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <div class="font-display text-sm font-semibold tracking-wider text-neutral-950">Компания</div>
                      <ul role="list" class="mt-4 text-sm text-neutral-700">
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="/about">О нас</a>
                        </li>
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="/process">Наши процессы</a>
                        </li>
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="/blog">Блог</a>
                        </li>
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="/contact">Связаться с нами</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <div class="font-display text-sm font-semibold tracking-wider text-neutral-950">Будем на связи</div>
                      <ul role="list" class="mt-4 text-sm text-neutral-700">
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="https://wa.me/34610869936?text=Im%20interested%20in%20website" target="_blank">WhatsApp</a>
                        </li>
                        <li class="mt-4">
                          <a class="transition hover:text-neutral-950" href="https://github.com/konasicode" target="_blank">GitHub</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
                <div class="flex lg:justify-end">
                  <form class="max-w-sm">
                    <h2 class="font-display text-sm font-semibold tracking-wider text-neutral-950">Подпишитесь на нашу рассылку</h2>
                    <p class="mt-4 text-sm text-neutral-700">Подпишитесь, чтобы получать последние новости дизайна, статьи, ресурсы и вдохновение.</p>
                    <div class="relative mt-6">
                      <input type="email" placeholder="Email address" autocomplete="email" aria-label="Email address" class="block w-full rounded-2xl border border-neutral-300 bg-transparent py-4 pl-6 pr-20 text-base/6 text-neutral-950 ring-4 ring-transparent transition placeholder:text-neutral-500 focus:border-neutral-950 focus:outline-none focus:ring-neutral-950/5">
                      <div class="absolute inset-y-1 right-1 flex justify-end">
                        <button type="submit" aria-label="Submit" class="flex aspect-square h-full items-center justify-center rounded-xl bg-neutral-950 text-white transition hover:bg-neutral-800">
                          <svg viewBox="0 0 16 6" aria-hidden="true" class="w-4">
                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M16 3 10 .5v2H0v1h10v2L16 3Z"></path>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="mb-20 mt-24 flex flex-wrap items-end justify-between gap-x-6 gap-y-4 border-t border-neutral-950/10 pt-12">
                <a aria-label="Home" href="/">
                  <svg viewBox="0 0 130 32" aria-hidden="true" class="group/logo h-8">
                    <svg viewBox="0 0 32 32" aria-hidden="true" preserveAspectRatio="xMinYMid meet">
                      <rect clip-path="url(#:Rbblda:-clip)" class="h-8 transition-all duration-300 fill-neutral-950 w-0 group-hover/logo:w-8"></rect>
                      <use href="#:Rbblda:-path" class="stroke-neutral-950" fill="none" stroke-width="1.5"></use>
                      <defs>
                        <path id=":Rbblda:-path" d="M3.25 26v.75H7c1.305 0 2.384-.21 3.346-.627.96-.415 1.763-1.02 2.536-1.752.695-.657 1.39-1.443 2.152-2.306l.233-.263c.864-.975 1.843-2.068 3.071-3.266 1.209-1.18 2.881-1.786 4.621-1.786h5.791V5.25H25c-1.305 0-2.384.21-3.346.627-.96.415-1.763 1.02-2.536 1.751-.695.658-1.39 1.444-2.152 2.307l-.233.263c-.864.975-1.843 2.068-3.071 3.266-1.209 1.18-2.881 1.786-4.621 1.786H3.25V26Z"></path>
                        <clipPath id=":Rbblda:-clip">
                          <use href="#:Rbblda:-path"></use>
                        </clipPath>
                      </defs>
                    </svg>
                    <path class="fill-neutral-950" d="M52.928 23.716c5.184 0 7.992-1.992 7.992-5.28 0-3.888-2.688-4.8-7.512-5.376-3.36-.408-4.728-.672-4.728-2.448 0-1.464 1.44-2.376 3.912-2.376 2.4 0 3.936.864 4.104 2.784h3.576c-.24-3.288-3-5.232-7.536-5.232-4.728 0-7.68 1.896-7.68 5.208 0 3.48 2.712 4.464 7.416 5.04 3.216.408 4.8.648 4.8 2.664 0 1.584-1.392 2.544-4.224 2.544-3.048 0-4.68-1.176-4.752-3.288H44.6c.072 3.408 2.616 5.76 8.328 5.76Zm14.175-.216h3.312v-2.928h-1.968c-.84 0-1.272-.24-1.272-1.104v-6.144h3.24v-2.592h-3.24V6.676l-3.36.648v3.408h-2.496v2.592h2.496v7.2c0 2.04 1.248 2.976 3.288 2.976Zm10.078.216c2.16 0 4.104-1.008 4.944-2.64h.168l.144 2.424h3.288V10.732h-3.432v6.336c0 2.4-1.584 4.032-3.984 4.032-2.328 0-3.264-1.368-3.264-3.936v-6.432h-3.432v7.032c0 4.416 2.256 5.952 5.568 5.952Zm16.24.048c2.52 0 4.2-1.008 4.944-2.496h.168l.072 2.232h3.264V6.004h-3.408v7.008h-.168c-.792-1.56-2.592-2.52-4.848-2.52-3.816 0-6.384 2.592-6.384 6.624 0 4.056 2.568 6.648 6.36 6.648Zm1.032-2.616c-2.472 0-3.96-1.536-3.96-4.032s1.488-4.008 3.96-4.008 3.984 1.512 3.984 3.648v.744c0 2.136-1.536 3.648-3.984 3.648Zm9.485-12.216h3.408V6.004h-3.408v2.928Zm0 14.568h3.408V10.732h-3.408V23.5Zm12.481.24c4.584 0 7.56-2.52 7.56-6.624 0-4.152-3-6.624-7.56-6.624s-7.56 2.52-7.56 6.624c0 4.128 3.024 6.624 7.56 6.624Zm0-2.64c-2.592 0-4.128-1.56-4.128-3.984s1.536-3.984 4.128-3.984c2.616 0 4.152 1.536 4.152 3.984 0 2.424-1.56 3.984-4.152 3.984Zm8.794 2.4h3.384v-2.88h-3.384v2.88Z"></path>
                  </svg>
                </a>
                <p class="text-sm text-neutral-700">© Konas Studio Agency Inc. 2024</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <?php
      wp_footer();
    ?>
  </body>
</html>
