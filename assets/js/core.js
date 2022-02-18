const endpoint = 'https://sermadre.com/nombre/'

window.addEventListener('load', () => {

    let carousel = document.querySelector('.serma-carousel')
    let carousel_arrow_left = document.querySelectorAll('.serma-carousel-arrow-left')
    let carousel_arrow_right = document.querySelectorAll('.serma-carousel-arrow-right')

    carousel_arrow_left.forEach(item => {
        item.addEventListener('click', () => {
            let carousel_id = item.getAttribute('serma-carousel-target')
            let carousel = document.querySelector(`[serma-carousel-id=${carousel_id}]`)
            carousel.scrollLeft = carousel.scrollLeft - 250
        })
    })

    carousel_arrow_right.forEach(item => {
        let carousel_id = item.getAttribute('serma-carousel-target')
        let carousel = document.querySelector(`[serma-carousel-id=${carousel_id}]`)
        item.addEventListener('click', () => {
            carousel.scrollLeft = carousel.scrollLeft + 250
        })
    })

})

/*VUE INSTANCE*/

const vm = Vue.createApp({
    data () {
        return {
            loading: false,
            show_options: false,
            gender_selected: 0,
            form: {
                maleFemale: 0,
                firstLetter: 'a',
                pop: 'high',
                minLen: null,
                maxLen: null,
                numResults: 10,
            },
            default: {
                maleFemale: 0,
                firstLetter: 'a',
                pop: 'high',
                minLen: null,
                maxLen: null,
                numResults: 10,
            },
            names: [],
            splitted_names: []
        }
    },
  
    methods: {
        generateName() {
            let app = this
            app.loading = true

            app.names = []
            app.splitted_names = []

            app.$http.post(serma_baby_name_generator_ajax + 'serma_baby_generate_random_name', app.form).then( res => {
                app.names = res.data
                app.gender_selected = app.form.maleFemale
                app.loading = false
                app.names.forEach( e => {
                    e.slug = endpoint + app.slugify(e.name)
                })
                if(app.names.length > 0)
                    app.splitted_names = app.splitResults()
            }).then( () => {
                if(app.names.length > 0) 
                    app.$refs.serma_name_generator_results.scrollIntoView({behavior: "smooth"})
            })
        },

        resetForm() {
            let app = this
            app.gender_selected = 0
            app.form = Object.assign({}, app.default)
            app.names = []
            app.splitted_names = []
            app.$refs.serma_name_generator_form.scrollIntoView({behavior: "smooth"})
        },

        splitResults() {
            let app = this
            return {
                first_half: app.names.slice(0, app.names.length / 2),
                second_half: app.names.slice(app.form.numResults / 2, app.names.length)
            }
        },

        slugify(text) {
            return text
              .toString()                           // Cast to string (optional)
              .normalize('NFKD')            // The normalize() using NFKD method returns the Unicode Normalization Form of a given string.
              .toLowerCase()                  // Convert the string to lowercase letters
              .trim()                                  // Remove whitespace from both sides of a string (optional)
              .replace(/\s+/g, '-')            // Replace spaces with -
              .replace(/[^\w\-]+/g, '')     // Remove all non-word chars
              .replace(/\-\-+/g, '-');        // Replace multiple - with single -
        }
    }
  })
  .use(VueAxios, axios)
  .mount('#serma-app-container')
