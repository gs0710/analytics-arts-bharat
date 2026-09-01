<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy New Year Box</title>
  <style>
    /* Basic styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #fafafa;
      overflow: hidden;
    }

    .container {
      text-align: center;
    }

    /* Box styles */
    .box {
      width: 200px;
      height: 200px;
      background: linear-gradient(135deg, #ff9a00, #ff2a6d);
      color: #fff;
      border-radius: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
      font-size: 1.2rem;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .box:hover {
      transform: scale(1.1);
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.6);
    }

    /* Message box styles */
    .message {
      margin-top: 20px;
      background: rgba(0, 0, 0, 0.8);
      border: 2px solidrgb(159, 151, 151);
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0px 0px 20px rgba(0, 255, 0, 0.5);
      animation: fadeIn 1s;
      color:white
    }

    .message.hidden {
      display: none;
    }

    canvas.hidden {
      display: none;
    }

    canvas {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 999;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <video id="box" autoplay loop muted>
      <source src="<?= base_url() ?>assets/gift.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div id="message" class="message hidden">
      <h1>🎉 Happy New Year 2024! 🎉</h1>
      <p>Wishing you a year filled with joy, success, and bug-free code! 💻🚀</p>
    </div>
  </div>
  <canvas id="confetti" class="hidden"></canvas>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const confettiCanvas = document.getElementById("confetti");
      const ctx = confettiCanvas.getContext("2d");
      const box = document.getElementById("box");
      const message = document.getElementById("message");

      // Configure canvas
      confettiCanvas.width = window.innerWidth;
      confettiCanvas.height = window.innerHeight;

      // Confetti settings
      const colors = ["#FF007A", "#7A00FF", "#00FF7A", "#FFD700", "#00D4FF"];

      // Function to create confetti
      function createConfetti() {
        return {
          x: Math.random() * confettiCanvas.width,
          y: Math.random() * confettiCanvas.height - confettiCanvas.height,
          size: Math.random() * 10 + 5,
          color: colors[Math.floor(Math.random() * colors.length)],
          speedX: Math.random() * 3 - 1.5,
          speedY: Math.random() * 5 + 2,
          rotation: Math.random() * 360,
        };
      }

      // Function to animate confetti
      function animateConfetti(confettis) {
        ctx.clearRect(0, 0, confettiCanvas.width, confettiCanvas.height);
        confettis.forEach((confetti, index) => {
          confetti.x += confetti.speedX;
          confetti.y += confetti.speedY;
          confetti.rotation += confetti.speedX;

          ctx.save();
          ctx.translate(confetti.x, confetti.y);
          ctx.rotate((confetti.rotation * Math.PI) / 180);
          ctx.fillStyle = confetti.color;
          ctx.fillRect(-confetti.size / 2, -confetti.size / 2, confetti.size, confetti.size);
          ctx.restore();

          if (confetti.y > confettiCanvas.height) {
            confettis.splice(index, 1);
          }
        });

        if (confettis.length > 0) {
          requestAnimationFrame(() => animateConfetti(confettis));
        }
      }

      // Event listener for the box
      box.addEventListener("click", () => {
        // Hide the video and show the confetti and message
        box.style.display = "none"; // Hide the video
        confettiCanvas.classList.remove("hidden"); // Show canvas
        message.classList.remove("hidden"); // Show message

        // Create a new array of confetti each time the box is clicked
        const confettis = [];
        for (let i = 0; i < 200; i++) {
          confettis.push(createConfetti());
        }

        animateConfetti(confettis);

        // Hide message and confetti after 10 seconds
        setTimeout(() => {
          message.classList.add("hidden"); // Hide message
          confettiCanvas.classList.add("hidden"); // Hide canvas
          box.style.display = "flex"; // Show the video again
        }, 8000); // 5 seconds
      });
    });
  </script>
</body>
</html>
