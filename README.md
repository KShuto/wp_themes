# wp_themes

■特定のThemeだけpullする方法

※作業ディレクトリ：wordpress/wp-content/themes

例) wordpressnote
$ git ini$ $ t
$ git con$ fig core.sparsecheckout true
$ git rem$ ote add origin https://github.com/KShuto/wp_themes.git
$ echo wordpressnote/ > .git/info/sparse-checkout
$ git pull origin master
