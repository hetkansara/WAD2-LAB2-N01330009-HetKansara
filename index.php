<?php
include('includes/header.php');
?>

<div class="form-container">
    <h2>Signup Form</h2>
    <form method="POST" action="welcome.php">
        <label for="emailInput">Email address<span class="required">*</span></label>
        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" name="email" oninvalid="setCustomValidity('Enter valid email address')" oninput="setCustomValidity('')" required>
        <label for="firstNameInput">First Name<span class="required">*</span></label>
        <input type="text" class="form-control" id="firstNameInput" name="first_name" oninvalid="setCustomValidity('Enter valid firstname (Only alphabets, No Spaces, No Special characters, Min 3 & Max 30 characters)')" pattern="^[a-zA-Z]{3,30}$" oninput="setCustomValidity('')" required>
        <label for="lastNameInput">Last Name<span class="required">*</span></label>
        <input type="text" class="form-control" id="lastNameInput" name="last_name" oninvalid="setCustomValidity('Enter valid lastname (Only alphabets, No Spaces, No Special characters, Min 3 & Max 30 characters)')" pattern="^[a-zA-Z]{3,30}$" oninput="setCustomValidity('')" required>
        <label for="courseInput">Select Course<span class="required">*</span></label>
        <select class="form-control" id="courseInput" name="course" oninvalid="setCustomValidity('Please select a course')" oninput="setCustomValidity('')" required>
            <option selected value="" disabled>----Select a course----</option>
            <option value="Web Application Development">Web Application Development</option>
            <option value="Web Programming">Web Programming</option>
            <option value="Digital Design">Digital Design</option>
            <option value="Project Management">Project Management</option>
        </select>
        <label for="hobbyInput">Select Hobbies<span class="required">*</span> (Ctrl/Shift + Click to select multiple hobbies)</label>
        <select multiple class="form-control" id="hobbyInput" name="hobbies[]" oninvalid="setCustomValidity('Please select atleast one hobby')" oninput="setCustomValidity('')" required>
            <option>Listen to music</option>
            <option>Cooking</option>
            <option>Playing Video Games</option>
            <option>Watching Movies</option>
        </select>
        <label for="aboutInput">Tell me something about you<span class="required">*</span></label>
        <textarea class="form-control" id="aboutInput" rows="3" name="about" oninvalid="setCustomValidity('Please enter something about you')" oninput="setCustomValidity('')" required></textarea>
        <div class="checkbox-input">
            <input class="form-check-input" type="checkbox" id="subscribeInput" name="subscribe">
            <label class="form-check-label" for="subscribeInput">
                Subscribe to email updates
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
<?php
include('includes/footer.php');
?>