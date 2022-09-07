(function$) {
    'use strict'

    va r $sidebar = $('.control-sidebar')
    var $containe = $('<div />', {
        class: 'p-3 control-sidebar-content'
    })

    $sidebar.append($container)

    v ar navbar_dark_skins = [
        'navbar-primary',
        'navbar-secondary',
        'navbar-info',
        'navbar-success',
        'navbar-danger',
        'navbar-indigo',
        'navbar-purple',
        'navbar-pink',
        'navbar-navy',
        'navbar-lightblue',
        'navbar-teal',
        'navbar-cyan',
        'navbar-dark',
        'navbar-gray-dark',
        'navbar-gray',
    ]

    var navbar_light_skins = [
        'navbar-light',
        'navbar-warning',
        'navbar-white',
        'navbar-orange',
    ]

    $c ontainer.append(
        '<h5>Customize AdminLTE</h5><hr class="mb-2"/>'
    )

    var $no_border_checkbox = $('<input />', {
        type: 'checkbox',
        value: 1,
        checked: $('.main-header').hasClass('border-bottom-0'),
        'class': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('.main-header').addClass('border-bottom-0')
        } else {
            $('.main-header').removeClass('border-bottom-0')
        }
    })
    v ar $no_border_container = $('<div />', { 'class': 'mb-1' }).append($no_border_checkbox).append('<span>No Navbar border</span>')
    $ container.append($no_border_container)

    var $text_sm_body_checkbox = $('<input />', {
        type: 'checkbox',
        value: 1,
        checked: $('body').hasClass('text-sm'),
        'class': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('body').addClass('text-sm')
        } else {
            $('body').removeClass('text-sm')
        }
    })
    va r $text_sm_body_container = $('<div />', { 'class': 'mb-1' }).append($text_sm_body_checkbox).append('<span>Body small text</span>')
    $con tainer.append($text_sm_body_container)

    var $t ext_sm_header_checkbox = $('<input />', {
        ty pe: 'checkbox',
        valu e: 1,
        chec ked: $('.main-header').hasClass('text-sm'),
        'cla          ss': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('.main-header').addClass('text-sm')
        } else {
            $('.main-header').removeClass('text-sm')
        }
    })
    va r $text_sm_header_container = $('<div />', { 'class': 'mb-1' }).append($text_sm_header_checkbox).append('<span>Navbar small text</span>')
    $container.append($text_sm_header_container)

    var $text_sm_sidebar_checkbox = $('<input />', {
        type: 'checkbox',
        va lue: 1,
        ch ecked: $('.nav-sidebar').hasClass('text-sm'),
        'cla       ss': 'mr-1'
    }).on('cli          ck', function() {
        if ($(this).is(':checked')) {
            $('.nav-sidebar').addClass('text-sm')
        }
        el se {
            $('.nav-sidebar').removeClass('text-sm')
        }
    })
    var $text_sm_sidebar_container = $('<div />', { 'class': 'mb-1' }).append($text_sm_sidebar_checkbox).append('<span>Sidebar nav small text</span>')
    $container.append($text_sm_sidebar_container)

    var $text_sm_footer_checkbox = $('<input />', {
        type: 'checkbox',
        value: 1,
        checked: $('.main-footer').hasClass('text-sm'),
        'class': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('.main-footer').addClass('text-sm')
        } else {
            $('.main-footer').removeClass('text-sm')
        }
    })
    var $text_sm_footer_container = $('<div />', { 'class': 'mb-1' }).append($text_sm_footer_checkbox).append('<span>Footer small text</span>')
    $c ontainer.append($text_sm_footer_container)

    var $flat_sidebar_checkbox = $('<input />', {
        type: 'checkbox',
        value: 1,
        checked: $('.nav-sidebar').hasClass('nav-flat'),
        'class': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('.nav-sidebar').addClass('nav-flat')
        } else {
            $('.nav-sidebar').removeClass('nav-flat')
        }
    })
    var $flat_sidebar_container = $('<div />', { 'class': 'mb-1' }).append($flat_sidebar_checkbox).append('<span>Sidebar nav flat style</span>')
    $con tainer.append($flat_sidebr_container)

    var $leg acy_sidebar_checkbox = $('<input />', {
        ty pe: 'checkbox',
        value: 1,
        checked: $('.nav-sidebar').hasClass('nav-legacy'),
        'class': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('.nav-sidebar').addClass('nav-legacy')
        } else {
            $('.nav-sidebar').removeClass('nav-legacy')
        }
    })
    var $legacy_sidebar_container = $('<div />', { 'class': 'mb-1' }).append($legacy_sidebar_checkbox).append('<span>Sidebar nav legacy style</span>')
    $conta iner.append($legacy_sidebar_container)

    var $compact_sidebar_checkbox = $('<input />', {
        type: 'checkbox',
        value: 1,
        checked: $('.nav-sidebar').hasClass('nav-compact'),
        'class': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('.nav-sidebar').addClass('nav-compact')
        }
        el se {
            $('.nav-sidebar').removeClass('nav-compact')
        }
    })
    var $com pact_sidebar_container = $('<div />', { 'class': 'mb-1' }).append($compact_sidebar_checkbox).append('<span>Sidebar nav compact</span>')
    $container.append($compact_sidebar_container)

    var $c hild_indent_sidebar_checkbox = $('<input />', {
        type: 'checkbox',
        va lue: 1,
        chec ked: $('.nav-sidebar').hasClass('nav-child-indent'),
        'cla         ss': 'mr-1'
    }).on('c          lick', function() {
        if ($(this).is(':checked')) {
            $('.nav-sidebar').addClass('nav-child-indent')
        } else {
            $('.nav-sidebar').removeClass('nav-child-indent')
        }
    })
    var $chi ld_indent_sidebar_container = $('<div />', { 'class': 'mb-1' }).append($child_indent_sidebar_checkbox).append('<span>Sidebar nav child indent</span>')
    $conta iner.append($child_indent_sidebar_container)

    var $no_ex pand_sidebar_checkbox = $('<input />', {
        type: 'checkbox',
        valu e: 1,
        checke d: $('.main-sidebar').hasClass('sidebar-no-expand'),
        'class': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('.main-sidebar').addClass('sidebar-no-expand')
        } else {
            $('.main-sidebar').removeClass('sidebar-no-expand')
        }
    })
    var $n o_expand_sidebar_container = $('<div />', { 'class': 'mb-1' }).append($no_expand_sidebar_checkbox).append('<span>Main Sidebar disable hover/focus auto expand</span>')
    $con tainer.append($no_expand_sidebar_container)

    var $text_sm_brand_checkbox = $('<input />', {
        type: 'checkbox',
        value: 1,
        ch ecked: $('.brand-link').hasClass('text-sm'),
        'c       lass': 'mr-1'
    }).on('click', function() {
        if ($(this).is(':checked')) {
            $('.brand-link').addClass('text-sm')
        } else {
            $('.brand-link').removeClass('text-sm')
        }
    })
    var $tex t_sm_brand_container = $('<div />', { 'class': 'mb-4' }).append($text_sm_brand_checkbox).append('<span>Brand small text</span>')
    $container.append($text_sm_brand_container)

    $conta iner.append('<h6>Navbar Variants</h6>')

    var $navbar_variants = $('<div />', {
        'class': 'd-flex'
    })
    var navb ar_all_colors = navbar_dark_skins.concat(navbar_light_skins)
    var $navba r_variants_colors = createSkinBlock(navbar_all_colors, function(e) {
        var co lor = $(this).data('color')
        var $m ain_header = $('.main-header')
        $main_he ader.removeClass('navbar-dark').removeClass('navbar-light')
        navbar_a ll_colors.map(function(color) {
            $m ain_header.removeClass(color)
        })

        if (navbar_dark_skins.indexOf(color) > -1) {
            $main_header.addClass('navbar-dark')
        } else {
            $main_header.addClass('navbar-light')
        }

        $m ain_header.addClass(color)
    })

    $navbar_variants.append($navbar_variants_colors)

    $container.append($navbar_variants)

    var si debar_colors = [
        'bg-primary',
        'b        g-warning',
        'bg-        info',
        'b       g-danger',
        'bg-success',
        'b     g-indigo',
        'bg-lightblue',
        'bg-navy',
        'bg-purple',
        'bg-fuchsia',
        'bg-pink',
        'bg-maroon',
        'bg-orange',
        'bg-lime',
        'bg-teal',
        'bg-olive'
    ]

    var accent_colors = [
        'accent-primary',
        'accent-warning',
        'accent-info',
        'accent-danger',
        'accent-success',
        'accent-indigo',
        'accent-lightblue',
        'accent-navy',
        'accent-purple',
        'accent-fuchsia',
        'accent-pink',
        'accent-maroon',
        'accent-orange',
        'accent-lime',
        'accent-teal',
        'accent-olive'
    ]

    var sidebar_skins = [
        'sidebar-dark-primary',
        'sidebar-dark-warning',
        'sidebar-dark-info',
        'sidebar-dark-danger',
        'sidebar-dark-success',
        'sidebar-dark-indigo',
        'sidebar-dark-lghtblue',
        'sidebar-dark-navy',
        'sidebar-dark-purple',
        'sidebar-dark-fuchsia',
        'sidebar-dark-pink',
        'sidebar-dark-maroon',
        'sidebar-dark-orange',
        'sidebar-dark-lime',
        'sidebar-dark-teal',
        'sidebar-dark-olive',
        'sidebar-light-primary',
        'sidebar-light-warning',
        'sidebar-light-info',
        'sidebar-light-danger',
        'sidebar-light-success',
        'sidebar-light-indigo',
        'sidebar-light-lightblue',
        'sidebar-light-navy',
        'sidebar-light-purple',
        'sidebar-light-fuchsia',
        'sidebar-light-pink',
        'sidebar-light-maroon',
        'sidebar-light-orange',
        'sidebar-light-lime',
        'sidebar-light-teal',
        'sidebar-light-olive'
    ]

    $c ontainer.append('<h6>Accent Color Variants</h6>')
    va r $accent_variants = $('<div />', {
        'class': 'd-flex'
    })
    $c ontainer.append($accent_variants)
    $container.append(createSkinBlock(accent_colors, function() {
        var color = $(this).data('color')
        var accent_class = color
        var $body = $('body')
        accent_colors.map(function(skin) {
            $body.removeClass(skin)
        })

        $body.addClass(accent_class)
    }))

    $container.append('<h6>Dark Sidebar Variants</h6>')
    v ar $sidebar_variants_dark = $('<div />', {
        'class': 'd-flex'
    })
    $container.append($sidebar_variants_dark)
    $container.append(createSkinBlock(sdebar_colors, function() {
        var color = $(this).data('color')
        var sidebar_class = 'sidebar-dark-' + color.replace('bg-', '')
        var $sidebar = $('.main-sidebar')
        sidebar_skins.map(function(skin) {
            $sidebar.removeClass(skin)
        })

        $sidebar.addClass(sidebar_class)
    }))

    $c ontainer.append('<h6>Light Sidebar Variants</h6>')
    var $sidebar_variants_light = $('<div />', {
        'c lass': 'd-flex'
    })
    $container.append($sidebar_variants_light)
    $con tainer.append(createSkinBlock(sidebar_colors, function() {
        var color = $(this).data('color')
        var sidebar_class = 'sidebar-light-' + color.replace('bg-', '')
        var $sidebar = $('.main-sidebar')
        sidebar_skins.map(function(skin) {
            $sidebar.removeClass(skin)
        })

        $s idebar.addClass(sidebar_class)
    }))

    var lo go_skins = navbar_all_colors
    $con tainer.append('<h6>Brand Logo Variants</h6>')
    var $logo_variants = $('<div />', {
        'class': 'd-flex'
    })
    $con tainer.append($logo_variants)
    var $clear_btn = $('<a />', {
        href: 'javascript:void(0)'
    }).tex t('clear').on('click', function() {
        var $logo = $('.brand-link')
        logo_skins.map(function(skin) {
            $logo.removeClass(skin)
        })
    })
    $conta iner.append(createSkinBlock(logo_skins, function() {
        var color = $(this).data('color')
        va r $logo = $('.brand-link')
        logo _skins.map(function(skin) {
            $logo.removeClass(skin)
        })
        $l ogo.addClass(color)
    }).appen d($clear_btn))

    func tion createSkinBlock(colors, callback) {
        var $block = $('<div />', {
            'class': 'd-flex flex-wrap mb-3'
        })

        co lors.map(function(color) {
            var $color = $('<div />', {
                'class': (typeof color === 'object' ? color.join(' ') : color).replace('navbar-', 'bg-').replace('accent-', 'bg-') + ' elevation-2'
            })

            $b lock.append($color)

            $col or.data('color', color)

            $c olor.css({
                width: '40px',
                height: '20px',
                borderRadius: '25px',
                marginRight: 10,
                marginBottom: 10,
                opacity: 0.8,
                cursor: 'pointer'
            })

            $color.hover(function() {
                $(this).css({ opacity: 1 }).removeClass('elevation-2').addClass('elevation-4')
            }, function() {
                $(this).css({ opacity: 0.8 }).removeClass('elevation-4').addClass('elevation-2')
            })

            if (callback) {
                $color.on('click', callback)
            }
        })

        return $block
    }

    $('.product-image-thumb').on('click', function() {
        const image_element = $(this).find('img');
        $('.product-image').prop('src', $(image_element).attr('src'))
        $('.product-image-thumb.active').removeClass('active');
        $(this).addClass('active');
    });
})(jQuery)