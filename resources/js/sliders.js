const Swiper = require("swiper");

const navigationOptions = {
    slidesPerView: "auto",
    spaceBetween: 100,
};

const productsOptions = {
    slidesPerView: 1,
    spaceBetween: 20,
};

new Swiper.Swiper("#navigation", navigationOptions);

new Swiper.Swiper(".product-gallery", productsOptions);
