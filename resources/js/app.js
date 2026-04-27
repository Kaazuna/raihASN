import './bootstrap';
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

import { Pagination, Autoplay } from 'swiper/modules';

document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.swiper', {
        modules: [Pagination, Autoplay],
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});