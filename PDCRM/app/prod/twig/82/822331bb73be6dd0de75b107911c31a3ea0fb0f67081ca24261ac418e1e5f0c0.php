<?php

/* :default:index.html.twig */
class __TwigTemplate_f15080012796bea745dce08163632cc0753eba8c6229b8077fa546d4d53f1ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 7
            echo "                <div class=\"flash-notice\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            <div id=\"divBusqueda\">
                ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:BuscarInmueble:buscarform", array()));
        // line 16
        echo "
            </div>

            <div id=\"divDestacados\" class=\"section z-depth-1\">
                <div class=\"carousel\" style=\"height:90%;width:100%;margin-top:-1%;background-color:white;\">
                    <a class=\"carousel-item\" href=\"#one!\">
                        <img src=\"";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6782734_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6782734_0") : $this->env->getExtension('asset')->getAssetUrl("images/6782734_inmueble1_1.jpeg");
            // line 23
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "6782734"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6782734") : $this->env->getExtension('asset')->getAssetUrl("images/6782734.jpeg");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "\">
                        <div class=\"caption center-align\">
                            <h6 class=\"light black-text text-lighten-3\">Departamentos en Preventa.</h6>
                        </div>
                    </a>
                    <a class=\"carousel-item\" href=\"#two!\">
                        <img src=\"";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1bc4990_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1bc4990_0") : $this->env->getExtension('asset')->getAssetUrl("images/1bc4990_inmueble2_1.png");
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "1bc4990"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1bc4990") : $this->env->getExtension('asset')->getAssetUrl("images/1bc4990.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "\">
                        <div class=\"caption center-align\">
                            <h6 class=\"light black-text text-lighten-3\">Departamentos en Preventa.</h6>
                        </div>
                    </a>
                    <a class=\"carousel-item\" href=\"#three!\">
                        <img src=\"";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d58b77b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d58b77b_0") : $this->env->getExtension('asset')->getAssetUrl("images/d58b77b_inmueble3_1.jpeg");
            // line 39
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "d58b77b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d58b77b") : $this->env->getExtension('asset')->getAssetUrl("images/d58b77b.jpeg");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "\">
                        <div class=\"caption center-align\">
                            <h6 class=\"light black-text text-lighten-3\">Departamentos en Preventa.</h6>
                        </div>
                    </a>
                    <a class=\"carousel-item\" href=\"#four!\">
                        <img src=\"";
        // line 46
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9246717_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9246717_0") : $this->env->getExtension('asset')->getAssetUrl("images/9246717_inmueble4_1.jpeg");
            // line 47
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "9246717"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9246717") : $this->env->getExtension('asset')->getAssetUrl("images/9246717.jpeg");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 48
        echo "\">
                        <div class=\"caption center-align\">
                            <h6 class=\"light black-text text-lighten-3\">Departamentos en Preventa.</h6>
                        </div>
                    </a>
                    <a class=\"carousel-item\" href=\"#five!\">
                        <img src=\"";
        // line 54
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a4b9fe9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a4b9fe9_0") : $this->env->getExtension('asset')->getAssetUrl("images/a4b9fe9_inmueble5_1.jpeg");
            // line 55
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "a4b9fe9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a4b9fe9") : $this->env->getExtension('asset')->getAssetUrl("images/a4b9fe9.jpeg");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 56
        echo "\">
                        <div class=\"caption center-align\">
                            <h6 class=\"light black-text text-lighten-3\">Departamentos en Preventa.</h6>
                        </div>
                    </a>
                    <a class=\"carousel-item\" href=\"#six!\">
                        <img src=\"";
        // line 62
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "016c521_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_016c521_0") : $this->env->getExtension('asset')->getAssetUrl("images/016c521_inmueble6_1.png");
            // line 63
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "016c521"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_016c521") : $this->env->getExtension('asset')->getAssetUrl("images/016c521.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 64
        echo "\">
                        <div class=\"caption center-align\">
                            <h6 class=\"light black-text text-lighten-3\">Departamentos en Preventa.</h6>
                        </div>
                    </a>
                </div>
                <br>
                <div style=\"margin-left:auto;margin-right:auto;width:300px;\">
                    <a href=\"#\" class=\"waves-effect waves-light btn center\" style=\"margin-left: 60px\">Ver Desarrollos</a>
                </div>
            </div>

            <div id=\"divPublica\" class=\"parallax-container z-depth-2\">
                <div class=\"section no-pad-bot\">
                    <div class=\"container\" style=\"text-align: center\">
                        <h4 class=\"center-align\">¡Publica tus Inmuebles en iRealty es gratis!</h4>
                        <h5 class=\"center-align\">y obten todos beneficios</h5>
                        <div class=\"row\">
                            <div class=\"col l3 m3 s6 xs12\">
                                <div class=\"w-counter col l12 m12 s12 xs12\">
                                    <div class=\"w-counter-h\">
                                        <h3 class=\"w-counter-number\">10233</h3>
                                        <h5 class=\"w-counter-title\">Propiedades</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col l3 m3 s6 xs12\">
                                <div class=\"w-counter col l12 m12 s12 xs12\">
                                    <div class=\"w-counter-h\">
                                        <h3 class=\"w-counter-number\">1604</h3>
                                        <h5 class=\"w-counter-title\">Asesores</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col l3 m3 s6 xs12\">
                               <div class=\"w-counter col l12 m12 s12 xs12\">
                                    <div class=\"w-counter-h\">
                                        <h3 class=\"w-counter-number\">13662</h3>
                                        <h5 class=\"w-counter-title\">Prospectos</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col l3 m3 s6 xs12\">
                                <div class=\"w-counter col l12 m12 s12 xs12\">
                                    <div class=\"w-counter-h\">
                                        <h3 class=\"w-counter-number\">477364000</h3>
                                        <h5 class=\"w-counter-title\">Pesos</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("usuario_new", array());
        echo "\" class=\"waves-effect waves-light btn center\">¡Publica Gratis Ahora!</a>
                    </div>
                </div>

                <div class=\"parallax\"><img src=\"";
        // line 120
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af0f1d0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af0f1d0_0") : $this->env->getExtension('asset')->getAssetUrl("images/af0f1d0_inter1_1.jpg");
            // line 121
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "af0f1d0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af0f1d0") : $this->env->getExtension('asset')->getAssetUrl("images/af0f1d0.jpg");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 122
        echo "\" alt=\"Unsplashed background img 1\"></div>
            </div>

            <div id=\"divSolucionInmobiliaria\" class=\"z-depth-1\">
                <div class=\"row section\">
                    <h3 class=\"header light\">Una Solución Inmobiliaria Completa</h3>
                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 129
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "43ca5d1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_43ca5d1_0") : $this->env->getExtension('asset')->getAssetUrl("images/43ca5d1_blueimg-contact_1.png");
            // line 130
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "43ca5d1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_43ca5d1") : $this->env->getExtension('asset')->getAssetUrl("images/43ca5d1.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 131
        echo "\">
                        <h4 class=\"center\">CRM</h4>
                        <p class=\"light\">El CRM Inmobiliario más completo y fácil de utilizar del mercado.</p>
                    </div>

                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 137
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3951de_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3951de_0") : $this->env->getExtension('asset')->getAssetUrl("images/e3951de_blueimg-screen_1.png");
            // line 138
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "e3951de"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3951de") : $this->env->getExtension('asset')->getAssetUrl("images/e3951de.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 139
        echo "\">
                        <h4 class=\"center\">Página Inmobiliaria</h4>
                        <p class=\"light\">Te Ofrecemos un sitio especialmente diseñado para tu empresa, garantizando que sea vista de la mejor y más utíl manera.</p>
                   </div>

                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 145
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9e6386b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e6386b_0") : $this->env->getExtension('asset')->getAssetUrl("images/9e6386b_blueimg-world_1.png");
            // line 146
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "9e6386b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e6386b") : $this->env->getExtension('asset')->getAssetUrl("images/9e6386b.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 147
        echo "\">
                        <h4 class=\"center\">Portales Inmobiliarios</h4>
                        <p class=\"light\">Tus inmuebles podrán ser publicados en los principales portales inmobiliarios del mercado.</p>
                    </div>
                </div>
                <div class=\"row section\">
                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 154
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dcfbc58_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dcfbc58_0") : $this->env->getExtension('asset')->getAssetUrl("images/dcfbc58_blueimg-seo_1.png");
            // line 155
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "dcfbc58"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dcfbc58") : $this->env->getExtension('asset')->getAssetUrl("images/dcfbc58.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 156
        echo "\">
                        <h4 class=\"center\">SEO</h4>
                        <p class=\"light\">Tu Página Inmobiliaria Optimizada para Motores de Búsqueda.</p>
                    </div>

                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 162
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c47c68e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c47c68e_0") : $this->env->getExtension('asset')->getAssetUrl("images/c47c68e_blueimg-people_1.png");
            // line 163
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "c47c68e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c47c68e") : $this->env->getExtension('asset')->getAssetUrl("images/c47c68e.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 164
        echo "\">
                        <h4 class=\"center\">Redes Sociales</h4>
                        <p class=\"light\">Aprovecha al máximo el potencial de las Redes Sociales.</p>
                    </div>

                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 170
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a458850_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a458850_0") : $this->env->getExtension('asset')->getAssetUrl("images/a458850_blueimg-mail_1.png");
            // line 171
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "a458850"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a458850") : $this->env->getExtension('asset')->getAssetUrl("images/a458850.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 172
        echo "\">
                        <h4 class=\"center\">Email Marketing</h4>
                        <p class=\"light\">Fácil administración de tus Campañas de Promoción y Mailing. Tu decides que inmuebles promover, y cómo resaltarlos.</p>
                    </div>
                </div>
            </div>

            <div id=\"divClientes\" class=\"z-depth-1\">
                <div class=\"row section\">
                    <h3 class=\"header light\">Nuestros clientes</h3>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 183
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b31ee0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b31ee0_0") : $this->env->getExtension('asset')->getAssetUrl("images/8b31ee0_allsa_1.png");
            // line 184
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "8b31ee0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b31ee0") : $this->env->getExtension('asset')->getAssetUrl("images/8b31ee0.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 185
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 188
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2a6225f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a6225f_0") : $this->env->getExtension('asset')->getAssetUrl("images/2a6225f_lemon_1.png");
            // line 189
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "2a6225f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a6225f") : $this->env->getExtension('asset')->getAssetUrl("images/2a6225f.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 190
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 193
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cc91c34_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc91c34_0") : $this->env->getExtension('asset')->getAssetUrl("images/cc91c34_gvia_1.png");
            // line 194
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "cc91c34"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc91c34") : $this->env->getExtension('asset')->getAssetUrl("images/cc91c34.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 195
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 198
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4873f27_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4873f27_0") : $this->env->getExtension('asset')->getAssetUrl("images/4873f27_bisp_1.png");
            // line 199
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "4873f27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4873f27") : $this->env->getExtension('asset')->getAssetUrl("images/4873f27.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 200
        echo "\">
                    </div>
                </div>

                <div class=\"row section\">
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 206
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "58cf01c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_58cf01c_0") : $this->env->getExtension('asset')->getAssetUrl("images/58cf01c_lomelin_1.png");
            // line 207
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "58cf01c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_58cf01c") : $this->env->getExtension('asset')->getAssetUrl("images/58cf01c.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 208
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 211
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "540e9ca_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_540e9ca_0") : $this->env->getExtension('asset')->getAssetUrl("images/540e9ca_infinito_1.png");
            // line 212
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "540e9ca"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_540e9ca") : $this->env->getExtension('asset')->getAssetUrl("images/540e9ca.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 213
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 216
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "26bf8f1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26bf8f1_0") : $this->env->getExtension('asset')->getAssetUrl("images/26bf8f1_latitud_1.png");
            // line 217
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "26bf8f1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26bf8f1") : $this->env->getExtension('asset')->getAssetUrl("images/26bf8f1.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 218
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 221
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4016b79_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4016b79_0") : $this->env->getExtension('asset')->getAssetUrl("images/4016b79_moreno_1.png");
            // line 222
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "4016b79"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4016b79") : $this->env->getExtension('asset')->getAssetUrl("images/4016b79.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 223
        echo "\">
                    </div>
                </div>

                <div class=\"row section\">
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 229
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0543274_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0543274_0") : $this->env->getExtension('asset')->getAssetUrl("images/0543274_pm_1.png");
            // line 230
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "0543274"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0543274") : $this->env->getExtension('asset')->getAssetUrl("images/0543274.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 231
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 234
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a9ebe74_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9ebe74_0") : $this->env->getExtension('asset')->getAssetUrl("images/a9ebe74_metro_1.png");
            // line 235
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "a9ebe74"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9ebe74") : $this->env->getExtension('asset')->getAssetUrl("images/a9ebe74.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 236
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 239
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "31a468c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_31a468c_0") : $this->env->getExtension('asset')->getAssetUrl("images/31a468c_properdeal_1.png");
            // line 240
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "31a468c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_31a468c") : $this->env->getExtension('asset')->getAssetUrl("images/31a468c.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 241
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 244
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b1aa06f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b1aa06f_0") : $this->env->getExtension('asset')->getAssetUrl("images/b1aa06f_amityk_1.png");
            // line 245
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "b1aa06f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b1aa06f") : $this->env->getExtension('asset')->getAssetUrl("images/b1aa06f.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 246
        echo "\">
                    </div>
                </div>

                <div class=\"row section\">
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 252
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2e36fd5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2e36fd5_0") : $this->env->getExtension('asset')->getAssetUrl("images/2e36fd5_leben_1.png");
            // line 253
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "2e36fd5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2e36fd5") : $this->env->getExtension('asset')->getAssetUrl("images/2e36fd5.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 254
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 257
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "36e8ef0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36e8ef0_0") : $this->env->getExtension('asset')->getAssetUrl("images/36e8ef0_plusvalia_1.png");
            // line 258
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "36e8ef0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36e8ef0") : $this->env->getExtension('asset')->getAssetUrl("images/36e8ef0.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 259
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 262
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2d6671c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2d6671c_0") : $this->env->getExtension('asset')->getAssetUrl("images/2d6671c_andova_1.png");
            // line 263
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "2d6671c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2d6671c") : $this->env->getExtension('asset')->getAssetUrl("images/2d6671c.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 264
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 267
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a3f09e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3f09e8_0") : $this->env->getExtension('asset')->getAssetUrl("images/a3f09e8_xell_1.png");
            // line 268
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "a3f09e8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3f09e8") : $this->env->getExtension('asset')->getAssetUrl("images/a3f09e8.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 269
        echo "\">
                    </div>
                </div>
            </div>

            <div id=\"divPortalesInmobiliarios\" class=\"z-depth-1\">
                <div class=\"row section\">
                    <h3 class=\"header light\">Portales Inmobiliarios</h3>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 278
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "de2f818_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de2f818_0") : $this->env->getExtension('asset')->getAssetUrl("images/de2f818_divendo_1.png");
            // line 279
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "de2f818"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de2f818") : $this->env->getExtension('asset')->getAssetUrl("images/de2f818.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 280
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 283
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ddc88f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ddc88f_0") : $this->env->getExtension('asset')->getAssetUrl("images/4ddc88f_olx_1.png");
            // line 284
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "4ddc88f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ddc88f") : $this->env->getExtension('asset')->getAssetUrl("images/4ddc88f.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 285
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 288
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e54abe9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e54abe9_0") : $this->env->getExtension('asset')->getAssetUrl("images/e54abe9_locanto_1.png");
            // line 289
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "e54abe9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e54abe9") : $this->env->getExtension('asset')->getAssetUrl("images/e54abe9.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 290
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 293
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51d6dbd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51d6dbd_0") : $this->env->getExtension('asset')->getAssetUrl("images/51d6dbd_mitula_1.png");
            // line 294
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "51d6dbd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51d6dbd") : $this->env->getExtension('asset')->getAssetUrl("images/51d6dbd.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 295
        echo "\">
                    </div>
                </div>

                <div class=\"row section\">
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 301
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3164ef3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3164ef3_0") : $this->env->getExtension('asset')->getAssetUrl("images/3164ef3_yakas_1.png");
            // line 302
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "3164ef3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3164ef3") : $this->env->getExtension('asset')->getAssetUrl("images/3164ef3.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 303
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 306
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "32f9c6f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_32f9c6f_0") : $this->env->getExtension('asset')->getAssetUrl("images/32f9c6f_sumavisos_1.png");
            // line 307
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "32f9c6f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_32f9c6f") : $this->env->getExtension('asset')->getAssetUrl("images/32f9c6f.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 308
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 311
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "505b5c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_505b5c2_0") : $this->env->getExtension('asset')->getAssetUrl("images/505b5c2_ibazar_1.png");
            // line 312
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "505b5c2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_505b5c2") : $this->env->getExtension('asset')->getAssetUrl("images/505b5c2.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 313
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 316
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "65824cb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65824cb_0") : $this->env->getExtension('asset')->getAssetUrl("images/65824cb_lamudi_1.png");
            // line 317
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "65824cb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_65824cb") : $this->env->getExtension('asset')->getAssetUrl("images/65824cb.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 318
        echo "\">
                    </div>
                </div>

                <div class=\"row section\">
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 324
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a224807_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a224807_0") : $this->env->getExtension('asset')->getAssetUrl("images/a224807_homein_1.png");
            // line 325
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "a224807"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a224807") : $this->env->getExtension('asset')->getAssetUrl("images/a224807.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 326
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 329
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "427d22e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_427d22e_0") : $this->env->getExtension('asset')->getAssetUrl("images/427d22e_donkiz_1.png");
            // line 330
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "427d22e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_427d22e") : $this->env->getExtension('asset')->getAssetUrl("images/427d22e.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 331
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 334
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52d9c8e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52d9c8e_0") : $this->env->getExtension('asset')->getAssetUrl("images/52d9c8e_mc_1.png");
            // line 335
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "52d9c8e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_52d9c8e") : $this->env->getExtension('asset')->getAssetUrl("images/52d9c8e.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 336
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 339
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3b27cda_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3b27cda_0") : $this->env->getExtension('asset')->getAssetUrl("images/3b27cda_trovit_1.png");
            // line 340
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "3b27cda"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3b27cda") : $this->env->getExtension('asset')->getAssetUrl("images/3b27cda.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 341
        echo "\">
                    </div>
                </div>

                <div class=\"row section\">
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 347
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2a22b5e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a22b5e_0") : $this->env->getExtension('asset')->getAssetUrl("images/2a22b5e_nura_1.png");
            // line 348
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "2a22b5e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a22b5e") : $this->env->getExtension('asset')->getAssetUrl("images/2a22b5e.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 349
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 352
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e257be2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e257be2_0") : $this->env->getExtension('asset')->getAssetUrl("images/e257be2_inmuebles24_1.png");
            // line 353
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "e257be2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e257be2") : $this->env->getExtension('asset')->getAssetUrl("images/e257be2.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 354
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 357
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d65d298_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d65d298_0") : $this->env->getExtension('asset')->getAssetUrl("images/d65d298_zonaprop_1.png");
            // line 358
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "d65d298"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d65d298") : $this->env->getExtension('asset')->getAssetUrl("images/d65d298.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 359
        echo "\">
                    </div>
                    <div class=\"col s12 l3 center\">
                        <img class=\"promo\" src=\"";
        // line 362
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5d046c4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d046c4_0") : $this->env->getExtension('asset')->getAssetUrl("images/5d046c4_donrenton_1.png");
            // line 363
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "5d046c4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d046c4") : $this->env->getExtension('asset')->getAssetUrl("images/5d046c4.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 364
        echo "\">
                    </div>
                </div>

                <div class=\"row section\">
                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 370
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a757688_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a757688_0") : $this->env->getExtension('asset')->getAssetUrl("images/a757688_propiedades_1.png");
            // line 371
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "a757688"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a757688") : $this->env->getExtension('asset')->getAssetUrl("images/a757688.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 372
        echo "\">
                    </div>
                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 375
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "61418d2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61418d2_0") : $this->env->getExtension('asset')->getAssetUrl("images/61418d2_mercadolibre_1.png");
            // line 376
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "61418d2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61418d2") : $this->env->getExtension('asset')->getAssetUrl("images/61418d2.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 377
        echo "\">
                    </div>
                    <div class=\"col s12 l4 center\">
                        <img class=\"promo\" src=\"";
        // line 380
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cdb41b5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cdb41b5_0") : $this->env->getExtension('asset')->getAssetUrl("images/cdb41b5_mylisting_1.png");
            // line 381
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "cdb41b5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cdb41b5") : $this->env->getExtension('asset')->getAssetUrl("images/cdb41b5.png");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 382
        echo "\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$(document).ready(function(){
            \$('.carousel').carousel({
                dist:-30,
                shift:10,
                padding:100,
            });
        });
    </script>
";
    }

    // line 399
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 400
        echo "    <style>
        #divBusqueda {
            background: url(";
        // line 402
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a2be15b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a2be15b_0") : $this->env->getExtension('asset')->getAssetUrl("images/a2be15b_mapa_portal_1.jpg");
            // line 403
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        } else {
            // asset "a2be15b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a2be15b") : $this->env->getExtension('asset')->getAssetUrl("images/a2be15b.jpg");
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "
                ";
        }
        unset($context["asset_url"]);
        // line 405
        echo "            );
            height: 500px;
            margin-top: 3px;
            padding-top: 80px;
        }

        #divDestacados {
            background: lightgray;
            height: 350px;
        }

        #divSolucionInmobiliaria {
            background: white;
        }

        #divPortalesInmobiliarios {
            margin-top: -18px;
            background: white;
        }

        #divClientes {
            margin-top: -15px;
        }

        h3 {
            text-align: center;
        }
        h5 {
            text-align: center;
        }

        .w-counter
        {
            border-radius: 25px;
            border: 4px solid white;
            padding: 20px;
            width: 200px;
            height: 150px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1335 => 405,  1321 => 403,  1317 => 402,  1313 => 400,  1310 => 399,  1291 => 382,  1277 => 381,  1273 => 380,  1268 => 377,  1254 => 376,  1250 => 375,  1245 => 372,  1231 => 371,  1227 => 370,  1219 => 364,  1205 => 363,  1201 => 362,  1196 => 359,  1182 => 358,  1178 => 357,  1173 => 354,  1159 => 353,  1155 => 352,  1150 => 349,  1136 => 348,  1132 => 347,  1124 => 341,  1110 => 340,  1106 => 339,  1101 => 336,  1087 => 335,  1083 => 334,  1078 => 331,  1064 => 330,  1060 => 329,  1055 => 326,  1041 => 325,  1037 => 324,  1029 => 318,  1015 => 317,  1011 => 316,  1006 => 313,  992 => 312,  988 => 311,  983 => 308,  969 => 307,  965 => 306,  960 => 303,  946 => 302,  942 => 301,  934 => 295,  920 => 294,  916 => 293,  911 => 290,  897 => 289,  893 => 288,  888 => 285,  874 => 284,  870 => 283,  865 => 280,  851 => 279,  847 => 278,  836 => 269,  822 => 268,  818 => 267,  813 => 264,  799 => 263,  795 => 262,  790 => 259,  776 => 258,  772 => 257,  767 => 254,  753 => 253,  749 => 252,  741 => 246,  727 => 245,  723 => 244,  718 => 241,  704 => 240,  700 => 239,  695 => 236,  681 => 235,  677 => 234,  672 => 231,  658 => 230,  654 => 229,  646 => 223,  632 => 222,  628 => 221,  623 => 218,  609 => 217,  605 => 216,  600 => 213,  586 => 212,  582 => 211,  577 => 208,  563 => 207,  559 => 206,  551 => 200,  537 => 199,  533 => 198,  528 => 195,  514 => 194,  510 => 193,  505 => 190,  491 => 189,  487 => 188,  482 => 185,  468 => 184,  464 => 183,  451 => 172,  437 => 171,  433 => 170,  425 => 164,  411 => 163,  407 => 162,  399 => 156,  385 => 155,  381 => 154,  372 => 147,  358 => 146,  354 => 145,  346 => 139,  332 => 138,  328 => 137,  320 => 131,  306 => 130,  302 => 129,  293 => 122,  279 => 121,  275 => 120,  268 => 116,  214 => 64,  200 => 63,  196 => 62,  188 => 56,  174 => 55,  170 => 54,  162 => 48,  148 => 47,  144 => 46,  136 => 40,  122 => 39,  118 => 38,  110 => 32,  96 => 31,  92 => 30,  84 => 24,  70 => 23,  66 => 22,  58 => 16,  56 => 13,  52 => 11,  43 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                 <div class="flash-notice">*/
/*                     {{ flash_message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             <div id="divBusqueda">*/
/*                 {{ render(controller(*/
/*                 'AppBundle:BuscarInmueble:buscarform',*/
/*                 { }*/
/*                 )) }}*/
/*             </div>*/
/* */
/*             <div id="divDestacados" class="section z-depth-1">*/
/*                 <div class="carousel" style="height:90%;width:100%;margin-top:-1%;background-color:white;">*/
/*                     <a class="carousel-item" href="#one!">*/
/*                         <img src="{% image '@FrameworkBundle/Resources/public/images/inmueble1.jpeg' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <div class="caption center-align">*/
/*                             <h6 class="light black-text text-lighten-3">Departamentos en Preventa.</h6>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a class="carousel-item" href="#two!">*/
/*                         <img src="{% image '@FrameworkBundle/Resources/public/images/inmueble2.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <div class="caption center-align">*/
/*                             <h6 class="light black-text text-lighten-3">Departamentos en Preventa.</h6>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a class="carousel-item" href="#three!">*/
/*                         <img src="{% image '@FrameworkBundle/Resources/public/images/inmueble3.jpeg' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <div class="caption center-align">*/
/*                             <h6 class="light black-text text-lighten-3">Departamentos en Preventa.</h6>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a class="carousel-item" href="#four!">*/
/*                         <img src="{% image '@FrameworkBundle/Resources/public/images/inmueble4.jpeg' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <div class="caption center-align">*/
/*                             <h6 class="light black-text text-lighten-3">Departamentos en Preventa.</h6>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a class="carousel-item" href="#five!">*/
/*                         <img src="{% image '@FrameworkBundle/Resources/public/images/inmueble5.jpeg' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <div class="caption center-align">*/
/*                             <h6 class="light black-text text-lighten-3">Departamentos en Preventa.</h6>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a class="carousel-item" href="#six!">*/
/*                         <img src="{% image '@FrameworkBundle/Resources/public/images/inmueble6.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <div class="caption center-align">*/
/*                             <h6 class="light black-text text-lighten-3">Departamentos en Preventa.</h6>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 <br>*/
/*                 <div style="margin-left:auto;margin-right:auto;width:300px;">*/
/*                     <a href="#" class="waves-effect waves-light btn center" style="margin-left: 60px">Ver Desarrollos</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="divPublica" class="parallax-container z-depth-2">*/
/*                 <div class="section no-pad-bot">*/
/*                     <div class="container" style="text-align: center">*/
/*                         <h4 class="center-align">¡Publica tus Inmuebles en iRealty es gratis!</h4>*/
/*                         <h5 class="center-align">y obten todos beneficios</h5>*/
/*                         <div class="row">*/
/*                             <div class="col l3 m3 s6 xs12">*/
/*                                 <div class="w-counter col l12 m12 s12 xs12">*/
/*                                     <div class="w-counter-h">*/
/*                                         <h3 class="w-counter-number">10233</h3>*/
/*                                         <h5 class="w-counter-title">Propiedades</h5>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col l3 m3 s6 xs12">*/
/*                                 <div class="w-counter col l12 m12 s12 xs12">*/
/*                                     <div class="w-counter-h">*/
/*                                         <h3 class="w-counter-number">1604</h3>*/
/*                                         <h5 class="w-counter-title">Asesores</h5>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col l3 m3 s6 xs12">*/
/*                                <div class="w-counter col l12 m12 s12 xs12">*/
/*                                     <div class="w-counter-h">*/
/*                                         <h3 class="w-counter-number">13662</h3>*/
/*                                         <h5 class="w-counter-title">Prospectos</h5>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col l3 m3 s6 xs12">*/
/*                                 <div class="w-counter col l12 m12 s12 xs12">*/
/*                                     <div class="w-counter-h">*/
/*                                         <h3 class="w-counter-number">477364000</h3>*/
/*                                         <h5 class="w-counter-title">Pesos</h5>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <a href="{{ path('usuario_new', {}) }}" class="waves-effect waves-light btn center">¡Publica Gratis Ahora!</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="parallax"><img src="{% image '@FrameworkBundle/Resources/public/images/inter1.jpg' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}" alt="Unsplashed background img 1"></div>*/
/*             </div>*/
/* */
/*             <div id="divSolucionInmobiliaria" class="z-depth-1">*/
/*                 <div class="row section">*/
/*                     <h3 class="header light">Una Solución Inmobiliaria Completa</h3>*/
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/blueimg-contact.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <h4 class="center">CRM</h4>*/
/*                         <p class="light">El CRM Inmobiliario más completo y fácil de utilizar del mercado.</p>*/
/*                     </div>*/
/* */
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/blueimg-screen.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <h4 class="center">Página Inmobiliaria</h4>*/
/*                         <p class="light">Te Ofrecemos un sitio especialmente diseñado para tu empresa, garantizando que sea vista de la mejor y más utíl manera.</p>*/
/*                    </div>*/
/* */
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/blueimg-world.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <h4 class="center">Portales Inmobiliarios</h4>*/
/*                         <p class="light">Tus inmuebles podrán ser publicados en los principales portales inmobiliarios del mercado.</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row section">*/
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/blueimg-seo.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <h4 class="center">SEO</h4>*/
/*                         <p class="light">Tu Página Inmobiliaria Optimizada para Motores de Búsqueda.</p>*/
/*                     </div>*/
/* */
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/blueimg-people.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <h4 class="center">Redes Sociales</h4>*/
/*                         <p class="light">Aprovecha al máximo el potencial de las Redes Sociales.</p>*/
/*                     </div>*/
/* */
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/blueimg-mail.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                         <h4 class="center">Email Marketing</h4>*/
/*                         <p class="light">Fácil administración de tus Campañas de Promoción y Mailing. Tu decides que inmuebles promover, y cómo resaltarlos.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="divClientes" class="z-depth-1">*/
/*                 <div class="row section">*/
/*                     <h3 class="header light">Nuestros clientes</h3>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/allsa.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/lemon.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/gvia.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/bisp.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row section">*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/lomelin.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/infinito.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/latitud.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/moreno.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row section">*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/pm.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/metro.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/properdeal.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/amityk.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row section">*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/leben.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/plusvalia.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/andova.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/xell.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="divPortalesInmobiliarios" class="z-depth-1">*/
/*                 <div class="row section">*/
/*                     <h3 class="header light">Portales Inmobiliarios</h3>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/divendo.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/olx.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/locanto.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/mitula.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row section">*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/yakas.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/sumavisos.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/ibazar.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/lamudi.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row section">*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/homein.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/donkiz.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/mc.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/trovit.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row section">*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/nura.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/inmuebles24.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/zonaprop.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l3 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/donrenton.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row section">*/
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/propiedades.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/mercadolibre.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                     <div class="col s12 l4 center">*/
/*                         <img class="promo" src="{% image '@FrameworkBundle/Resources/public/images/mylisting.png' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         $(document).ready(function(){*/
/*             $('.carousel').carousel({*/
/*                 dist:-30,*/
/*                 shift:10,*/
/*                 padding:100,*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         #divBusqueda {*/
/*             background: url({% image '@FrameworkBundle/Resources/public/images/mapa_portal.jpg' %}*/
/*                     {{ asset_url }}*/
/*                 {% endimage %}*/
/*             );*/
/*             height: 500px;*/
/*             margin-top: 3px;*/
/*             padding-top: 80px;*/
/*         }*/
/* */
/*         #divDestacados {*/
/*             background: lightgray;*/
/*             height: 350px;*/
/*         }*/
/* */
/*         #divSolucionInmobiliaria {*/
/*             background: white;*/
/*         }*/
/* */
/*         #divPortalesInmobiliarios {*/
/*             margin-top: -18px;*/
/*             background: white;*/
/*         }*/
/* */
/*         #divClientes {*/
/*             margin-top: -15px;*/
/*         }*/
/* */
/*         h3 {*/
/*             text-align: center;*/
/*         }*/
/*         h5 {*/
/*             text-align: center;*/
/*         }*/
/* */
/*         .w-counter*/
/*         {*/
/*             border-radius: 25px;*/
/*             border: 4px solid white;*/
/*             padding: 20px;*/
/*             width: 200px;*/
/*             height: 150px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* */
