// header navbar 
$(document).ready(function() {
  

    $('.bars').click(function() {
      $('.links').slideToggle(250);
       $('nav').toggleClass('background-nav');
       $('.bars button').toggleClass('bars-btn');
       $('.bars i').toggleClass('fa-bars-staggered fa-xmark');

    });
    var backToTopButton = $('#backToTop');

    // Show the button when the user scrolls down 20px from the top
    $(window).scroll(function() {
        if ($(window).scrollTop() > 20) {
            backToTopButton.fadeIn(); // Smooth fade-in effect
        } else {
            backToTopButton.fadeOut(); // Smooth fade-out effect
        }
    });

    // Scroll to the top smoothly when the button is clicked
    backToTopButton.click(function() {
        $('html, body').animate({scrollTop: 0}, 'smooth'); // Smooth scroll to top
        return false;
    });

  });
  
  document.querySelectorAll('.increment-btn').forEach(button => {
    button.addEventListener('click', function() {
        const display = this.closest('.d-flex').querySelector('.number-display');
        display.textContent = parseInt(display.textContent) + 1;
    });
});

document.querySelectorAll('.decrement-btn').forEach(button => {
    button.addEventListener('click', function() {
        const display = this.closest('.d-flex').querySelector('.number-display');
        const currentValue = parseInt(display.textContent);
        if (currentValue > 1) {
            display.textContent = currentValue - 1;
        }
    });
});

function selectRadio(element) {
  // Remove 'selected' class from all checkbox wrappers
  var wrappers = document.querySelectorAll('.checkbox-wrapper');
  wrappers.forEach(function(wrapper) {
    wrapper.classList.remove('selected');
  });

  // Add 'selected' class to the clicked checkbox wrapper
  element.classList.add('selected');

  // Select the radio input within the clicked checkbox wrapper
  var radioInput = element.querySelector('input[type="radio"]');
  radioInput.checked = true;
}

// radio on shop page popup
window.onload = function() {
  var radioButtons = document.querySelectorAll('input[type="radio"]');
  radioButtons.forEach(function(radio) {
    if (radio.checked) {
      radio.closest('.checkbox-wrapper').classList.add('selected');
    }
  });
};

function selectCheckbox(element) {
  // Toggle 'selected' class on the clicked checkbox wrapper
  element.classList.toggle('selected');

  // Toggle checkbox checked state
  var checkbox = element.querySelector('input[type="checkbox"]');
  checkbox.checked = !checkbox.checked;
}

//popup checkbox
window.onload = function() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(function(checkbox) {
    if (checkbox.checked) {
      checkbox.closest('.checkbox-wrapper').classList.add('selected');
    }
  });
};


// read more on shop page 
document.querySelectorAll('.read-more').forEach(function(element) {
  element.addEventListener('click', function() {
      const moreText = this.previousElementSibling;
      if (moreText.style.display === 'none') {
          moreText.style.display = 'inline';
          this.textContent = ' Read Less';
      } else {
          moreText.style.display = 'none';
          this.textContent = '... Read More';
      }
  });
});
//  view more button

const productsContainer = document.getElementById('products-container');
const viewMoreBtn = document.getElementById('view-more-btn');

function addViewMoreButton() {
    const products = document.querySelectorAll('.checkbox-wrapper');
    const totalProducts = products.length;
    const chunkSize = 7;
    let currentIndex = 0;

    function showProducts(fromIndex, toIndex) {
        for (let i = fromIndex; i < toIndex && i < totalProducts; i++) {
            products[i].classList.remove('hidden');
        }
    }

    function hideAllProducts() {
        products.forEach(product => product.classList.add('hidden'));
    }

    function handleViewMore() {
        currentIndex += chunkSize;
        showProducts(currentIndex, currentIndex + chunkSize);
        if (currentIndex + chunkSize >= totalProducts) {
            viewMoreBtn.classList.add('hidden');
        }
    }

    hideAllProducts();
    showProducts(currentIndex, currentIndex + chunkSize);
    currentIndex += chunkSize;

    if (totalProducts > chunkSize) {
        viewMoreBtn.classList.remove('hidden');
        viewMoreBtn.addEventListener('click', handleViewMore);
    }
}

// Call the function to initialize the "View More" functionality
addViewMoreButton();






  document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
      // type   : 'loop',
      perPage: 3,
      perMove:1,
      autoplay: false,
      pagination : false,
    }).mount();
    new Splide('.offer-splide',
    {
      arrows : false ,
      autoplay : false,
      pagination : false
    }
    ).mount();
    new Splide('.offer-splide2',
    {
      arrows : false ,
      autoplay : false,
      pagination : false
    }
    ).mount();
    
  });