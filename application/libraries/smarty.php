<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH . 'libraries/smarty/libs/Smarty.class.php');

  class CI_Smarty extends Smarty
{

    function __construct()
    {
        parent::__construct();
        $this->setTemplateDir(APPPATH . 'views/smarty');
        $this->setCompileDir(APPPATH . 'views/smarty/smarty_compiled');
        $this->setConfigDir(APPPATH . 'libraries/smarty/configs');
        $this->setCacheDir(APPPATH . 'libraries/smarty/cache');

        $this->assign('APPPATH', APPPATH);
        $this->assign('BASEPATH', BASEPATH);
        $this->assign("url", site_url());
        if (method_exists($this, 'assignByRef')) {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
        }
        $this->force_compile = 1;
        $this->caching = true;
        $this->cache_lifetime = 120;

    }

    function view($template_name)
    {
        if (strpos($template_name, '.') === FALSE &&
            strpos($template_name, ':') === FALSE
        ) {
            $template_name .= '.tpl';
        }
        parent::display($template_name);
    }


    /**
     * This is a convenience method that combines assign() and
     * fetch() into one step.
     * @param $template  - template name
     * @param null $data - associative array
     * @param null $name - name of array used in template
     * @return string
     * @throws Exception
     * @throws SmartyException
     */
    function load($template,$data=null,$name=null){

        if($data != null && $name != null){

            $this->assign($name, $data);

        }elseif($data != null && $name == null){

            $name=$template;
            $this->assign($name, $data);
        }
        $template.='.tpl';

        return $this->fetch($template);
    }


}