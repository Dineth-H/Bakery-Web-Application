// let carousel_container = document.getElementById("carousel_container")     
let s_items_container = document.getElementById("shopping_cart_items")     
let product_items = []

function init(){
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "Din_Project/ShoppingCart.php", true);

    // When response is ready
    xhr.onload = function () {
        if (this.status === 200) {

            // Changing string data into JSON Object
            obj = JSON.parse(this.response)

            let currentShoppingCart = JSON.parse(sessionStorage.getItem("products")) ;
            let itemsCount = 0;
            let total = 0;
            if (currentShoppingCart == null) {
                alert("There is nothing in the shopping cart!");
            } else {
                itemsCount = !currentShoppingCart ? 0: currentShoppingCart.length;

                currentShoppingCart.forEach((element) => {
                    obj.forEach( (item, index) => {
                        if(item.id == element.item){
                            obj[index].orders_qty = element.qty
                            obj[index].total = element.qty * item.offer
                            total += obj[index].total;
                        }
                    }) 
                });
            }
            obj = obj.filter( item => {
                return item.orders_qty != undefined
            })
            console.log(obj)
            obj.map(craete_product_list);
            create_total_price(total);
        }
        else {
            console.log("File not found");
        }
    }
    
    // At last send the request
    xhr.send();
}

function craete_product_list(product){
    
    let itemsTemp = `
    <li class="cart_item clearfix">
                                        <div class="cart_item_image"><img src="public/images/${product.image}" alt=""></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title">Name</div>
                                                <div class="cart_item_text">${product.title}</div>
                                            </div>
                                           
                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title">Quantity</div>
                                                <div class="cart_item_text">${product.orders_qty}</div>
                                            </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title">Price</div>
                                                <div class="cart_item_text">Rs ${product.offer}</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title">Total</div>
                                                <div class="cart_item_text">Rs ${product.total}</div>
                                            </div>
                                        </div>
                                    </li>`;
    document.getElementById('shopping_cart_items').innerHTML += itemsTemp;
}

function create_total_price(total ){
    document.getElementById('total_shopping_cart').innerHTML = "Rs " +total ;
    add_shopping_cart()
}

function clearAll(){
    window.localStorage.clear();
    s_items_container.innerHTML = ""
    document.getElementById('total_shopping_cart').innerHTML = "Rs " + 00 ;
    document.getElementById("shopping_cart_empty").innerText = "Shopping Cart is Empty";
    location.reload();
}

function add_shopping_cart(){
    let loginSession =  sessionStorage.getItem("user");
    let toContinueBtn = `<button type="button" class="button cart_button_clear" >To Continue Shopping </button> `
    let toLogin = `<a href="login.html" type="button" class="button cart_button_clear"  >To Login  </a> `
    document.getElementById('shopping_cart_btn').innerHTML = loginSession ? toContinueBtn : toLogin;    
}