<nav class="custom-top-nav d-flex align-items-center justify-content-between px-3">
    <div class="nav-brand">
        <i class="bi bi-hand-index-thumb"></i>
    </div>

    <div class="nav-links-center d-flex align-items-center">
        <a href="#" class="nav-item-custom active">
            <i class="bi bi-house-door"></i>
        </a>
        <a href="#" class="nav-item-custom">
            <i class="bi bi-book"></i>
        </a>
        <a href="#" class="nav-item-custom">
            <i class="bi bi-stopwatch"></i>
        </a>
        <a href="#" class="nav-item-custom">
            <i class="bi bi-bookmark"></i>
        </a>
        <a href="#" class="nav-item-custom">
            <i class="bi bi-gear"></i>
        </a>
    </div>

    <div class="nav-end">
        <button class="btn-menu-toggle">
            <i class="bi bi-list"></i>
        </button>
    </div>
</nav>

<style>
    /* Variáveis de Cores baseadas na imagem */
    :root {
        --nav-bg: #f2f1e8;      /* Fundo bege claro */
        --nav-accent: #e66a6a;  /* Coral do ícone Home */
        --nav-text: #333333;    /* Cor dos ícones */
        --nav-height: 70px;
    }

    /* Container principal da Navbar */
    .custom-top-nav {
        background-color: var(--nav-bg);
        height: var(--nav-height);
        width: 100%;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    /* Logo da esquerda */
    .nav-brand {
        font-size: 1.8rem;
        color: var(--nav-text);
        cursor: pointer;
    }

    /* Container centralizado */
    .nav-links-center {
        gap: 20px; /* Espaçamento entre os ícones */
    }

    /* Estilo base dos links/ícones */
    .nav-item-custom {
        color: var(--nav-text);
        text-decoration: none;
        font-size: 1.4rem;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.2s ease;
    }

    /* Item Ativo (Círculo Coral igual à imagem) */
    .nav-item-custom.active {
        background-color: var(--nav-accent);
        color: #ffffff;
    }

    /* Efeito Hover para os itens não ativos */
    .nav-item-custom:not(.active):hover {
        background-color: rgba(0,0,0,0.05);
        color: var(--nav-text);
    }

    /* Botão de Menu (Direita) */
    .btn-menu-toggle {
        background: transparent;
        border: none;
        font-size: 1.6rem;
        color: var(--nav-text);
        padding: 5px 10px;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.2s;
    }

    .btn-menu-toggle:hover {
        background-color: rgba(0,0,0,0.05);
    }
</style>