<template>
  <div>
  	<q-btn no-caps class="full-width">
	    Component One from
	    <slot></slot>
    </q-btn>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component One mounted.')
    }
  }
</script>
