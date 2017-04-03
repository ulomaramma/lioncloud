<?php

/* ::CloudBase.html.twig */
class __TwigTemplate_8562f018da6a428d16338a95e5e9e61bc0ab8e78d432dc61b66ac732cd9573d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "  
 <header id=\"header\">
        <nav class=\"navbar navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">Gp.</a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"#\">About</a></li>
                        <li><a href=\"#\">Services</a></li>
                        <li><a href=\"#\">Resources</a></li>
                        <li><a href=\"#\">Forum</a></li>
                        <li><a href=\"#\">Blog</a></li> 
                        <li><a href=\"#\">News</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
\t\t
    </header><!--/header-->
    
  </head>
  <body class=\"homepage\">  
      
      
       ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "\t
\t
         ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "\t
\t";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "  
    
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Lion Cloud";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "  <!-- Bootstrap -->
   
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">      
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "       
       ";
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "         
         <footer id=\"footer\" class=\"midnight-blue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    &copy; Gp Theme. All Rights Reserved.
                    <div class=\"credits\">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Gp
                        -->
                        <a href=\"https://bootstrapmade.com/\">Bootstrap Themes</a> by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"pull-right\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
         ";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>   
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/js/wow.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/project/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::CloudBase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  202 => 94,  198 => 93,  194 => 92,  190 => 91,  186 => 90,  182 => 89,  179 => 88,  176 => 87,  145 => 58,  142 => 57,  137 => 53,  134 => 52,  128 => 16,  124 => 15,  120 => 14,  116 => 13,  112 => 12,  108 => 11,  104 => 9,  101 => 8,  95 => 7,  87 => 96,  85 => 87,  82 => 86,  80 => 57,  76 => 55,  74 => 52,  38 => 18,  36 => 8,  32 => 7,  24 => 1,);
    }
}
