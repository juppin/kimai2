<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* calendar/user.html.twig */
class __TwigTemplate_4ea95eef1f9124385ec893a5c8fdaa933471e1dd6e25afce8820f6d06ab4a510 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'page_subtitle' => [$this, 'block_page_subtitle'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "calendar/user.html.twig", 2)->unwrap();
        // line 3
        $macros["actions"] = $this->macros["actions"] = $this->loadTemplate("macros/actions.html.twig", "calendar/user.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calendar/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("calendar.title"), "html", null, true);
    }

    // line 6
    public function block_page_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("calendar.subtitle"), "html", null, true);
    }

    // line 7
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["actions"], "macro_calendar", ["index"], 7, $context, $this->getSourceContext());
    }

    // line 9
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("calendar/user.html.twig", "calendar/user.html.twig", 10, "1594458487")->display($context);
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 20
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("calendar");
        echo "
";
    }

    // line 23
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 25
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("calendar");
        echo "
";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        document.addEventListener('kimai.timesheetUpdate', function() {
            \$('#timesheet_calendar').fullCalendar('refetchEvents');
        });

        var changeHandler = function(event, delta, revertFunc) {
            var updateUrl = '";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patch_timesheet", ["id" => "-XX-"]);
        echo "'.replace('-XX-', event.id);
            var API = kimai.getPlugin('api');
            var ALERT = kimai.getPlugin('alert');

            var payload = {'begin': event.start.format()};

            if (event.end !== null && event.end !== undefined) {
                payload.end = event.end.format();
            } else {
                payload.end = null;

            }

            API.patch(updateUrl, JSON.stringify(payload), function(result) {
                ALERT.success('action.update.success');
            }, function(xhr, err) {
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    err = xhr.responseJSON.message;
                }
                ALERT.error('action.update.error', err);
                revertFunc();
            });
        };

        document.addEventListener('kimai.initialized', function(event) {
            var API = event.detail.kimai.getPlugin('api');
            \$('#timesheet_calendar').fullCalendar({
                defaultView: '";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63), "getPreferenceValue", [0 => "calendar.initial_view"], "method", false, false, false, 63), "html", null, true);
        echo "',
                ";
        // line 64
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["google"] ?? null), "apiKey", [], "any", false, false, false, 64))) {
            // line 65
            echo "                googleCalendarApiKey: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["google"] ?? null), "apiKey", [], "any", false, false, false, 65), "html", null, true);
            echo "',
                ";
        }
        // line 67
        echo "                eventSources: [
                    {
                        events: function(start, end, timezone, callback) {
                            var from = moment(start.format()).format(moment.HTML5_FMT.DATETIME_LOCAL_SECONDS);
                            var to = moment(end.format()).format(moment.HTML5_FMT.DATETIME_LOCAL_SECONDS);
                            API.get('";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_timesheets");
        echo "?size=1000&full=true&begin='+from+'&end='+to, {}, function(result) {
                                var apiEvents = [];
                                for (var record of result) {
                                    var color = record.activity.color;
                                    if (color === null) {
                                        color = record.project.color;
                                        if (color === null) {
                                            color = record.project.customer.color;
                                        }
                                    }
                                    apiEvents.push({
                                        id: record.id,
                                        title: record.activity.name,
                                        description: record.description,
                                        start: record.begin,
                                        end: record.end,
                                        activity: record.activity.name,
                                        project: record.project.name,
                                        customer: record.project.customer.name,
                                        tags: record.tags,
                                        color: color,
                                    });
                                }
                                callback(apiEvents);
                            });
                        },
                        color: '#d2d6de', // see class \"dot\"
                        name: 'kimaiUserTimeSource'
                    }
                    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["google"] ?? null), "sources", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 102
            echo "                    ,
                    {
                        googleCalendarId: '";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["source"], "uri", [], "any", false, false, false, 104), "html", null, true);
            echo "',
                        name: '";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["source"], "id", [], "any", false, false, false, 105), "html", null, true);
            echo "',
                        color: '";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["source"], "color", [], "any", false, false, false, 106), "html", null, true);
            echo "',
                        editable: false
                    }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                ],
                header    : {
                    left  : 'prev,next today',
                    center: 'title',
                    right : 'month,agendaWeek,agendaDay'
                },
                eventLimit: ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "dayLimit", [], "any", false, false, false, 116), "html", null, true);
        echo ",
                weekNumbers: ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "showWeekNumbers", [], "any", false, false, false, 117)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                allDaySlot: false,
                navLinks: true,
                locale: '";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 120), "locale", [], "any", false, false, false, 120), "html", null, true);
        echo "',
                /*
                // TODO calculate height properly instead of relying on the default aspectRatio
                height: function() {
                    return 'parent';
                },
                */
                height: 'auto',
                nowIndicator: true,
                now: '";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DateExtensions']->dateFormat(($context["now"] ?? null), "c"), "html", null, true);
        echo "',
                timezone: '";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 130), "preferenceValue", [0 => "timezone"], "method", false, false, false, 130), "html", null, true);
        echo "',
                weekends: ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "showWeekends", [], "any", false, false, false, 131)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                businessHours: {
                    dow: [";
        // line 133
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "businessDays", [], "any", false, false, false, 133), ","), "html", null, true);
        echo "],
                    start: '";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "businessTimeBegin", [], "any", false, false, false, 134), "html", null, true);
        echo "',
                    end: '";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "businessTimeEnd", [], "any", false, false, false, 135), "html", null, true);
        echo "'
                },
                eventRender: function(eventObj, \$el) {
                    // don't show popover for google calendar
                    if (eventObj.source.ajaxSettings !== undefined) {
                        return;
                    }
                    // or when an event is dragged or resized
                    if(window.hidePopover) {
                        return;
                    }
                    \$el.popover({
                        title: eventObj.start.format('L') + ' | ' + eventObj.start.format('LT') + ' - ' + (eventObj.end ? eventObj.end.format('LT') : ''),
                        content:
                        '<div class=\"calendar-entry\">' +
                            '<ul>' +
                                '<li>' + '";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.customer"), "html", null, true);
        echo ": ' + eventObj.customer + '</li>' +
                                '<li>' + '";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.project"), "html", null, true);
        echo ": ' + eventObj.project + '</li>' +
                                '<li>' + '";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.activity"), "html", null, true);
        echo ": ' + eventObj.activity + '</li>' +
                            '</ul>' +
                            (eventObj.description || eventObj.tags ? '<hr>' : '') +
                            (eventObj.description ? '<p>' + eventObj.description + '</p>' : '') +
                            (eventObj.tags !== null && eventObj.tags.length > 0 ? '<span class=\"badge bg-green\">' + eventObj.tags.join('</span> <span class=\"badge bg-green\">') + '</span>' : '') +
                        '</div>'
                        ,
                        trigger: 'hover',
                        placement: 'auto',
                        container: 'body',
                        html: true
                    });
                },
            ";
        // line 166
        if (( !($context["is_punch_mode"] ?? null) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create_own_timesheet"))) {
            // line 167
            echo "                dayClick: function(date, jsEvent, view) {
                    // day-clicks are always triggered, unless a selection was created
                    // so clicking in a day (month view) or any slot (week and day view) will trigger a dayClick
                    // BEFORE triggering a select - make sure not two create dialogs are requested
                    if(view.type !== 'month') {
                        return;
                    }
                    var param = 'begin';
                    var begin = date.format();

                    var createUrl = '";
            // line 177
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_create");
            echo "' + '?' + param + '=' + begin;
                    kimai.getPlugin('modal').openUrlInModal(createUrl);
                },
                selectable: true,
                select: function(start, end, jsEvent, view) {
                    if(view.type === 'month') {
                        // multi-day clicks are NOT allowed in the month view, as simple day clicks would also trigger
                        // a select - there is no way to distinguish a simple click and a two day selection
                        return;
                    }
                    var createUrl = '";
            // line 187
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_create");
            echo "' + '?from=' + start.format() + '&to=' + end.format();
                    kimai.getPlugin('modal').openUrlInModal(createUrl);
                },
            ";
        }
        // line 191
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit_own_timesheet")) {
            // line 192
            echo "                eventClick: function(eventObj, jsEvent, view) {
                    if (eventObj.source.ajaxSettings !== undefined) {
                        jsEvent.preventDefault();
                        return;
                    }
                    var editUrl = '";
            // line 197
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timesheet_edit", ["id" => "-XX-"]);
            echo "'.replace('-XX-', eventObj.id);
                    kimai.getPlugin('modal').openUrlInModal(editUrl);
                },
                ";
            // line 200
            if ( !($context["is_punch_mode"] ?? null)) {
                // line 201
                echo "                editable: true,
                eventDragStart: function(event, jsEvent, ui, view) {
                    window.hidePopover = true;
                },
                eventDragStop: function( event, jsEvent, ui, view ) {
                    window.hidePopover = false;
                },
                eventDrop: changeHandler,
                eventResizeStart: function(event, jsEvent, ui, view) {
                    window.hidePopover = true;
                },
                eventResizeStop: function( event, jsEvent, ui, view ) {
                    window.hidePopover = false;
                },
                eventResize: changeHandler,
                ";
            }
            // line 217
            echo "            ";
        }
        // line 218
        echo "                /*
                slotDuration: '00:30:00',                               // TODO make me configurable
                */
                minTime: '";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "timeframeBegin", [], "any", false, false, false, 221), "html", null, true);
        echo "',
                maxTime: '";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "timeframeEnd", [], "any", false, false, false, 222), "html", null, true);
        echo "',
                defaultTimedEventDuration: '00:30'
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "calendar/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 222,  419 => 221,  414 => 218,  411 => 217,  393 => 201,  391 => 200,  385 => 197,  378 => 192,  375 => 191,  368 => 187,  355 => 177,  343 => 167,  341 => 166,  325 => 153,  321 => 152,  317 => 151,  298 => 135,  294 => 134,  290 => 133,  281 => 131,  277 => 130,  273 => 129,  261 => 120,  251 => 117,  247 => 116,  239 => 110,  229 => 106,  225 => 105,  221 => 104,  217 => 102,  213 => 101,  181 => 72,  174 => 67,  168 => 65,  166 => 64,  162 => 63,  132 => 36,  121 => 29,  117 => 28,  111 => 25,  106 => 24,  102 => 23,  96 => 20,  91 => 19,  87 => 18,  82 => 10,  78 => 9,  71 => 7,  64 => 6,  57 => 5,  52 => 1,  50 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "calendar/user.html.twig", "/var/www/kimai2/templates/calendar/user.html.twig");
    }
}


/* calendar/user.html.twig */
class __TwigTemplate_4ea95eef1f9124385ec893a5c8fdaa933471e1dd6e25afce8820f6d06ab4a510___1594458487 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'box_body_class' => [$this, 'block_box_body_class'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@AdminLTE/Widgets/box-widget.html.twig", "calendar/user.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_box_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "no-padding";
    }

    // line 12
    public function block_box_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            <div id=\"timesheet_calendar\"></div>
        ";
    }

    public function getTemplateName()
    {
        return "calendar/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 13,  493 => 12,  486 => 11,  475 => 10,  423 => 222,  419 => 221,  414 => 218,  411 => 217,  393 => 201,  391 => 200,  385 => 197,  378 => 192,  375 => 191,  368 => 187,  355 => 177,  343 => 167,  341 => 166,  325 => 153,  321 => 152,  317 => 151,  298 => 135,  294 => 134,  290 => 133,  281 => 131,  277 => 130,  273 => 129,  261 => 120,  251 => 117,  247 => 116,  239 => 110,  229 => 106,  225 => 105,  221 => 104,  217 => 102,  213 => 101,  181 => 72,  174 => 67,  168 => 65,  166 => 64,  162 => 63,  132 => 36,  121 => 29,  117 => 28,  111 => 25,  106 => 24,  102 => 23,  96 => 20,  91 => 19,  87 => 18,  82 => 10,  78 => 9,  71 => 7,  64 => 6,  57 => 5,  52 => 1,  50 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "calendar/user.html.twig", "/var/www/kimai2/templates/calendar/user.html.twig");
    }
}
