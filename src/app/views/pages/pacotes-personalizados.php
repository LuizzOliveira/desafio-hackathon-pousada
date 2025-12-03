<?php include VIEWS_PATH . '/layouts/header.php'; ?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <h1>Pacotes Personalizados</h1>
        <p>Crie sua experiência única no Pantanal</p>
    </div>
</section>

<!-- Conteúdo Principal -->
<section class="custom-packages-content">
    <div class="container">
        <div class="packages-tabs">
            <a href="<?php echo url('pacotes', 'prontos'); ?>" class="tab-link">Pacotes Prontos</a>
            <a href="<?php echo url('pacotes', 'personalizados'); ?>" class="tab-link active">Pacotes Personalizados</a>
        </div>

        <div class="custom-package-intro">
            <h2>Crie Seu Próprio Pacote</h2>
            <p>Não encontrou o pacote perfeito? Crie um personalizado de acordo com suas preferências, orçamento e disponibilidade.</p>
        </div>

        <!-- Formulário de Personalização -->
        <div class="custom-form-section">
            <form class="custom-package-form" onsubmit="handleFormSubmit(event)">
                <div class="form-group">
                    <label for="name">Nome Completo *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Telefone *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="start-date">Data de Início *</label>
                        <input type="date" id="start-date" name="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duração (dias) *</label>
                        <input type="number" id="duration" name="duration" min="1" max="30" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="group-size">Tamanho do Grupo *</label>
                    <input type="number" id="group-size" name="group_size" min="1" max="50" required>
                </div>

                <div class="form-group">
                    <label>Atividades de Interesse *</label>
                    <div class="checkbox-group">
                        <label class="checkbox">
                            <input type="checkbox" name="activities" value="safari">
                            <span>Safari Fotográfico</span>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="activities" value="pesca">
                            <span>Pesca Esportiva</span>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="activities" value="trilhas">
                            <span>Trilhas e Caminhadas</span>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="activities" value="passeios">
                            <span>Passeios de Barco</span>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="activities" value="cultura">
                            <span>Experiências Culturais</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="budget">Orçamento Estimado</label>
                    <select id="budget" name="budget">
                        <option value="">Selecione uma faixa</option>
                        <option value="ate-1000">Até R$ 1.000</option>
                        <option value="1000-2000">R$ 1.000 - R$ 2.000</option>
                        <option value="2000-5000">R$ 2.000 - R$ 5.000</option>
                        <option value="acima-5000">Acima de R$ 5.000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="preferences">Preferências Adicionais</label>
                    <textarea id="preferences" name="preferences" rows="4" placeholder="Conte-nos mais sobre suas preferências, restrições alimentares, necessidades especiais, etc."></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-large">Solicitar Orçamento</button>
            </form>
        </div>

        <!-- Seção de Benefícios -->
        <section class="custom-benefits">
            <h2>Por que Escolher um Pacote Personalizado?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <i class="fas fa-adjust"></i>
                    <h3>Flexibilidade Total</h3>
                    <p>Escolha as datas, duração e atividades que melhor se adequam a você</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-wallet"></i>
                    <h3>Melhor Custo-Benefício</h3>
                    <p>Pague apenas pelo que deseja, sem custos desnecessários</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-users"></i>
                    <h3>Atenção Personalizada</h3>
                    <p>Nossa equipe dedicada cuida de cada detalhe da sua experiência</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-star"></i>
                    <h3>Experiência Única</h3>
                    <p>Crie memórias inesquecíveis com um pacote feito especialmente para você</p>
                </div>
            </div>
        </section>
    </div>
</section>

<script>
function handleFormSubmit(event) {
    event.preventDefault();
    alert('Obrigado! Sua solicitação foi recebida. Entraremos em contato em breve com um orçamento personalizado.');
    event.target.reset();
}
</script>

<?php include VIEWS_PATH . '/layouts/footer.php'; ?>
