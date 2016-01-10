@extends('layouts.master')

@section('content')
  <h1>Mentions Légales</h1>

  <div id="legal">
    <h3>Respect dans la galaxy</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae blanditiis, dolore dolorem eligendi
      est fugit illo iste, minus molestiae nihil nostrum odio officia, quibusdam tempora temporibus voluptas
      voluptatibus.
    </p>

    <h3>Pas de pirates parmis les Jedi</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, beatae corporis deserunt dicta dolor doloribus
      ducimus error et facere, inventore modi molestias neque nulla possimus quod tempora ullam veritatis,
      voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio enim mollitia
      necessitatibus. Commodi eaque, exercitationem harum inventore laudantium quaerat similique vel! Atque ea hic
      incidunt molestias porro reprehenderit repudiandae!
    </p>

    <h3>Darkvador est le mal</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, perspiciatis, totam. Accusantium amet aut
      corporis dignissimos facere fuga harum illo in iste magni nam perferendis, perspiciatis placeat quasi qui,
      vero!
    </p>

    <div class="row creator">
      <h3>La force de ce site</h3>

      <a href="http://www.doyoubuzz.com/yannick-placerdat" target="_blank">
        <img src="{{ asset('assets/img/yannick.jpg') }}" alt="photo de Yannick Placerdat" class="test">
      </a>

      <a href="http://vincent-deletang.com/" target="_blank">
        <img src="{{ asset('assets/img/vincent.jpg') }}" alt="photo de Vincent Delatang" class="test">
      </a>
    </div>
  </div>
@endsection