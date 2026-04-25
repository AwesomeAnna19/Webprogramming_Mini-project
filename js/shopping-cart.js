document.addEventListener('DOMContentLoaded', () => {
    const shoppingCartContainer = document.getElementById('shopping-cart-items');
    const totalItemsCurrency = document.getElementById('total-currency');
    const headerCount = document.getElementById('header-count');
    let shoppingCart = [];

    $.ajax({
        url: 'sync-shopping-cart-list.php',
        method: 'GET',
        success: function(response) {
            if (response) {
                shoppingCart = JSON.parse(response);
                renderShoppingCart();
            }
        }
    });

    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('add-to-cart-button')) {
            e.preventDefault();

            const itemName = e.target.getAttribute('data-name');
            const itemPrice = parseFloat(e.target.getAttribute('data-price'));

            addToShoppingCart(itemName, itemPrice);
        }

        if (e.target.classList.contains('remove-item-button')) {
            const itemName = e.target.getAttribute('data-name');
            removeItemFromShoppingList(itemName);
        }
    });

    function addToShoppingCart(itemName, itemPrice) {
        const existingItem = shoppingCart.find(item => item.itemName === itemName);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            shoppingCart.push({ itemName, itemPrice, quantity: 1 });
        }

        renderShoppingCart();
        syncWithServer();
    }

    function removeItemFromShoppingList(itemName) {
        const itemIndex = shoppingCart.findIndex(item => item.itemName === itemName);

        if (itemIndex > -1) {
            if (shoppingCart[itemIndex].quantity > 1) {
                shoppingCart[itemIndex].quantity -= 1;
            } else {
                shoppingCart.splice(itemIndex, 1);
            }
        }

        renderShoppingCart();
        syncWithServer();
    }

    function syncWithServer() {
        $.ajax({
            url: 'sync-shopping-cart-list.php',
            method: 'POST',
            data: { shoppingCart: JSON.stringify(shoppingCart) },
            success: function(message) {
                console.log("Shopping cart is synced!");
            }
        })
    }

    function renderShoppingCart() {
        shoppingCartContainer.innerHTML = '';
        let totalItems = 0;
        let totalItemsCount = 0;

        if (shoppingCart.length === 0) {
            shoppingCartContainer.innerHTML = '<p class="empty-list-message">Its empty in here...</p>'
        } else {
            shoppingCart.forEach((item) => {
                totalItems += (item.itemPrice * item.quantity);
                totalItemsCount += item.quantity;

                const div = document.createElement('div')
                div.classList.add('shopping-cart-item-row');

                const totalItemsCountText = item.quantity > 1 ? `x${item.quantity} ` : '';

                div.innerHTML = `
                <span class="shopping-cart-itemName">${totalItemsCountText}${item.itemName}</span>
                <span>
                    ${(item.itemPrice * item.quantity).toFixed(2)} DKK
                    <button class="remove-item-button" data-name="${item.itemName}">Remove Item</button>
                </span>
                `;

                shoppingCartContainer.appendChild(div);
            });
        }

        totalItemsCurrency.innerText = totalItems.toFixed(2);

        if (headerCount) {
            headerCount.innerText = totalItemsCount;
        }

    }
});