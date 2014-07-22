




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>jquery-grayscale/js/grayscale.js at master · josefrichter/jquery-grayscale</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="josefrichter/jquery-grayscale" name="twitter:title" /><meta content="jquery-grayscale - convert images to grayscale using canvas" name="twitter:description" /><meta content="https://avatars1.githubusercontent.com/u/134302?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars1.githubusercontent.com/u/134302?s=400" property="og:image" /><meta content="josefrichter/jquery-grayscale" property="og:title" /><meta content="https://github.com/josefrichter/jquery-grayscale" property="og:url" /><meta content="jquery-grayscale - convert images to grayscale using canvas" property="og:description" />

    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="C16CF911:55C3:1370CED:53CCBAC5" name="octolytics-dimension-request_id" /><meta content="8058373" name="octolytics-actor-id" /><meta content="NovikovViktor" name="octolytics-actor-login" /><meta content="c2197aafc81e44e3d2d2ef4e41925040bfbcbc74f09077b7bb7f0183d8e21c71" name="octolytics-actor-hash" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico" />


    <meta content="authenticity_token" name="csrf-param" />
<meta content="6KNhO2orNA0Rorf0+Fna4MwSwuFuj3QFiOGYkZ9o+dAb4JxqkH+M9PjcySJrnFAZqqsoegR7RVgkAObdohVreQ==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-08cc4d21dbfdd953c85afbf75762f5b6e145620d.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-7fa45bc1a10ba6acbc768b848364578bfb855eac.css" media="all" rel="stylesheet" type="text/css" />
    


    <meta http-equiv="x-pjax-version" content="db52f4e25078b55191f8b1f2d9a3a573">

      
  <meta name="description" content="jquery-grayscale - convert images to grayscale using canvas" />


  <meta content="134302" name="octolytics-dimension-user_id" /><meta content="josefrichter" name="octolytics-dimension-user_login" /><meta content="1672058" name="octolytics-dimension-repository_id" /><meta content="josefrichter/jquery-grayscale" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="1672058" name="octolytics-dimension-repository_network_root_id" /><meta content="josefrichter/jquery-grayscale" name="octolytics-dimension-repository_network_root_nwo" />

  <link href="https://github.com/josefrichter/jquery-grayscale/commits/master.atom" rel="alternate" title="Recent Commits to jquery-grayscale:master" type="application/atom+xml" />

  </head>


  <body class="logged_in  env-production linux vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/" aria-label="Homepage">
  <span class="mega-octicon octicon-mark-github"></span>
</a>


    
    <a href="/notifications" aria-label="You have no unread notifications" class="notification-indicator tooltipped tooltipped-s" data-hotkey="g n">
        <span class="mail-status all-read"></span>
</a>

      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s, /" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="NovikovViktor"
    data-repo="josefrichter/jquery-grayscale"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="josefrichter/jquery-grayscale" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    

<ul id="user-links">
  <li>
    <a href="/NovikovViktor" class="name">
      <img alt="NovikovViktor" class=" js-avatar" data-user="8058373" height="20" src="https://avatars0.githubusercontent.com/u/8058373?s=140" width="20" /> NovikovViktor
    </a>
  </li>

  <li class="new-menu dropdown-toggle js-menu-container">
    <a href="#" class="js-menu-target tooltipped tooltipped-s" aria-label="Create new...">
      <span class="octicon octicon-plus"></span>
      <span class="dropdown-arrow"></span>
    </a>

    <div class="new-menu-content js-menu-content">
    </div>
  </li>

  <li>
    <a href="/settings/profile" id="account_settings"
      class="tooltipped tooltipped-s"
      aria-label="Account settings ">
      <span class="octicon octicon-tools"></span>
    </a>
  </li>
  <li>
    <form accept-charset="UTF-8" action="/logout" class="logout-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="3J64078INzbC2RGLYbUFhgSWwwwB2m4wXeQS6t6BKaGv5M+UYOIbWMnM75chHzV2XaJYDa7llcgWPP7WQ8DGHA==" /></div>
      <button class="sign-out-button tooltipped tooltipped-s" aria-label="Sign out">
        <span class="octicon octicon-sign-out"></span>
      </button>
</form>  </li>

</ul>

<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>


    <li class="section-title">
      <span title="josefrichter/jquery-grayscale">This repository</span>
    </li>
      <li>
        <a href="/josefrichter/jquery-grayscale/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
      </li>
</ul>

</div>


    
  </div>
</div>

      

        



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="u2XERnEn89m0e2LYMBx7i9Gpcde+G2fdXTAEYekXfRQgo8GF6SLS2bsrgxA8xXAGdOxinI+3ae6gGQeWnPbH6Q==" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="1672058" />

    <div class="select-menu js-menu-container js-select-menu">
      <a class="social-count js-social-count" href="/josefrichter/jquery-grayscale/watchers">
        2
      </a>
      <a href="/josefrichter/jquery-grayscale/subscription"
        class="minibutton select-menu-button with-count js-menu-target" role="button" tabindex="0" aria-haspopup="true">
        <span class="js-select-button">
          <span class="octicon octicon-eye"></span>
          Watch
        </span>
      </a>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content" aria-hidden="true">
          <div class="select-menu-header">
            <span class="select-menu-title">Notifications</span>
            <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container" role="menu">

            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">Be notified when participating or @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">Be notified of all conversations.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">Never be notified.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
    

  <div class="js-toggler-container js-social-container starring-container ">

    <form accept-charset="UTF-8" action="/josefrichter/jquery-grayscale/unstar" class="js-toggler-form starred" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="djA+DnxDn93qusXUufF8xAQNGwSOMVHHW+JAo/06bOtmlZdH3aKW5Xa3tL5vmz0auSuJsBpl75a1V+ib3WTD4A==" /></div>
      <button
        class="minibutton with-count js-toggler-target star-button"
        aria-label="Unstar this repository" title="Unstar josefrichter/jquery-grayscale">
        <span class="octicon octicon-star"></span>
        Unstar
      </button>
        <a class="social-count js-social-count" href="/josefrichter/jquery-grayscale/stargazers">
          16
        </a>
</form>
    <form accept-charset="UTF-8" action="/josefrichter/jquery-grayscale/star" class="js-toggler-form unstarred" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="c1SDOYRgdXdTYqPYv1I0ldgAk6cgMi7K+a9t/RMmhEbt+T6LR/GQCluQ8bV+Z7TOLW4M5XjlFPNG+xyB/rZ4JA==" /></div>
      <button
        class="minibutton with-count js-toggler-target star-button"
        aria-label="Star this repository" title="Star josefrichter/jquery-grayscale">
        <span class="octicon octicon-star"></span>
        Star
      </button>
        <a class="social-count js-social-count" href="/josefrichter/jquery-grayscale/stargazers">
          16
        </a>
</form>  </div>

  </li>


        <li>
          <a href="/josefrichter/jquery-grayscale/fork" class="minibutton with-count js-toggler-target fork-button lighter tooltipped-n" title="Fork your own copy of josefrichter/jquery-grayscale to your account" aria-label="Fork your own copy of josefrichter/jquery-grayscale to your account" rel="facebox nofollow">
            <span class="octicon octicon-repo-forked"></span>
            Fork
          </a>
          <a href="/josefrichter/jquery-grayscale/network" class="social-count">15</a>
        </li>

</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/josefrichter" class="url fn" itemprop="url" rel="author"><span itemprop="title">josefrichter</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/josefrichter/jquery-grayscale" class="js-current-repository js-repo-home-link">jquery-grayscale</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/josefrichter/jquery-grayscale" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /josefrichter/jquery-grayscale">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/josefrichter/jquery-grayscale/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /josefrichter/jquery-grayscale/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>1</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/josefrichter/jquery-grayscale/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /josefrichter/jquery-grayscale/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>1</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped tooltipped-w" aria-label="Wiki">
          <a href="/josefrichter/jquery-grayscale/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g w" data-selected-links="repo_wiki /josefrichter/jquery-grayscale/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/josefrichter/jquery-grayscale/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /josefrichter/jquery-grayscale/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/josefrichter/jquery-grayscale/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /josefrichter/jquery-grayscale/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/josefrichter/jquery-grayscale/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /josefrichter/jquery-grayscale/network">
          <span class="octicon octicon-repo-forked"></span> <span class="full-word">Network</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/josefrichter/jquery-grayscale.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/josefrichter/jquery-grayscale.git" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=clone">
  <h3><strong>SSH</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="git@github.com:josefrichter/jquery-grayscale.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="git@github.com:josefrichter/jquery-grayscale.git" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/josefrichter/jquery-grayscale" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/josefrichter/jquery-grayscale" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>



                <a href="/josefrichter/jquery-grayscale/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download josefrichter/jquery-grayscale as a zip file"
                   title="Download josefrichter/jquery-grayscale as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<a href="/josefrichter/jquery-grayscale/blob/0927633ccd049e8152f30e6de29d38566ef0c6f9/js/grayscale.js" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:0af31b38f3bc584aaeb34fe668cbc954 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/josefrichter/jquery-grayscale/blob/master/js/grayscale.js"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="button-group right">
    <a href="/josefrichter/jquery-grayscale/find/master"
          class="js-show-file-finder minibutton empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button class="js-zeroclipboard minibutton zeroclipboard-button"
          data-clipboard-text="js/grayscale.js"
          aria-label="Copy to clipboard"
          data-copied-hint="Copied!">
      <span class="octicon octicon-clippy"></span>
    </button>
  </div>

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/josefrichter/jquery-grayscale" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">jquery-grayscale</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/josefrichter/jquery-grayscale/tree/master/js" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">js</span></a></span><span class="separator"> / </span><strong class="final-path">grayscale.js</strong>
  </div>
</div>


  <div class="commit file-history-tease">
      <img alt="Chris Gunther" class="main-avatar js-avatar" data-user="107416" height="24" src="https://avatars0.githubusercontent.com/u/107416?s=140" width="24" />
      <span class="author"><a href="/cgunther" rel="contributor">cgunther</a></span>
      <time datetime="2013-05-05T14:13:13-04:00" is="relative-time">May 05, 2013</time>
      <div class="commit-title">
          <a href="/josefrichter/jquery-grayscale/commit/18462f1c62a9dd1e9c8b728a478204f25f0ee7ba" class="message" data-pjax="true" title="Attach the load handler to the image to only run once per image

Previously, Chrome 26 would run the load handler once on the source image, then again on the already grayscaled image. Firefox 20 would run the load handler once on the source image, then infinitely on the grayscaled image, causing 100% CPU usage as it was constantly grayscaling the image. Older browser versions may have exhibited similar issues, but were not explicitly tested.

This change ensures that the grayscaling is only run once at most for each source image.">Attach the load handler to the image to only run once per image</a>
      </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>3</strong>  contributors</a></p>
          <a class="avatar tooltipped tooltipped-s" aria-label="josefrichter" href="/josefrichter/jquery-grayscale/commits/master/js/grayscale.js?author=josefrichter"><img alt="Josef Richter" class=" js-avatar" data-user="134302" height="20" src="https://avatars2.githubusercontent.com/u/134302?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="cgunther" href="/josefrichter/jquery-grayscale/commits/master/js/grayscale.js?author=cgunther"><img alt="Chris Gunther" class=" js-avatar" data-user="107416" height="20" src="https://avatars0.githubusercontent.com/u/107416?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="chillweb" href="/josefrichter/jquery-grayscale/commits/master/js/grayscale.js?author=chillweb"><img alt="Christopher Hill" class=" js-avatar" data-user="196497" height="20" src="https://avatars2.githubusercontent.com/u/196497?s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Josef Richter" class=" js-avatar" data-user="134302" height="24" src="https://avatars2.githubusercontent.com/u/134302?s=140" width="24" />
            <a href="/josefrichter">josefrichter</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Chris Gunther" class=" js-avatar" data-user="107416" height="24" src="https://avatars0.githubusercontent.com/u/107416?s=140" width="24" />
            <a href="/cgunther">cgunther</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Christopher Hill" class=" js-avatar" data-user="196497" height="24" src="https://avatars2.githubusercontent.com/u/196497?s=140" width="24" />
            <a href="/chillweb">chillweb</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>60 lines (43 sloc)</span>
          <span class="meta-divider"></span>
        <span>1.513 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
                <a class="minibutton tooltipped tooltipped-n js-update-url-with-hash"
                   aria-label="Clicking this button will automatically fork this project so you can edit the file"
                   href="/josefrichter/jquery-grayscale/edit/master/js/grayscale.js"
                   data-method="post" rel="nofollow">Edit</a>
          <a href="/josefrichter/jquery-grayscale/raw/master/js/grayscale.js" class="minibutton " id="raw-url">Raw</a>
            <a href="/josefrichter/jquery-grayscale/blame/master/js/grayscale.js" class="minibutton js-update-url-with-hash">Blame</a>
          <a href="/josefrichter/jquery-grayscale/commits/master/js/grayscale.js" class="minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

            <a class="minibutton danger empty-icon tooltipped tooltipped-s"
               href="/josefrichter/jquery-grayscale/delete/master/js/grayscale.js"
               aria-label="Fork this project and delete file"
               data-method="post" data-test-id="delete-blob-file" rel="nofollow">

          Delete
        </a>
      </div><!-- /.actions -->
    </div>
      
  <div class="blob-wrapper data type-javascript js-blob-data">
       <table class="file-code file-diff tab-size-8">
         <tr class="file-code-line">
           <td class="blob-line-nums">
             <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>

           </td>
           <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="cm">/* jQuery grayscale plugin converts color images to grayscale using canvas element</span></div><div class='line' id='LC2'><span class="cm">   requires jQuery (tested only with 1.5.2) and canvas compatible browser and IE</span></div><div class='line' id='LC3'><span class="cm">   (c) Josef Richter 2011 \ Christopher Hill 2011</span></div><div class='line' id='LC4'><span class="cm">   https://github.com/josefrichter/jquery-grayscale</span></div><div class='line' id='LC5'><span class="cm">   licensed under MIT license</span></div><div class='line' id='LC6'><span class="cm">   (see http://www.opensource.org/licenses/mit-license)</span></div><div class='line' id='LC7'><span class="cm">*/</span></div><div class='line' id='LC8'><br/></div><div class='line' id='LC9'><span class="p">(</span><span class="kd">function</span><span class="p">(</span> <span class="nx">$</span> <span class="p">){</span></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'><span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">grayscale</span> <span class="o">=</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'><span class="k">return</span> <span class="k">this</span><span class="p">.</span><span class="nx">each</span><span class="p">(</span><span class="kd">function</span><span class="p">(){</span></div><div class='line' id='LC14'><br/></div><div class='line' id='LC15'>	<span class="kd">var</span> <span class="nx">$this</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">);</span></div><div class='line' id='LC16'><br/></div><div class='line' id='LC17'>	<span class="nx">$this</span><span class="p">.</span><span class="nx">one</span><span class="p">(</span><span class="s1">&#39;load&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(){</span></div><div class='line' id='LC18'><br/></div><div class='line' id='LC19'>	<span class="k">if</span><span class="p">(</span><span class="nx">$</span><span class="p">.</span><span class="nx">browser</span><span class="p">.</span><span class="nx">msie</span><span class="p">){</span></div><div class='line' id='LC20'><br/></div><div class='line' id='LC21'>		<span class="nx">$this</span><span class="p">.</span><span class="nx">css</span><span class="p">({</span></div><div class='line' id='LC22'>			<span class="nx">filter</span><span class="o">:</span><span class="s1">&#39;progid:DXImageTransform.Microsoft.BasicImage(grayScale=1)&#39;</span><span class="p">,</span></div><div class='line' id='LC23'>			<span class="nx">MsFilter</span><span class="o">:</span><span class="s1">&#39;progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)&#39;</span></div><div class='line' id='LC24'>			<span class="p">});</span></div><div class='line' id='LC25'><br/></div><div class='line' id='LC26'>	<span class="p">}</span></div><div class='line' id='LC27'><br/></div><div class='line' id='LC28'>	<span class="k">else</span><span class="p">{</span></div><div class='line' id='LC29'><br/></div><div class='line' id='LC30'>		<span class="kd">var</span> <span class="nx">canvas</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s1">&#39;canvas&#39;</span><span class="p">);</span></div><div class='line' id='LC31'>		<span class="kd">var</span> <span class="nx">ctx</span> <span class="o">=</span> <span class="nx">canvas</span><span class="p">.</span><span class="nx">getContext</span><span class="p">(</span><span class="s1">&#39;2d&#39;</span><span class="p">);</span></div><div class='line' id='LC32'><br/></div><div class='line' id='LC33'>		<span class="kd">var</span> <span class="nx">imgObj</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Image</span><span class="p">();</span></div><div class='line' id='LC34'>		<span class="nx">imgObj</span><span class="p">.</span><span class="nx">src</span> <span class="o">=</span> <span class="nx">$this</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="s1">&#39;src&#39;</span><span class="p">);</span></div><div class='line' id='LC35'>		<span class="nx">canvas</span><span class="p">.</span><span class="nx">width</span> <span class="o">=</span> <span class="nx">imgObj</span><span class="p">.</span><span class="nx">width</span><span class="p">;</span></div><div class='line' id='LC36'>		<span class="nx">canvas</span><span class="p">.</span><span class="nx">height</span> <span class="o">=</span> <span class="nx">imgObj</span><span class="p">.</span><span class="nx">height</span><span class="p">;</span></div><div class='line' id='LC37'>		<span class="nx">ctx</span><span class="p">.</span><span class="nx">drawImage</span><span class="p">(</span><span class="k">this</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC38'><br/></div><div class='line' id='LC39'>		<span class="kd">var</span> <span class="nx">imgPixels</span> <span class="o">=</span> <span class="nx">ctx</span><span class="p">.</span><span class="nx">getImageData</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">canvas</span><span class="p">.</span><span class="nx">width</span><span class="p">,</span> <span class="nx">canvas</span><span class="p">.</span><span class="nx">height</span><span class="p">);</span></div><div class='line' id='LC40'><br/></div><div class='line' id='LC41'>			<span class="k">for</span><span class="p">(</span><span class="kd">var</span> <span class="nx">y</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">y</span> <span class="o">&lt;</span> <span class="nx">imgPixels</span><span class="p">.</span><span class="nx">height</span><span class="p">;</span> <span class="nx">y</span><span class="o">++</span><span class="p">){</span></div><div class='line' id='LC42'>				<span class="k">for</span><span class="p">(</span><span class="kd">var</span> <span class="nx">x</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">x</span> <span class="o">&lt;</span> <span class="nx">imgPixels</span><span class="p">.</span><span class="nx">width</span><span class="p">;</span> <span class="nx">x</span><span class="o">++</span><span class="p">){</span></div><div class='line' id='LC43'>					<span class="kd">var</span> <span class="nx">i</span> <span class="o">=</span> <span class="p">(</span><span class="nx">y</span> <span class="o">*</span> <span class="mi">4</span><span class="p">)</span> <span class="o">*</span> <span class="nx">imgPixels</span><span class="p">.</span><span class="nx">width</span> <span class="o">+</span> <span class="nx">x</span> <span class="o">*</span> <span class="mi">4</span><span class="p">;</span></div><div class='line' id='LC44'>					<span class="kd">var</span> <span class="nx">avg</span> <span class="o">=</span> <span class="p">(</span><span class="nx">imgPixels</span><span class="p">.</span><span class="nx">data</span><span class="p">[</span><span class="nx">i</span> <span class="o">+</span> <span class="mi">0</span><span class="p">]</span> <span class="o">+</span>  <span class="nx">imgPixels</span><span class="p">.</span><span class="nx">data</span><span class="p">[</span><span class="nx">i</span> <span class="o">+</span> <span class="mi">1</span><span class="p">]</span> <span class="o">+</span> <span class="nx">imgPixels</span><span class="p">.</span><span class="nx">data</span><span class="p">[</span><span class="nx">i</span> <span class="o">+</span> <span class="mi">2</span><span class="p">])</span> <span class="o">/</span> <span class="mi">3</span><span class="p">;</span></div><div class='line' id='LC45'><br/></div><div class='line' id='LC46'>					<span class="nx">imgPixels</span><span class="p">.</span><span class="nx">data</span><span class="p">[</span><span class="nx">i</span> <span class="o">+</span> <span class="mi">0</span><span class="p">]</span> <span class="o">=</span> <span class="nx">avg</span><span class="p">;</span></div><div class='line' id='LC47'>					<span class="nx">imgPixels</span><span class="p">.</span><span class="nx">data</span><span class="p">[</span><span class="nx">i</span> <span class="o">+</span> <span class="mi">1</span><span class="p">]</span> <span class="o">=</span> <span class="nx">avg</span><span class="p">;</span></div><div class='line' id='LC48'>					<span class="nx">imgPixels</span><span class="p">.</span><span class="nx">data</span><span class="p">[</span><span class="nx">i</span> <span class="o">+</span> <span class="mi">2</span><span class="p">]</span> <span class="o">=</span> <span class="nx">avg</span><span class="p">;</span></div><div class='line' id='LC49'>				<span class="p">}</span></div><div class='line' id='LC50'>			<span class="p">}</span></div><div class='line' id='LC51'><br/></div><div class='line' id='LC52'>				<span class="nx">ctx</span><span class="p">.</span><span class="nx">putImageData</span><span class="p">(</span><span class="nx">imgPixels</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">imgPixels</span><span class="p">.</span><span class="nx">width</span><span class="p">,</span> <span class="nx">imgPixels</span><span class="p">.</span><span class="nx">height</span><span class="p">);</span></div><div class='line' id='LC53'>					<span class="nx">$this</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="s1">&#39;src&#39;</span><span class="p">,</span><span class="nx">canvas</span><span class="p">.</span><span class="nx">toDataURL</span><span class="p">());</span></div><div class='line' id='LC54'>		<span class="p">}</span></div><div class='line' id='LC55'>				<span class="p">});</span></div><div class='line' id='LC56'><br/></div><div class='line' id='LC57'>		<span class="p">});</span></div><div class='line' id='LC58'><br/></div><div class='line' id='LC59'>&nbsp;&nbsp;<span class="p">};</span></div><div class='line' id='LC60'><span class="p">})(</span> <span class="nx">jQuery</span> <span class="p">);</span></div></pre></div></td>
         </tr>
       </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.04282s from github-fe131-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-df9e4beac80276ed3dfa56be0d97b536d0f5ee12.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-22af5724b6a68093dc4ea24d753f84320ccb5dd5.js" type="text/javascript"></script>
      
      
        <script async src="https://www.google-analytics.com/analytics.js"></script>
  </body>
</html>

