const speakers = [
  {
    name: "Prof. Dr. dr. Doddy M Soebadi, Sp.B, Sp.U(K)",
    image: "../images/speaker/Doddy-M.-Soebadi.jpg",
  },
  {
    name: "Prof. Dr. dr. Gede Wirya Kusuma Duarsa, M. Kes, MARS , Sp.U(K)",
    image: "../images/speaker/gwk-2.jpg",
  },
  {
    name: "Prof. dr. Chaidir Arif Mochtar, SpU (K), PhD",
    image: "../images/speaker/Chaidir-Arif-Mochtar.jpg",
  },
  {
    name: "Dr. dr. Indrawarman, Sp.U(K)",
    image: "../images/speaker/Indrawarman.jpg",
  },
  {
    name: "Dr. dr. Kurnia Penta Seputra, Sp.U(K)",
    image: "../images/speaker/KurniaPenta.jpg",
  },
  {
    name: "Dr. dr. Paksi Satyagraha, M.Kes, Sp.U(K), FICS",
    image: "../images/speaker/PaksiSatyagraha.jpeg",
  },
  {
    name: "Dr. dr. Taufiq Nur Budaya, Sp.U(K)",
    image: "../images/speaker/Taufiq.jpg",
  },
  {
    name: "dr. Adistra Imam Satjakoesoemah, Sp.U, FICS.jpg",
    image: "../images/speaker/dr.-Adistra-Imam-Satjakoesoemah,-Sp.U,-FICS.jpg",
  },
  {
    name: "dr. Andika Afriansyah, Sp.U(K)",
    image: "../images/speaker/andika-afriansyah.jpg",
  },
  {
    name: "dr. Ahmad Zulfan Hendri, Sp.U (K)",
    image: "../images/speaker/AhmadZulfan.jpg",
  },
  {
    name: "dr. Akmal Fawzi Yusril Umam, Sp.U",
    image: "../images/speaker/akmal-fauwzi.jpg",
  },
  {
    name: "dr. Andri Kustono, Sp.U(K)",
    image: "../images/speaker/AndriKustono.jpg",
  },
  {
    name: "dr. Andrie Rhomdhon, Sp.U",
    image: "../images/speaker/andrie.jpg",
  },
  {
    name: "dr. Anton Hermawan, Sp.U",
    image: "../images/speaker/anton-hermanawan.jpg",
  },
  {
    name: "dr. Athaya Febriantyo Purnomo, Sp.U, M. Sc, FICS",
    image: "../images/speaker/athaya.jpg",
  },
  {
    name: "dr. Ayodhya Soebadhi, PhD, Sp.U(K)",
    image: "../images/speaker/MohAyodhia.jpg",
  },
  {
    name: "dr. Boyke Soebhali, Sp.U(K)",
    image: "../images/speaker/BoykeSoebhali.jpg",
  },
  {
    name: "dr. Dimas Visa Aditya, Sp.U ",
    image: "../images/speaker/dimas-visa.jpg",
  },
  {
    name: "dr. Donny Eka Putra, Sp.U (K)",
    image: "../images/speaker/Donny-Eka.jpg",
  },
  {
    name: "dr. Edi Wibowo, Sp.U, FICS",
    image: "../images/speaker/ediwibowo.jpeg",
  },
  {
    name: "dr. Gerhard Reinaldi Situmorang, SpU(K), PhD",
    image: "../images/speaker/gerhard.jpeg",
  },
  {
    name: "dr. Hery Susilo, Sp.B-(K)Onk",
    image: "../images/speaker/heri-susilo.jpg",
  },
  {
    name: "dr. I Made Udiyana Indradiputra,Sp.U",
    image: "../images/speaker/made-udiyana.jpg",
  },
  {
    name: "dr. Johan Renaldo, Sp.U(K)",
    image: "../images/speaker/Johan-Renaldo.jpg",
  },
  {
    name: "dr. Lukman Hakim, Sp.U (K), MARS, Ph.D.",
    image: "../images/speaker/lukman-hakim.jpg",
  },
  {
    name: "dr. Nyoman Gede Prayudi, Sp.U",
    image: "../images/speaker/gede-prayudi.jpg",
  },
  {
    name: "dr. M. Asro Abdih Y, Sp.U",
    image: "../images/speaker/asro.jpeg",
  },
  {
    name: "dr. Medianto, Sp.U",
    image: "../images/speaker/MediantoPurnomo.jpg",
  },
  {
    name: "dr. Moammar Andar Roemare Siregar Sp.U(K)",
    image: "../images/speaker/moamar-andar.jpg",
  },
  {
    name: "dr. Muhammad Ilham Fauzan",
    image: "../images/speaker/muhammad-ilham.png",
  },
  {
    name: "dr. Octoveryal Aslim, Sp.U (K)",
    image: "../images/speaker/octoveryal.jpg",
  },
  {
    name: "dr. Pradana Nurhadi, Sp.U(K)",
    image: "../images/speaker/pradana.jpg",
  },
  {
    name: "dr. Putu Angga Risky Raharja, Sp.U, FICS",
    image: "../images/speaker/putu-angga.jpg",
  },
  {
    name: "dr. Ryan Akhmad Adhi Saputra, Sp.U",
    image: "../images/speaker/ryan-akhmad.jpg",
  },
  {
    name: "dr. Yosua Hardja, Sp.U",
    image: "../images/speaker/yosua-harja.jpg",
  },
  {
    name: "Dr. dr. Widi Atmoko, Sp.U (K), FECSM, FICS",
    image: "../images/speaker/widi.jpeg",
  },
  
];

const speakersContainer = document.getElementById("speakers-container");
const row = document.createElement("div");
row.classList.add("row");
speakers.forEach((speaker) => {
  const col = document.createElement("div");
  col.classList.add("col-lg-4", "col-md-6", "mt-4", "pt-2");
  const speakerHTML = `
    <div class="card text-center categories overflow-hidden shadow border-0 rounded">
      
        <img src="${speaker.image}" class="img-fluid avatar avatar-photo shadow" alt="${speaker.name}">
        <div class="card-body py-3 px-0 content">
        <a href="javascript:void(0)" class="title h6 text-dark">${speaker.name}</a>
          
        </div>
      
    </div>
  `;
  col.innerHTML = speakerHTML;
  row.appendChild(col);
});

speakersContainer.appendChild(row);
