@extends('welcome')

@section('etiquette')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
               
                <div>
                    <div style="display: flex">
                        <img class="flex items-center" src="{{asset('/images/logo.png')}}" alt="logo">
                        <img class="flex items-center" src="{{asset('/images/qrcode.png')}}" alt="logo" width="100px" height="130px">
                        <b><h1 id="code" style="padding: 30px; font-size: 30px">BE01L501-22</h1></b>
                    </div>
                    <div>
                        <h1>Générateur du Code Tracking</h1>
                    </div>
                </div>               
               
                
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Pays:</div>
                                <form id="frmEtiquette" action="{{ route('bordereau.bordereau') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <select name="pays" id="">
                                        <option value="">Sélectionner un pays</option>
                                        <option value="be">Belgique</option>
                                        <option value="fr">France</option>
                                        <option value="lu">Luxembourg</option>
                                    </select>
                                {{-- </form> --}}
                                {{-- @yield('pays') --}}
                            </div>

                            {{-- <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    @yield('pays')
                                </div>
                            </div> --}}
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Article:</div>
                                {{-- <form id="frmArticles" action="#"> --}}
                                    <select name="articles" id="">
                                        <option value="">Sélectionner un article</option>
                                        <option value="L">Laptop</option>
                                        <option value="C">Câbles</option>
                                        <option value="O">Ordinateurs</option>
                                        <option value="Pc">Pc</option>
                                        <option value="I">Imprimantes</option>
                                        <option value="V">Variés</option>
                                    </select>
                                {{-- </form> --}}
                                {{-- @yield('articles') --}}
                            </div>

                            {{-- <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    @yield('articles')
                                </div>
                            </div> --}}
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Fournisseur:</div>
                                {{-- <form id="frmFournisseurs" action="#"> --}}
                                    <select name="fournisseurs" id="">
                                        <option value="">Sélectionner un fournisseur</option>
                                        <option value="01">SPF Justice</option>
                                        <option value="02">SPF Finance</option>
                                        <option value="03">SPF Economie</option>
                                        <option value="04">SPF Santé</option>
                                        <option value="05">SPF Office des étrangers</option>
                                    </select>
                                {{-- </form> --}}
                                {{-- @yield('fournisseurs') --}}
                            </div>

                            {{-- <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    @yield('fournisseurs')
                                </div>
                            </div> --}}
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Opérateur:</div>
                                {{-- <form id="frmOperateurs" action="#"> --}}
                                    <select name="operateurs" id="">
                                        <option value="">Sélectionner un opérateur</option>
                                        <option value="1">Jean Baptiste</option>
                                        <option value="2">Eric</option>
                                        <option value="3">Hayk</option>
                                        <option value="4">Mohamed Ba</option>
                                        <option value="5">Modibo TOGO</option>
                                        <option value="6">Papa Célestin</option>
                                    </select>
                                </form>
                                {{-- @yield('operateurs') --}}
                            </div>

                            {{-- <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    @yield('operateurs')
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <button id="etiquette" type="submit" style="margin-left: 270px; margin-top: 20px; width: 250px; color: white; background-color: #1E9C07" class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">Générer l'étiquette</button>
                    {{-- <button type="submit" style="margin-left: 110px; margin-top: 20px; color: white; background-color: #1E9C07" class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">Générer bordereau d'enlevement</button> --}}
                    <a href="{{ route('bordereau.bordereau') }}" id="borderau" style="color:#1E9C07; font-size: 30px; margin-left: 150px;"><b>Vers la création du bordereau</b></a>
                </div>
                  
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">                    
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0" style="margin-left: 200px; padding-top: 50px">
                         Application développée par bELwageny@2022
                    </div>
                </div>
            </div>
        </div> 
@endsection
