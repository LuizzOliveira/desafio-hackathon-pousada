    </main>

    <!-- Rodapé -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Panturismo</h3>
                    <p><?php echo $site_description; ?></p>
                </div>
                <div class="footer-section">
                    <h4>Links Rápidos</h4>
                    <ul>
                        <li><a href="<?php echo url('home'); ?>">Home</a></li>
                        <li><a href="<?php echo url('sobre'); ?>">Sobre</a></li>
                        <li><a href="<?php echo url('guia'); ?>">Guia Turístico</a></li>
                        <li><a href="<?php echo url('pacotes'); ?>">Pacotes</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contato</h4>
                    <p>Email: info@panturismo.com.br</p>
                    <p>Telefone: (67) 3000-0000</p>
                    <p>Endereço: Pantanal, Mato Grosso do Sul</p>
                </div>
                <div class="footer-section">
                    <h4>Redes Sociais</h4>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Panturismo. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="<?php echo ASSETS_PATH; ?>/js/script.js"></script>
</body>
</html>
