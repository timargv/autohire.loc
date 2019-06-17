@extends('errors::illustrated-layout')

@section('title', __('Доступ запрещен'))
@section('code', '403')
@section('message', __($exception->getMessage() ? 'Доступ запрещен' : 'Доступ запрещен'))
