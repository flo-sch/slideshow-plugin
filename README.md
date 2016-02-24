## Administration

Once the plugin is installed in your OctoberCMS project, you will be able to administrate slideshows from the back-office, within the "Slideshow" tab. It allows you to create, edit and remove slideshows, and for each of those, to create, edit and remove slides.

## Front-end dependencies

The Slideshow component uses Twitter Bootstrap's DOM structure by default. In order to actually display your slides as a carousel, you will need to include Twitter Bootstrap CSS and JavaScript (including dependencies such as jQuery) in the theme you are working with.

*This plugin does not include such dependencies itself by purpose.*

1. Because it is not the role of a back-end module to carry about front-end display.
2. Because Twitter Bootstrap is a library which evolve quite often, and it would require the plugin to be up-to-date with every new Bootstrap release

You can include those dependencies following the guidelines of OctoberCMS theme development, either by using a theme layout, or by injecting it from your page controller.

## Display a slideshow

Parameter | Description
------------- | -------------
**id** | the slideshow ID, required.

In order to display this component, all you have to do is call it within a page, providing it's given ID (which can be found in the back-office list of slideshows) :

    url='/test-page-with-slideshow'

    [slideshow]
    id = 1
    ==

    {% component 'slideshow' %}

### Customized template

If you want to customize the way the slideshow is displayed, you can create a customized template by overriding the template file: /themes/{your-theme}/partials/slideshow/default.htm

Here is the default DOM structure of the slideshow component, which is actually the default Twitter Bootstrap's carousel DOM structure, with an additional caption containing optional title, description and READ MORE link:

    {% if __SELF__.slideshow.slides %}
        <div id='slideshow' class='carousel slide' data-ride='carousel' data-interval='3500'>
            <div class='carousel-content'>

                <div class='carousel-inner' role='listbox'>
                    {% for i, slide in __SELF__.slideshow.slides %}
                        <div class='item{% if loop.first %} active{% endif %}'>
                            <img class='img-responsive' src='{{ slide.image.path }}' alt='{{ slide.image.title }}'>
                            {% if slide.name or slide.description %}
                                <div class='carousel-caption clearfix'>
                                    {% if slide.name %}
                                        <h4 class='carousel-caption-title'>{{ slide.name }}</h4>
                                    {% endif %}
                                    {% if slide.description %}
                                        <div class='carousel-description'>{{ slide.description|raw }}</div>
                                    {% endif %}
                                    {% if slide.link %}
                                        <a class='carousel-caption-link' href='{{ slide.link }}' target='_blank'><strong>Learn more</strong></a>
                                    {% endif %}
                                </div>
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>

                <a class='left carousel-control' href='#slideshow' role='button' data-slide='prev'>
                    <span class='icon icon-angle-left' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#slideshow' role='button' data-slide='next'>
                    <span class='icon icon-angle-right' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>

            </div>

            <ol class='carousel-indicators'>
                {% for i, slide in __SELF__.slideshow.slides %}
                    <li data-target='#slideshow' data-slide-to='{{ loop.index - 1 }}'{% if loop.first %} class='active'{% endif %}></li>
                {% endfor %}
            </ol>
        </div>
    {% endif %}