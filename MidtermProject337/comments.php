<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Comments</title>
    <style>
        .message {
            font-size: 24px;
            color: #333;
            margin: 20px 0;
            display: none;
        }
        #commentSection {
            display: block;
           
        }
        .main-title {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .form-label {
            text-align: left;
            padding-right: 15px;
            margin-bottom: 0;
            line-height: 38px;
        }
        .form-group {
            display: flex;
            margin-bottom: 1rem;
            align-items: flex-start;
        }
        .form-group label {
            width: 120px;
            flex-shrink: 0;
        }
        .form-group .form-control {
            flex-grow: 1;
        }
        textarea.form-control {
            margin-top: 8px;
        }
    </style>
</head>
<body>
<div class="menu"><?php include 'navbar.php';?></div>
    <div class="container-sm">
        
        <div id="errorMessage" class="message">
            <h2>Dear guest, please enter your comments.</h2>
        </div>

        <div id="genericThankYouMessage" class="message">
            <h2>Dear guest, thank you for your comments.</h2>
        </div>

        <div id="personalizedThankYouMessage" class="message">
            <h2 id="personalizedMessage"></h2>
        </div>

        
        <div id="commentSection">
            <h2 class="mb-4">We treasure your comments</h2>
            
            <form id="commentForm" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="tel" class="form-control" id="phone">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label" style="white-space: nowrap;">E-mail Address:</label>
                    <input type="email" class="form-control" id="email" 
                           placeholder="name@domain.com">
                </div>

                <div class="form-group">
                    <label for="comments" class="form-label" style="white-space: nowrap;">Your Comments:</label>
                    <textarea class="form-control" id="comments" rows="6" required></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label"></label>
                    <button type="submit" class="btn btn-primary">Submit Comments</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('commentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const comments = document.getElementById('comments').value.trim();
            
            const errorMessage = document.getElementById('errorMessage');
            const genericThankYouMessage = document.getElementById('genericThankYouMessage');
            const personalizedThankYouMessage = document.getElementById('personalizedThankYouMessage');
            const personalizedMessage = document.getElementById('personalizedMessage');
            const commentSection = document.getElementById('commentSection');

            
            errorMessage.style.display = 'none';
            genericThankYouMessage.style.display = 'none';
            personalizedThankYouMessage.style.display = 'none';
            
            
            if (!name && !phone && !email && !comments) {
                errorMessage.style.display = 'block';
                commentSection.style.display = 'none';
                return;
            }

            
            if (comments) {
               
                if (name) {
                    personalizedMessage.textContent = `Dear ${name}, thank you for your comments.`;
                    personalizedThankYouMessage.style.display = 'block';
                }
                
                else if (email) {
                    personalizedMessage.textContent = `Dear ${email}, thank you for your comments.`;
                    personalizedThankYouMessage.style.display = 'block';
                }
                
                else {
                    genericThankYouMessage.style.display = 'block';
                }
                commentSection.style.display = 'none';
                return;
            }

            
            if (!comments) {
                this.classList.add('was-validated');
            }
        });
    </script>
</body>
</html>