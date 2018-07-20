<template>
    <div class="container">
      <div class="row">
          <div class="col-md-10">
              <div class="card" v-for="flashcard in filteredFlashcards">
                  <div class="card-header">
                    <a class="nav-link term" href="#">{{ flashcard.term }}</a>
                    <button type="button" class="btn-sm btn-primary" data-toggle="collapse" :data-target="'#div' + flashcard.id">Show definition</button>
                    <!-- <h4>{{ $flashcard->term }}</h4> -->
                  </div>
                  <div class="card-body description collapse" :id="'#div' + flashcard.id">
                    <p>{{ flashcard.description }}</p>
                    <div class="row justify-content-between">
                      <div class="col-auto">
                    <a :href="'/cards/' + flashcard.id + 'edit'" class="btn btn-secondary btn-sm">edit</a>
                  </div>
                  <div class="col-auto">
                    <form :action="'/cards/' + flashcard.id" method="post">
                      <input type="hidden" name="_token" :value="csrf">
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-secondary btn-sm" type="submit">delete</button>
                    </form>
                  </div>
                  </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
</template>


<script>
  export default {
      props: ['flashcardsData'],
      data: () => ({
          searchString: '',
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      }),
      mounted() {
          console.log('Component mounted.')
      },
      computed: {
          filteredFlashcards: function() {
              var flashcards_array = this.flashcardsData;
              var search_string = this.searchString.toLowerCase();
              if (!search_string) {
                  return flashcards_array;
              }
              flashcards_array = flashcards_array.filter(function(item) {
                  if(item.name.toLowerCase().indexOf(search_string) !== -1) {
                      return item;
                  }
              });
              return flashcards_array;
          }
      }
  }
</script>
