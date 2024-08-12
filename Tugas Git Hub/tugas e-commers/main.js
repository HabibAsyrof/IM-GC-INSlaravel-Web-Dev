const search = document.getElementById("keyword")

const form = document.getElementById("formItem")

const market = document.getElementById("market")

let keranjang = 0 

const cart = document.getElementById("cart")

const data = [
    {
        gambar: '/Tugas Git Hub/tugas e-commers/asset/logitek.webp',
        nama: 'logitek',
        deskripsi: 'Keyboard gaming berkualitas',
        harga: 'Rp 60.000,00'
    },
    {
        gambar: '/Tugas Git Hub/tugas e-commers/asset/logitek.webp',
        nama: 'Asus',
        deskripsi: 'Keyboard gaming berkualitas',
        harga: 'Rp 60.000,00'
    },
    {
        gambar: '/Tugas Git Hub/tugas e-commers/asset/logitek.webp',
        nama: 'Lenovo',
        deskripsi: 'Keyboard gaming berkualitas',
        harga: 'Rp 60.000,00'
    },

    
]


function updatedata(searchp = '') {
    market.innerHTML = '';
    data.forEach((isidata) => {
        if(searchp != '' && !isidata.nama.toLowerCase().includes(searchp)) return;
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
form.addEventListener("submit",function(event){
    event.preventDefault()
    updatedata(search.value.toLowerCase())
})

market.addEventListener("click",function(event){
    if(
        event.target.classList.contains("add-to-cart")
    ){
        keranjang ++ 
        cart.innerHTML=`<i class="fas fa-shopping-cart"></i>(${keranjang})`
    }
})



updatedata()