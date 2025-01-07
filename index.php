<!-- -------------------------------- PHP ---------------------------------------------------------------------------->
<?php
// FTP connection details
$ftp_server = "185.124.136.124";
$ftp_username = "u415861906.infosec2221";
$ftp_password = "kmziWz?26&P[[uJ3";


// Image path on the FTP server
$topImagePath= "header.png";
$iconImage= "alinanikIcon.png";
$backgroundImg = "bgImage.png";
$crybabyImg = "crybaby_img.png";
$dimooImg = "dimoo_img.png";
$hironoImg = "hirono_img.png";
$kuboImg = "kubo_img.png";
$labubuImg = "labubu_img.png";
$mofusandImg = "mofusand_img.png";
$nyotaImg = "nyota_img.png";
$skullpandaImg = "skullpanda_img.png";
$smiskiImg = "smiski_img.png";
$sonnyAngleImg = "sonnyAngel_img.png";


// Database connection details derived from connect.php
$servername = "localhost";  
$username = "u415861906_infosec2221"; 
$password = "kmziWz?26&P[[uJ3";  
$dbname = "u415861906_infosec2221"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
try {
    // Create a new MySQLi connection
    $conns = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conns->connect_error) {
        throw new Exception("Database connection failed: " . $conns->connect_error);
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

// Close the connection
$conn->close();

// Test database connection
$conns = new mysqli($servername, $username, $password, $dbname);
if ($conns->connect_error) {
    die("Database connection failed: " . $conns->connect_error);
}

$sql = "SELECT question_id, question_text, choice_a, choice_b, choice_c, choice_d FROM questions";
$resultsql = $conns-> query($sql);
?>

<!-- -------------------------------- STYLE ---------------------------------------------------------------------------->
<style>
    /* Styling for the image */
    .centered-image {
            width: 100%;                 /* Set width to 100% of its container */
            height: auto;                /* Auto-adjust the height to maintain the aspect ratio */
            object-fit: cover;           /* Ensure the image maintains aspect ratio and fills the box */
            margin-top: 75px;             /* Add 50px margin above the image */
            margin-bottom: 25px;          /* Add 50px margin below the image */
        }

        /* Optional: Add a container that scales responsively */
        .image-container {
            width: 100%;                 /* Make the container width responsive */
            max-width: 1500px;           /* Set a maximum width */
            height: auto;                /* Allow height to adjust based on image's aspect ratio */
            display: flex;               /* Use flexbox to center content */
            justify-content: center;
            align-items: center;
            margin: 0 auto;              /* Center the image container */
        }

        .centered-paragraph {
            text-align: center; /* Center the text horizontally */
            font-size: 18px; /* Optional: Adjust the font size */
            color: #333; /* Optional: Change the text color */
            margin-top: 28px; /* Optional: Add top margin */
            color: #170D0D;
            font-family: "Open Sans", sans-serif;
            font-style: normal;
            font-weight: 400;
            line-height: 142%;
            letter-spacing: -1px;
        }

        .last-paragraph {
            margin-bottom: 120px;
        }


        
        /* Apply margin for all elements */
        body {
            margin-left: 300px;
            margin-right: 300px;
            background-size: cover;    /* Makes sure the image covers the whole page */
            background-position: center; /* Centers the image */
            background-attachment: fixed; /* Keeps the image fixed during scroll */
        }
        

        /* Styling for h1 (questions) */
        h1 {
            color: #9A0202;
            font-family: Oranienbaum, serif;
            font-size: 30px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            letter-spacing: -1.2px;
        }

        /* Styling for h2 (choices) */
        h2 {
            color: #170D0D;
            font-family: "Open Sans", sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 142%;
            letter-spacing: -1px;
            margin-left: 20px; /* Adds spacing to align choices */
        }

        /* Container styling */
        .question {
            margin-bottom: 10px;
            margin-top: -5px;
        }

        .choice {
            display: flex;
            align-items: center;
            margin-bottom: -1.2px;
        }

        .choice input {
            margin-left: 30px; /* Aligns radio button with the same margin as the choices */
        }

        .submit-button {
            background-color: #9A0202; /* Red color */
            color: white;
            font-family: "Open Sans", sans-serif;
            font-weight: bold;
            font-size: 16px;
            padding: 15px 50px;
            margin-top: 15px;
            margin-bottom: 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect for the button */
        .submit-button:hover {
            background-color: #310404; /* Darker red on hover */
        }

        /* Styling for the panel */
        .panel {
            width: 1000px; /* Set width */
            height: 562.5px; /* Set height */
            background-color: white; /* White background */
            border: 2px solid black; /* Black border */
            display: flex;
            justify-content: center; /* Center the image horizontally */
            align-items: center; /* Center the image vertically */
            box-sizing: border-box; /* Includes padding and border in the element's total size */
            margin-bottom: 20px;
        }

        /* Styling for the image */
        .panel img {
            max-width: 100%; /* Ensure image fits within the panel */
            max-height: 100%;
        }

        /* Styling for the text above the panel */
        .title {
            font-family: "Oranienbaum", serif; /* Optional: set a font */
            font-weight: bold;
            font-size: 24px; /* Adjust the size as needed */
            color: #9A0202; /* Red color */
            text-align: center; /* Center align the text */
            margin-bottom: 20px; /* Space between the text and the panel */
        }

        /* Styling for the subtitle */
        .subtitle {
            color: #170D0D;
            font-family: "Open Sans";
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 142%; /* 28.4px */
            letter-spacing: -1px;
            margin-left: 20px; /* Adds spacing to align choices */
        }

        

         /* Styling for the container of text field and button */
        .container {
            display: flex;
            align-items: center;
            gap: 10px; /* Space between the text field and button */
            margin-left: 10px;
            margin-bottom: 100px;
        }

        /* Styling for the text field */
        .email-input {
            width: 383px; /* Set the width */
            height: 40px; /* Set a consistent height */
            flex-shrink: 0; /* Prevent shrinking */
            padding: 0 15px; /* Horizontal padding */
            font-size: 16px;
            border: 2px solid #000000;
            border-radius: 3px;
            box-sizing: border-box; /* Ensure padding is included in height */
        }

        /* Styling for the placeholder text inside the input */
        .email-input::placeholder {
            color: #7F7777;
            font-size: 16px;
        }

        .submit-button2 {
            background-color: #9A0202; /* Red color */
            color: white;
            font-family: "Open Sans", sans-serif;
            font-weight: bold;
            font-size: 16px;
            height: 40px; /* Set a consistent height */
            padding: 0 25px; /* Horizontal padding */
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center; /* Center text vertically */
            justify-content: center; /* Center text horizontally */
        }

        /* Hover effect for the button */
        .submit-button2:hover {
            background-color: #310404; /* Darker red on hover */
        }
</style>
<!-- -------------------------------- SCRIPT ---------------------------------------------------------------------------->
<script>
</script>
<!-- -------------------------------- HTML ---------------------------------------------------------------------------->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo $iconImage; ?>" />
    <title>ALIN-ANIK by POPMARK</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&family=Oranienbaum&display=swap" rel="stylesheet">
</head>



<body style="background-image: url('<?php echo $backgroundImg; ?>');">
    <img src="<?php echo $topImagePath; ?>" alt="Header Image" class="centered-image">
    <p class="centered-paragraph">Filipinos are known to be sentimental and maximalist. We always find happiness and pleasure in small simple yet meaningful objects, fueling our eagerness and love for collecting different kinds of these so-called “anik-anik” and filling up every empty space. With the Anik-anik Culture combined with the rise of the trendy random designer toy culture brought by Pop Mart, are you curious about your ‘inner blind box figure’ personality?  </p>
    <p class="centered-paragraph">Discover and unbox your inner blind box figure personality with Alin Anik?—a web application personality quiz created by the group, Pop Mark!, based on the popular collectible random blind box figures of Pop Mart.  </p>
    <p class="centered-paragraph last-paragraph">Starting from the glowy Smiskis, trendsetter Sonny Angels, mysterious Hironos, laid-back Kubos, fluffy Mofusands, softie Crybabies, mischief Labubus, dreamy Dimoos, curious Nyotas to the enigmatic Skullpandas, take the quiz to find out your inner blind box figure personality!</p>


    <form method= "POST" onsubmit="return validateInput()">
    <?php
    if ($resultsql->num_rows > 0) {
        while ($row1 = $resultsql->fetch_assoc()) {
            echo '<div class="question">';
            echo '<h1>' . htmlspecialchars($row1['question_id']) . '. ' . htmlspecialchars($row1['question_text']) . '</h1>';
            echo '<div class="choice"><input type="radio" name="q' . htmlspecialchars($row1['question_id']) . '" value="A"><h2>A. ' . htmlspecialchars($row1['choice_a']) . '</h2></div>';
            echo '<div class="choice"><input type="radio" name="q' . htmlspecialchars($row1['question_id']) . '" value="B"><h2>B. ' . htmlspecialchars($row1['choice_b']) . '</h2></div>';
            echo '<div class="choice"><input type="radio" name="q' . htmlspecialchars($row1['question_id']) . '" value="C"><h2>C. ' . htmlspecialchars($row1['choice_c']) . '</h2></div>';
            echo '<div class="choice"><input type="radio" name="q' . htmlspecialchars($row1['question_id']) . '" value="D"><h2>D. ' . htmlspecialchars($row1['choice_d']) . '</h2></div>';
            echo '</div>';
        }
    }
    ?>
    <button type="submit" class="submit-button">Submit</button>
    <input type="hidden" id="responses" name="responses">
    </form>

    <script>
        // VALIDATE IF ALL QUESTIONS ARE ANSWERED
        function validateInput() {
            // Collect all answers
            const responses = {};
            const questions = document.querySelectorAll('.question');

            // Loop through questions to check if all are answered
            for (let question of questions) {
                const questionId = question.querySelector('input[type="radio"]').name.replace('q', ''); // Extract question_id
                const selectedChoice = question.querySelector('input[type="radio"]:checked')?.value;

                if (!selectedChoice) {
                    alert("Please answer all questions before submitting.");
                    return false; // Prevent form submission
                }

                responses[questionId] = selectedChoice; // Store answers in an object
            }

            // Store responses in hidden fields to pass them to the server
            document.getElementById('responses').value = JSON.stringify(responses);
            return true; // Allow form submission

        }
    </script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Decode the responses from the POST request
    if (isset($_POST['responses'])) {
        $responses = json_decode($_POST['responses'], true);

        // Debug: Print the responses (this will display the decoded data)
        echo "<pre>";
        print_r($responses);
        echo "</pre>";

        // Check if decoding was successful
        if (!$responses) {
            echo "Error: Failed to decode JSON responses.<br>";
            exit;
        }

        // Step 1: Get the last response_id from the database or set it to 1 if the table is empty
        $query = "SELECT MAX(response_id) AS max_id FROM responses";
        $result = $conns->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $response_id = $row['max_id'] ? $row['max_id'] + 1 : 1; // Increment max_id or start from 1 if empty
        } else {
            echo "Error: Failed to fetch last response_id.<br>";
            exit;
        }

        // Step 2: Insert each response into the database
        foreach ($responses as $question_id => $selected_choice) {
            // Debug: Print current question_id and selected_choice
            echo "Inserting response for question_id: $question_id, selected_choice: $selected_choice with response_id: $response_id<br>";

            if (empty($question_id) || empty($selected_choice)) {
                echo "Error: Invalid data for question $question_id<br>";
                continue;
            }

            // Prepare the SQL statement (response_id is constant for the submission)
            $stmt = $conns->prepare("INSERT INTO responses (response_id, question_id, selected_choice) VALUES (?, ?, ?)");

            if (!$stmt) {
                echo "Error: Failed to prepare SQL statement.<br>";
                echo "MySQL error: " . $conns->error . "<br>";
                continue;
            }

            // Bind parameters: response_id (integer), question_id (integer), selected_choice (string)
            $stmt->bind_param("iis", $response_id, $question_id, $selected_choice);

            // Execute the statement
            if (!$stmt->execute()) {
                echo "Error: Failed to insert response for question $question_id.<br>";
                echo "MySQL error: " . $stmt->error . "<br>";
            } else {
                echo "Successfully inserted response for question $question_id.<br>";
            }
        }

        // Store the current response_id for future use
        $currentresponse = $response_id;

        // Step 3: Increment response_id after all responses for this submission are inserted
        $response_id++; // Increment response_id after all entries for this submission are inserted
    } else {
        echo "Error: Responses parameter is missing from the POST request.<br>";
    }
} else {
    echo "Error: This script only handles POST requests.<br>";
}
?>

<?php
// Sample point mapping structure (adjust it as needed)
$point_mapping = [
    '1' => [
        'A' => ['Sonny Angel' => 3, 'Nyota' => 2, 'Dimoo' => 1],
        'B' => ['Labubu' => 3, 'Skullpanda' => 2, 'Crybaby' => 1],
        'C' => ['Kubo' => 3, 'Dimoo' => 2, 'Mofusand' => 1],
        'D' => ['Hirono' => 3, 'Skullpanda' => 2, 'Smiski' => 1],
    ],
    '2' => [
        'A' => ['Mofusand' => 3, 'Kubo' => 2, 'Smiski' => 1],
        'B' => ['Smiski' => 3, 'Labubu' => 2, 'Sonny Angel' => 1],
        'C' => ['Skullpanda' => 3, 'Hirono' => 2, 'Nyota' => 1],
        'D' => ['Dimoo' => 3, 'Crybaby' => 2, 'Kubo' => 1],
    ],
    '3' => [
        'A' => ['Skullpanda' => 3, 'Labubu' => 2, 'Kubo' => 1],
        'B' => ['Hirono' => 3, 'Kubo' => 2, 'Labubu' => 1],
        'C' => ['Nyota' => 3, 'Mofusand' => 2, 'Crybaby' => 1],
        'D' => ['Dimoo' => 3, 'Smiski' => 2, 'Sonny Angel' => 1],
    ],
    // Question 4
    '4' => [
        'A' => ['Crybaby' => 3, 'Nyota' => 2, 'Skullpanda' => 1],
        'B' => ['Mofusand' => 3, 'Hirono' => 2, 'Smiski' => 1],
        'C' => ['Labubu' => 3, 'Sonny Angel' => 2, 'Hirono' => 1],
        'D' => ['Dimoo' => 3, 'Kubo' => 2, 'Skullpanda' => 1],
    ],
    // Question 5
    '5' => [
        'A' => ['Dimoo' => 3, 'Kubo' => 2, 'Crybaby' => 1],
        'B' => ['Nyota' => 3, 'Mofusand' => 2, 'Sonny Angel' => 1],
        'C' => ['Labubu' => 3, 'Sonny Angel' => 2, 'Mofusand' => 1],
        'D' => ['Skullpanda' => 3, 'Hirono' => 2, 'Smiski' => 1],
    ],
    // Question 6
    '6' => [
        'A' => ['Smiski' => 3, 'Dimoo' => 2, 'Crybaby' => 1],
        'B' => ['Labubu' => 3, 'Hirono' => 2, 'Skullpanda' => 1],
        'C' => ['Kubo' => 3, 'Skullpanda' => 2, 'Crybaby' => 1],
        'D' => ['Nyota' => 3, 'Sonny Angel' => 2, 'Mofusand' => 1],
    ],
    // Question 7
    '7' => [
        'A' => ['Labubu' => 3, 'Sonny Angel' => 2, 'Smiski' => 1],
        'B' => ['Hirono' => 3, 'Nyota' => 2, 'Kubo' => 1],
        'C' => ['Skullpanda' => 3, 'Nyota' => 2, 'Mofusand' => 1],
        'D' => ['Dimoo' => 3, 'Crybaby' => 2, 'Mofusand' => 1],
    ],
    // Question 8
    '8' => [
        'A' => ['Kubo' => 3, 'Dimoo' => 2, 'Crybaby' => 1],
        'B' => ['Sonny Angel' => 3, 'Smiski' => 2, 'Skullpanda' => 1],
        'C' => ['Mofusand' => 3, 'Hirono' => 2, 'Crybaby' => 1],
        'D' => ['Nyota' => 3, 'Labubu' => 2, 'Hirono' => 1],
    ],
    // Question 9
    '9' => [
        'A' => ['Hirono' => 3, 'Sonny Angel' => 2, 'Kubo' => 1],
        'B' => ['Crybaby' => 3, 'Dimoo' => 2, 'Labubu' => 1],
        'C' => ['Labubu' => 3, 'Dimoo' => 2, 'Crybaby' => 1],
        'D' => ['Skullpanda' => 3, 'Smiski' => 2, 'Nyota' => 1],
    ],
    // Question 10
    '10' => [
        'A' => ['Hirono' => 3, 'Kubo' => 2, 'Skullpanda' => 1],
        'B' => ['Nyota' => 3, 'Kubo' => 2, 'Crybaby' => 1],
        'C' => ['Sonny Angel' => 3, 'Labubu' => 2, 'Crybaby' => 1],
        'D' => ['Dimoo' => 3, 'Smiski' => 2, 'Mofusand' => 1],
    ],
    // Question 11
    '11' => [
        'A' => ['Kubo' => 3, 'Hirono' => 2, 'Sonny Angel' => 1],
        'B' => ['Nyota' => 3, 'Labubu' => 2, 'Smiski' => 1],
        'C' => ['Mofusand' => 3, 'Crybaby' => 2, 'Dimoo' => 1],
        'D' => ['Hirono' => 3, 'Kubo' => 2, 'Skullpanda' => 1],
    ],
    // Question 12
    '12' => [
        'A' => ['Kubo' => 3, 'Dimoo' => 2, 'Smiski' => 1],
        'B' => ['Labubu' => 3, 'Mofusand' => 2, 'Smiski' => 1],
        'C' => ['Hirono' => 3, 'Sonny Angel' => 2, 'Skullpanda' => 1],
        'D' => ['Crybaby' => 3, 'Nyota' => 2, 'Mofusand' => 1],
    ],
    // Question 13
    '13' => [
        'A' => ['Smiski' => 3, 'Kubo' => 2, 'Nyota' => 1],
        'B' => ['Labubu' => 3, 'Hirono' => 2, 'Sonny Angel' => 1],
        'C' => ['Dimoo' => 3, 'Mofusand' => 2, 'Crybaby' => 1],
        'D' => ['Skullpanda' => 3, 'Labubu' => 2, 'Nyota' => 1],
    ],
    // Question 14
    '14' => [
        'A' => ['Smiski' => 3, 'Nyota' => 2, 'Hirono' => 1],
        'B' => ['Sonny Angel' => 3, 'Nyota' => 2, 'Skullpanda' => 1],
        'C' => ['Mofusand' => 3, 'Labubu' => 2, 'Sonny Angel' => 1],
        'D' => ['Dimoo' => 3, 'Mofusand' => 2, 'Smiski' => 1],
    ],
    // Question 15
    '15' => [
        'A' => ['Crybaby' => 3, 'Dimoo' => 2, 'Mofusand' => 1],
        'B' => ['Skullpanda' => 3, 'Hirono' => 2, 'Sonny Angel' => 1],
        'C' => ['Dimoo' => 3, 'Nyota' => 2, 'Kubo' => 1],
        'D' => ['Labubu' => 3, 'Sonny Angel' => 2, 'Smiski' => 1],
    ],
];

//Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the responses are set in the POST request
    if (isset($_POST['responses'])) {
        //Decode the responses from the POST request
        $responses = json_decode($_POST['responses'], true);

        //Check if decoding was successful
        if (!$responses) {
            echo "Error: Failed to decode JSON responses.<br>";
            exit;
        }

        //Initialize an array to store personality points
        $personality_points = [
            'Sonny Angel' => 0,
            'Nyota' => 0,
            'Dimoo' => 0,
            'Labubu' => 0,
            'Kubo' => 0,
            'Hirono' => 0,
            'Skullpanda' => 0,
            'Crybaby' => 0,
            'Mofusand' => 0,
            'Smiski' => 0,
        ];

        // Loop through the responses array to assign points
        foreach ($responses as $question_id => $selected_choice) {
            // Check if the question_id and selected_choice exist in the point mapping
            if (isset($point_mapping[$question_id][$selected_choice])) {
                // Loop through the players for this selected choice
                foreach ($point_mapping[$question_id][$selected_choice] as $personality => $points) {
                    // Add the points to the personality's total points
                    if (isset($personality_points[$personality])) {
                        $personality_points[$personality] += $points;
                    } else {
                        echo "Warning: Personality $personality not found in the points array.<br>";
                    }
                }
            } else {
                echo "Error: Invalid data for question_id $question_id and selected_choice $selected_choice.<br>";
            }
        }

        //Calculate the final personality
        $max_points = max($personality_points); // Find the highest score
        $top_personalities = array_keys($personality_points, $max_points); // Find all personalities with the highest score

        // Display results
        echo "<h3>Personality Points</h3>";
        echo "<pre>";
        print_r($personality_points);
        echo "</pre>";
        echo "<h3>Final Personality</h3>";

        if (count($top_personalities) === 1) {
            // Single highest-scoring personality
            $final_personality = $top_personalities[0];
            echo "Your personality is: " . $final_personality . " with a score of $max_points.<br>";
        } else {
            // Handle ties (multiple highest-scoring personalities)
            echo "Tie detected between: " . implode(", ", $top_personalities) . " with a score of $max_points.<br>";

            // Randomly select one personality from the tied list
            $final_personality = $top_personalities[array_rand($top_personalities)];
            echo "Randomly selected personality: " . $final_personality . ".<br>";
        }

        // Explicit echo for final personality
        echo "<h4>Your Personality Result:</h4>";
        echo $final_personality;
    } else {
        echo "Error: Responses parameter is missing from the POST request.<br>";
    }
} else {
    echo "Error: This script only handles POST requests.<br>";
}
?>

    <!-- Text above the panel -->
    <div class="title">Your Results!</div>

    <!-- Panel that displays the image -->
        <div class="panel">
    <!-- NO IMAGE YET-->
        <img src="default_img.png" alt="Header Image" class="centered-image">
        </div>


     <!-- Email Prompt -->
     <div class="subtitle">Want to save and get a copy of your results?</div>
    
     <!-- Container holding the text field and button -->
    <div class="container">
        <!-- Text field with placeholder -->
        <input type="email" class="email-input" placeholder="Enter your e-mail" />
        
        <!-- Submit button -->
        <button class="submit-button2">Yes, Please!</button>
    </div>
</body>
</html>