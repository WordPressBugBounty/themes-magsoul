/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var magsoul_secondary_container, magsoul_secondary_button, magsoul_secondary_menu, magsoul_secondary_links, magsoul_secondary_i, magsoul_secondary_len;

    magsoul_secondary_container = document.getElementById( 'magsoul-secondary-navigation' );
    if ( ! magsoul_secondary_container ) {
        return;
    }

    magsoul_secondary_button = magsoul_secondary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof magsoul_secondary_button ) {
        return;
    }

    magsoul_secondary_menu = magsoul_secondary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof magsoul_secondary_menu ) {
        magsoul_secondary_button.style.display = 'none';
        return;
    }

    magsoul_secondary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === magsoul_secondary_menu.className.indexOf( 'nav-menu' ) ) {
        magsoul_secondary_menu.className += ' nav-menu';
    }

    magsoul_secondary_button.onclick = function() {
        if ( -1 !== magsoul_secondary_container.className.indexOf( 'magsoul-toggled' ) ) {
            magsoul_secondary_container.className = magsoul_secondary_container.className.replace( ' magsoul-toggled', '' );
            magsoul_secondary_button.setAttribute( 'aria-expanded', 'false' );
            magsoul_secondary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            magsoul_secondary_container.className += ' magsoul-toggled';
            magsoul_secondary_button.setAttribute( 'aria-expanded', 'true' );
            magsoul_secondary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    magsoul_secondary_links    = magsoul_secondary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( magsoul_secondary_i = 0, magsoul_secondary_len = magsoul_secondary_links.length; magsoul_secondary_i < magsoul_secondary_len; magsoul_secondary_i++ ) {
        magsoul_secondary_links[magsoul_secondary_i].addEventListener( 'focus', magsoul_secondary_toggleFocus, true );
        magsoul_secondary_links[magsoul_secondary_i].addEventListener( 'blur', magsoul_secondary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function magsoul_secondary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'magsoul-focus' ) ) {
                    self.className = self.className.replace( ' magsoul-focus', '' );
                } else {
                    self.className += ' magsoul-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( magsoul_secondary_container ) {
        var touchStartFn, magsoul_secondary_i,
            parentLink = magsoul_secondary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, magsoul_secondary_i;

                if ( ! menuItem.classList.contains( 'magsoul-focus' ) ) {
                    e.preventDefault();
                    for ( magsoul_secondary_i = 0; magsoul_secondary_i < menuItem.parentNode.children.length; ++magsoul_secondary_i ) {
                        if ( menuItem === menuItem.parentNode.children[magsoul_secondary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[magsoul_secondary_i].classList.remove( 'magsoul-focus' );
                    }
                    menuItem.classList.add( 'magsoul-focus' );
                } else {
                    menuItem.classList.remove( 'magsoul-focus' );
                }
            };

            for ( magsoul_secondary_i = 0; magsoul_secondary_i < parentLink.length; ++magsoul_secondary_i ) {
                parentLink[magsoul_secondary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( magsoul_secondary_container ) );
} )();


( function() {
    var magsoul_primary_container, magsoul_primary_button, magsoul_primary_btn, magsoul_primary_btn_wrapper, magsoul_primary_menu, magsoul_primary_links, magsoul_primary_i, magsoul_primary_len;

    magsoul_primary_container = document.getElementById( 'magsoul-primary-navigation' );
    if ( ! magsoul_primary_container ) {
        return;
    }

    magsoul_primary_btn_wrapper = document.getElementById( 'magsoul-primary-menu-mobile-button' );
    if ( ! magsoul_primary_btn_wrapper ) {
        return;
    }

    magsoul_primary_btn = magsoul_primary_btn_wrapper.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof magsoul_primary_btn ) {
        return;
    }

    magsoul_primary_menu = magsoul_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof magsoul_primary_menu ) {
        magsoul_primary_btn.style.display = 'none';
        return;
    }

    magsoul_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === magsoul_primary_menu.className.indexOf( 'nav-menu' ) ) {
        magsoul_primary_menu.className += ' nav-menu';
    }

    magsoul_primary_btn.onclick = function() {
        if ( -1 !== magsoul_primary_container.className.indexOf( 'magsoul-toggled' ) ) {
            magsoul_primary_container.className = magsoul_primary_container.className.replace( ' magsoul-toggled', '' );
            magsoul_primary_btn.setAttribute( 'aria-expanded', 'false' );
            magsoul_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            magsoul_primary_container.className += ' magsoul-toggled';
            magsoul_primary_btn.setAttribute( 'aria-expanded', 'true' );
            magsoul_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    magsoul_primary_links    = magsoul_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( magsoul_primary_i = 0, magsoul_primary_len = magsoul_primary_links.length; magsoul_primary_i < magsoul_primary_len; magsoul_primary_i++ ) {
        magsoul_primary_links[magsoul_primary_i].addEventListener( 'focus', magsoul_primary_toggleFocus, true );
        magsoul_primary_links[magsoul_primary_i].addEventListener( 'blur', magsoul_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function magsoul_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'magsoul-focus' ) ) {
                    self.className = self.className.replace( ' magsoul-focus', '' );
                } else {
                    self.className += ' magsoul-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( magsoul_primary_container ) {
        var touchStartFn, magsoul_primary_i,
            parentLink = magsoul_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, magsoul_primary_i;

                if ( ! menuItem.classList.contains( 'magsoul-focus' ) ) {
                    e.preventDefault();
                    for ( magsoul_primary_i = 0; magsoul_primary_i < menuItem.parentNode.children.length; ++magsoul_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[magsoul_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[magsoul_primary_i].classList.remove( 'magsoul-focus' );
                    }
                    menuItem.classList.add( 'magsoul-focus' );
                } else {
                    menuItem.classList.remove( 'magsoul-focus' );
                }
            };

            for ( magsoul_primary_i = 0; magsoul_primary_i < parentLink.length; ++magsoul_primary_i ) {
                parentLink[magsoul_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( magsoul_primary_container ) );
} )();