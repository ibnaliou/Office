<?php

/* front/reserver-salle.html.twig */
class __TwigTemplate_4933a0446ba8332448555d899834b82979fd50ad4212cdae99cf1e16d1d12dbd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("front.html.twig", "front/reserver-salle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slide' => array($this, 'block_slide'),
            'offre' => array($this, 'block_offre'),
            'recherche' => array($this, 'block_recherche'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/reserver-salle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/reserver-salle.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reserever";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_slide($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 7
        echo "    <div>
        <br><br>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_offre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 14
        echo "    ";
        // line 15
        echo "
    <div class=\"mg-best-rooms maclasse\" style=\"display:flex\">

        <div class=\"container ok\">
            ";
        // line 23
        echo "
            <!--div contient forMulaire et iMages-->
            <div>

                <div class=\"col-md-7\">
                    <h2 class=\"mg-sec-left-title\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 28, $this->source); })()), "nomComplet", array()));
        echo "</h2>

                    <div style=\"width:600px;heigth:900px\" class=\"mg-gallery-container\">
                        <ul class=\"mg-gallery\" id=\"mg-gallery\">
                         ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 32, $this->source); })()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imageS"]) {
            // line 33
            echo "
                            <li><img style=\"width:100%;heigth:200px\" src=\"data:image/png;base64,";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imageS"], "image", array()), "html", null, true);
            echo "\" alt=\"Partner Logo\"></li>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    
                        </ul>
                        <ul style=\"width:100% ;heigh:100%\" class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 38, $this->source); })()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imageS"]) {
            // line 39
            echo "                            <li><img style=\"width:100%; heigth:100%\" src=\"data:image/png;base64,";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imageS"], "image", array()), "html", null, true);
            echo "\" alt=\"Partner Logo\"></li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageS'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            
                        </ul>
                    </div>
                </div>
                <div style=\"margin-left:10px ; \" class=\"container\">

                    <fieldset >

                        <center>
                            <img style=\"width:100px\" class=\"img-responsive center\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/giphy.gif"), "html", null, true);
        echo "\" alt=\"reservation sen office\"></center>
                        <div style=\"background-color:orange\">
                            <p class=\"h4 text-center mb-4\">RESERVATION</p>
                        </br>
                        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), 'form_start');
        echo "
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-user prefix grey-text\"></i>
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "client", array()), "nomComplet", array())), 'row', array("attr" => array("placeholder" => "Boubacar SECK", "class" => "form-control")));
        echo "
                        </div>

                        <div style=\"width:110px\" class=\"md-form\">
                            <i class=\"fa fa-phone prefix grey-text\"></i>
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "client", array()), "telephone", array()), 'row', array("attr" => array("placeholder" => "770000000", "class" => "form-control")));
        echo "
                        </div>

                        <div class=\"md-form\">
                            <i class=\"fa fa-envelope prefix grey-text\"></i>
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "client", array()), "mail", array()), 'row', array("attr" => array("placeholder" => "senoffice@gmail.com", "class" => "form-control")));
        echo "
                        </div>
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-clock prefix grey-text\"></i>
                            <label >
                                Date et Heure début de Cérémonie
                                ";
        // line 73
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "debut", array()), 'errors')) {
            // line 74
            echo "                                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "debut", array()), 'errors');
            echo "
                                    </div>
                                ";
        }
        // line 77
        echo "                            </label>
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "debut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-clock\"></i>
                            <label >
                                Date et Heure Fin de Cérémonie
                                ";
        // line 84
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "fin", array()), 'errors')) {
            // line 85
            echo "                                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), "fin", array()), 'errors');
            echo "
                                    </div>
                                ";
        }
        // line 88
        echo "                            </label>
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "fin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>

                        <div class=\"text-center mt-4\">
                            <input class=\"btn btn-dark\" type=\"submit\" name=\"reserver\" value=\"Reserver\">
                        </div>
                        ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        echo "
                    </div>

                </fieldset>

            </div>
        </div>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 111
        echo "


";
        // line 114
        if ((twig_length_filter($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 114, $this->source); })())) > 0)) {
            // line 115
            echo "
<div class=\"card \">
    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 119
            echo twig_length_filter($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 119, $this->source); })()));
            echo "
                ";
            // line 120
            if ((twig_length_filter($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 120, $this->source); })())) == 1)) {
                // line 121
                echo "                    Commentaire Pour cette Publication
                ";
            } else {
                // line 123
                echo "                    Commentaires Pour cette Publication
                ";
            }
            // line 125
            echo "            ";
        }
        // line 126
        echo "            </h4>
       </div>
    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 129
            echo "        <div class=\"panel-body\">
        
            <div class=\"inbox-widget  \">

                <a>
                    <div class=\"inbox-item \">
                        <div class=\"inbox-item-img\"><img src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"\"></div>
                        <p class=\"inbox-item-author\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", array()), "username", array()));
            echo "</p>
                        <h5><p class=\"\">  ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", array()));
            echo "</p>  </h5>
                        <p class=\"inbox-item-date\">";
            // line 138
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "datePub", array())), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>  
                    </div>
                </a>
            </div>
        </div>
           ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 144
            echo "        <center>
            <button class=\"btn btn-main \">Pas de Commentaires diponibles Soyez le premier à commenter</button>

        </center>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "    </div>

</div>
<br>
<!-- end col -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 158
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 159
        echo "
";
        // line 160
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 160, $this->source); })()), "user", array())) {
            // line 161
            echo "
<div>

";
            // line 164
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 164, $this->source); })()), 'form_start');
            echo "

<label style=\"margin-left:20px\"  >

    Ajouter Commentaires
    ";
            // line 169
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 169, $this->source); })()), "contenu", array()), 'errors')) {
                // line 170
                echo "        <div class=\"alert alert-danger\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 170, $this->source); })()), "contenu", array()), 'errors');
                echo "
        </div>
    ";
            }
            // line 173
            echo "</label>
";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 174, $this->source); })()), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "

<input  style=\"margin-left:140px\" class=\"btn btn-main\" type=\"submit\" name=\"comment\" value=\"Commenter\">

";
            // line 178
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 178, $this->source); })()), 'form_end');
            echo "
</div>
<br>

";
        }
        // line 183
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 187
    public function block_form($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/reserver-salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 187,  462 => 186,  450 => 183,  442 => 178,  435 => 174,  432 => 173,  425 => 170,  423 => 169,  415 => 164,  410 => 161,  408 => 160,  405 => 159,  396 => 158,  379 => 149,  369 => 144,  358 => 138,  354 => 137,  350 => 136,  346 => 135,  338 => 129,  333 => 128,  329 => 126,  326 => 125,  322 => 123,  318 => 121,  316 => 120,  312 => 119,  306 => 115,  304 => 114,  299 => 111,  290 => 110,  273 => 108,  251 => 95,  242 => 89,  239 => 88,  232 => 85,  230 => 84,  221 => 78,  218 => 77,  211 => 74,  209 => 73,  200 => 67,  192 => 62,  184 => 57,  178 => 54,  171 => 50,  160 => 41,  151 => 39,  147 => 38,  142 => 35,  134 => 34,  131 => 33,  127 => 32,  120 => 28,  113 => 23,  107 => 15,  105 => 14,  96 => 13,  81 => 7,  72 => 6,  54 => 3,  44 => 1,  42 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'front.html.twig' %}

{% block title %}Reserever{% endblock %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block slide %}
    <div>
        <br><br>

    </div>

{% endblock %}
{% block offre %}
    {# {%for bien in  biens %} #}

    <div class=\"mg-best-rooms maclasse\" style=\"display:flex\">

        <div class=\"container ok\">
            {# <div id=\"alertreseravtion\" class=\"alert alert-success text-center\">
                <strong >Success! Votre Résévation est prise en compte Nous vous contacterons sous peu
                </strong>
            </div> #}

            <!--div contient forMulaire et iMages-->
            <div>

                <div class=\"col-md-7\">
                    <h2 class=\"mg-sec-left-title\">{{ salle.nomComplet |e |raw }}</h2>

                    <div style=\"width:600px;heigth:900px\" class=\"mg-gallery-container\">
                        <ul class=\"mg-gallery\" id=\"mg-gallery\">
                         {% for imageS in salle.images %}

                            <li><img style=\"width:100%;heigth:200px\" src=\"data:image/png;base64,{{imageS.image}}\" alt=\"Partner Logo\"></li>
                           {% endfor %}    
                        </ul>
                        <ul style=\"width:100% ;heigh:100%\" class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
                        {% for imageS in salle.images %}
                            <li><img style=\"width:100%; heigth:100%\" src=\"data:image/png;base64,{{imageS.image}}\" alt=\"Partner Logo\"></li>
                      {% endfor %}
                            
                        </ul>
                    </div>
                </div>
                <div style=\"margin-left:10px ; \" class=\"container\">

                    <fieldset >

                        <center>
                            <img style=\"width:100px\" class=\"img-responsive center\" src=\"{{asset('assets/images/users/giphy.gif')}}\" alt=\"reservation sen office\"></center>
                        <div style=\"background-color:orange\">
                            <p class=\"h4 text-center mb-4\">RESERVATION</p>
                        </br>
                        {{ form_start(form)}}
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-user prefix grey-text\"></i>
                            {{ form_row(form.client.nomComplet |raw |e,{'attr':{'placeholder':'Boubacar SECK','class':\"form-control\"}})}}
                        </div>

                        <div style=\"width:110px\" class=\"md-form\">
                            <i class=\"fa fa-phone prefix grey-text\"></i>
                            {{ form_row(form.client.telephone,{'attr':{'placeholder':'770000000','class':\"form-control\"}})}}
                        </div>

                        <div class=\"md-form\">
                            <i class=\"fa fa-envelope prefix grey-text\"></i>
                            {{ form_row(form.client.mail,{'attr':{'placeholder':'senoffice@gmail.com','class':\"form-control\"}})}}
                        </div>
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-clock prefix grey-text\"></i>
                            <label >
                                Date et Heure début de Cérémonie
                                {% if form_errors(form.debut) %}
                                    <div class=\"alert alert-danger\">{{ form_errors(form.debut) }}
                                    </div>
                                {% endif %}
                            </label>
                            {{ form_widget(form.debut,{'attr':{'class':\"form-control\"}})}}
                        </div>
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-clock\"></i>
                            <label >
                                Date et Heure Fin de Cérémonie
                                {% if form_errors(form.fin) %}
                                    <div class=\"alert alert-danger\">{{ form_errors(form.fin) }}
                                    </div>
                                {% endif %}
                            </label>
                            {{ form_widget(form.fin,{'attr':{'class':\"form-control\"}})}}
                        </div>

                        <div class=\"text-center mt-4\">
                            <input class=\"btn btn-dark\" type=\"submit\" name=\"reserver\" value=\"Reserver\">
                        </div>
                        {{ form_end(form)}}
                    </div>

                </fieldset>

            </div>
        </div>

    </div>
</div>

{% endblock %}

{% block recherche %}{% endblock %}

{% block apropos %}



{% if commentaires | length > 0 %}

<div class=\"card \">
    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">{{commentaires|length |raw }}
                {% if commentaires | length == 1 %}
                    Commentaire Pour cette Publication
                {% else %}
                    Commentaires Pour cette Publication
                {% endif %}
            {% endif %}
            </h4>
       </div>
    {% for commentaire in commentaires %}
        <div class=\"panel-body\">
        
            <div class=\"inbox-widget  \">

                <a>
                    <div class=\"inbox-item \">
                        <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-2.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                        <p class=\"inbox-item-author\">{{commentaire.user.username |e |raw }}</p>
                        <h5><p class=\"\">  {{commentaire.contenu |e |raw }}</p>  </h5>
                        <p class=\"inbox-item-date\">{{commentaire.datePub |e |raw  |date('Y-m-d H:i:s') }}</p>  
                    </div>
                </a>
            </div>
        </div>
           {% else %}
        <center>
            <button class=\"btn btn-main \">Pas de Commentaires diponibles Soyez le premier à commenter</button>

        </center>
{% endfor %}
    </div>

</div>
<br>
<!-- end col -->


{% endblock %}

{% block partenaires %}

{% if app.user %}

<div>

{{ form_start(formC)}}

<label style=\"margin-left:20px\"  >

    Ajouter Commentaires
    {% if form_errors(formC.contenu) %}
        <div class=\"alert alert-danger\">{{ form_errors(formC.contenu) }}
        </div>
    {% endif %}
</label>
{{ form_widget(formC.contenu,{'attr':{'class':\"form-control\"}})}}

<input  style=\"margin-left:140px\" class=\"btn btn-main\" type=\"submit\" name=\"comment\" value=\"Commenter\">

{{ form_end(formC)}}
</div>
<br>

{% endif %}


{% endblock %}
{% block galerie %}{% endblock %}
{% block form %}{% endblock %}", "front/reserver-salle.html.twig", "C:\\wamp64\\www\\projet\\templates\\front\\reserver-salle.html.twig");
    }
}
