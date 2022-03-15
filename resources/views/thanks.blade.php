@extends('layouts.master')

@section('content')

<div class="field__item even">
    <div class="entity entity-paragraphs-item paragraphs-item-numbers"
        about="" typeof=""
        class="entity entity-paragraphs-item paragraphs-item-numbers">
        <div class="content">


            <div class="paragraphs-items paragraphs-items-field-number paragraphs-items-field-number-full paragraphs-items-full"
                class="paragraphs-items paragraphs-items-field-number paragraphs-items-field-number-full paragraphs-items-full">
                <div
                    class="field field--name-field-number field--type-paragraphs field--label-hidden">
                    <div class="field__items">
                        <div class="field__item even" style="margin: auto; float: none;">
                            <div class="entity entity-paragraphs-item paragraphs-item-number"
                                about="" typeof=""
                                class="entity entity-paragraphs-item paragraphs-item-number">
                                <div class="content">

                                    <div
                                        class="field field--name-field-title field--type-text field--label-hidden">
                                        <!-- Escribe aquí la cantidad donada -->
                                        {{ $donacion->partner_type_qty }} euros.
                                    </div>
                                    <div
                                        class="field field--name-field-subtitle field--type-text-long field--label-hidden">
                                        <div class="field__items">
                                            <div class="field__item even">
                                                Gracias por tu colaboraci&oacute;n. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <span class="arrow">&nbsp;</span>
            </div>



        </div>
    </div>
</div>

@endsection
