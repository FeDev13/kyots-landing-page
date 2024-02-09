<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="icon" href="./img/logo.jpg" type="image/icon type" />
    <title>Kytos</title>

</head>
<body>
<div
      class="mx-auto mt-10 flex justify-between px-10 top-0 sticky z-10 bg-white"
    >
      <nav class="border-gray-200 px-2 mb-10">
        <div
          class="container mx-auto flex flex-wrap items-center justify-between"
        >
          <img
            src="./img/logo.jpg"
            alt="logo kytos"
            class="rounded-lg w-[50%] md:w-[10%]"
          />
          <div class="flex md:order-2">
            <button
              data-collapse-toggle="mobile-menu-3"
              type="button"
              class="md:hidden text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
              aria-controls="mobile-menu-3"
              aria-expanded="false"
            >
              <span class="sr-only">Open main menu</span>
              <svg
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <svg
                class="hidden w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
          <div
            class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1"
            id="mobile-menu-3"
          >
            <ul
              class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-md md:font-medium"
            >
              <li>
                <a
                  href="login.php"
                  class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0"
                  >Login</a
                >
              </li>
              <li>
                <a
                  href="signup.php"
                  class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0"
                  >Registrarse</a
                >
              </li>
              <li>
                <a
                  href="index.html"
                  class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="specialties.php"
                  class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0"
                  >Especialidades</a
                >
              </li>
              <li>
                <a
                  aria-label="Chat on WhatsApp"
                  href="https://wa.me/542235915750"
                >
                  <svg
                    width="30px"
                    height="30px"
                    viewBox="0 0 48 48"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    fill="#000000"
                  >
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                      <title>Whatsapp-color</title>
                      <desc>Created with Sketch.</desc>
                      <defs></defs>
                      <g
                        id="Icons"
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <g
                          id="Color-"
                          transform="translate(-700.000000, -360.000000)"
                          fill="#67C15E"
                        >
                          <path
                            d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z"
                            id="Whatsapp"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <h1
          class=" text-center relative max-w-lg mb-20 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none mx-auto"
        >
          PROFESIONALES
          <span
            class="text-blue-500 uppercase absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-blue-300 via-blue-400 to-blue-500 rounded-full"
            ></span
          >
        </h1>
    <div class="p-8 grid gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-3 items-center justify-center mx-auto">
        <div class="p-2">
            <img src="./img/sofim.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/agus.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/cecil.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/lourdes.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/mjfranco.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/pasarelli.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/escribano.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/ali.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/verano.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/lopez.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/ali.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/facioni.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/bou.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/castro.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/rivera.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/prieto.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/campins.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/braschi.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/noto.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/guinazu.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/peppino.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/barcellandi.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/delfiore.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/dimattia.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/dinapoli.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/echevarria.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/gonzalez.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/gimenez.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/marinangeli.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/molina.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/montano.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/sedano.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/signes.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/teerink.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/uriarte.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/cantarellafix.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/caponifix.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
        <div class="p-2">
            <img src="./img/caputifix.png" alt="foto de staff" class="w-[50%] shadow-2xl mx-auto">
        </div>
   </div>
   <footer class="bg-blue-900 min-h-screen mt-auto text-white text-xl">
      <div
        class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8"
      >
        <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
          <div class="sm:col-span-2">
            <img src="./img/logo.jpg" class="w-[50%] rounded-lg" alt="" />
          </div>
          <div class="space-y-2 text-sm">
            <p class="text-white font-bold tracking-wide text-xl">Contacto</p>
            <div class="flex">
              <p class="mr-1 text-white text-xl">Telefono:</p>
              <p class="text-xl">2235915750</p>
            </div>

            <div class="flex">
              <p class="mr-1 text-white text-xl">Direccion:</p>
              <p class="text-xl">Edison 2044, Mar del Plata</p>
            </div>
            <p class="text-white font-bold tracking-wide text-xl">
              Nuestros horarios
            </p>
            <div class="flex">
              <p class="mr-1 text-white text-xl">
                Lunes a viernes de 8 hrs a 12 hrs - 16 hrs a 20 hrs
              </p>
            </div>
          </div>
          <div>
            <span class="text-white font-bold tracking-wide"
              >Encontranos en</span
            >
            <div class="flex items-center mt-1 space-x-3">
              <a
                href="https://www.instagram.com/kytossaludintegral/"
                class="text-black transition-colors duration-300 hover:text-deep-purple-accent-400"
              >
                <svg
                  width="45px"
                  height="45px"
                  viewBox="0 0 32 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <rect
                      x="2"
                      y="2"
                      width="28"
                      height="28"
                      rx="6"
                      fill="url(#paint0_radial_87_7153)"
                    ></rect>
                    <rect
                      x="2"
                      y="2"
                      width="28"
                      height="28"
                      rx="6"
                      fill="url(#paint1_radial_87_7153)"
                    ></rect>
                    <rect
                      x="2"
                      y="2"
                      width="28"
                      height="28"
                      rx="6"
                      fill="url(#paint2_radial_87_7153)"
                    ></rect>
                    <path
                      d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"
                      fill="white"
                    ></path>
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z"
                      fill="white"
                    ></path>
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z"
                      fill="white"
                    ></path>
                    <defs>
                      <radialGradient
                        id="paint0_radial_87_7153"
                        cx="0"
                        cy="0"
                        r="1"
                        gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)"
                      >
                        <stop stop-color="#B13589"></stop>
                        <stop offset="0.79309" stop-color="#C62F94"></stop>
                        <stop offset="1" stop-color="#8A3AC8"></stop>
                      </radialGradient>
                      <radialGradient
                        id="paint1_radial_87_7153"
                        cx="0"
                        cy="0"
                        r="1"
                        gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)"
                      >
                        <stop stop-color="#E0E8B7"></stop>
                        <stop offset="0.444662" stop-color="#FB8A2E"></stop>
                        <stop offset="0.71474" stop-color="#E2425C"></stop>
                        <stop
                          offset="1"
                          stop-color="#E2425C"
                          stop-opacity="0"
                        ></stop>
                      </radialGradient>
                      <radialGradient
                        id="paint2_radial_87_7153"
                        cx="0"
                        cy="0"
                        r="1"
                        gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)"
                      >
                        <stop offset="0.156701" stop-color="#406ADC"></stop>
                        <stop offset="0.467799" stop-color="#6A45BE"></stop>
                        <stop
                          offset="1"
                          stop-color="#6A45BE"
                          stop-opacity="0"
                        ></stop>
                      </radialGradient>
                    </defs>
                  </g>
                </svg>
              </a>
              <a
                aria-label="Chat on WhatsApp"
                href="https://wa.me/542235915750"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  aria-label="WhatsApp"
                  role="img"
                  viewBox="0 0 512 512"
                  width="38px"
                  height="38px"
                  fill="#000000"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <rect
                      width="512"
                      height="512"
                      rx="15%"
                      fill="#25d366"
                    ></rect>
                    <path
                      fill="#25d366"
                      stroke="#ffffff"
                      stroke-width="26"
                      d="M123 393l14-65a138 138 0 1150 47z"
                    ></path>
                    <path
                      fill="#ffffff"
                      d="M308 273c-3-2-6-3-9 1l-12 16c-3 2-5 3-9 1-15-8-36-17-54-47-1-4 1-6 3-8l9-14c2-2 1-4 0-6l-12-29c-3-8-6-7-9-7h-8c-2 0-6 1-10 5-22 22-13 53 3 73 3 4 23 40 66 59 32 14 39 12 48 10 11-1 22-10 27-19 1-3 6-16 2-18"
                    ></path>
                  </g>
                </svg>
              </a>
              <a href="https://twitter.com/Kytossalud"
                ><img src="./img/xlogo.png" alt="x logo"
              /></a>
              <a
                href="https://www.facebook.com/kytossaludintegral?mibextid=ZbWKwL"
              >
                <svg
                  width="40px"
                  height="40px"
                  viewBox="0 0 256 256"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  preserveAspectRatio="xMidYMid"
                  fill="#000000"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <g>
                      <path
                        d="M241.871,256.001 C249.673,256.001 256,249.675 256,241.872 L256,14.129 C256,6.325 249.673,0 241.871,0 L14.129,0 C6.324,0 0,6.325 0,14.129 L0,241.872 C0,249.675 6.324,256.001 14.129,256.001 L241.871,256.001"
                        fill="#395185"
                      ></path>
                      <path
                        d="M176.635,256.001 L176.635,156.864 L209.912,156.864 L214.894,118.229 L176.635,118.229 L176.635,93.561 C176.635,82.375 179.742,74.752 195.783,74.752 L216.242,74.743 L216.242,40.188 C212.702,39.717 200.558,38.665 186.43,38.665 C156.932,38.665 136.738,56.67 136.738,89.736 L136.738,118.229 L103.376,118.229 L103.376,156.864 L136.738,156.864 L136.738,256.001 L176.635,256.001"
                        fill="#FFFFFF"
                      ></path>
                    </g>
                  </g>
                </svg>
              </a>
              <a href="https://linktr.ee/kytossaludintegral">
                <img src="./img/linktree.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
      
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</body>
</html>