<?php include "includes/header.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    .dark-mode {
        background-color: #222;
        color: #fff;
    }
    .dark-mode .card, .dark-mode .btn {
        background-color: #333;
        color: #fff;
    }
</style>

<button class="btn btn-outline-secondary" onclick="toggleTheme()">Toggle Theme</button>

    <!-- Hero Section -->
    <section class="hero-section text-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Welcome to QuizPalette</h1>
            <p class="lead mb-5">Transforming education through interactive quizzes and comprehensive learning
                experiences</p>
            <a href="#our-mission" class="btn btn-warning btn-lg px-4 me-2"  data-aos="fade-up-right" data-aos-duration="1500">Our Mission</a>
            <a href="about.php" class="btn btn-warning btn-lg px-4 me-2"  data-aos="fade-up-left" data-aos-duration="1500">Meet the Team</a>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section id="our-mission" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold text-primary-custom mb-4">Our Mission</h2>
                    <p class="lead">To make learning engaging, accessible, and effective for students of all levels
                        through our innovative quiz platform.</p>
                    <p>At QuizPalette, we believe that education should be interactive, personalized, and available to
                        everyone. Our platform combines cutting-edge technology with pedagogical expertise to create a
                        learning experience that adapts to each student's needs.</p>
                    <a href="#" class="btn btn-warning btn-lg mt-3">Learn More</a>
                </div>
                <div class="col-lg-6" data-aos="slide-left" data-aos-duration="1500">
                    <img src="assets/images/car1.png"
                        alt="Students learning" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>


<!-- Total User & Quizzes Card Section -->
<div style="background-color:rgb(7, 95, 92); height: 400px; display: flex; align-items: center;">
    
    <div class="container" >
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-sm-6" data-aos="slide-up" data-aos-duration="1000">
                <div class="ds-stat-card text-center text-white">
                    <div class="ds-stat-icon mb-2">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="ds-stat-label fw-semibold">Total Users</div>
                    <div class="ds-stat-count fs-4" id="userCount">0</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6" data-aos="slide-up" data-aos-duration="1800">
                <div class="ds-stat-card text-center text-white">
                    <div class="ds-stat-icon mb-2">
                        <i class="fas fa-question-circle fa-2x"></i>
                    </div>
                    <div class="ds-stat-label fw-semibold">Total Quizzes</div>
                    <div class="ds-stat-count fs-4" id="quizCount">0</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Ongoing Categories  -->

<div class="container my-5" data-aos="fade-up" data-aos-duration="1500">
  <h3 class="text-center mb-4">Ongoing Quiz Categories</h3>
  <div class="row g-4 justify-content-center">

    <!-- JSC Card -->
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1650">
      <div class="card text-center shadow rounded-4 h-100 border-0">
        <div class="card-body">
          <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center"
            style="background-color: #FFC107; width: 70px; height: 70px;">
            <i class="fas fa-child fa-lg text-white"></i>
          </div>
          <h5 class="card-title mt-3">JSC</h5>
          <p class="card-text small">Practice quizzes and learn more for Junior School Certificate (JSC) students.</p>
          <a href="quizread.php" class="btn text-white px-4 py-2" style="background-color: #096B68;">Explore JSC</a>
        </div>
      </div>
    </div>

    <!-- SSC Card -->
    <div class="col-md-4"data-aos="fade-up" data-aos-duration="1850">
      <div class="card text-center shadow rounded-4 h-100 border-0">
        <div class="card-body">
          <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center"
            style="background-color: #FD7E14; width: 70px; height: 70px;">
            <i class="fas fa-user-graduate fa-lg text-white"></i>
          </div>
          <h5 class="card-title mt-3">SSC</h5>
          <p class="card-text small">Sharpen your skills with Secondary School Certificate (SSC) quizzes.</p>
          <a href="quizread.php" class="btn text-white px-4 py-2" style="background-color: #096B68;">Explore SSC</a>
        </div>
      </div>
    </div>

    <!-- HSC Card -->
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="2050">
      <div class="card text-center shadow rounded-4 h-100 border-0">
        <div class="card-body">
          <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center"
            style="background-color: #17A2B8; width: 70px; height: 70px;">
            <i class="fas fa-university fa-lg text-white"></i>
          </div>
          <h5 class="card-title mt-3">HSC</h5>
          <p class="card-text small">Challenge yourself with Higher Secondary Certificate (HSC) quiz sets.</p>
          <a href="quizread.php" class="btn text-white px-4 py-2" style="background-color: #096B68;">Explore HSC</a>
        </div>
      </div>
    </div>

    <!-- Math Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2250">
                <div class="card text-center shadow rounded-4 h-100 border-0" >
                    <div class="card-body">
                        <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center bg-primary bg-opacity-25" style="width: 70px; height: 70px;">
                            <i class="fas fa-square-root-alt fa-lg text-primary"></i>
                        </div>
                        <h5 class="card-title mt-3">Math</h5>
                        <p class="card-text small">Challenge your math skills with engaging quizzes.</p>
                        <a href="quizread.php" class="btn text-white px-4 py-2" style="background-color: #096B68; data-category="math">Explore Math</a>
                    </div>
                </div>
            </div>

            <!-- Admission Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2450">
                <div class="card text-center shadow rounded-4 h-100 border-0">
                    <div class="card-body">
                        <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center bg-info bg-opacity-25" style="width: 70px; height: 70px;">
                            <i class="fas fa-graduation-cap fa-lg text-info"></i>
                        </div>
                        <h5 class="card-title mt-3">Admission</h5>
                        <p class="card-text small">Prepare for university and college admission tests.</p>
                        <a href="quizread.php" class="btn text-white px-4 py-2" style="background-color: #096B68; data-category="admission">Read Quiz</a>
                    </div>
                </div>
            </div>


            <!-- Job Preparation Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2650">
                <div class="card text-center shadow rounded-4 h-100 border-0">
                    <div class="card-body">
                        <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center bg-success bg-opacity-25" style="width: 70px; height: 70px;">
                            <i class="fas fa-briefcase fa-lg text-success"></i>
                        </div>
                        <h5 class="card-title mt-3">Job Preparation</h5>
                        <p class="card-text small">Ace your job interviews with practice quizzes.</p>
                        <a href="exam.php" class="btn text-white px-4 py-2" style="background-color: #096B68; data-category="job">Take Quiz</a>
                    </div>
                </div>
            </div>

  </div>
</div>











<!-- Categories Section -->
<section id="quizzes" class="categories py-5" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <h2 class="text-center mb-5">Upcoming Quiz Categories</h2>
        <div id="quizList" class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1850">
                <div class="card h-100 shadow-sm quiz-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Math</h5>
                        <p class="card-text text-center">Challenge your math skills with engaging quizzes.</p>
                        <a href="exam.php" class="btn btn-success " data-category="math" >Take Quiz</a>
                        <!-- <a href="exam.php" class="btn btn-success take-quiz-btn" data-category="math" >Take Quiz</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="2350">
                <div class="card h-100 shadow-sm quiz-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Admission</h5>
                        <p class="card-text text-center">Prepare for university and college admission tests.</p>
                        <a href="quizread.php" class="btn btn-success " data-category="admission">Read Quiz</a>
                        <!-- <a href="quizread.php" class="btn btn-success take-quiz-btn" data-category="admission">Read Quiz</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="2550">
                <div class="card h-100 shadow-sm quiz-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Job Preparation</h5>
                        <p class="card-text text-center">Ace your job interviews with practice quizzes.</p>
                        <a href="quizread.php" class="btn btn-success " data-category="job">Take Quiz</a>
                        <!-- <a href="#" class="btn btn-success take-quiz-btn" data-category="job">Take Quiz</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Total User & Quizzes Card Section -->
<!-- <div style="background-color:rgb(7, 95, 92); height: 400px; display: flex; align-items: center;">
    <div class="container"> 
        <h2 class="text-center mb-5">We are proud to share our new targets</h2>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="ds-stat-card text-center text-white">
                    <div class="ds-stat-icon mb-2">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="ds-stat-label fw-semibold">Total Users</div>
                    <div class="ds-stat-count fs-4" id="userCount">0</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="ds-stat-card text-center text-white">
                    <div class="ds-stat-icon mb-2">
                        <i class="fas fa-question-circle fa-2x"></i>
                    </div>
                    <div class="ds-stat-label fw-semibold">Total Quizzes</div>
                    <div class="ds-stat-count fs-4" id="quizCount">0</div>
                </div>
            </div>
        </div>
      
    </div>
</div> -->




<!-- Why Us Section -->
<!-- <section id="why-us" class="why-us py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose Quiz Palette</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-shield-alt fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Trusted Platform</h5>
                        <p class="card-text">Join thousands of students across Bangladesh.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-book-open fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Engaging Learning</h5>
                        <p class="card-text">Interactive quizzes to boost your knowledge.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-chalkboard-teacher fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Expert Content</h5>
                        <p class="card-text">Quizzes crafted by top educators in Bangladesh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section id="why-us" class="why-us py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Why Choose Quiz Palette</h2>
    <div class="row">
      
      <!-- Trusted Platform Card -->
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1550">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body text-center">
            <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center"
              style="background-color: #FFC107; width: 80px; height: 80px;">
              <i class="fas fa-shield-alt fa-2x text-white"></i>
            </div>
            <h5 class="card-title mt-3">Trusted Platform</h5>
            <p class="card-text">Join thousands of students across Bangladesh.</p>
            <button class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalTrusted">Learn More</button>
          </div>
        </div>
      </div>

      <!-- Engaging Learning Card -->
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1850">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body text-center">
            <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center"
              style="background-color: #FD7E14; width: 80px; height: 80px;">
              <i class="fas fa-book-open fa-2x text-white"></i>
            </div>
            <h5 class="card-title mt-3">Engaging Learning</h5>
            <p class="card-text">Interactive quizzes to boost your knowledge.</p>
            <button class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalEngaging">Learn More</button>
          </div>
        </div>
      </div>

      <!-- Expert Content Card -->
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="2150">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body text-center">
            <div class="mb-3 mx-auto rounded-circle d-flex align-items-center justify-content-center"
              style="background-color: #17A2B8; width: 80px; height: 80px;">
              <i class="fas fa-chalkboard-teacher fa-2x text-white"></i>
            </div>
            <h5 class="card-title mt-3">Expert Content</h5>
            <p class="card-text">Crafted by top educators in Bangladesh.</p>
            <button class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalExpert">Learn More</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- modal  -->
 <!-- Modal: Trusted Platform -->
<div class="modal fade" id="modalTrusted" tabindex="-1" aria-labelledby="modalTrustedLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTrustedLabel">Trusted by Thousands</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Quiz Palette is trusted by students from all over Bangladesh. With verified content, performance tracking, and a commitment to education, we're proud to be a platform students rely on every day.
      </div>
    </div>
  </div>
</div>

<!-- Modal: Engaging Learning -->
<div class="modal fade" id="modalEngaging" tabindex="-1" aria-labelledby="modalEngagingLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEngagingLabel">Interactive & Fun Learning</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Say goodbye to boring revision! Quiz Palette turns study sessions into fun challenges, helping students learn faster and retain better through gamified quizzes, badges, and leaderboards.
      </div>
    </div>
  </div>
</div>

<!-- Modal: Expert Content -->
<div class="modal fade" id="modalExpert" tabindex="-1" aria-labelledby="modalExpertLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalExpertLabel">Content from Top Educators</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Our quizzes are crafted by top educators and examiners to match national curricula. Whether you're studying for JSC, SSC, or HSC — our content is always relevant, challenging, and up to date.
      </div>
    </div>
  </div>
</div>



<!-- Pricing Section -->
<section id="pricing" class="pricing py-5">
    <div class="container">
        <h2 class="text-center mb-5">Pricing Plans</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Basic</h5>
                        <p class="card-text display-6">৳299<span class="fs-6">/month</span></p>
                        <ul class="list-unstyled">
                            <li>Access to basic quizzes</li>
                            <li>Bronze badge eligibility</li>
                            <li>Standard support</li>
                        </ul>
                        <a href="subcription.php" class="btn btn-outline-success" data-plan="basic">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-body text-center">
                        <h5 class="card-title">Standard</h5>
                        <p class="card-text display-6">৳699<span class="fs-6">/month</span></p>
                        <ul class="list-unstyled">
                            <li>All quizzes included</li>
                            <li>Silver badge eligibility</li>
                            <li>Priority support</li>
                        </ul>
                        <a href="subcription.php" class="btn btn-outline-success" data-plan="basic">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Premium</h5>
                        <p class="card-text display-6">৳899<span class="fs-6">/month</span></p>
                        <ul class="list-unstyled">
                            <li>Unlimited quiz access</li>
                            <li>Gold badge eligibility</li>
                            <li>Exclusive content</li>
                        </ul>
                        <a href="subcription.php" class="btn btn-outline-success" data-plan="basic">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>


<script src="assets/js/scripts.js"></script>

<!-- total card section  -->

<script>
    function animateCount(id, target) {
        const el = document.getElementById(id);
        let count = 0;
        const step = Math.max(1, Math.ceil(target / 50));
        const interval = setInterval(() => {
            count += step;
            if (count >= target) {
                count = target;
                clearInterval(interval);
            }
            el.textContent = count + "+";
        }, 50);
    }
    

    animateCount("userCount", <?php echo $totalUsers; ?>);
    animateCount("quizCount", <?php echo $totalQuizzes; ?>);
</script>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
    function toggleTheme() {
        document.body.classList.toggle('dark-mode');
    }
</script>

</body>

</html>
<?php include "includes/footer.php" ?>
