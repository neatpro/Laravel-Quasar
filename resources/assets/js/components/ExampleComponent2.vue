<template>
  <div>
  	<q-btn no-caps class="full-width">
	    Component Two from
	    <slot></slot>
    </q-btn>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component Two mounted.')
    }
  }
</script>
