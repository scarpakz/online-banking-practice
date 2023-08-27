<?php include "../constant/header.php"; ?>

<div class="add-cust-container">
    <div class="add-cust-header">
        <h1 class="fl-1">Change Your PIN</h1>
        <a class="fl-1" href="../logout.php"> Sign Out</a>
    </div>
    <button class="m-lg text-white">< Back</button>
    <form action="" method="post">
        <div class="add-cust-form-group d-flex">
            <input type="text" id="PIN_ID" class="add-input" placeholder="" required>
        </div>
        <div class="add-cust-form-group">
            <input type="submit" value="Save Entry" class="save-entry">
        </div>
    </form>
</div>

<script>
const element = document.querySelector("#pin-btn")
element.addEventListener("click", generatePIN, false)

function generatePIN(event) {
    event.preventDefault()
    const pinElement = document.querySelector("#PIN_ID")
    pinElement.value = Math.floor(100000 + Math.random() * 900000)
}
</script>

<?php include "../constant/footer.php"; ?>