<?php
namespace Craft;

class DaedalusCssPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Daedalus CSS');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'lexbi';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/lexbi';
    }
}
