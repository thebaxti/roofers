@extends('layouts.admin')

@section('title')
    Админ панель
@endsection

@section('main')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Админ панель</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <!-- <div class="col-md-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="far fa-newspaper" style="font-size: 32px; color: #663399;"></i>
                        <p class="text-muted mt-2 mb-2">Все категори</p>
                        <p class="lead text-22 m-0">{{ $categories ?? '0' }}</p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
@endsection
