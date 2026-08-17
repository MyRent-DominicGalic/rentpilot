;(function(){

    oc.registerControl('posts-slider', class extends oc.ControlBase {
        init() {
            this.sliderType = this.config.sliderType || 'hero';
            this.element.classList.add('splide-type-' + this.sliderType);
            this.$splide = new Splide('.js-splide-news', this.getSplideOptions())
        }

        connect() {
          this.setActiveSplide()
          this.$splide.mount()
        }

        disconnect() {
          this.$splide.destroy(true)
        }


        setActiveSplide() {
          this.$splide.on('active', function(item) {
              let current = document.querySelector('.js-splide-call.active');
              if (current) {
                  current.classList.remove('active')
              }
              let next = document.querySelector("[data-slide='" + item.index + "']");
              if (next) {
                  next.classList.add('active');
              }

          });

          document.querySelectorAll('.js-splide-call').forEach(function(el) {
              el.addEventListener('click', function(e) {
                  this.$splide.go(parseInt(el.dataset.slide));
              })
          })
        }

        getSplideOptions() {
            if (this.sliderType === 'hero') {
                return this.getHeroTypeOptions();
            }

            return {};
        }

        getHeroTypeOptions() {
            return {
                type: 'fade',
                autoplay: true,
                pagination: false,
                arrows: false,
                cover: false,
                rewind: true,
                arrowPath: 'M26.6621 19.0384L20.6843 13.0607L21.745 12L29.7016 19.9566L21.7449 27.9133L20.6842 26.8527L26.9985 20.5384H11V19.0384H26.6621Z',
                breakpoints: {
                  767: {
                    pagination: true,
                    arrows: true,
                  },
                }
            };
        }

    });

})();
