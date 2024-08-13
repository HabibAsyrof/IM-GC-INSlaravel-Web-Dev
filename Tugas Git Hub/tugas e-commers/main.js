const search = document.getElementById("keyword")

const form = document.getElementById("formItem")

const market = document.getElementById("market")

let keranjang = 0 

const cart = document.getElementById("cart")

const data = [
    {
        gambar: '/Tugas Git Hub/tugas e-commers/asset/logitek.webp',
        nama: 'Keyboard Logitek',
        deskripsi: 'Keyboard gaming berkualitas',
        harga: 'Rp 60.000,00'
    },
    {
        gambar: 'https://www.memoryc.com/images/products/bb/image_6244734.jpg',
        nama: 'Mouse Hyper X',
        deskripsi: 'Mouse gaming berkualitas',
        harga: 'Rp 60.000,00'
    },
    {
        gambar: 'https://hotline.ua/img/tx/378/3789380085.jpg',
        nama: 'Asus Gaming',
        deskripsi: 'laptop dengan spek gaming',
        harga: 'Rp 60.000,00'
    },
    {
        gambar: 'https://lh5.googleusercontent.com/proxy/kL6ilxhY9iwE2Gjh8dDl-H_0q5GWscUsOisEcj_Dhkhv24-mKDuOVdt0H07zxTYYj7NwF03mtPPnvk7b9_Idj-SxaDdLVtZ8JNKrKIJ9ajU952cVzTkiwh2CqoAq7YD1LEC20nETiQt6-IL8oxGoTuF1xJBEEHwatrZtntyay-Ry=w1200-h630-p-k-no-nu',
        nama: 'Headphone',
        deskripsi: 'Headphone gaming yang berkualitas',
        harga: 'Rp 60.000,00'
    },

    
]


function databaru(pencarian = '') {
    market.innerHTML = '';
    data.forEach((isidata) => {
        if(pencarian != '' && !isidata.nama.toLowerCase().includes(pencarian)) return;
        market.innerHTML += `
        <div class="logitek">
            <img src="${isidata.gambar}" alt="">
            <h1>${isidata.nama}</h1>
            <h2>${isidata.deskripsi}</h2>
            <p>${isidata.harga}</p>
            <button class="add-to-cart">Add To Cart</button>
        </div>
        `;
    });    
}


// keranjang
// form.addEventListener("submit",function(event){
//     event.preventDefault()
//     updatedata(search.value.toLowerCase())
// })

// market.addEventListener("click",function(event){
//     if(
//         event.target.classList.contains("add-to-cart")
//     ){
//         keranjang ++ 
//         cart.innerHTML=`<i class="fas fa-shopping-cart"></i>(${keranjang})`
//     }
// })



databaru()