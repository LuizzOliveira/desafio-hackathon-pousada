<?php include VIEWS_PATH . '/layouts/header.php'; ?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <h1>Pacotes Prontos</h1>
        <p>Escolha o pacote perfeito para sua aventura</p>
    </div>
</section>

<!-- Conteúdo Principal -->
<section class="packages-content">
    <div class="container">
        <div class="packages-tabs">
            <a href="<?php echo url('pacotes', 'prontos'); ?>" class="tab-link active">Pacotes Prontos</a>
            <a href="<?php echo url('pacotes', 'personalizados'); ?>" class="tab-link">Pacotes Personalizados</a>
        </div>

        <div class="packages-list">
            <?php foreach ($packages as $package): ?>
            <div class="package-detail-card">
                <div class="package-header">
                    <h3><?php echo $package['name']; ?></h3>
                    <span class="duration">
                        <i class="fas fa-calendar"></i> <?php echo $package['duration']; ?>
                    </span>
                </div>
                <p class="package-description"><?php echo $package['description']; ?></p>
                
                <div class="package-includes">
                    <h4>O que está incluído:</h4>
                    <ul>
                        <?php foreach ($package['includes'] as $item): ?>
                        <li><i class="fas fa-check"></i> <?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="package-footer">
                    <span class="price"><?php echo $package['price']; ?></span>
                    <button class="btn btn-primary" onclick="alert('Funcionalidade de reserva em desenvolvimento')">Reservar Agora</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Seção de Comparação -->
        <section class="comparison-section">
            <h2>Comparação de Pacotes</h2>
            <div class="comparison-table">
                <table>
                    <thead>
                        <tr>
                            <th>Pacote</th>
                            <th>Duração</th>
                            <th>Preço</th>
                            <th>Hospedagem</th>
                            <th>Refeições</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($packages as $package): ?>
                        <tr>
                            <td><?php echo $package['name']; ?></td>
                            <td><?php echo $package['duration']; ?></td>
                            <td><?php echo $package['price']; ?></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</section>

<?php include VIEWS_PATH . '/layouts/footer.php'; ?>
