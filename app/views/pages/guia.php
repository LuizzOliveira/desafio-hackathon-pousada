<?php include VIEWS_PATH . '/layouts/header.php'; ?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <h1>Guia Turístico</h1>
        <p>Conheça nossos especialistas</p>
    </div>
</section>

<!-- Conteúdo Principal -->
<section class="guides-content">
    <div class="container">
        <h2>Nossos Guias Especializados</h2>
        <p class="intro-text">Contamos com uma equipe de guias experientes e apaixonados pelo Pantanal, prontos para tornar sua experiência inesquecível.</p>

        <div class="guides-grid">
            <?php foreach ($guides as $guide): ?>
            <div class="guide-card">
                <div class="guide-image">
                    <img src="<?php echo ASSETS_PATH; ?>/images/<?php echo $guide['image']; ?>" alt="<?php echo $guide['name']; ?>">
                </div>
                <div class="guide-info">
                    <h3><?php echo $guide['name']; ?></h3>
                    <p class="specialty"><strong>Especialidade:</strong> <?php echo $guide['specialty']; ?></p>
                    <p class="experience"><strong>Experiência:</strong> <?php echo $guide['experience']; ?></p>
                    <a href="#" class="btn btn-small">Solicitar Guia</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Informações Adicionais -->
        <section class="guide-info-section">
            <h2>Sobre Nossos Guias</h2>
            <div class="info-cards">
                <div class="info-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Treinamento Contínuo</h3>
                    <p>Todos os nossos guias recebem treinamento contínuo em segurança, ecologia e atendimento ao cliente.</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-language"></i>
                    <h3>Multilíngues</h3>
                    <p>Nossos guias falam português, inglês e espanhol para melhor comunicação com visitantes internacionais.</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-certificate"></i>
                    <h3>Certificados</h3>
                    <p>Todos possuem certificação de guia turístico e primeiros socorros.</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-heart"></i>
                    <h3>Paixão pela Natureza</h3>
                    <p>Compartilham genuína paixão pela preservação e conhecimento do Pantanal.</p>
                </div>
            </div>
        </section>
    </div>
</section>

<?php include VIEWS_PATH . '/layouts/footer.php'; ?>
