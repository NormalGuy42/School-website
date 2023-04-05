<?php
    session_start();
    if(!$_SESSION['isLogged']) {
      header("location: index.php"); 
      die(); 
    }
?>
<header>
    <div class="logo">
        <a href="admin.php">
            <img src="../assets/bah_kane_circle.png" alt="">
        </a>
    </div>
    <svg class="burger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="burger_svg" version="1.1" width="400" height="400" viewBox="0, 0, 400,400">
        <g id="svgg" class="burger">
            <path id="path0" d="M60.169 74.148 C 47.307 78.873,46.513 97.065,58.895 103.329 L 61.011 104.400 204.800 104.400 
            L 348.589 104.400 350.794 103.303 C 353.391 102.011,356.886 98.629,357.821 
            96.503 C 358.184 95.676,358.682 94.579,358.928 94.064 C 359.575 92.705,359.507 
            86.134,358.823 84.000 C 357.606 80.200,354.434 76.679,350.535 74.798 L 348.050 
            73.600 204.725 73.648 C 99.229 73.683,61.075 73.815,60.169 74.148 M62.200 170.182 C 47.700 173.758,45.600 193.882,59.041 
            200.451 L 61.800 201.800 204.800 201.800 L 347.800 201.800 350.479 200.490 C 356.965 
            197.317,360.468 190.657,359.400 183.529 C 359.180 182.061,358.865 180.726,358.700 180.563 C 358.535 180.400,358.400 180.017,358.400 
            179.711 C 358.400 176.719,352.298 171.459,347.325 170.164 C 344.316 169.380,65.379 169.398,62.200 170.182 M60.973 267.526 
            C 46.699 272.270,46.388 293.278,60.515 298.442 C 63.768 299.631,345.832 299.631,349.085 298.442 
            C 363.245 293.266,362.974 272.618,348.681 267.595 C 345.416 266.447,64.422 266.380,60.973 267.526 " stroke="white" fill="#fff" fill-rule="evenodd" class="burger">
            </path>
        </g>
    </svg>
</header>
<section class="userpage">
    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <a href="admin.php">
                    <label for="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" 
                            stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path xmlns="http://www.w3.org/2000/svg" 
                                d="M13 12C13 11.4477 13.4477 11 14 11H19C19.5523 11 20 11.4477 20 12V19C20 19.5523 19.5523 20 
                                19 20H14C13.4477 20 13 19.5523 13 19V12Z" stroke="#fff" stroke-width="2" stroke-linecap="round"/> 
                                <path xmlns="http://www.w3.org/2000/svg" d="M4 5C4 4.44772 4.44772 4 5 4H9C9.55228 4 10 4.44772 
                                10 5V12C10 12.5523 9.55228 13 9 13H5C4.44772 13 4 12.5523 4 12V5Z" stroke="#fff" stroke-width="2" 
                                stroke-linecap="round"/> 
                                <path xmlns="http://www.w3.org/2000/svg" d="M4 17C4 16.4477 4.44772 16 5 
                                16H9C9.55228 16 10 16.4477 10 17V19C10 19.5523 9.55228 20 9 20H5C4.44772 20 4 19.5523 4 19V17Z" 
                                stroke="#fff" stroke-width="2" stroke-linecap="round"/> 
                                <path xmlns="http://www.w3.org/2000/svg" d="M13 5C13 4.44772 13.4477 4 14 4H19C19.5523 4 20 4.44772 
                                20 5V7C20 7.55228 19.5523 8 19 8H14C13.4477 8 13 7.55228 13 7V5Z" stroke="#fff" stroke-width="2" 
                                stroke-linecap="round"/> 
                            </g>
                        </svg>
                        Page d'accueil
                    </label>
                    </a>
                </li>
                <li>
                    <label for="" class="collapsable">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 
                        229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 
                        8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 
                        316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 
                        20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 
                        15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 
                        192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                        </svg>
                        IUHEG
                        <svg role="img" aria-label="" aria-hidden="true" class="svg_collapse" viewBox="0 0 30 28" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.961 18.183l7.056-7.147 1.893 1.868-8.951 9.068-8.927-9.069 1.896-1.866z" 
                            fill="white">
                            </path>
                        </svg>
                    </label>
                    <section class="section_collapse">
                        <a href="iuheg/accueil.php">
                            <div>Accueil</div>
                        </a>
                        <a href="iuheg/programs.php">
                            <div>Programmes</div>
                        </a>
                    </section>
                </li>
                <li>
                <a href="./messages.php">
                <label for="">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg" version="1.1" width="400" 
                    height="401.7699115044248" viewBox="0, 0, 400,401.7699115044248">
                        <g id="svgg">
                            <path id="path1" d="M67.200 48.004 C 65.550 48.165,63.552 48.569,62.759 48.903 C 61.967 49.237,60.527 
                            49.632,59.559 49.783 C 57.819 50.053,56.877 50.425,52.200 52.689 C 46.968 55.222,39.833 61.431,36.903 
                            66.000 C 36.127 67.210,35.156 68.688,34.746 69.284 C 34.336 69.880,34.000 70.621,34.000 70.930 C 34.000 
                            71.239,33.671 71.921,33.268 72.446 C 32.068 74.009,29.850 81.148,29.180 85.600 C 28.931 87.255,28.827 
                            124.188,28.895 187.200 L 29.000 286.200 29.953 290.000 C 30.890 293.735,31.719 295.973,33.235 298.854 
                            C 33.656 299.654,34.000 300.572,34.000 300.892 C 34.000 301.213,34.360 301.802,34.800 302.200 C 
                            35.240 302.598,35.600 303.152,35.600 303.431 C 35.600 303.710,36.050 304.473,36.600 305.127 C 37.150 
                            305.781,37.600 306.444,37.600 306.601 C 37.600 308.114,47.796 316.942,51.200 318.377 C 51.750 318.608,52.470 
                            318.963,52.800 319.164 C 54.605 320.264,58.027 321.565,59.600 321.749 C 60.590 321.864,62.030 322.283,62.800 
                            322.680 C 64.107 323.352,66.491 323.413,98.880 323.600 C 126.579 323.760,133.665 323.905,134.080 324.320 C 
                            134.492 324.732,134.641 330.450,134.800 351.920 C 134.979 376.172,135.069 379.104,135.658 380.000 C 136.020 
                            380.550,136.439 381.411,136.589 381.913 C 137.466 384.847,141.449 386.946,146.200 386.977 L 149.800 387.000 
                            153.200 384.643 C 156.378 382.440,158.191 381.034,160.256 379.172 C 160.727 378.748,161.300 378.400,161.528 
                            378.400 C 161.756 378.400,162.216 378.127,162.550 377.793 C 163.641 376.701,166.798 374.400,167.203 374.400 
                            C 167.422 374.400,167.600 374.257,167.600 374.082 C 167.600 373.907,168.545 373.053,169.700 372.184 C 170.855 
                            371.315,172.025 370.391,172.300 370.130 C 172.575 369.870,173.700 369.074,174.800 368.361 C 175.900 
                            367.648,176.800 366.946,176.800 366.800 C 176.800 366.654,177.745 365.930,178.900 365.191 C 180.055 
                            364.452,182.343 362.757,183.984 361.424 C 185.625 360.091,189.225 357.347,191.984 355.326 C 196.551 
                            351.981,201.974 347.911,204.727 345.763 C 205.717 344.990,210.082 341.710,215.700 337.517 C 216.965 
                            336.573,218.437 335.440,218.970 335.000 C 219.503 334.560,220.593 333.750,221.392 333.200 C 222.192 
                            332.650,224.770 330.673,227.123 328.806 C 229.475 326.940,232.030 325.050,232.800 324.606 C 234.178 
                            323.813,234.985 323.797,284.000 323.600 L 333.800 323.400 335.600 322.509 C 336.590 322.019,337.906 
                            321.614,338.525 321.609 C 341.496 321.586,350.767 316.203,355.200 311.928 C 358.546 308.701,362.055 
                            303.910,363.610 300.445 C 364.065 299.430,364.789 297.934,365.219 297.121 C 365.649 296.307,366.000 
                            295.385,366.000 295.072 C 366.000 294.758,366.451 293.119,367.003 291.429 L 368.006 288.357 367.903 
                            184.861 C 367.806 87.595,367.758 81.301,367.109 80.311 C 366.729 79.731,366.298 78.479,366.150 77.528 
                            C 364.896 69.455,354.613 57.146,345.400 52.690 C 344.080 52.051,342.364 51.202,341.586 50.802 C 340.808 
                            50.402,339.278 49.945,338.186 49.785 C 337.094 49.626,335.705 49.245,335.100 48.938 C 334.495 48.631,332.245 
                            48.209,330.100 48.000 C 325.508 47.553,71.788 47.557,67.200 48.004 M271.656 143.991 C 272.615 144.426,273.790 
                            144.786,274.267 144.791 C 275.350 144.802,279.643 148.178,280.630 149.796 C 283.221 154.039,283.325 
                            154.389,283.363 159.000 C 283.409 164.456,282.390 167.131,279.000 170.455 C 277.633 171.796,274.720 
                            173.600,273.923 173.600 C 273.629 173.600,272.671 174.005,271.794 174.500 L 270.200 175.400 198.782 
                            175.400 C 131.439 175.400,127.304 175.360,126.296 174.700 C 125.709 174.315,124.977 174.000,124.670 
                            174.000 C 122.753 174.000,117.525 170.278,116.523 168.200 C 116.205 167.540,115.668 166.485,115.329 
                            165.856 C 114.401 164.130,113.966 159.622,114.399 156.210 C 115.152 150.271,118.291 146.683,124.774 
                            144.352 L 127.800 143.265 198.856 143.232 C 268.831 143.200,269.939 143.212,271.656 143.991 M207.304 
                            207.600 C 208.556 208.040,209.874 208.400,210.234 208.400 C 212.412 208.400,217.089 212.959,218.727 
                            216.678 C 220.022 219.621,220.287 226.965,219.145 228.258 C 218.784 228.666,218.370 229.562,218.224 
                            230.250 C 217.919 231.687,214.039 236.000,213.051 236.000 C 212.693 236.000,212.400 236.164,212.400 
                            236.365 C 212.400 238.401,131.467 239.747,125.108 237.817 C 117.025 235.364,113.030 228.668,114.351 
                            219.787 C 115.176 214.238,120.005 208.443,123.849 208.390 C 124.262 208.384,125.320 208.038,126.200 
                            207.622 C 128.769 206.406,203.849 206.386,207.304 207.600 " stroke="none" fill="#fff" fill-rule="evenodd">
                            </path>
                        </g>
                    </svg>
                    Messages
                    </label>
                </a>
                </li>
                <li>
                    <a href="./settings.php">
                    <label>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M481.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-30.9 28.1c-7.7 7.1-11.4 17.5-10.9 27.9c.1 2.9 .2 
                        5.8 .2 8.8s-.1 5.9-.2 8.8c-.5 10.5 3.1 20.9 10.9 27.9l30.9 28.1c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 
                        23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-39.7-12.6c-10-3.2-20.8-1.1-29.7 
                        4.6c-4.9 3.1-9.9 6.1-15.1 8.7c-9.3 4.8-16.5 13.2-18.8 23.4l-8.9 40.7c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 
                        3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-8.9-40.7c-2.2-10.2-9.5-18.6-18.8-23.4c-5.2-2.7
                        -10.2-5.6-15.1-8.7c-8.8-5.7-19.7-7.8-29.7-4.6L69.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7
                        -8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l30.9-28.1c7.7-7.1 11.4-17.5 10.9-27.9c
                        -.1-2.9-.2-5.8-.2-8.8s.1-5.9 .2-8.8c.5-10.5-3.1-20.9-10.9-27.9L8.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4
                        -11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l39.7 12.6c10 3.2 20.8 
                        1.1 29.7-4.6c4.9-3.1 9.9-6.1 15.1-8.7c9.3-4.8 16.5-13.2 18.8-23.4l8.9-40.7c2-9.1 9-16.3 18.2-17.8C213.3 
                        1.2 227.5 0 242 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l8.9 40.7c2.2 10.2 9.4 18.6 18.8 23.4c5.2 
                        2.7 10.2 5.6 15.1 8.7c8.8 5.7 19.7 7.7 29.7 4.6l39.7-12.6c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 
                        22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM242 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                        Paramètres
                    </label>
                    </a>
                </li>
            </ul>
        </nav>
    </div>