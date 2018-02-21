<template>
  <div>
  	<q-btn no-caps class="full-width">
	    Component Three from
	    <slot></slot>
    </q-btn>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component Three mounted.')
    }
  }
</script>
