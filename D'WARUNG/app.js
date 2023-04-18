let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Nasi Goreng Kampung',
        image: 'immage/2.jpg',
        price: 6
    },
    {
        id: 2,
        name: 'Goreng Cina',
        image: '2.PNG',
        price: 6
    },
    {
        id: 3,
        name: 'Goreng Udang',
        image: '3.PNG',
        price: 7
    },
    {
        id: 4,
        name: 'Goreng Ikan Masin',
        image: '4.PNG',
        price: 7
    },
    {
        id: 5,
        name: 'Goreng Daging',
        image: '5.PNG',
        price: 7
    },
    {
        id: 6,
        name: 'Goreng Ayam',
        image: '6.PNG',
        price: 7
    },
    {
        id: 7,
        name: 'Goreng Pataya',
        image: '4.PNG',
        price: 7
    },
    {
        id: 8,
        name: 'Goreng Tom Yam',
        image: '5.PNG',
        price: 7
    },
    {
        id: 9,
        name: 'Goreng Paprik',
        image: '6.PNG',
        price: 8
    },
    {
        id: 10,
        name: 'Goreng USA',
        image: '4.PNG',
        price: 9
    },
    {
        id: 11,
        name: 'Mee Goreng',
        image: '5.PNG',
        price: 6
    },
    {
        id: 12,
        name: 'Mee Sup',
        image: '6.PNG',
        price: 6
    },
    {
        id: 4,
        name: 'Mee Bandung',
        image: '4.PNG',
        price: 6
    },
    {
        id: 5,
        name: 'Mee Bandung Udang',
        image: '5.PNG',
        price: 7
    },
    {
        id: 6,
        name: 'Mee Goreng Daging / Udang',
        image: '6.PNG',
        price: 7
    },
    {
        id: 7,
        name: 'Mee Goreng Pataya',
        image: '4.PNG',
        price: 7
    },
    {
        id: 8,
        name: 'Mee Tom Yam Biasa',
        image: '5.PNG',
        price: 7
    },
    {
        id: 9,
        name: 'Mee Tom Yam Campur',
        image: '6.PNG',
        price: 8
    },
    {
        id: 11,
        name: 'Mee Hoon Goreng',
        image: '5.PNG',
        price: 6
    },
    {
        id: 12,
        name: 'Mee Hoon Sup',
        image: '6.PNG',
        price: 6
    },
    {
        id: 4,
        name: 'Mee Hoon Bandung',
        image: '4.PNG',
        price: 6
    },
    {
        id: 5,
        name: 'Mee Hoon Bandung Udang',
        image: '5.PNG',
        price: 7
    },
    {
        id: 6,
        name: 'Mee Hoon Goreng Daging / Udang',
        image: '6.PNG',
        price: 7
    },
    {
        id: 7,
        name: 'Mee Hoon Goreng Pataya',
        image: '4.PNG',
        price: 7
    },
    {
        id: 8,
        name: 'Mee Hoon Tom Yam Biasa',
        image: '5.PNG',
        price: 7
    },
    {
        id: 9,
        name: 'Mee Hoon Tom Yam Campur',
        image: '6.PNG',
        price: 8
    },
    {
        id: 10,
        name: 'Maggie Goreng',
        image: '4.PNG',
        price: 6
    },
    {
        id: 11,
        name: 'Maggie Sup',
        image: '5.PNG',
        price: 5
    },
    {
        id: 11,
        name: 'Maggie Kari',
        image: '5.PNG',
        price: 5
    },
    {
        id: 12,
        name: 'Maggie Goreng Pataya',
        image: '6.PNG',
        price: 8
    },
    {
        id: 4,
        name: 'Maggie Tom Yam Biasa',
        image: '4.PNG',
        price: 7
    },
    {
        id: 5,
        name: 'Maggie Tom Yam Campur',
        image: '5.PNG',
        price: 8
    },
    {
        id: 6,
        name: 'Kwee Tiaw Goreng',
        image: '6.PNG',
        price: 6
    },
    {
        id: 7,
        name: 'Kwee Tiaw Goreng Udang / Kerang',
        image: '4.PNG',
        price: 7
    },
    {
        id: 8,
        name: 'Kwee Tiaw Tom Yam Biasa',
        image: '5.PNG',
        price: 7
    },
    {
        id: 9,
        name: 'Kwee Tiaw Tom Yam Campur',
        image: '6.PNG',
        price: 8
    },
    {
        id: 6,
        name: 'Char Kwee Tiaw Goreng',
        image: '6.PNG',
        price: 6
    },
    {
        id: 7,
        name: 'Char Kwee Tiaw Goreng Udang / Kerang',
        image: '4.PNG',
        price: 7
    },
    {
        id: 8,
        name: 'Char Kwee Tiaw Tom Yam Biasa',
        image: '5.PNG',
        price: 7
    },
    {
        id: 9,
        name: 'Char Kwee Tiaw Tom Yam Campur',
        image: '6.PNG',
        price: 8
    },
    {
        id: 10,
        name: 'CENDOL',
        image: '4.PNG',
        price: 3
    },
    {
        id: 11,
        name: 'ROTI BAKAR',
        image: '5.PNG',
        price: 3
    },
    {
        id: 12,
        name: 'KEROPOK LEKOR',
        image: '6.PNG',
        price: 4
    },
    {
        id: 4,
        name: 'KENTANG GORENG',
        image: '4.PNG',
        price: 4
    },
    {
        id: 5,
        name: 'CHICKEN CHOP',
        image: '5.PNG',
        price: 12
    },
    {
        id: 6,
        name: 'TOM YAM',
        image: '6.PNG',
        price: 6
    },
    {
        id: 7,
        name: 'TOMYAM CAMPUR',
        image: '4.PNG',
        price: 7
    },
    {
        id: 8,
        name: 'PAPRIK AYAM / DAGING',
        image: '5.PNG',
        price: 5
    },
    {
        id: 9,
        name: 'MASAK MERAH AYAM / DAGING',
        image: '6.PNG',
        price: 5
    },
    {
        id: 10,
        name: 'SUP SAYUR',
        image: '4.PNG',
        price: 5
    },
    {
        id: 11,
        name: 'SUP SAYUR',
        image: '5.PNG',
        price: 2
    },
    {
        id: 12,
        name: 'Teh Tarik panas',
        image: '6.PNG',
        price: 1
    },
    {
        id: 4,
        name: 'Teh O Lemon panas',
        image: '4.PNG',
        price: 1
    },
    {
        id: 5,
        name: 'Teh O panas',
        image: '5.PNG',
        price: 1
    },
    {
        id: 6,
        name: 'Kopi O panas',
        image: '6.PNG',
        price: 1
    },
    {
        id: 7,
        name: 'Kopi panas',
        image: '4.PNG',
        price: 1
    },
    {
        id: 8,
        name: 'Nescafe panas',
        image: '5.PNG',
        price: 2
    },
    {
        id: 9,
        name: 'Nescafe O panas',
        image: '6.PNG',
        price: 1
    },
    {
        id: 10,
        name: 'Kopi Jantan panas',
        image: '4.PNG',
        price: 2
    },
    {
        id: 11,
        name: 'Cappucino panas',
        image: '5.PNG',
        price: 3
    },
    {
        id: 12,
        name: 'Lemon panas',
        image: '6.PNG',
        price: 1
    },
    {
        id: 4,
        name: 'Barli panas',
        image: '4.PNG',
        price: 2
    },
    {
        id: 5,
        name: 'Milo panas',
        image: '5.PNG',
        price: 2
    },
    {
        id: 6,
        name: 'Horlic panas',
        image: '6.PNG',
        price: 2
    },
    {
        id: 7,
        name: 'Sirap panas',
        image: '4.PNG',
        price: 1
    },
    {
        id: 8,
        name: 'Sunquick panas',
        image: '5.PNG',
        price: 2
    },
    {
        id: 9,
        name: 'Extra Juss panas',
        image: '6.PNG',
        price: 2
    },
    {
        id: 12,
        name: 'Teh Tarik ais',
        image: '6.PNG',
        price: 2
    },
    {
        id: 4,
        name: 'Teh O Lemon ais',
        image: '4.PNG',
        price: 2
    },
    {
        id: 5,
        name: 'Teh O ais',
        image: '5.PNG',
        price: 2
    },
    {
        id: 6,
        name: 'Kopi O ais',
        image: '6.PNG',
        price: 2
    },
    {
        id: 7,
        name: 'Kopi ais',
        image: '4.PNG',
        price: 2
    },
    {
        id: 8,
        name: 'Nescafe ais',
        image: '5.PNG',
        price: 3
    },
    {
        id: 9,
        name: 'Nescafe O ais',
        image: '6.PNG',
        price: 2
    },
    {
        id: 10,
        name: 'Kopi Jantan ais',
        image: '4.PNG',
        price: 3
    },
    {
        id: 11,
        name: 'Cappucino ais',
        image: '5.PNG',
        price: 4
    },
    {
        id: 12,
        name: 'Lemon ais',
        image: '6.PNG',
        price: 2
    },
    {
        id: 4,
        name: 'Barli ais',
        image: '4.PNG',
        price: 3
    },
    {
        id: 5,
        name: 'Milo ais',
        image: '5.PNG',
        price: 3
    },
    {
        id: 6,
        name: 'Horlic ais',
        image: '6.PNG',
        price: 3
    },
    {
        id: 7,
        name: 'Sirap ais',
        image: '4.PNG',
        price: 2
    },
    {
        id: 8,
        name: 'Sunquick ais',
        image: '5.PNG',
        price: 3
    },
    {
        id: 9,
        name: 'Extra Juss ais',
        image: '6.PNG',
        price: 3
    },
    {
        id: 10,
        name: 'Fresh Oren',
        image: '4.PNG',
        price: 3
    },
    {
        id: 11,
        name: 'Apple',
        image: '5.PNG',
        price: 3
    },
    {
        id: 12,
        name: 'Carrot',
        image: '6.PNG',
        price: 3
    },
    
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        listCards[key] = products[key];
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    console.log(key, quantity);
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}