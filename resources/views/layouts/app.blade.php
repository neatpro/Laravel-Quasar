<?php
  $colorDrawer = 'white';
  $colorToolbar = 'white';
  $colorText = 'black';
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <q-layout view="lHh Lpr fff">
      <q-layout-header>
        <q-toolbar class='bg-{{$colorToolbar}} text-{{$colorText}}'>
          <q-btn flat round dense @click="drawerState = !drawerState" icon="menu"></q-btn>
          <q-toolbar-title>
            Quasar
            <div slot="subtitle">Running on Laravel</div>
          </q-toolbar-title>
        </q-toolbar>
      </q-layout-header>

      <q-layout-drawer v-model="drawerState" content-class="bg-{{$colorDrawer}}">
        <q-list no-border link inset-delimiter>
          <q-list-header>Essential Links</q-list-header>
          <q-item @click.native="launch('http://quasar-framework.org')">
            <q-item-side icon="school"></q-item-side>
            <q-item-main label="Docs" sublabel="quasar-framework.org"></q-item-main>
          </q-item>
          <q-item @click.native="launch('http://forum.quasar-framework.org')">
            <q-item-side icon="forum"></q-item-side>
            <q-item-main label="Forum" sublabel="forum.quasar-framework.org"></q-item-main>
          </q-item>
          <q-item @click.native="launch('https://gitter.im/quasarframework/Lobby')">
            <q-item-side icon="chat"></q-item-side>
            <q-item-main label="Gitter Channel" sublabel="Quasar Lobby"></q-item-main>
          </q-item>
          <q-item @click.native="launch('https://twitter.com/quasarframework')">
            <q-item-side icon="rss feed"></q-item-side>
            <q-item-main label="Twitter" sublabel="@quasarframework"></q-item-main>
          </q-item>
        </q-list>
      </q-layout-drawer>

      <q-page-container style="margin:30px">
    <div class="flex row">
      <component1 class='col'>Main Layout</component1>
      <component2 class='col'>Main Layout</component2>
      <component3 class='col'>Main Layout</component3>
    </div>
        @yield('content')
      </q-page-container>
    </q-layout>

  </div>

  <!-- Scripts -->
  @yield('script')
</body>
</html>
