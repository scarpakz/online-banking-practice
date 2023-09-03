    <?php
        if(isset($_SESSION['user_name']) && $_SESSION['role'] == 'customer') {
    ?>
        <div class="customer-feedback" id="openModalBtn">
            <div>
                <span data-aos="fade-up" data-aos-delay="2000">Customer Support</span>
            </div>
        </div>
    <?php }?>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>What's your concern?</h2>
            <textarea id="textAreaInput" rows="4" cols="50" placeholder="Enter text here..."></textarea>
            <button id="submitBtn">Submit</button>
        </div>
    </div>
    
    <footer>
        <div class="footer-text-content">
            All Rights Reserved 2023 | Kris Dale | Louie
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        // Get modal and button elements
        const modal = document.getElementById("myModal");
        const openModalBtn = document.getElementById("openModalBtn");
        const closeModalBtn = document.getElementById("closeModalBtn");
        const textAreaInput = document.getElementById("textAreaInput");
        const submitBtn = document.getElementById("submitBtn");

        // Open the modal when the button is clicked
        openModalBtn.addEventListener("click", () => {
            modal.style.display = "block";
        });

        // Close the modal when the close button is clicked
        closeModalBtn.addEventListener("click", () => {
            modal.style.display = "none";
        });

        // Close the modal when the user clicks outside of it
        window.addEventListener("click", (event) => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });

        // Handle form submission (you can replace this with your own logic)
        submitBtn.addEventListener("click", () => {
            const textValue = textAreaInput.value;
            alert(`You entered: ${textValue}`);
            modal.style.display = "none";
        });

    </script>
    <style>
        .customer-feedback {
            position: fixed;
            right: 0;
            cursor: pointer;
            bottom: 20%;
        }
        .customer-feedback :hover {
            background: #fffcd2;
        }
        .customer-feedback span {
            padding: 20px 30px;
            background: #eee107;
            border-radius: 10px 0 0 10px;
            font-weight: 600;
        }

        /* Styles for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .modal-content {
            background-color: #fff;
            margin: 20% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 5px;
            max-width: 50%;
        }

        .close {
            float: right;
            cursor: pointer;
        }

        /* Styles for the textarea and submit button */
        #textAreaInput {
            width: 100%;
            padding: 10px 0;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        #submitBtn {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

    </style>
    </body>
</html>