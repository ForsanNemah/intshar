<section class="process-section mt-4">
  <div class="container">
    <h2 class="process-title">
      خطوات العلاج
    </h2>
    <div class="process-wrapper">
      <div class="process">
        <div class="process-icon">
          <img src="images/process1.png" alt="Process 1 Icon">
        </div>
        <h3 class="process-name">الاتصال</h3>
        <p class="process-description">
          اتصل بنا ليتمكن خبراؤنا من التواصل معك بأسرع وقت
        </p>
      </div>
      <div class="process">
        <div class="process-icon">
          <img src="images/process2.png" alt="Process 2 Icon">
        </div>
        <h3 class="process-name">التشخيص</h3>
        <p class="process-description">
          يقوم أطبائنا بالتشخيص المناسب ووضع خطة علاجية متكاملة
        </p>
      </div>
      <div class="process">
        <div class="process-icon">
          <img src="images/process3.png" alt="Process 3 Icon">
        </div>
        <h3 class="process-name">الحجز</h3>
        <p class="process-description">
          تحديد موعد لاستقبالكم في عيادتنا
        </p>
      </div>
      <div class="process">
        <div class="process-icon">
          <img src="images/process4.png" alt="Process 4 Icon">
        </div>
        <h3 class="process-name">بدأ العلاج</h3>
        <p class="process-description">
          إجراء العلاج المناسب للحالة بإشراف أطباؤنا المتخصصين
        </p>
      </div>
    </div>
  </div>
</section>

<style>
  .process-section {
    text-align: center;
  }
  .process-title {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
    color: green;
  }
  .process-wrapper {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }
  .process {
    text-align: center;
    margin-bottom: 40px;
    flex-basis: 23%;
  }
  .process-icon img {
    width: 80px;
    height: 80px;
    margin-bottom: 20px;
  }
  .process-name {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
    color: green;
  }
  .process-description {
    font-size: 16px;
  }

  @media (max-width: 767px) {
    .process-wrapper {
    flex-wrap: wrap;
  }
  .process {
    flex-basis: 100%;
  }
  }



  
</style>