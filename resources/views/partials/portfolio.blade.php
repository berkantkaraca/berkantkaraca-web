<div class="section px-3 px-lg-4 pt-5" id="portfolio">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Projelerim</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">E-Ticaret Sitesi </h3>
                <div class="text-muted text-small">ASP .Net Core</div>
              </div>
            </div>
          </div>
          <div class="card-body px-3 py-2">

            <p>Modern mikroservis mimarisi ile geliştirilmiş e-ticaret platformudur. Projede CQRS (Command Query Responsibility Segregation), Mediator Pattern, Repository Pattern, Onion Architecture ve N-Layer Architecture gibi mimari tasarım desenleri kullanılmıştır.</p>

            <p><strong>Temel Özellikler:</strong> Platform, güvenli kayıt/giriş sistemi ve JWT token tabanlı kimlik doğrulama ile kullanıcı yönetimi sağlar. Kategori bazlı ürün listeleme, arama ve filtreleme özellikleri ile ürün yönetimi sunar. Dinamik sepet yönetimi ve Redis ile performanslı cache sistemi ile sepet işlemlerini optimize eder. Kupon kodları ile esnek indirim mekanizması ve kapsamlı yönetim arayüzü, istatistikler ve raporlama içeren admin paneli bulunur.</p>

            <p><strong>Güvenlik Özellikleri:</strong> Sistem, JWT Token Authentication ile güvenli oturum yönetimi, IdentityServer4 ile merkezi kimlik doğrulama servisi, CORS politikaları ile cross-origin güvenlik kontrolü, HTTPS/SSL ile güvenli veri iletimi ve role-based authorization ile rol bazlı yetkilendirme özelliklerini içerir.</p>

            <p>Mikroservis Yapısı:</p>
            <ul>
              <li><strong>API Gateway (Ocelot)</strong> => İstek yönlendirme</li>
              <li><strong>Identity Server</strong> => Kimlik doğrulama</li>
              <li><strong>Catalog</strong> => Ürün kataloğu</li>
              <li><strong>Discount</strong> => İndirim kuponları</li>
              <li><strong>Order</strong> => Sipariş yönetimi</li>
              <li><strong>Cargo</strong> => Kargo işlemleri</li>
              <li><strong>Basket</strong> => Sepet yönetimi</li>
              <li><strong>Comment</strong> => Ürün yorumları</li>
              <li><strong>Message</strong> => Mesajlaşma sistemi</li>
            </ul>

            <p>Kullanılan Teknolojiler:</p>
            <ul>
              <li><strong>Backend Framework:</strong> ASP.NET Core 6.0</li>
              <li><strong>Mimari:</strong> Mikroservis Mimarisi</li>
              <li><strong>API Gateway:</strong> Ocelot</li>
              <li><strong>Kimlik Yönetimi:</strong> IdentityServer4</li>
              <li><strong>Veritabanları:</strong>MongoDB (Catalog), Redis (Basket - NoSQL), MSSQL Server (Order, Cargo, Comment, Identity), PostgreSQL (Message)</li>
              <li><strong>ORM Teknolojileri:</strong> Entity Framework Core, Dapper</li>
              <li><strong>Container:</strong> Docker</li>
              <li><strong>Frontend:</strong> HTML5, CSS3, JavaScript, Bootstrap, Ajax</li>
            </ul>
            <a href="https://github.com/berkantkaraca/ECommerce" class="btn btn-primary" target="_blank">Projeyi incele</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
