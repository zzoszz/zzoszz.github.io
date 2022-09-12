// PERTAMA: javascript permulaan
let idjudul = document.getElementById('judul');
let classp1 = document.getElementsByClassName('p1');
let tagh3 = document.getElementsByTagName('h3');
let qsp = document.querySelector('#b p');
let qsulli = document.querySelector('section#b ul li:nth-child(2)');
let qsa = document.querySelectorAll('p');
// semua node root di atas adalah (document) jika ingin menggantinya lakukan ini:
const gantiroot = document.getElementById('c');
const grp = gantiroot.getElementsByTagName('p');
const grp2 = gantiroot.getElementsByTagName('p')[2];

idjudul.innerHTML = 'Judul (getElementById)';
classp1[0].innerHTML = 'Paragraf 1 (getElementByClassName)';
tagh3[0].innerHTML = 'sub-subjudul satu (getElementByTagName';
qsp.innerHTML = 'Paragraf1 (querySelector)';
qsulli.innerHTML = 'list 2 (querySelector #b ul li:nth-child(2)';
qsa[5].innerHTML = 'paragraf 3 (querySelectorAll)';
grp[0].innerHTML = 'Paragraf 1 (ganti root)';
grp2.innerHTML = 'Paragraf 2 (index di atas)'

// dom manipulasi
// 1. Manipulasi Elemen
const anchor = document.getElementsByTagName('a');
anchor[0].removeAttribute('href');
anchor[0].setAttribute('href', 'https://google.com');
anchor[0].getAttribute('href'); // taruh ini di console untuk melihat 'isi atribut';
// untuk mengelola kelas gunakan classlist (lihat di console)
anchor[0].classList                         // (buka di console) melihat kelas apa saja di anchor
anchor[0].classList.add('kelasbaru1');      // (buka di console) me
anchor[0].classList.add('kelasbaru2');
anchor[0].classList.add('kelasbaru3');
anchor[0].classList.remove('kelasbaru3');
anchor[0].classList.toggle('pencet');       // kalau tidak ada, akan ditambah, kalau tidak ada, akan dihapus
anchor[0].classList.item(0);                 // (buka di console) muncul 'kelasbaru1'
anchor[0].classList.contains('kelasbaru1'); // true
anchor[0].classList.replace('kelasbaru1', 'kelasbarusatu');

// 2. Manipulasi Node
// document.createElement() > document.createTextNode() > node.appendChild() > node.insertBefore() > parentNode.removeChild()
let a = document.getElementById('a');
let p1 = document.getElementsByTagName('p')[0];
let p2 = document.getElementsByTagName('p')[1];
let p3 = document.getElementsByTagName('p')[2];
// p1.innerHTML = 'apa'
const pBaru = document.createElement('p');
const isiPBaru = document.createTextNode('Paragraf Baru');
pBaru.appendChild(isiPBaru);
a.appendChild(pBaru);

const pBaru2 = document.createElement('p');
const isiPBaru2 = document.createTextNode('Paragraf Baru2');
pBaru2.appendChild(isiPBaru2);
a.insertBefore(pBaru2, p3);

// 3. Event handler dan add event listener
// 1. event handler bisa dilakukan dengan dua cara (inline dan method)
const event1 = document.querySelector('.klik1');
const event2 = document.querySelector('.klik2');

function gantiBackground() {
    event1.style.backgroundColor = 'lightblue';
}
function gantiBackground2() {
    event2.style.backgroundColor = 'lightblue';
}
event2.onclick = gantiBackground2;
// 2. add event listener
let b = document.getElementById('b');
let p3b = b.getElementsByTagName('p')[2];
p3b.addEventListener('click', function() {
    const ulb = document.querySelector('section#b ul');
    const libarub = document.createElement('li');
    const isilibarub = document.createTextNode('item baru');
    libarub.appendChild(isilibarub);
    ulb.appendChild(libarub);
})
// perbedakan event.handler dengan add.event.listener adalah:
// jika ada dua onclick maka hanya yang ditulis terakhir yang berfungsi
// jika ada dua addEventListener maka keduanya akan berfungsi sekaligus.
// Daftar Kategori Event (Mouse event, keyboard event, resources event, focus event, view event, form event, css animation & transition event, drag & droup event dll.)
// tiap kategori, ada Event di dalamnya contoh Mouse Event berisi (click, dblclick, mouseover, mouseenter, mouseup, wheel dsb)
// keyboard event berisi (keydown, keypress, keyup)
// view event (resize, scroll); form event (reset, submit);
// dicoba-coba saja.

// KEDUA: Javascript lanjut

const tUbahWarna = document.getElementById('tUbahWarna');
// const body = document.getElementsByTagName('body')[0]; khusus body, bisa ditulis singkat
document.body;
tUbahWarna.onclick = function() {
    document.body.style.backgroundColor = 'lightblue';
}
tUbahWarna2.onclick = function() {
    document.body.classList.toggle('biru-muda')
}
const tAcakWarna = document.createElement('button');
const isiAcakWarna = document.createTextNode('Ubah Warna Acak');
tAcakWarna.appendChild(isiAcakWarna);
tAcakWarna.setAttribute('type', 'button');
tUbahWarna2.after(tAcakWarna);

tAcakWarna.addEventListener('click', function() {
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
})

const sMerah = document.querySelector('input[name=sMerah]');
const sHijau = document.querySelector('input[name=sHijau]');
const sBiru = document.querySelector('input[name=sBiru]');


sMerah.addEventListener('input', function() {
    // console.log(sMerah.value);
    const r = sMerah.value;
    document.body.style.backgroundColor = 'rgb('+ r +',100,100)';
})
sHijau.addEventListener('input', function() {
    const r = sMerah.value;
    const g = sHijau.value;

    document.body.style.backgroundColor = 'rgb('+ r +','+ g +',100)';
})
sBiru.addEventListener('input', function() {
    const r = sMerah.value;
    const g = sHijau.value;
    const b = sBiru.value;

    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
})

document.body.addEventListener('mousemove', function(event){
    // posisi mouse
    // console.log(event.clientX);
    // ukuran browser
    // console.log(window.innerWidth);
    const xPos = Math.round((event.clientX / window.innerWidth) * 255);
    console.log(xPos);
    const yPos = Math.round((event.clientY / window.innerHeight) * 255);
    console.log(yPos);
    document.body.style.backgroundColor = 'rgb('+ xPos +','+ yPos +',100)'
})




