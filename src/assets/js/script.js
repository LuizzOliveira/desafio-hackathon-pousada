/**
 * Panturismo - JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Menu Toggle para Mobile
    const menuToggle = document.querySelector('.menu-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');

    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            navbarMenu.classList.toggle('active');
        });
    }

    // Fechar menu ao clicar em um link
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navbarMenu) {
                navbarMenu.classList.remove('active');
            }
        });
    });

    // Smooth scroll para links internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Animação de entrada para elementos
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Aplicar animação aos cards
    document.querySelectorAll('.package-card, .guide-card, .benefit-card, .mvv-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Validação de formulário
    const customForm = document.querySelector('.custom-package-form');
    if (customForm) {
        customForm.addEventListener('submit', function(e) {
            // Validação customizada pode ser adicionada aqui
            console.log('Formulário de pacote personalizado enviado');
        });
    }

    // Função para atualizar preço estimado (exemplo)
    const durationInput = document.getElementById('duration');
    const budgetInput = document.getElementById('budget');

    if (durationInput || budgetInput) {
        const updateEstimate = () => {
            // Lógica para atualizar estimativa
        };

        if (durationInput) durationInput.addEventListener('change', updateEstimate);
        if (budgetInput) budgetInput.addEventListener('change', updateEstimate);
    }

    // Efeito de hover para cards
    document.querySelectorAll('.package-card, .guide-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.15)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        });
    });

    // Contador de animação (para estatísticas)
    const animateCounters = () => {
        const statCards = document.querySelectorAll('.stat-card h3');
        
        statCards.forEach(card => {
            const finalValue = card.textContent;
            const numericValue = parseInt(finalValue.replace(/\D/g, ''));
            
            if (!isNaN(numericValue)) {
                let currentValue = 0;
                const increment = Math.ceil(numericValue / 30);
                
                const counter = setInterval(() => {
                    currentValue += increment;
                    if (currentValue >= numericValue) {
                        card.textContent = finalValue;
                        clearInterval(counter);
                    } else {
                        card.textContent = currentValue + '+';
                    }
                }, 30);
            }
        });
    };

    // Chamar animação de contadores quando visível
    const statsSection = document.querySelector('.stats-grid');
    if (statsSection) {
        const statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statsObserver.observe(statsSection);
    }

    // Função para validar email
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Função para validar telefone
    function isValidPhone(phone) {
        const re = /^[\d\s\-\(\)]+$/;
        return re.test(phone) && phone.replace(/\D/g, '').length >= 10;
    }

    // Validação em tempo real do formulário
    const formInputs = document.querySelectorAll('.custom-package-form input, .custom-package-form textarea');
    formInputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.id === 'email' && this.value) {
                if (!isValidEmail(this.value)) {
                    this.style.borderColor = '#e74c3c';
                } else {
                    this.style.borderColor = '#2ecc71';
                }
            }

            if (this.id === 'phone' && this.value) {
                if (!isValidPhone(this.value)) {
                    this.style.borderColor = '#e74c3c';
                } else {
                    this.style.borderColor = '#2ecc71';
                }
            }
        });
    });

    console.log('Panturismo - Script carregado com sucesso!');
});

// Função para rolar para o topo
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Mostrar botão de voltar ao topo quando rolar
window.addEventListener('scroll', function() {
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const backToTopBtn = document.getElementById('backToTop');
    
    if (backToTopBtn) {
        if (scrollTop > 300) {
            backToTopBtn.style.display = 'block';
        } else {
            backToTopBtn.style.display = 'none';
        }
    }
});
