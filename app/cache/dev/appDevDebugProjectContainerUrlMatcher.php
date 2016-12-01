<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/newAuthor')) {
            // coderslab_author_newform
            if ($pathinfo === '/newAuthor') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_coderslab_author_newform;
                }

                return array (  '_controller' => 'CodersLabBundle\\Controller\\AuthorController::newFormAction',  '_route' => 'coderslab_author_newform',);
            }
            not_coderslab_author_newform:

            // coderslab_author_newauthor
            if ($pathinfo === '/newAuthor') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_coderslab_author_newauthor;
                }

                return array (  '_controller' => 'CodersLabBundle\\Controller\\AuthorController::newAuthorAction',  '_route' => 'coderslab_author_newauthor',);
            }
            not_coderslab_author_newauthor:

        }

        if (0 === strpos($pathinfo, '/showA')) {
            // showAuthor
            if (0 === strpos($pathinfo, '/showAuthor') && preg_match('#^/showAuthor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showAuthor')), array (  '_controller' => 'CodersLabBundle\\Controller\\AuthorController::showAuthorAction',));
            }

            // coderslab_author_showallauthors
            if ($pathinfo === '/showAllAuthors') {
                return array (  '_controller' => 'CodersLabBundle\\Controller\\AuthorController::showAllAuthorsAction',  '_route' => 'coderslab_author_showallauthors',);
            }

        }

        if (0 === strpos($pathinfo, '/newBook')) {
            // coderslab_book_newform
            if ($pathinfo === '/newBook') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_coderslab_book_newform;
                }

                return array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::newFormAction',  '_route' => 'coderslab_book_newform',);
            }
            not_coderslab_book_newform:

            // coderslab_book_newbook
            if ($pathinfo === '/newBook') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_coderslab_book_newbook;
                }

                return array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::newBookAction',  '_route' => 'coderslab_book_newbook',);
            }
            not_coderslab_book_newbook:

        }

        if (0 === strpos($pathinfo, '/show')) {
            // showBook
            if (0 === strpos($pathinfo, '/showBook') && preg_match('#^/showBook/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showBook')), array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::showBookAction',));
            }

            // coderslab_book_showallbooks
            if ($pathinfo === '/showAllBooks') {
                return array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::showAllBooksAction',  '_route' => 'coderslab_book_showallbooks',);
            }

        }

        // coderslab_book_deletebook
        if (0 === strpos($pathinfo, '/deleteBook') && preg_match('#^/deleteBook/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coderslab_book_deletebook')), array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::deleteBookAction',));
        }

        // coderslab_book_assigntoauthor
        if (0 === strpos($pathinfo, '/assign') && preg_match('#^/assign/(?P<bookId>[^/]++)/(?P<authorId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coderslab_book_assigntoauthor')), array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::assignToAuthorAction',));
        }

        if (0 === strpos($pathinfo, '/books')) {
            if (0 === strpos($pathinfo, '/booksGreater')) {
                // coderslab_book_booksgreaterrating
                if (0 === strpos($pathinfo, '/booksGreaterRating') && preg_match('#^/booksGreaterRating/(?P<rating>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coderslab_book_booksgreaterrating')), array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::booksGreaterRatingAction',));
                }

                // coderslab_book_booksgreaterid
                if (0 === strpos($pathinfo, '/booksGreaterID') && preg_match('#^/booksGreaterID/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coderslab_book_booksgreaterid')), array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::booksGreaterIDAction',));
                }

            }

            // coderslab_book_bookstitlestart
            if (0 === strpos($pathinfo, '/booksTitleStart') && preg_match('#^/booksTitleStart/(?P<titlestart>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coderslab_book_bookstitlestart')), array (  '_controller' => 'CodersLabBundle\\Controller\\BookController::booksTitleStartAction',));
            }

        }

        // coderslab_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'coderslab_default_index');
            }

            return array (  '_controller' => 'CodersLabBundle\\Controller\\DefaultController::indexAction',  '_route' => 'coderslab_default_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
