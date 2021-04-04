<!-- サイドバー1にウィジットが配置されている場合だけ -->
<?php if( is_active_sidebar( 'sidebar-1' ) ): ?>
<aside>
<!-- ウィジットエリアを用意 -->
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
<?php endif; ?>
