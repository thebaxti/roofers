@extends('layouts.admin')

@section('title')
    Настройки сайта
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Настройки сайта</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('settings.update', 1) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">

                                <div class="col-md-4 form-group mb-3">
                                    <label>Facebook</label>
                                    <input class="form-control" name="facebook" value="{{ $setting->facebook ?? '' }}"
                                           type="text" placeholder="Введите никнейм от faceboook" autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Twitter</label>
                                    <input class="form-control" name="twitter" value="{{ $setting->twitter ?? '' }}"
                                           type="text" placeholder="Введите никнейм от twitter" autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Instagram</label>
                                    <input class="form-control" name="instagram" value="{{ $setting->instagram ?? '' }}"
                                           type="text" placeholder="Введите никнейм от instagram" autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Email</label>
                                    <input class="form-control" name="email" value="{{ $setting->email ?? '' }}"
                                           type="email" placeholder="Введите email" autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Телефон 1</label>
                                    <input class="form-control" name="phone_1" value="{{ $setting->phone_1 ?? '' }}"
                                           type="tel" placeholder="Введите номер телефона" autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Телефон 2</label>
                                    <input class="form-control" name="phone_2" value="{{ $setting->phone_2 ?? '' }}"
                                           type="tel" placeholder="Введите номер телефона" autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Adres (uz)</label>
                                    <input class="form-control" name="address_uz"
                                           value="{{ $setting->address_uz ?? '' }}" type="text"
                                           placeholder="Toshkent sh., Yashnobod tumani, M. Ashrafiy ko‘chasi, 2-uy, 4-uy."
                                           autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Адрес (ru)</label>
                                    <input class="form-control" name="address_ru"
                                           value="{{ $setting->address_ru ?? '' }}" type="text"
                                           placeholder="Ташкент, Яшнабадский район, ул.М.Ашрафий, пр.2, дом 4"
                                           autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Address (en)</label>
                                    <input class="form-control" name="address_en"
                                           value="{{ $setting->address_en ?? '' }}" type="text"
                                           placeholder="Tashkent city, Yashnabad district, M. Ashrafiy street, 2nd house, 4th house."
                                           autocomplete="off">
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Kompaniya malumotlari (uz)</label>
                                    <textarea class="form-control" name="brand_info_uz"
                                              placeholder="Kompaniya haqidagi malumotlarni kiriting" cols="30" rows="1"
                                              autocomplete="off">{{ $setting->brand_info_uz }}</textarea>
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label>Информация о компании (ru)</label>
                                    <textarea class="form-control" name="brand_info_ru"
                                              placeholder="Введите информации о компании" cols="30" rows="1"
                                              autocomplete="off">{{ $setting->brand_info_ru }}</textarea>
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label>Company information (en)</label>
                                    <textarea class="form-control" name="brand_info_en"
                                              placeholder="Enter company information" cols="30" rows="1"
                                              autocomplete="off">{{ $setting->brand_info_en }}</textarea>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
