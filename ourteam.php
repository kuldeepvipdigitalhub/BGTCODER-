<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.team-slider {
  position: relative;
  display: flex;
  overflow-x: hidden;
}

.team-member {
  position: relative;
  flex: 1 0 25%;
  margin: 0 10px;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.team-member img {
  width: 100%;
}

.member-info {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 20px;
  background-color: rgba(0, 0, 0, 0.7);
  color: #fff;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.team-member:hover .member-info {
  opacity: 1;
}

.prev-btn,
.next-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  padding: 10px;
  background-color: #fff;
  border: none;
  cursor: pointer;
  z-index: 1;
}

.prev-btn {
  left: 0;
}

.next-btn {
  right: 0;
}


    </style>
</head>
<body>
<div class="team-slider">
  <div class="team-member">
    <img src="kuldeep.jpg" alt="Team member 1">
    <div class="member-info">
      <h3>John Doe</h3>
      <p>CEO</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lectus elit. Pellentesque quis ultrices velit. Nam euismod blandit dolor, ac sodales leo bibendum vel. In hac habitasse platea dictumst.</p>
    </div>
  </div>
  <div class="team-member">
    <img src="kuldeep.jpg" alt="Team member 2">
    <div class="member-info">
      <h3>Jane Smith</h3>
      <p>COO</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lectus elit. Pellentesque quis ultrices velit. Nam euismod blandit dolor, ac sodales leo bibendum vel. In hac habitasse platea dictumst.</p>
    </div>
  </div>
  <div class="team-member">
    <img src="kuldeep.jpg" alt="Team member 3">
    <div class="member-info">
      <h3>Bob Johnson</h3>
      <p>CFO</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lectus elit. Pellentesque quis ultrices velit. Nam euismod blandit dolor, ac sodales leo bibendum vel. In hac habitasse platea dictumst.</p>
    </div>
  </div>
  <div class="team-member">
    <img src="kuldeep.jpg" alt="Team member 1">
    <div class="member-info">
      <h3>John Doe</h3>
      <p>CEO</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lectus elit. Pellentesque quis ultrices velit. Nam euismod blandit dolor, ac sodales leo bibendum vel. In hac habitasse platea dictumst.</p>
    </div>
  </div>
  <div class="team-member">
    <img src="kuldeep.jpg" alt="Team member 2">
    <div class="member-info">
      <h3>Jane Smith</h3>
      <p>COO</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lectus elit. Pellentesque quis ultrices velit. Nam euismod blandit dolor, ac sodales leo bibendum vel. In hac habitasse platea dictumst.</p>
    </div>
  </div>
  <div class="team-member">
    <img src="kuldeep.jpg" alt="Team member 3">
    <div class="member-info">
      <h3>Bob Johnson</h3>
      <p>CFO</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec lectus elit. Pellentesque quis ultrices velit. Nam euismod blandit dolor, ac sodales leo bibendum vel. In hac habitasse platea dictumst.</p>
    </div>
  </div>
</div>

<button class="prev-btn">Previous</button>
<button class="next-btn">Next</button>


<script>
const slider = document.querySelector('.team-slider');
const members = document.querySelectorAll('.team-member');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let position = 0;

nextBtn.addEventListener('click', () => {
  position -= 1;
  updateSliderPosition();
});

prevBtn.addEventListener('click', () => {
  position += 1;
  updateSliderPosition();
});

function updateSliderPosition() {
  slider.style.transform = `translateX(${position * 100}%)`;
}

</script> 
</body>
</html>