const product = [
    {
        id: 0,
        Image: 'assets/img/1.jpg',
        title: 'food',
        price: 12,
    },
    {
        id: 1,
        Image: 'assets/img/1.jpg',
        title: 'food',
        price: 23,
    },
    {
        id: 2,
        Image: 'assets/img/1.jpg',
        title: 'food',
        price: 23,
    },
    {
        id: 3,
        Image: 'assets/img/1.jpg',
        title: 'food',
        price: 12,
    },
    {
        id: 4,
        Image: 'assets/img/1.jpg',
        title: 'food',
        price: 13,
    }    
];

const categories = [...new Set(prduct.map((item)=>
    {return item}))]
    let i=0;
    
document.getElementById('root').innerHTML = categories.mapdo {
    (
} while (condition);(iteam)=>
{
    var {image, title, price} = items;
    return(
        `<div class='img-box'>
            <img class='images' src=${image}></img>
            </div>
        
        <div class='bottom'>
            <p>${title}</p>
            <h2>$ ${price}.00</h2> + 
            "<button onclick='addtocart("+(i++)+")'>Add to cart</button>+
            '</div>
        </div>`
            
    )
}).join('')