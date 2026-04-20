<!doctype html>
<html lang="en">
  <head>
    <title>Gerakan Suka Baca | Linktree</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
      body {
        margin: 0;
        min-height: 100vh;
        background: rgba(0, 0, 0, 0.24);
        font-family:
          -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
          Arial, sans-serif;
        display: flex;
        justify-content: center;
      }

      .bg-overlay-dark {
        position: fixed;
        inset: 0;
        z-index: 0;
      }

      .main-wrapper {
        width: 100%;
        max-width: 580px;
        margin: 40px auto 0 auto;
        border-radius: 24px 24px 0 0;
        background: linear-gradient(
          180deg,
          #fcf4d4 0%,
          #faebc3 25%,
          #fde7d8 50%,
          #fcf0ec 75%,
          #f4dcd1 100%
        );
        position: relative;
        z-index: 10;
        min-height: calc(100vh - 40px);
        overflow: hidden;
      }

      .main-wrapper::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 2;
        opacity: 0.18;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 420 420' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.45' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        background-size: 420px 420px;
        mix-blend-mode: normal;
      }

      .main-wrapper::after {
        content: none;
      }

      .main-wrapper > * {
        position: relative;
        z-index: 6;
      }

      @media screen and (max-width: 580px) {
        body {
          background-color: #fcf4d4;
        }
        .bg-overlay-dark {
          display: none;
        }
        .main-wrapper {
          margin-top: 0;
          border-radius: 0;
          min-height: 100vh;
          box-shadow: none;
        }
      }

      .container {
        z-index: 10;
      }
      .header-icons {
        position: absolute;
        top: 20px;
        right: 20px;
      }

      @media screen and (max-width: 580px) {
        .header-icons {
          top: 16px;
          right: 16px;
        }
      }
      .icon-btn-top {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-left: 10px;
        color: #000;
        text-decoration: none;
        font-size: 16px;
      }

      @media screen and (max-width: 580px) {
        .icon-btn-top {
          width: 36px;
          height: 36px;
          font-size: 14px;
        }
      }
      .icon-btn-top-left {
        position: absolute;
        top: 20px;
        left: 20px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #000;
        text-decoration: none;
        font-size: 16px;
      }

      @media screen and (max-width: 580px) {
        .icon-btn-top-left {
          top: 16px;
          left: 16px;
          width: 36px;
          height: 36px;
          font-size: 14px;
        }
      }
      .profile-img {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        object-fit: cover;
        margin-top: 60px;
        margin-bottom: 16px;
      }

      @media screen and (max-width: 580px) {
        .profile-img {
          margin-top: 40px;
          width: 80px;
          height: 80px;
        }
      }
      .profile-title {
        font-weight: 700;
        font-size: 20px;
        margin-bottom: 8px;
      }

      @media screen and (max-width: 580px) {
        .profile-title {
          font-size: 18px;
        }
      }
      .profile-desc {
        font-size: 15px;
        font-weight: 500;
        max-width: 600px;
        margin: 0 auto 32px auto;
        line-height: 1.5;
        padding-left: 20px;
        padding-right: 20px;
      }

      @media screen and (max-width: 580px) {
        .profile-desc {
          padding-left: 16px;
          padding-right: 16px;
          font-size: 14px;
          margin-bottom: 24px;
        }
      }
      .link-container {
        max-width: 580px;
        margin: 0 auto;
        padding: 0 16px;
      }

      @media screen and (max-width: 580px) {
        .link-container {
          padding: 0 8px;
        }
      }
      .link-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        background-color: #ffffff;
        color: #000000;
        padding: 20px 20px;
        margin-bottom: 16px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 16px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.12);
        position: relative;
        transition: background-color 0.2s;
        min-height: 56px;
      }
      .link-btn:hover {
        background-color: #f1f5fb;
        color: #000000 !important;
        text-decoration: none !important;
      }

      .join-btn:hover {
        text-decoration: none !important;
        color: #000000 !important;
      }

      @media screen and (max-width: 580px) {
        .link-btn {
          padding: 16px 16px;
          font-size: 14px;
          margin-bottom: 12px;
          box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
        }
      }
      .link-options {
        position: absolute;
        right: 12px;
        color: #757575;
        font-size: 13px;
        background: transparent;
        width: 26px;
        height: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background-color 0.2s;
      }
      .link-options:hover {
        background-color: rgba(0, 0, 0, 0.12);
      }
      .social-icons {
        margin: 32px 0 40px 0;
        display: flex;
        justify-content: center;
        gap: 16px;
      }
      .social-icons a {
        color: #000;
        font-size: 30px;
        text-decoration: none;
        transition: transform 0.2s;
      }
      .social-icons a:hover {
        transform: scale(1.1);
      }

      @media screen and (max-width: 580px) {
        .social-icons {
          margin: 24px 0 32px 0;
        }
        .social-icons a {
          font-size: 30px;
        }
      }
      .join-btn {
        background-color: #ffffff;
        color: #000000;
        padding: 12px 24px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        display: inline-block;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        margin-bottom: 24px;
        margin-top: 30px;
        transform: scale(1.1);
        transform-origin: center;
        transition:
          transform 0.2s,
          box-shadow 0.2s,
          background-color 0.2s;
      }

      @media screen and (max-width: 580px) {
        .join-btn {
          margin-bottom: 16px;
          font-size: 14px;
          box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
          transform: scale(1.05);
          transition:
            transform 0.2s,
            box-shadow 0.2s,
            background-color 0.2s;
        }
        .join-btn:hover {
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
          transform: scale(1.1);
        }
      }
      .footer-links {
        font-size: 11px;
        font-weight: 500;
        margin-bottom: 40px;
      }
      .footer-links a {
        color: #000000 !important;
        text-decoration: none !important;
        margin: 0 4px;
      }
      .footer-links a:hover {
        text-decoration: underline !important;
        color: #000000 !important;
      }

      .join-btn:hover {
        text-decoration: none !important;
        color: #000000 !important;
      }

      @media screen and (max-width: 580px) {
        .footer-links {
          margin-bottom: 20px;
          padding-left: 16px;
          padding-right: 16px;
          font-size: 10px;
        }
      }
      .linktree-logo {
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
      }
    </style>
  </head>
  <body>
    <div class="bg-overlay-dark"></div>
    <div class="main-wrapper">
      <div class="container text-center position-relative pb-5 z-1">
        <a href="#" class="icon-btn-top-left">
          <i class="fas fa-certificate"></i>
        </a>
        <div class="header-icons">
          <a href="#" class="icon-btn-top">
            <i class="far fa-bell"></i>
          </a>
          <a href="#" class="icon-btn-top">
            <i class="fas fa-arrow-up-right-from-square"></i>
          </a>
        </div>

        <img
          src="assets/img/linktree-profile.webp"
          alt="Profile"
          class="profile-img"
        />

        <h1 class="profile-title">Gerakan Suka Baca</h1>
        <p class="profile-desc">
          Hayo ngapain? Liat-liat aja, daftar dong<br />hehe. Follow IG baru
          kita @komunitasgsb
        </p>

        <div class="link-container">
          <a href="#" class="link-btn">
            DAFTAR Pengajar Kelas Depok Offline
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
          <a href="#" class="link-btn">
            DAFTAR Fasilitator Kelas Depok Offline
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
          <a href="#" class="link-btn">
            DAFTAR Pengajar Kelas Kab. Bogor Offline
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
          <a href="#" class="link-btn">
            DAFTAR Fasilitator Kelas Kab. Bogor Offline
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
          <a href="#" class="link-btn">
            DAFTAR Dokumentasi Kelas Kab. Bogor Offline
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
          <a href="#" class="link-btn">
            DAFTAR Geng Lapak Baca Depok Offline
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
          <a href="#" class="link-btn">
            DAFTAR Relawan Komunikasi Publik Online
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
          <a href="#" class="link-btn">
            PENGUMUMAN Relawan Geng Suba Kloter 1
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
          <a href="#" class="link-btn">
            WA-nya Admin GSB
            <div class="link-options"><i class="fas fa-ellipsis-v"></i></div>
          </a>
        </div>

        <div class="social-icons">
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

        <a href="#" class="join-btn"> Join minggucerdas on Linktree </a>

        <div class="footer-links">
          <a href="#">Cookie Preferences</a> &middot;
          <a href="#">Report</a> &middot; <a href="#">Privacy</a> &middot;
          <a href="#">Explore</a>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>