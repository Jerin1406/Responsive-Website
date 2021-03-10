<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Rajagiri College</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="respstudent.php">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-xl-12">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img height="500" src="https://www.joonsquare.com/usermanage/image/business/rajagiri-college-of-social-sciences-ernakulam-14557/rajagiri-college-of-social-sciences-ernakulam-rajagiri-college-of-social-sciences-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img height="500" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAXPnDbNu7r_upfN4M_zMbEnNmRQTDGyu5IA&usqp=CAU" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img height="500" src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

        <div class="row">
            <div class="col col-12 col-md-6 col-xl-6">
                <table class="table table-borderless">
                    <tr>
                        <td>username</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">Submit</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-md-6 col-xl-6"><div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Rajagiri College
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Rajagiri College of Social Sciences (RCSS)</strong>, together with its sister educational concerns, owes its existence to the CMI (Carmelites of Mary Immaculate) fathers, the first ever indigenous religious congregation for men in the Syrian Catholic tradition of Christianity in India. The CMIs drawing inspiration from their founding father St. Kuriakose Elias Chavara, a great visionary, reformer and religious leader of the 19th century, have proven themselves worthy of that heritage in the field of education by establishing institutions of excellence imparting quality education, across the length and breadth of the State, and in various parts of India. At present, the CMIs manage a network of more than 800 Schools, 13 Special Schools, 41 Arts, Science, Commerce & Physical Education Colleges, 10 B.Ed. Colleges, 4 Nursing Colleges, 4 Engineering Colleges, one Medical College, one University, 3 Law Colleges, 6 Research Centres, 7 Technical Institutes, 41 Hostels & Boarding Houses, 17 Cultural Centres, 2 Super Speciality Hospitals and 114 Non-formal Education Centres.  
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Department of Computer Science
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Welcome to the MCA programme of Rajagiri College of Social Sciences, Hill Campus, Kalamassery.</strong>srong The three-year Master’s Degree Programme in Computer Applications(MCA)* was introduced by the college in 2001 to meet the growing demand for well qualified and trained computer programmers. The course is affiliated to Mahatma Gandhi University, Kottayam, Kerala, India, and approved by the All India Council for Technical Education, New Delhi. The school endeavours to bring out world-class professionals in the development and use of software for different applications.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div></div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>