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
      self_entity: path
      entity find
      criterias:
         field: author
         value: klesk
      order:
          by: date
          sort: desc
      limit: 5
      offset: 0 

> if `resize`if different than `none`. It use GregwarImageBundle

#### possible effects
- effect
    - random
    - rain
    - swirl
    - straight

#### next/prev links
If next and/or prev node begin by a dot (.), script assume it's a CSS class. So it's possible tu use class instead of normal text.
Exemple : 

    klesk_slider:
      next: .icon-arrow-right .icon-white
      prev: .icon-arrow-left .icon-white

this will use the twitter bootstrap icon insead of text.

#### possible resise
- resise
  - force
  - resize
  - crop
  - scale
  - none

###### List
- [ ] Create readme
- [ ] Complete test