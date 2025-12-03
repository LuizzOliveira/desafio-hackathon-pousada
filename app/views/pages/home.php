<?php include VIEWS_PATH . '/layouts/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Bem-vindo ao Panturismo</h1>
        <p>Descubra a magia do Pantanal com nossos pacotes exclusivos</p>
        <a href="<?php echo url('pacotes', 'prontos'); ?>" class="btn btn-primary">Explorar Pacotes</a>
    </div>
</section>

<!-- Seção de Destaques -->
<section class="featured-packages">
    <div class="container">
        <h2>Pacotes em Destaque</h2>
        <div class="packages-grid">
            <?php foreach ($featured_packages as $package): ?>
            <div class="package-card">
                <div class="package-image">
                    <img src="<?php echo ASSETS_PATH; ?>/images/<?php echo $package['image']; ?>" alt="<?php echo $package['name']; ?>">
                </div>
                <div class="package-info">
                    <h3><?php echo $package['name']; ?></h3>
                    <p><?php echo $package['description']; ?></p>
                    <div class="package-footer">
                        <span class="price"><?php echo $package['price']; ?></span>
                        <a href="<?php echo url('pacotes', 'prontos'); ?>" class="btn btn-small">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Seção de Benefícios -->
<section class="benefits">
    <div class="container">
        <h2>Por que Escolher a Panturismo?</h2>
        <div class="benefits-grid">
            <div class="benefit-card">
                <i class="fas fa-map-location-dot"></i>
                <h3>Experiência Local</h3>
                <p>Guias especializados que conhecem cada canto do Pantanal</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-shield"></i>
                <h3>Segurança Garantida</h3>
                <p>Todos os passeios com equipamento de segurança certificado</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-star"></i>
                <h3>Qualidade Premium</h3>
                <p>Hospedagem e refeições de primeira qualidade</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-heart"></i>
                <h3>Sustentabilidade</h3>
                <p>Comprometidos com a preservação da natureza</p>
            </div>
        </div>
    </div>
</section>

<!-- Seção de CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Pronto para sua Aventura?</h2>
        <p>Entre em contato conosco para mais informações</p>
        <a href="<?php echo url('pacotes', 'personalizados'); ?>" class="btn btn-secondary">Criar Pacote Personalizado</a>
    </div>
</section>

<?php include VIEWS_PATH . '/layouts/footer.php'; ?>
