<?php
@extends('layouts.layout')

<hr>

<h1> Eventos Cadastrados</h1>
    <table border='1'>
    <tr align='center' border='3'><td>Codigo</td>
    <td>Primeiro nome</td><td>Segundo nome</td><td>Telefone</td><td>Email</td>
    <td>Cidade</td><td>Assunto</td></tr>
  <td></tr>
    @foreach ($contacts as $contacts)
    <tr align='left'><td>{{$contacts->id}}</td>
        <td>{{$contacts->firstname}}</td>
        <td>{{$contacts->lastname}}</td>
        <td>{{$contacts->telephone}}</td>
        <td>{{$contacts->email}}</td>
        <td>{{$contacts->city}}</td>
        <td>{{$contacts->subject}}</td></tr>
    @endforeach
    </table>
    
