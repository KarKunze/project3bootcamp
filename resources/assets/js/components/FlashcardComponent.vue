<template>
<div class="container">

    <div class="row">
        <div class="col-auto">
            <div class="card" v-for="(flashcard, index) in flashcardsData" v-if="index==currentIndex">
                <div class="col-auto">
                  <div class="row justify-content-between">
                    <button class="btn btn-secondary btn-sm" style="margin-left:15px" v-on:click="prevCard(index)"> < </button>
                    <div class="col-auto">
                        <button class="btn btn-secondary btn-sm" v-on:click="nextCard(index)"> > </button>
                    </div>
                  </div>
                </div>
                <div class="card-header">
                    <h5 class="nav-link term" href="#">{{ flashcard.term }}</h5>
                </div>
                <div class="card-body" :id="'this' + flashcard.id">
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

    data ()
        {
            return {
                index: 0,
                currentIndex: 0,
            }
        },

    mounted() {
        console.log('Component mounted.')
    },

    computed: {


    },

    methods: {

      nextCard: function() {
        if (this.currentIndex<this.flashcardsData.length-1)
        this.currentIndex++
      },

      prevCard: function() {
        if (this.currentIndex>0)
        this.currentIndex--
      },


    },


}
</script>
