Work in progress
=================


SliderBundle
============

### Create slider using coin-slider

![Alt Text](http://workshop.rs/wp-content/uploads/2010/04/coin-slider.png)

[Coin Slider](http://workshop.rs/2010/04/coin-slider-image-slider-with-unique-effects/)


### Gregwar-ImageBundle

[Gregwar ImageBundle](https://github.com/Gregwar/ImageBundle)

#### HowTo : Comming soon


## config
    klesk_slider:
      width: 930
      height: 255
      square_per_width: 7
      square_per_height: 5
      delay: 3000
      effect: random
      next: Next
      prev: prev
      resize: none
      imagepath: "images/news/"

> if `resize`if different than `none`. It use GregwarImageBundle

#### config nodes
- effect
    - random
    - rain
    - swirl
    - straight

###### List
- [ ] Create readme
- [ ] Complete test