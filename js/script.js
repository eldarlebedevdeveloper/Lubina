



navigationMenu()
function navigationMenu(){
	$('.menu_header').on('click',() => {
		$('.menu_header').addClass('none')
		$('.menu_body').removeClass('none')
		
		// $('.menu_body').slideToggle()
	})

	$('.menu_body li:first-child').on('click',() => {
		$('.menu_header').removeClass('none')
		$('.menu_body').addClass('none')
		// $('.menu_body').slideToggle()
	})

}



// mobile menu
navigationMenuMobile()
function navigationMenuMobile(){
	$('.menu_mobile-icon').on('click', function(){
		$('.menu_mobile-libs').removeClass('none')
	})


	$('.close_mobile_menu').on('click', function(){
		$('.menu_mobile-libs').addClass('none')
	})
}



extraMenu()
function extraMenu(){
	$('.extra_header').on('click', function(){
		$('.extra_body').toggleClass('none')
		$('.extra_header-icon img').toggleClass('rotate-180')
	})
}



// ------------------------------------------------------------------------------

// Компонет ourTeam функции слайдера по ползунку
ourTeamRange()
function ourTeamRange() {
	let container = document.querySelector('.cart_container')
	let range = document.querySelector('.ourTeam_controller-range input')

	if (range != null) {
		range.max = container.scrollWidth - container.clientWidth

		range.addEventListener('input', () =>{
			container.style.marginLeft = -(range.value) + 'px'
		})	
	}
	
}


// выравнивание  по самому маленькому блоку в родителе. Да в css такой возможности нет
function smallestAlignment(child,direction){
	let size = document.querySelector(child)

	if (size) {

		arguments[2].forEach((item) => {
			let element = document.querySelector(item)
			if (direction == 'width') {
				element.style.width = size.clientWidth +  "px"
			}else{
				element.style.height = size.clientHeight +  "px"
			}

		})
	}
}
smallestAlignment('.footer_support-info .footer_heading p', 'width' ,['.footer_support-info .footer_additionaly'])


// календарь на старнице aboutUs
historycalCalendar()
function historycalCalendar() {
	let dates = document.querySelectorAll('.history_calendar-dates .date')
	let events = document.querySelectorAll('.history_calendar-events .event')

	startCalendar(dates,'date-active')
	startCalendar(events,'event-active')


	function startCalendar(data,addingClass){
		let amount = data.length - 3
		data.forEach((item, index) => {
			item.classList.add('none')

			if (index === amount) {
				item.classList.add(addingClass)
			}

			if (index <= amount + 2 && index >= amount - 1 ) {
				item.classList.remove('none')
			}
		})

		navigationCalendar(data,addingClass)
	}

	function navigationCalendar(data,activeClass){
		let prev = document.querySelector('.history_calendar-navigation .arrow:first-child')
		let next = document.querySelector('.history_calendar-navigation .arrow:last-child')

		let amountElements = data.length


		if (prev != null && next != null) {
		

			prev.addEventListener('click', () => {
					let count
					data.forEach((item,index) => {
						item.classList.add('none')

						if (item.classList.contains(activeClass)) {
							count = index - 1
							if (count >= 0) {
								item.classList.remove(activeClass)
							}else{
								count = index
							}
						}

					})

					data.forEach((item,index) => {
					

						if (count === index) {
							item.classList.add(activeClass)
							item.classList.remove('none')
						}

						if (index <= count + 2 && index >= count - 1 ) {
							item.classList.remove('none')
						}

					})
			})

			next.addEventListener('click', () => {
					let count
					data.forEach((item,index) => {
						item.classList.add('none')

						if (item.classList.contains(activeClass)) {
							count = index + 1

							if (count < amountElements) {
								item.classList.remove(activeClass)
							}else{
								count = index
							}
						}
					})	

					data.forEach((item,index) => {
						if (index <= count + 1 && index >= count - 2 ) {
							item.classList.remove('none')
						}

						if (count === index) {
							item.classList.add(activeClass)
							item.classList.remove('none')
						}
					})
			})

		}


	}
}



// pop up 
popUp()
function popUp(){
	let popUp =  document.querySelector('.popUp')
	let open = document.querySelector('.popUp_open')
	let close = document.querySelector('.popUp_close')

	let menu = document.querySelector('.menu')
	let menuMobile = document.querySelector('.menu_mobile')
	let languages = document.querySelector('.languages')

	let mobMenuBlack = document.querySelector('.mb-men-black')
	let mobMenuWhite = document.querySelector('.mb-men-white')


	if ( popUp != null && open != null && close != null) {
		open.addEventListener('click', function(){
			popUp.classList.remove('none')
			open.classList.add('none')
			close.classList.remove('none')

			menu.classList.add('none')
			menuMobile.classList.add('none')
			languages.classList.add('languages-white')

			mobMenuBlack.classList.add('none')
			mobMenuWhite.classList.remove('none')
		})

		close.addEventListener('click', function(){
			popUp.classList.add('none')
			open.classList.remove('none')
			close.classList.add('none')

			menu.classList.remove('none')
			menuMobile.classList.remove('none')
			languages.classList.remove('languages-white')

			mobMenuBlack.classList.remove('none')
			mobMenuWhite.classList.add('none')
		})
	}
}


// слайдер на странице portfolio
slider()
function slider(){
	let box = document.querySelector('.portfolio_slider > div')
	if (box) {
		$('.portfolio_slider > div').owlCarousel({
		    items:1,
		    loop:true,
		    margin:10,
		    dots:true,
		    nav:true,
		    navText: ['<div><div class="arrowBlack"></div></div>','<div><div class="arrowBlack"></div></div>'],
		})
	}
	
}

sliderMobile()
function sliderMobile(){
	let box = document.querySelector('.homeServices_mobile')
	if (box) {
		$('.homeServices_mobile').owlCarousel({
		    items:1.1,
		    loop:true,
		    margin:0,
		    dots:false,
		    nav:false,
		})
	}

	let top =  $('.homeServices_mobile').height() / 2
	$('.homeServices_mobile').css('top', -top)
	
}


callFuntcionsServicsSlider()

function callFuntcionsServicsSlider(){

	addingCardsToDiv()

	sliderMobileServices()
}


sliderMobileServices()
function sliderMobileServices(){
	let box = document.querySelector('#mobileGeneralPlanning_container')
	if (box) {
		$('#mobileGeneralPlanning_container').owlCarousel({
		    items:1.2,
		    loop:true,
		    margin:0,
		    dots:false,
		    nav:false,
		})
	}

}




function addingCardsToDiv(){
	let mibileSlidev = document.querySelector('.addInContainer')
	let allCards = document.querySelectorAll('.addInContainer .generalPlanning_container-item')

	allCards.forEach((cart,index) =>{

		if (index % 2) {
			let div = document.createElement('div')
			div.append(allCards[index-1])
			div.append(cart)
			mibileSlidev.append(div)
		}
	})
}



window.onload = function(){
	hightCartMobileServices()
}


function hightCartMobileServices(){
	let carts = $('#mobileGeneralPlanning_container .generalPlanning_container-item')
	let allSize = []
	$.each(carts,function(index,cart){
		allSize.push($(cart).height())
	})
	var maxIndex = allSize.indexOf( Math.max.apply(null, allSize));
	
	$.each(carts,function(index,cart){
		$(cart).height(allSize[maxIndex])
	})
}


         
scrolling('.scroll_about_us', 500)
scrolling('.addInfo', 1000)

// якорь
function scrolling(calassBox, timeScroll){
	
	if ($(calassBox).hasClass('cancel-scrolling') == false) {
		$(calassBox).on("click","a", function () {
		    event.preventDefault();
		    var id  = $(this).attr('href'),
		    top = $(id).offset().top;
		    $('body,html').animate({scrollTop: top}, timeScroll);
		 });
	}

	

	
}


bookingDate()
// планирование даты
function bookingDate(){
	let inputDate = document.querySelector('.booking_date')

	let today = new Date()
	let dd = String(today.getDate()).padStart(2, '0')
	let mm = String(today.getMonth() + 1).padStart(2, '0') //January is 0!
	let yyyy = today.getFullYear()

	today = `${yyyy}-${mm}-${dd}`
	maxData = `${yyyy+1}-${mm}-${dd}`

	inputDate.min = today
	inputDate.max = maxData
}



// document.querySelector('.first_btn').addEventListener('click', () => {
// 	alert()
// 	footerFormSend()

// })


// function footerFormSend(){
// 	let form = document.querySelector('#footer_form').action
// 	document.location.href = form
// }

// if (validationForm('#footer_form') == true) {}

validationForm('#footer_form')
function validationForm(idForm){
	$(idForm).validate({
		debug: false,
		rules: {
			name: {
				required: true,
			},
			phone: {
				required: true,
				digits: true
			},
			email: {
				required: true,
				email: true
			},
			additionalText : {
				required: true,
			},
			date : {
				required: true,
			}
		},

		messages: {
			name: {
				required: 'Dieses Feld wird benötigt.',
			},
			phone: {
				required: 'Dieses Feld wird benötigt.',
				digits: 'Bitte gib nur Ziffern ein.',
			},
			email: {
				required: 'Dieses Feld wird benötigt.',
				email: 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
			},
			additionalText : {
				required: 'Dieses Feld wird benötigt.',
			}
		},

		// submitHandler: function(form) {
		// 	// $(idForm).submit()
		// 	footerFormSend()
		// }


	})

}


// function SubmitIfValid()
// {
//     if(!$("#footer_form").valid()) return false;  
//     return true;
// }


validationFormPopUp('#form_popUp')
function validationFormPopUp(idForm){
	$(idForm).validate({
		rules: {
			popName: {
				required: true,
			},
			popPhone: {
				required: true,
				digits: true
			},
			popEmail: {
				required: true,
				email: true
			},
			additionalText : {
				required: true,
			},
			date : {
				required: true,
			}
		},

		messages: {
			popName: {
				required: 'Dieses Feld wird benötigt.',
			},
			popPhone: {
				required: 'Dieses Feld wird benötigt.',
				digits: 'Bitte gib nur Ziffern ein.',
			},
			popEmail: {
				required: 'Dieses Feld wird benötigt.',
				email: 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
			},
			additionalText : {
				required: 'Dieses Feld wird benötigt.',
			},
			date : {
				required: 'Dieses Feld wird benötigt.',
			}
		}


	})

}





footerNavigatioLi()
function footerNavigatioLi(){
	let boxNavigatio = document.querySelector('.footer_navigation-services div')
	let allLi = document.querySelectorAll('.footer_navigation-services li')
	let countLi = allLi.length
	let ulOne = document.createElement('ul')
	let ulTwo = document.createElement('ul')


	allLi.forEach((li,index) =>{

		if (index  < countLi / 2) {
			ulOne.append(li)
		}else{
			ulTwo.append(li)
		}
	})


	boxNavigatio.append(ulOne)
	boxNavigatio.append(ulTwo)
}



// swapMobileSubmenu()
// function swapMobileSubmenu(){
// 	let url = location.pathname.replace(/[/]/g, "")
// 	console.log(url)
// 	if (url == 'services') {
// 		$('.extra_header-title').text('Heizungsanlagen')
// 	}else{
// 		$('.extra_header-title').text(url) 
// 	}
// }





if (window.matchMedia("(min-width: 768px)").matches) {
	homeScroll()
	// new fullpage('#fullpage', {
	// 	//options here
	// 	autoScrolling:true,
	// 	scrollHorizontally: true,
	// 	scrollBar: true,
	// 	// responsiveWidth: 768,
	// 	// normalScrollElements: ".homeServices, .ourTeam",
	// })
} 




// $('.homeTwo_content').slideUp()


function homeScroll(){
	new fullpage('#fullpage', {
		//options here
		autoScrolling:true,
		scrollHorizontally: true,
		scrollBar: true,
		normalScrollElements: ".homeServices, .ourTeam, .footer",
		loopTop: true,
		onLeave: function(origin, destination, direction){
			var leavingSection = this;

			$.fn.percWidth = function(){
			  return this.outerWidth() / this.parent().outerWidth() * 100;
			}

		
			if(origin.index == 0 && direction == 'down'){

				$('.homeOne_first').hide(700)
				$('.homeOne_last').animate({'width' : '100%'},700)
				
				$('.homeTwo_content').removeClass('none')
				$('.homeTwo_content').slideDown(700)


				if ($('.homeOne_last').percWidth() != 100) {
					return false
				}else{
					return true
				}

			}

			if(origin.index == 0 && direction == 'up'){
			
				$('.homeOne_last').animate({'width' : '50%'},700)
				$('.homeOne_first').show(700)
				$('.homeTwo_content').slideUp(700)

				return false
			}

		}
	});

}









