let total = 0;

function addToOrder(coffeeName, price) {
    const orderList = document.getElementById('orderList');
    const totalAmount = document.getElementById('totalAmount');

    // Create a new list item for the order
    const listItem = document.createElement('li');
    listItem.textContent = `${coffeeName}: $${price.toFixed(2)}`;
    orderList.appendChild(listItem);

    // Update the total amount
    total += price;
    totalAmount.textContent = `Total: $${total.toFixed(2)}`;
}
