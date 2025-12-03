<?php include VIEWS_PATH . '/layouts/header.php'; ?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <h1>Sobre a Panturismo</h1>
        <p>Sua porta de entrada para o Pantanal</p>
    </div>
</section>

<!-- Conteúdo Principal -->
<section class="about-content">
    <div class="container">
        <div class="about-intro">
            <h2>Quem Somos</h2>
            <p>A Panturismo é uma empresa especializada em turismo de natureza no Pantanal, oferecendo experiências autênticas e memoráveis para viajantes de todo o mundo. Com mais de uma década de experiência, nos tornamos referência em turismo sustentável na região.</p>
        </div>

        <!-- Estatísticas -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3><?php echo $company_info['founded']; ?></h3>
                <p>Ano de Fundação</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $company_info['experience']; ?></h3>
                <p>de Experiência</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $company_info['customers']; ?></h3>
                <p>Clientes Satisfeitos</p>
            </div>
            <div class="stat-card">
                <h3><?php echo $company_info['guides']; ?></h3>
                <p>Guias Especializados</p>
            </div>
        </div>

        <!-- Missão, Visão, Valores -->
        <div class="mvv-section">
            <div class="mvv-card">
                <h3>Missão</h3>
                <p>Proporcionar experiências autênticas e transformadoras no Pantanal, promovendo a conservação ambiental e o desenvolvimento sustentável da região.</p>
            </div>
            <div class="mvv-card">
                <h3>Visão</h3>
                <p>Ser a empresa líder em turismo de natureza no Pantanal, reconhecida pela excelência, sustentabilidade e compromisso com a comunidade local.</p>
            </div>
            <div class="mvv-card">
                <h3>Valores</h3>
                <p>Sustentabilidade, autenticidade, segurança, qualidade e respeito à natureza e à cultura local são os pilares de nossas operações.</p>
            </div>
        </div>

        <!-- Histórico -->
        <div class="history-section">
            <h2>Nossa História</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2015</div>
                    <div class="timeline-content">
                        <h4>Fundação</h4>
                        <p>Panturismo foi fundada com a visão de oferecer turismo responsável no Pantanal.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2017</div>
                    <div class="timeline-content">
                        <h4>Expansão</h4>
                        <p>Abertura de novos pontos de operação e ampliação da frota de embarcações.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2019</div>
                    <div class="timeline-content">
                        <h4>Certificação</h4>
                        <p>Obtemos certificação de turismo sustentável internacional.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h4>Liderança</h4>
                        <p>Consolidação como empresa líder em turismo de natureza no Pantanal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include VIEWS_PATH . '/layouts/footer.php'; ?>
