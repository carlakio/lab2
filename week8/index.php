<!DOCTYPE html>
<html>
<head>
  <title>Hi I'm Carl</title>
  <link rel="icon" href="killuaicon.jpg" type="jpg/killuaicon.jpg">
  <style>
    body {
      font-family: Tisa;
      background-image: url("tenor.gif");
      background-size: auto;
      background-repeat: repeat;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    table {
      width: 700px;
      border: 1px solid black;
    }

    th {
      color: blue;
      font-weight: bold;
      font-size: 30px;
      background-color: white;
      padding: 10px;
    }

    table td {
      color: white;
      text-shadow: 1px 1px 2px black;
    }

    #profile-pic-container {
      width: 300px;
      height: 300px;
      overflow: hidden;
    }

    #slideshow-image {
      transition: opacity 0.5s ease-in-out;
    }

    /* Hide additional details by default */
    #more-details {
      display: none;
      margin-top: 10px;
    }

    /* Style for the "Show More" button */
    #show-more-btn {
      background-color: lightblue;
      color: white;
      padding: 10px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
      transition: background-color 0.3s ease-in-out;
    }

    #show-more-btn:hover {
      background-color: darkblue;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <td rowspan="2">
        <div id="profile-pic-container">
          <img id="slideshow-image" alt="Slideshow Image" width="100%">
        </div>
      </td>
      <th width="400px" height="50px">Who am I</th>
    </tr>
    <tr>
      <td>
        <ul>
          <li><strong>Name:</strong> Carl Louise Akio P. Agot</li>
          <li><strong>Hobbies:</strong> Playing Basketball, Playing sports, Sleeping</li>
          
          <li><strong>Favorite Game:</strong> Valorant</li>
          <li><strong>Age:</strong> 19</li>
          <li><strong>Religion:</strong> Catholic</li>
        </ul>
        
        
        <button id="show-more-btn" onclick="toggleMoreDetails()">Show More</button>
		<button onclick="goToNextPage()">Go to Next Page</button>
		
        
        
        <div id="more-details">
          <ul>
            <li><strong>Education:</strong> Currently studying Information of Technology at Asia Pacific College</li>
            <li><strong>Goals:</strong> Graduate, find a passionate job, and bring happiness to family</li>
			<li><strong>Experience:</strong> Slightly knowledgeable about Python and HTML. Also knows something about Computers specifically specifications about PC building.</li>
          </ul>
        </div>
      </td>
    </tr>
    <tr>
      <th colspan="2" height="50px">About me</th>
    </tr>
    <tr>
      <td colspan="2">
        <p>I chose this course because of my love for computers. I always wanted to know everything about computers as well as code websites. What are my goals in life? I want to graduate and have a job that I'm passionate about. I also want to be successful in life to give my parents and loved ones a happy life.</p>
      </td>
    </tr>
    <tr>
      <th colspan="2" height="50px">Socials</th>
    </tr>
    <tr>
      <td colspan="2">
        <p>Links to my socials</p>
        <ul>
          <li><a href="https://www.facebook.com/carl.agot.52/">Facebook</a></li>
          <li><a href="https://github.com/carlakio">Github</a></li>
        </ul>
      </td>
    </tr>
  </table>

  <script>
    var imageSources = ["profilepic.jpg", "basketballpic.jpg", "thirdpic.jpg"];
    var currentImageIndex = 0;

    function updateImage() {
      var image = document.getElementById("slideshow-image");
      image.style.opacity = 0;
      
      setTimeout(function () {
        image.src = imageSources[currentImageIndex];
        image.style.opacity = 1;
        currentImageIndex = (currentImageIndex + 1) % imageSources.length;
      }, 500);
    }

    function toggleMoreDetails() {
      var moreDetails = document.getElementById("more-details");
      var buttonText = document.getElementById("show-more-btn");

      if (moreDetails.style.display === "none") {
        moreDetails.style.display = "block";
        buttonText.innerText = "Show Less";
      } else {
        moreDetails.style.display = "none";
        buttonText.innerText = "Show More";
      }
    }
	function goToNextPage() {
    // Change the URL to the path of your blank HTML page
    window.location.href = "nextPage.php";
  }

    setInterval(updateImage, 2000);
	
	
  </script>
</body>
</html>

