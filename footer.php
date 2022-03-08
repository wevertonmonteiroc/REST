<footer>
    <nav class="nav-footer">
        <ul>
            <li class="current_page_item"><a href="/">Menu</a></li>
            <li><a href="/testewpp/sobre/">Sobre</a></li>
            <li><a href="/testewpp/contato/">Contato</a></li>
        </ul>
    </nav>
    <!-- A função echo date("Y") serve para mostrar o ano atual-->
    <p><?php bloginfo('name') ?> © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
</footer>

<!-- Footer Wordpress -->
<?php wp_footer(); ?>
<!-- Fecha Footer Wordpress -->
</body>

</html>