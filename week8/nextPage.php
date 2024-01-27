<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More About Me</title>
    <!-- Link your CSS styles if needed -->
</head>
<body>

<?php
// Lesson 1: Variables (PHP)
$phpName = "More about me!";

// Lesson 3: Arrays (PHP)
$phpInterests = array("Gaming", "Coding", "Traveling");
$phpSkills = array("JavaScript", "HTML", "CSS");

// Lesson 4: Superglobals (PHP)
$phpVersion = PHP_VERSION;

// Lesson 5: Functions (PHP)
function displayPageTitle($title)
{
    echo "<h3>$title</h3>";
}

// Lesson 6: Echo / Print (PHP)
echo "<h1>$phpName</h1>";
?>

<!-- Your HTML content -->
<ul id="interests-list">
    <?php
    // Lesson 3: Arrays (PHP)
    foreach ($phpInterests as $interest) {
        echo "<li>$interest</li>";
    }
    ?>
</ul>

<ul id="skills-list">
    <?php
    // Lesson 3: Arrays (PHP)
    foreach ($phpSkills as $skill) {
        echo "<li>$skill</li>";
    }
    ?>
</ul>

<div id="additionalInfo" style="display: none;">
    <p>This is additional information that gets revealed when the button is clicked.</p>
</div>

<button id="showMoreButton">Show More Information</button>

<?php
// Lesson 5: Functions (PHP)
displayPageTitle("Education");
?>
<p>Bachelor of Science in Information Technology<br>
    Asia Pacific College</p>

<?php
// Lesson 5: Functions (PHP)
displayPageTitle("IT Experience");
?>
<p>Python<br>
    Operating Systems(Linux)<br>
    HTML, CSS, JS</p>

<script>
    // Define and use your objects and functions here
    var additionalDetails = {
        interests: <?php echo json_encode($phpInterests); ?>,
        skills: <?php echo json_encode($phpSkills); ?>
    };

    console.log("Script executed");

    function displayAdditionalInfo() {
        // Use DOM manipulation to display additional information on the page
        var interestsList = document.getElementById("interests-list");
        if (interestsList) {
            interestsList.innerHTML = additionalDetails.interests.map(interest => `<li>${interest}</li>`).join('');
        } else {
            console.error("interests-list element not found");
        }

        var skillsList = document.getElementById("skills-list");
        if (skillsList) {
            skillsList.innerHTML = additionalDetails.skills.map(skill => `<li>${skill}</li>`).join('');
        } else {
            console.error("skills-list element not found");
        }
    }

    document.getElementById("showMoreButton").addEventListener("click", function () {
        // Get the hidden section element
        var additionalInfo = document.getElementById("additionalInfo");

        // Toggle the visibility of the hidden section
        if (additionalInfo) {
            if (additionalInfo.style.display === "none" || additionalInfo.style.display === "") {
                additionalInfo.style.display = "block";
            } else {
                additionalInfo.style.display = "none";
            }
        }
    });

    // Call the function when the page loads
    window.onload = displayAdditionalInfo;
</script>
</body>
</html>