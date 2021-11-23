$(document).ready(function() {

	showCart();

	$('.addtocartbtn').on('click', function(){
		var id = $(this).data('id');
		var name = $(this).data('name');
		var price = $(this).data('price');
		var discount = $(this).data('discount');
		var qty = 1;

		var itemList = {
			id: id,
			name: name,
			price: price,
			discount: discount,
			qty: qty
		}

		var cart = localStorage.getItem('cart');
		var cartArray;

		if(cart == null){
			cartArray = [];
		}
		else{
			cartArray = JSON.parse(cart);
		}

		var status = false;

		$.each(cartArray, function(i,v){
			if(id == v.id){
				v.qty++;
				status = true;
			}
		})

		if(!status){
			cartArray.push(itemList);
		}

		var cartJson = JSON.stringify(cartArray);
		localStorage.setItem('cart', cartJson);

		showCart();
	})


	function showCart(){
		var cart = localStorage.getItem('cart');
		var html = '';
		var cartTotalHtml = '';

		if(cart){
			var cartArray = JSON.parse(cart);
			var subtotal = 0;
			var total = 0;

			$.each(cartArray, function(i,v){
				var id = v.id;
				var name = v.name;
				var price = v.price;
				var discount = v.discount;
				var qty = v.qty;				

				html += `<tr>
							<td>${name}</td>`;

				if(v.discount){
					subtotal = discount*qty;
					total += subtotal;
					html += `<td>${discount}</td>`;
				}
				else{
					subtotal = price*qty;
					total += subtotal;
					html += `<td>${price}</td>`;
				}

				html += `<td class="qty" data-title="Qty">
                  <div class="input-group">
                    <div class="button minus">
                      <button type="button" class="btn btn-sm btn-outline-info btn-number btndecrease mr-1" data-type="minus" data-key=${i}>
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <input type="text" disabled="" class="input-number text-center" size="1" data-min="1" data-max="100" value="${qty}">
                    <div class="button plus">
                      <button type="button" class="btn btn-sm btn-outline-info btn-number btnincrease ml-1" data-type="plus" data-key=${i}>
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                  
                </td>
                <td class="total-amount" data-title="Total"><span>${subtotal} Ks</span></td>
                <td class="action text-center" data-title="Remove"><a href="#"><i class="fas fa-trash btnremove text-danger" data-key=${i}></i></a></td>
              </tr>`;
			})
			$('.cart_table').html(html);

			cartTotalHtml += `<td colspan="5" style="text-align: right; font-weight: bold;">
								Total: ${total} ks</td>`;
			$('#cart_total').html(cartTotalHtml);
		}
		else{
			var noCartItem = '';
			noCartItem = `<tr><td>
							<p>Opps! No Cart Item !!</p>
							<a href="{{route('coursePage')}}" class="btn">Continue shopping</a>
							</td></tr>`;
			$('.cart_table').html(noCartItem);
		}
	}


	//increase qty button
	$('.cart_table').on('click', '.btnincrease', function(){
		var key = $(this).data('key');

		var cart = localStorage.getItem('cart');
		var cartArray = JSON.parse(cart);
		$.each(cartArray,function(i,v){
			if(key==i){
				v.qty++;
			}
		})

		var cartJson = JSON.stringify(cartArray);
		localStorage.setItem('cart', cartJson);

		showCart();

	})


	//increase qty button
	$('.cart_table').on('click', '.btndecrease', function(){
		var key = $(this).data('key');

		var cart = localStorage.getItem('cart');
		var cartArray = JSON.parse(cart);
		$.each(cartArray,function(i,v){
			if(key==i){
				v.qty--;

				if(v.qty == 0){
					var isDelete = confirm("Your item count is zero! Do you want to remove this item?");
					if(isDelete){
						cartArray.splice(i,1);
					}else{
							v.qty = 1;
					}
				}

			}
		})

		var cartJson = JSON.stringify(cartArray);
		localStorage.setItem('cart', cartJson);

		showCart();
	})


	// btn remove 
	$('.cart_table').on('click', '.btnremove', function(){
		var key = $(this).data('key');

		var cart = localStorage.getItem('cart');
		var cartArray = JSON.parse(cart);
		$.each(cartArray,function(i,v){
			if(key==i){
				var isDelete = confirm("Are you sure to delete?");
				if(isDelete){
					cartArray.splice(i,1);
				}
					
			}
		})

		var cartJson = JSON.stringify(cartArray);
		localStorage.setItem('cart', cartJson);

		showData();
		cartNoti();
		showShoppingItem();
	})
});