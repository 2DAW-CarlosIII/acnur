@extends('layouts.master')

@section('content')


<h2
class="field field--name-field-title field--type-text field--label-hidden">
En los peores momentos, tu ayuda es vital </h2>
<div
class="field field--name-field-send-help-form field--type-blockreference field--label-hidden">
<div class="field__items">
    <div class="field__item even">
        <div id="block-eacnur-landing-landing-form-block-alt-1"
            class="block block--eacnur-landing block--eacnur-landing-landing-form-block-alt-1">
            <div class="block__content">
                <div id="replace_donation_form">
                    <form
                        class="eacnur-donation-main-form"
                        action="donaciones"
                        method="post"
                        id="eacnur-donation-main-form"
                        accept-charset="UTF-8">
                        @csrf
                        <div>
                            <fieldset
                                class="form-wrapper"
                                id="edit-step1">
                                <div
                                    class="fieldset-wrapper">
                                    <div
                                        class="form-item form-type-radios form-item-donation-type-donor-qty">
                                        <label
                                            for="edit-donation-type-donor-qty">¿Qué cantidad quieres donar?
                                        </label>
                                        <div id="edit-donation-type-donor-qty"
                                            class="form-radios donor-quantities">
                                            <div style="height: 8rem; width: calc(20% - 1px);display:block;"
                                                class="form-item form-type-radio form-item-donation-type-donor-qty">
                                                <input
                                                    name="partner_type_qty"
                                                    class="donor-quantities form-radio"
                                                    type="radio"
                                                    id="edit-donation-type-donor-qty-25"
                                                    value="25"
                                                    checked="" />
                                                <label
                                                    class="option"
                                                    for="edit-donation-type-donor-qty-25">25 €
                                                </label>

                                            </div>
                                            <div style="height: 8rem; width: calc(20% - 1px);display:block;"
                                                class="form-item form-type-radio form-item-donation-type-donor-qty">
                                                <input
                                                    name="partner_type_qty"
                                                    class="donor-quantities form-radio"
                                                    type="radio"
                                                    id="edit-donation-type-donor-qty-50"
                                                    value="50"
                                                    checked="" />
                                                <label
                                                    class="option"
                                                    for="edit-donation-type-donor-qty-50">50 €
                                                </label>

                                            </div>
                                            <div style="height: 8rem; width: calc(20% - 1px);display:block;"
                                                class="form-item form-type-radio form-item-donation-type-donor-qty">
                                                <input
                                                    name="partner_type_qty"
                                                    class="donor-quantities form-radio"
                                                    type="radio"
                                                    id="edit-donation-type-donor-qty-75"
                                                    value="75"
                                                    checked="" />
                                                <label
                                                    class="option"
                                                    for="edit-donation-type-donor-qty-75">75 €
                                                </label>

                                            </div>
                                            <div style="height: 8rem; width: calc(20% - 1px);display:block;"
                                                class="form-item form-type-radio form-item-donation-type-donor-qty">
                                                <input
                                                    name="partner_type_qty"
                                                    class="donor-quantities form-radio"
                                                    type="radio"
                                                    id="edit-donation-type-donor-qty-100"
                                                    value="100"
                                                    checked="" />
                                                <label
                                                    class="option"
                                                    for="edit-donation-type-donor-qty-100">100 €
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset
                                class="form-wrapper"
                                id="edit-step2">
                                <legend><span
                                        class="fieldset-legend">Estos son mis datos personales</span>
                                </legend>
                                <div
                                    class="fieldset-wrapper">
                                    <div
                                        class="form-item form-type-textfield form-item-donation-personal-name">
                                        <label
                                            for="edit-donation-personal-name">Nombre
                                            <span
                                                class="form-required"
                                                title="Este campo es obligatorio.">*</span></label>
                                        <input
                                            type="text"
                                            id="edit-donation-personal-name"
                                            name="donation_personal_name"
                                            value=""
                                            size="60"
                                            maxlength="40"
                                            class="form-text required" />
                                    </div>
                                    <div
                                        class="form-item form-type-textfield form-item-donation-personal-last-name1">
                                        <label
                                            for="edit-donation-personal-last-name1">Primer apellido
                                            <span
                                                class="form-required"
                                                title="Este campo es obligatorio.">*</span></label>
                                        <input
                                            type="text"
                                            id="edit-donation-personal-last-name1"
                                            name="donation_personal_last_name1"
                                            value=""
                                            size="60"
                                            maxlength="128"
                                            class="form-text required" />
                                    </div>
                                    <div
                                        class="form-item form-type-textfield form-item-donation-personal-last-name2">
                                        <label
                                            for="edit-donation-personal-last-name2">Segundo apellido
                                        </label>
                                        <input
                                            type="text"
                                            id="edit-donation-personal-last-name2"
                                            name="donation_personal_last_name2"
                                            value=""
                                            size="60"
                                            maxlength="128"
                                            class="form-text" />
                                    </div>
                                    <div
                                        class="form-item form-type-emailfield form-item-donation-personal-email">
                                        <label
                                            for="edit-donation-personal-email">Correo electrónico
                                            <span
                                                class="form-required"
                                                title="Este campo es obligatorio.">*</span></label>
                                        <input
                                            type="email"
                                            id="edit-donation-personal-email"
                                            name="donation_personal_email"
                                            value=""
                                            size="60"
                                            maxlength="128"
                                            class="form-text form-email required" />
                                    </div>
                                    <div
                                        class="form-item form-type-telfield form-item-donation-personal-mobile">
                                        <label
                                            for="edit-donation-personal-mobile">Teléfono
                                            <span
                                                class="form-required"
                                                title="Este campo es obligatorio.">*</span></label>
                                        <input
                                            pattern="[0-9]+"
                                            type="tel"
                                            id="edit-donation-personal-mobile"
                                            name="donation_personal_mobile"
                                            value=""
                                            size="20"
                                            maxlength="20"
                                            class="form-text form-tel required" />
                                    </div>
                                </div>
                            </fieldset>
                            <div
                                class="form-submit-wrapper">
                                <input
                                    data-text-donation="Dona ahora"
                                    data-text-partner="Hacerme socio"
                                    type="submit"
                                    id="edit-submit"
                                    name="op"
                                    value="Dona ahora"
                                    class="form-submit" /><span
                                    class="sending-tag">Enviando...</span><span
                                    class="verisign-icon"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
