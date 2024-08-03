if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready () {
	var removeItemButtons = document.getElementsByClassName('btn-danger')
	for (var i = 0; i < removeItemButtons.length; i++) {
		var button = removeItemButtons[i]
		button.addEventListener('click', removeItem)
	}

	var quantityInputs = document.getElementsByClassName('quantity-input')
	for (var i = 0; i < quantityInputs.length; i++) {
		var input = quantityInputs[i]
		input.addEventListener('change', quantityChanged)
	}

	var addToOrderButtons = document.getElementsByClassName('item-button')
    for (var i = 0; i < addToOrderButtons.length; i++) {
        var button = addToOrderButtons[i]
        button.addEventListener('click', addToOrderClicked)
    }
    
}

function removeItem(event) {
	var buttonClicked = event.target
	buttonClicked.parentElement.parentElement.remove()
	updateTotal()
}

function quantityChanged(event) {
	var input = event.target
	if (isNaN(input.value) || input.value <= 0) {
		input.value = 1
	}
	updateTotal()
}

function updateTotal() {
    var ItemContainer = document.getElementsByClassName('items')[0]
    var Rows = ItemContainer.getElementsByClassName('item-row')
    var total = 0
    for (var i = 0; i < Rows.length; i++) {
        var Row = Rows[i]
        var priceElement = Row.getElementsByClassName('price')[0]
        var quantityElement = Row.getElementsByClassName('quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('₱', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('total-price')[0].innerText = '₱' + total
}