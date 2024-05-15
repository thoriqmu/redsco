@extends('layout.nav')
@section('title', 'Kuisioner')
@section('content')
    <div class="container fade-in">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="card kuisioner1">
                <div class="question active" id="question1">
                    <div class="row">
                        <div class="col-8">
                            <table class="table table-borderless">
                                <thead>
                                    <tr rowspan="2">
                                        <th>
                                            <h1 class="nmrsoal fw-bold">1</h1>
                                        </th>
                                        <th>
                                            <h3 class="ms-3"><span class="warnatipe">Tipe</span> parfum apa yang cocok
                                                dengan
                                                anda?</h3>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="">
                                            <div class="choices">
                                                <label class="choice text-start mx-5 fs-5"><input type="checkbox"
                                                        name="answer1" value="Starboy" data-variant="2"> Maskulin</label>
                                                <label class="choice text-center mx-5 fs-5"><input type="checkbox"
                                                        name="answer1" value="Vanille" data-variant="3"> Feminim</label>
                                                <label class="choice text-end mx-5 fs-5"><input type="checkbox"
                                                        name="answer1" value="Esmeralda" data-variant="1"> Unisex</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('img/img19.png') }}" alt="Parfum Image" class="img-fluid d-none d-lg-block"
                                style="width: 90%">
                        </div>
                    </div>
                </div>

                <div class="question" id="question2">
                    <div class="row">
                        <div class="col-8">
                            <table class="table table-borderless">
                                <thead>
                                    <tr rowspan="2">
                                        <th>
                                            <h1 class="nmrsoal fw-bold">2</h1>
                                        </th>
                                        <th class="col-6" colspan="2">
                                            <h3 class="ms-3"><span class="warnatipe">Karakteristik</span> parfum apa yang
                                                sesuai dengan anda?</h3>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-1"></td>
                                        <td class="col-3">
                                            <div class="choices">
                                                <ul class="list-group">
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Starboy" data-variant="2">
                                                            Kuat</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Euphoria" data-variant="4">
                                                            Manis</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Vanille" data-variant="3">
                                                            Segar</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Euphoria" data-variant="4">
                                                            Woody</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Esmeralda" data-variant="1">
                                                            Buah-buahan</label></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="col-3">
                                            <div class="choices">
                                                <ul class="list-group">
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Starboy" data-variant="2">
                                                            Romantic</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Vanille" data-variant="3">
                                                            Hangat</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Euphoria" data-variant="4">
                                                            Ceria</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Esmeralda" data-variant="1">
                                                            Menawan</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Vanille" data-variant="3">
                                                            Menenangkan</label></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('img/img19.png') }}" alt="Parfum Image"
                                class="img-fluid d-none d-lg-block" style="width: 90%">
                        </div>
                    </div>
                </div>

                <div class="question" id="question3" data-last-question>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-borderless">
                                <thead>
                                    <tr rowspan="2">
                                        <th>
                                            <h1 class="nmrsoal fw-bold">3</h1>
                                        </th>
                                        <th class="col-6" colspan="2">
                                            <h3 class="ms-3"><span class="warnatipe">Aroma</span> parfum apa yang cocok
                                                dengan anda?</h3>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-1"></td>
                                        <td class="col-3">
                                            <div class="choices">
                                                <ul class="list-group">
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Vanille" data-variant="3">
                                                            Vanilla</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Vanille" data-variant="3">
                                                            Musk</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Vanille" data-variant="3">
                                                            Sandalwood</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Vanille" data-variant="3">
                                                            Coconut</label></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="col-6">
                                            <div class="choices">
                                                <ul class="list-group">
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Euphoria" data-variant="4">
                                                            Madu</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Euphoria" data-variant="4">
                                                            Lavender</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Esmeralda" data-variant="1"> Red
                                                            Berries</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-start fs-5"><input type="checkbox"
                                                                name="answer1" value="Esmeralda" data-variant="1"> Black
                                                            Current</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="col-3">
                                            <div class="choices">
                                                <ul class="list-group">
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Starboy" data-variant="2">
                                                            Rum</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Esmeralda" data-variant="1">
                                                            Nanas</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Starboy" data-variant="2"> White
                                                            musk</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Euphoria" data-variant="4"> Woody
                                                            notes</label></li>
                                                    <li class="list-group-item gruprasa"><label
                                                            class="choice text-end fs-5"><input type="checkbox"
                                                                name="answer1" value="Esmeralda" data-variant="1">
                                                            Jasmine rose</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end me-3">
                        <button onclick="previousQuestion()">Previous</button>
                        <button id="nextButton" onclick="nextQuestion()">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
