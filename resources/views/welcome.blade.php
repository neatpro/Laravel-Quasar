@extends('layouts.app')

@section('content')
	<q-page>
		<div class="flex row">
		  <component1 class='col'>Welcome Page</component1>
		  <component2 class='col'>Welcome Page</component2>
			<component3 class='col'>Welcome Page</component3>
		</div>
		<br>
		<q-toolbar color="primary" >
      <q-btn
        flat round dense
        icon="menu"
      ></q-btn>
		  <q-toolbar-title>
		    Toolbar
		    <span slot="subtitle">
		      Subtitle
		    </span>
		  </q-toolbar-title>
		</q-toolbar>
	</q-page>
@endsection

@section('script')
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/quasar-framework@0.15.6/dist/umd/quasar.mat.umd.min.js"></script>
  <script>
    new Vue({
      el: '#app',
      data: function () {
        return {
          drawerState: false
        }
      },
      methods: {
        launch: function (url) {
          Quasar.utils.openURL(url)
        }
      }
    })
  </script>
@endsection
