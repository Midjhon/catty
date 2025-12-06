<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Maaf Ya Sayang 💗</title>

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #ff9a9e, #fad0c4);
        height: 100vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        background: rgba(255,255,255,0.85);
        padding: 40px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        animation: fadeIn 1.5s ease;
        width: 90%;
        max-width: 450px;
        backdrop-filter: blur(8px);
    }

    h1 {
        color: #ff5e7e;
        font-size: 2.2em;
        margin-bottom: 10px;
    }

    p {
        font-size: 1.1em;
        color: #555;
    }

    #heart {
        font-size: 50px;
        animation: beat 1s infinite;
        margin: 20px 0;
    }

    button {
        background: #ff5e7e;
        color: white;
        padding: 12px 22px;
        font-size: 1.1em;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
        margin: 10px;
    }

    button:hover {
        background: #ff2d55;
        transform: scale(1.05);
    }

    @keyframes beat {
        0% {transform: scale(1);}
        50% {transform: scale(1.2);}
        100% {transform: scale(1);}
    }

    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(20px);}
        to {opacity: 1; transform: translateY(0);}
    }

    /* Confetti */
    .confetti {
        position: fixed;
        width: 8px;
        height: 8px;
        background-color: #ff5e7e;
        animation: fall 3s linear infinite;
        opacity: 0.8;
    }

    @keyframes fall {
        to { transform: translateY(100vh) rotate(360deg); }
    }
</style>

<style>
    .popup-bg {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.4);
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(4px);
        opacity: 0;
        pointer-events: none;
        transition: 0.3s;
    }

    .popup-bg.active {
        opacity: 1;
        pointer-events: auto;
    }

    .popup-box {
        background: #fff;
        padding: 25px 30px;
        border-radius: 15px;
        text-align: center;
        max-width: 300px;
        animation: pop 0.4s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    @keyframes pop {
        0% { transform: scale(0.6); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }

    .popup-box h3 {
        margin: 0;
        color: #ff5e7e;
        font-size: 1.4em;
    }

    .popup-box p {
        margin-top: 10px;
        color: #555;
    }

    .close-btn {
        margin-top: 18px;
        background: #ff5e7e;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
    }

    .close-btn:hover {
        background: #ff2d55;
        transform: scale(1.05);
    }
</style>

<style>
    .photo-popup-bg {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.5);
        backdrop-filter: blur(5px);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        pointer-events: none;
        transition: 0.3s ease;
    }

    .photo-popup-bg.active {
        opacity: 1;
        pointer-events: auto;
    }

    .photo-container {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        padding: 20px;
        width: 80%;
        max-width: 400px;
    }

    .photo-container::-webkit-scrollbar {
        display: none;
    }

    .photo-item {
        flex: 0 0 auto;
        width: 220px;
        height: 220px;
        object-fit: cover;
        border-radius: 18px;
        scroll-snap-align: center;
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        opacity: 0;
        transform: scale(0.6);
        animation: popUp 0.6s forwards;
    }

    @keyframes popUp {
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .close-photo-btn {
        position: fixed;
        bottom: 30px;
        background: #ff5e7e;
        color: white;
        padding: 12px 25px;
        border-radius: 12px;
        border: none;
        font-size: 1.1em;
        cursor: pointer;
    }
</style>

<style>
    .love {
        position: absolute;
        font-size: 24px;
        color: #ff5e7e;
        opacity: 0;
        animation: loveFade 2s ease-in-out forwards;
    }

    @keyframes loveFade {
        0% { transform: scale(0.5); opacity: 0; }
        40% { transform: scale(1.2); opacity: 1; }
        70% { opacity: 1; }
        100% { transform: scale(0.8); opacity: 0; }
    }
</style>

</head>

<body>

<div class="card">
    <h1>Maafin Aku, Sayang 😞💗</h1>
    <div id="heart">💗</div>
    <p>
        Abangg bener-bener minta maaf sama Catt.<br>
        Abang nggak mau lihat Catt sedih gara-gara abangg.<br>
        Abang janji bakal lebih baik dan nggak ngulangin kesalahan yang sama.<br>
        Kasih abang satu kesempatan lagi ya Catt?
    </p>

    <button onclick="setuju()">Iya, aku maafin 💕</button>
    <button onclick="masihMarah()">Masih Marah 😢</button>
</div>

<div id="popup" class="popup-bg">
    <div class="popup-box">
        <h3 id="popup-title"></h3>
        <p id="popup-msg"></p>
        <button class="close-btn" onclick="closePop()">Oke 💗</button>
    </div>
</div>

<div id="photoPopup" class="photo-popup-bg">
    <div class="photo-container" id="photoContainer"></div>
    <button class="close-photo-btn" onclick="closePhotos()">Tutup 💗</button>
</div>

<script>
function randomConfetti() {
    for (let i = 0; i < 50; i++) {
        let conf = document.createElement("div");
        conf.classList.add("confetti");
        conf.style.left = Math.random() * window.innerWidth + "px";
        conf.style.backgroundColor = ["#ff5e7e", "#ff9a9e", "#fad0c4", "#ffc3a0"][Math.floor(Math.random()*4)];
        conf.style.animationDelay = Math.random() + "s";
        document.body.appendChild(conf);

        setTimeout(() => conf.remove(), 3000);
    }
}
</script>

<script>
function spawnLove() {
    const popup = document.getElementById("photoPopup");
    const love = document.createElement("div");
    love.className = "love";
    love.textContent = "💗";

    const x = Math.random() * 70 + 10;
    const y = Math.random() * 60 + 20;

    love.style.left = x + "%";
    love.style.top = y + "%";
    popup.appendChild(love);

    setTimeout(() => love.remove(), 2000);
}
</script>

<script>
let loveInterval;

function showPhotos() {
    const popup = document.getElementById("photoPopup");
    const container = document.getElementById("photoContainer");

    const photos = ["kamu1.jpeg", "kamu2.jpeg", "kamu3.jpeg", "kita1.jpeg", "kita2.jpeg", "kita3.jpeg", "kita4.jpeg", "kita5.jpeg"];

    container.innerHTML = "";

    photos.forEach((src, index) => {
        const img = document.createElement("img");
        img.src = src;
        img.className = "photo-item";
        img.style.animationDelay = (index * 0.3) + "s";
        container.appendChild(img);
    });

    popup.classList.add("active");

    container.scrollTo({ left: 0 });

    loveInterval = setInterval(spawnLove, 500);
}

function closePhotos() {
    document.getElementById("photoPopup").classList.remove("active");
    clearInterval(loveInterval);
    randomConfetti();
}
</script>

<script>
function setuju() {
    showPhotos();
}
</script>

<script>
function showPop(judul, pesan) {
    document.getElementById("popup-title").innerText = judul;
    document.getElementById("popup-msg").innerText = pesan;
    document.getElementById("popup").classList.add("active");
}

function closePop() {
    document.getElementById("popup").classList.remove("active");
}

function masihMarah() {
    showPop(
        "Masih Marah Ya? 😢",
        "Abang ngerti... Abang bakal sabar dan tetap di sini buat cattyy 🥺💗"
    );
}
</script>

</body>
</html>
