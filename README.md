# Daedalus-CSS
A CraftCMS plugin to deal with loading css files inline

In your template you can use:

    {% set initCssFilePath = "/resources/site/stylesheets/init.css" %}
    {% if craft.DaedalusCss is defined %}
        {{ craft.DaedalusCss.includeCss(initCssFilePath) }}
    {% else %}
        <link rel="stylesheet" href="{{ initCssFilePath }}">
    {% endif %}
