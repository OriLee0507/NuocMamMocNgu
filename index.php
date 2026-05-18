<!DOCTYPE html>
<html>
<head>
  <title>Nước Mắm Mộc Ngư - Trang chủ</title>
  <style>
    body {
      font-family: Arial;
      margin: 0;
      background: #fffdf5;
    }

    /* Header */
    header {
      background: #ffd54f;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    header a {
      text-decoration: none;
      color: black;
      margin: 0 10px;
      font-weight: bold;
    }

    /* Banner */
    .banner img {
      width: 100%;
      height: auto;
      object-fit: contain;
      display: block;
      border-bottom: 3px solid #ffd54f;
    }

    /* Layout chính: sidebar + content */
    .main-content {
      display: flex;
      max-width: 1400px;
      margin: 20px auto 40px auto; /* giảm margin-top từ 40px → 20px để xích lên */
      gap: 15px;
      padding: 0 20px;
      align-items: flex-start;
    }

    /* Sidebar */
    .sidebar {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .sidebar img {
      width: 100%;
      max-width: 450px; /* poster to hơn */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    /* Nội dung chính */
    .intro-section {
      flex: 2;
      background: #fff8e1;
      padding: 30px 20px; /* giảm padding-top từ 40px → 30px */
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      line-height: 1.6;
    }

    .intro-section h2 {
      color: #d88c1f;
      margin-bottom: 10px;
    }

    .intro-section ul {
      padding-left: 20px;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: #ffd54f;
      margin-top: 40px;
      font-weight: bold;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .main-content {
        flex-direction: column;
        align-items: center;
      }
      .sidebar {
        flex-direction: row;
        justify-content: center;
      }
      .sidebar img {
        max-width: 300px;
      }
      .intro-section {
        width: 100%;
      }
    }

    @media (max-width: 768px) {
      .sidebar {
        flex-direction: column;
      }
      .sidebar img {
        width: 80%;
        max-width: 300px;
      }
      .intro-section {
        padding: 20px 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div><b>Nước Mắm Mộc Ngư</b></div>
    <div>
      <a href="index.html">Trang chủ</a>
      <a href="products.html">Sản phẩm</a>
    </div>
  </header>

  <!-- Banner -->
  <div class="banner">
    <img src="images/banner.jpg" alt="Banner Nước Mắm Mộc Ngư">
  </div>

  <!-- Main content: sidebar + text -->
  <div class="main-content">
    <!-- Sidebar trái -->
    <div class="sidebar">
      <img src="images/poster.jpg" alt="Poster Nước Mắm Mộc Ngư">
    </div>

    <!-- Nội dung chính -->
    <div class="intro-section">
      <h2>Giới thiệu</h2>
      <p>Thương hiệu nước mắm Mộc Ngư được hình thành từ khát vọng gìn giữ và phát huy giá trị tinh hoa của nước mắm truyền thống Việt Nam. Tên gọi “Mộc Ngư” là sự kết hợp giữa “Mộc” – gợi lên sự mộc mạc, chân chất, tự nhiên, nguyên bản và những gỗ dùng để ủ cá – một biểu tượng của phương pháp sản xuất truyền thống và “Ngư” – chỉ cá, nguyên liệu chính làm nên nước mắm, đồng thời cũng gợi nhắc đến hình ảnh người ngư dân cần cù, gắn bó với biển cả. “Mộc Ngư” không chỉ là một cái tên mà còn là một tuyên ngôn về triết lý sản phẩm: mang đến những giọt nước mắm tinh túy nhất, được ủ chượp theo phương pháp truyền thống, không pha tạp, giữ trọn vẹn hương vị tự nhiên từ biển cả.</p>

      <h2>Tầm nhìn</h2>
      <p>Trở thành thương hiệu nước mắm truyền thống cao cấp hàng đầu Việt Nam, được tin dùng bởi những người yêu ẩm thực và trân trọng giá trị văn hóa truyền thống.</p>

      <h2>Sứ mệnh</h2>
      <p>Gìn giữ và phát huy tinh hoa nghề làm nước mắm truyền thống Việt Nam, mang đến những sản phẩm chất lượng vượt trội, an toàn cho sức khỏe và góp phần nâng tầm giá trị nông sản Việt trên thị trường trong nước và quốc tế.</p>

      <h2>Giá trị cốt lõi</h2>
      <ul>
        <li><b>Truyền thống:</b> Kế thừa và phát huy những bí quyết ủ chượp lâu đời, tôn trọng quy trình tự nhiên.</li>
        <li><b>Tinh túy:</b> Chọn lọc nguyên liệu tươi ngon nhất, chắt chiu từng giọt nước mắm tinh khiết.</li>
        <li><b>Chân thật:</b> Minh bạch về nguồn gốc, quy trình sản xuất, không sử dụng phụ gia hay chất bảo quản.</li>
        <li><b>Bản sắc Việt:</b> Lồng ghép những giá trị văn hóa, hình ảnh làng nghề vào từng sản phẩm, từng câu chuyện.</li>
        <li><b>Bền vững:</b> Phát triển gắn liền với bảo vệ môi trường biển và nâng cao đời sống ngư dân.</li>
      </ul>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    © 2026 Nước Mắm Mộc Ngư
  </footer>

</body>
</html>