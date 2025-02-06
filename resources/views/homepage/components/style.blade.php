<style>
    :root {
        --color-primary-dark: #754fb8;
        --color-primary: #6a6acf;
        --color-background-primary: #7986e3;
    }

    body {
        font-family: "Montserrat", sans-serif !important;
    }

    .color-primary-dark {
        border-color: var(--color-primary-dark) !important;
        color: var(--color-primary-dark) !important;
    }

    .color-primary {
        color: var(--color-primary) !important;
    }

    .bg-primary {
        background-color: var(--color-background-primary) !important;
    }

    .bg-primary-dark {
        background-color: var(--color-primary-dark) !important;
    }

    .bg-primary-hover:hover {
        background-color: #5757ba !important;
    }

    .bg-primary-dark-hover:hover {
        background-color: #5d399b !important;
    }

    .font-sm-small {
        font-size: 16px;
    }

    @media (max-width: 576px) {
        .font-sm-small {
            font-size: 12px;
        }
    }

    .font-hashtag {
        font-size: 20px;
        font-weight: 600;
    }

    .hero-title {
        font-size: 28px;
        font-weight: 700;
    }

    .hero-body {
        font-size: 17px;
        font-weight: 500;
    }

    .hero-cta {
        width: Hug (252px)px;
        height: Hug (56px)px;
        padding: 16px 24px 16px 24px;
        gap: 8px;
        border-radius: 999px;
        opacity: 0px;
    }

    .font-subtitle {
        font-size: 12px;
        font-weight: 400;
    }

    .feature-title {
        font-size: 18px;
        font-weight: 700;
    }

    .font-14 {
        font-size: 14px;
        font-weight: 500;
    }

    .font-18 {
        font-size: 18px;
        font-weight: 800;
    }

    .font-12-700 {
        font-size: 12px;
        font-weight: 700;
    }

    .font-20-700 {
        font-size: 20px;
        font-weight: 700;
    }

    .font-14-600 {
        font-size: 14px;
        font-weight: 600;
    }

    .font-14-500 {
        font-size: 14px;
        font-weight: 400;
    }

    .partner-logo {
        width: 100px;
    }

    .font-17-500 {
        font-size: 17px;
        font-weight: 500;
    }

    @media (min-width: 576px) {
        .font-sm-small {
            font-size: 14px;
        }

        .hero-title {
            font-size: 32px;
            font-weight: 700;
        }

        .font-hashtag {
            font-size: 24px;
            font-weight: 600;
        }

        .font-subtitle {
            font-size: 18px;
            font-weight: 400;
        }

        .font-md-16-700 {
            font-size: 16px;
            font-weight: 700;
        }

        .font-md-50-800 {
            font-size: 32px;
            font-weight: 800;
        }

        .font-md-28-700 {
            font-size: 28px;
            font-weight: 700;
        }

        .font-md-16-600 {
            font-size: 14px;
            font-weight: 600;
        }

        .partner-logo {
            width: 150px;
        }
    }

    @media (min-width: 992px) {
        .hero-title {
            font-size: 44px;
            font-weight: 700;
        }
    }

    .card-hover {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Rainbow gradient border effect */
    .card-hover-rainbow:hover {
        background: linear-gradient(white, white) padding-box,
            linear-gradient(45deg,
                #ff6b6b,
                #ffd93d,
                #6c5ce7,
                #a8e6cf,
                #ff6b6b) border-box;
        border: 2px solid transparent;
        border-radius: 8px;
    }

    /* Neon glow effect */
    .card-hover-neon:hover {
        box-shadow: 0 0 10px #ff6b6b,
            0 0 20px #ffd93d,
            0 0 30px #6c5ce7;
        border-color: #ff6b6b;
    }

    /* Colorful scale effect */
    .card-hover-scale:hover {
        transform: scale(1.03);
        background: linear-gradient(135deg,
                rgba(255, 107, 107, 0.1),
                rgba(108, 92, 231, 0.1));
    }

    .button-hover {
        position: relative;
        overflow: hidden;
        transition: color 0.3s ease;
        z-index: 1;
    }

    .button-hover::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 100%;
        background: linear-gradient(135deg,
                rgba(106, 106, 207, 1) 0%,
                rgba(106, 106, 207, 0.5) 100%);
        transition: width 0.3s ease;
        z-index: -1;
    }

    .button-hover:hover::before {
        width: 100%;
    }

    .button-hover:not(:hover)::before {
        left: auto;
        right: 0;
        width: 0;
        transition: width 0.3s ease;
    }
</style>