# wp_themes

■特定のThemeだけpullする方法

※作業ディレクトリ：wordpress/wp-content/themes

例) wordpressnote
$ git init
$ git config core.sparsecheckout true
$ git remote add origin https://github.com/KShuto/wp_themes.git
$ echo wordpressnote/ > .git/info/sparse-checkout
$ git pull origin master
