var mySwiper = new Swiper('.advantages-swiper', {
  freeMode: true,
  slidesPerView: 'auto',
  spaceBetween: 50,
  slidesPerView: 2.5,
  slidesPerGroup: 2,
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    snapOnRelease: false
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 30
    },
    770: {
      slidesPerView: 1.5,
      slidesPerGroup: 1,
      spaceBetween: 30
    },
    1080: {
      slidesPerView: 2.5,
      spaceBetween: 50
    }
  }
});


var mySwiper = new Swiper('.flat-swiper', {
  spaceBetween: 40,
  slidesPerView: 4,
  slidesPerGroup: 1,
  observer: true,
  observeParents: true,
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    snapOnRelease: false
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    570: {
      slidesPerView: 2,
      spaceBetween: 25
    },
    1080: {
      slidesPerView: 4,
      spaceBetween: 40
    }
  }
});


var mySwiper = new Swiper('.progress-swiper', {
  spaceBetween: 40,
  slidesPerView: 3,
  slidesPerGroup: 1,
  scrollbar: {
    el: '.progress-scrollbar',
    draggable: true,
    snapOnRelease: false
  },
  navigation: {
    nextEl: '.pr-button-next',
    prevEl: '.pr-button-prev'
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    570: {
      slidesPerView: 2,
      spaceBetween: 25
    },
    1080: {
      slidesPerView: 3,
      spaceBetween: 40
    }
  }
});


var mySwiper = new Swiper('.real-estate-swiper', {
  spaceBetween: 40,
  slidesPerView: 4,
  slidesPerGroup: 1,
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    snapOnRelease: false
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  breakpoints: {
    320: {
      slidesPerView: 1.01,
      spaceBetween: 10
    },
    570: {
      slidesPerView: 2,
      spaceBetween: 25
    },
    1080: {
      slidesPerView: 4,
      spaceBetween: 40
    }
  }
});


var mySwiper = new Swiper('.gallery-swiper', {
  spaceBetween: 40,
  slidesPerView: 2,
  slidesPerGroup: 1,
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    snapOnRelease: false
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    570: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    1080: {
      slidesPerView: 2,
      spaceBetween: 40
    }
  }
});


var mySwiper = new Swiper('.main-gallery-swiper', {
  spaceBetween: 10,
  slidesPerView: 1,
  slidesPerGroup: 1,
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
    snapOnRelease: false
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});