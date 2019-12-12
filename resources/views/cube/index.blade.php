@extends('layouts.app')
@section('content')

<div class="container task-wrap">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="jumbotron" class="margin: 0px;">
                    <h1>Квадрат</h1>
                        <p>Найдите в квадрате все слова, относящиеся к теме Файловая система хранения (NAS). Слова располагаются ТОЛЬКО по горизонтали. Все найденные слова подставьте под нужные маски.</p>
                    <div class="row">
                        <div class="col-6">
                            <h5> Найдите слова в квадрате</h5>
                            <br>
                            <table border="1">
                                <tr>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Д</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">Э</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">С</th>
                                </tr>

                                <!--2  stroka-->

                                <tr>
                                    <th class="cube-th">Д</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">Х</th>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">К</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Ш</th>
                                </tr>

                                <!--3  stroka-->

                                <tr>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Х</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Э</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">Д</th>
                                    <th class="cube-th">Ю</th>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">Ж</th>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">А</th>
                                </tr>

                                <!--4  stroka-->

                                <tr>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Х</th>
                                    <th class="cube-th">Ц</th>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">И</th>
                                </tr>

                                <!--5  stroka-->

                                <tr>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Ч</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">К</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Д</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">Ю</th>
                                </tr>

                                <!--6  stroka-->

                                <tr>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">Ю</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Ч</th>
                                    <th class="cube-th">Э</th>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Ь</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">У</th>

                                </tr>

                                <!--7  stroka-->

                                <tr>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">Ю</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Е</th>
                                </tr>

                                <!--8  stroka-->

                                <tr>
                                    <th class="cube-th">Ь</th>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Ю</th>
                                    <th class="cube-th">Ю</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">Э</th>
                                    <th class="cube-th">Э</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Й</th>
                                </tr>


                                <!--9  stroka-->

                                <tr>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Ж</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Ю</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">Ч</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Ц</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">П</th>
                                </tr>

                                <!--10  stroka-->

                                <tr>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Д</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">К</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Д</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Я</th>
                                </tr>


                                <!--11  stroka-->

                                <tr>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">З</th>
                                    <th class="cube-th">З</th>
                                    <th class="cube-th">Э</th>
                                    <th class="cube-th">З</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Ч</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">Ш</th>
                                </tr>


                                <!--12  stroka-->

                                <tr>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">Ж</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">З</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Ц</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Я</th>
                                </tr>

                                <!--13  stroka-->

                                <tr>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Г</th>
                                </tr>

                                <!--14  stroka-->

                                <tr>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Х</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Ч</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Э</th>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">Э</th>
                                </tr>

                                <!--15  stroka-->

                                <tr>
                                    <th class="cube-th">Ю</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Ц</th>
                                    <th class="cube-th">К</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Н</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">Ж</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Р</th>
                                </tr>

                                <!--16  stroka-->

                                <tr>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">Ф</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Ц</th>
                                    <th class="cube-th">Ш</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Э</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">П</th>
                                </tr>

                                <!--17  stroka-->

                                <tr>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">Х</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">К</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">Х</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">З</th>
                                    <th class="cube-th">Б</th>
                                </tr>

                                <!--18  stroka-->

                                <tr>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">К</th>
                                    <th class="cube-th">В</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Я</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Ы</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Ж</th>
                                    <th class="cube-th">Ю</th>
                                    <th class="cube-th">Ч</th>
                                    <th class="cube-th">Ц</th>
                                    <th class="cube-th">В</th>
                                </tr>

                                <!--19  stroka-->

                                <tr>
                                    <th class="cube-th">Щ</th>
                                    <th class="cube-th">Ж</th>
                                    <th class="cube-th">О</th>
                                    <th class="cube-th">К</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">У</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Ь</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">Д</th>
                                    <th class="cube-th">Т</th>
                                    <th class="cube-th">Ж</th>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">Д</th>
                                    <th class="cube-th">И</th>
                                    <th class="cube-th">П</th>
                                    <th class="cube-th">Ж</th>
                                </tr>

                                <!--20  stroka-->

                                <tr>
                                    <th class="cube-th">Ь</th>
                                    <th class="cube-th">С</th>
                                    <th class="cube-th">Ё</th>
                                    <th class="cube-th">Е</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">Р</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">К</th>
                                    <th class="cube-th">З</th>
                                    <th class="cube-th">Г</th>
                                    <th class="cube-th">М</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">Й</th>
                                    <th class="cube-th">Ъ</th>
                                    <th class="cube-th">Л</th>
                                    <th class="cube-th">Ц</th>
                                    <th class="cube-th">Б</th>
                                    <th class="cube-th">А</th>
                                    <th class="cube-th">Ж</th>
                                    <th class="cube-th">Г</th>
                                </tr>

                            </table>
                        </div>


                        <div class="col-6">
                            <h5> Впишите в маски справа</h5>
                            <br>

                            <div style="display:inline-block" class="word1">
                                <label>1. </label>
                                <input type="text" class="cube-input"  id="i11" maxlength="1">
                                <input type="text" class="cube-input"  id="i12" maxlength="1">
                                <input type="text" class="cube-input"  id="i13" maxlength="1">
                                <input type="text" class="cube-input"  id="i14" maxlength="1">
                                <input type="text" class="cube-input"  id="i15" maxlength="1">
                                <input type="text" class="cube-input"  id="i16" maxlength="1">
                                <input type="text" class="cube-input"  id="i17" maxlength="1">
                                <input type="text" class="cube-input"  id="i18" maxlength="1">
                                <input type="text" class="cube-input"  id="i19" maxlength="1">
                                <input type="text" class="cube-input"  id="i110" maxlength="1">
                                <input type="text" class="cube-input"  id="i111" maxlength="1">
                                <input type="text" class="cube-input"  id="i112" maxlength="1">
                                <input type="text" class="cube-input"  id="i113" maxlength="1">
                                <input type="text" class="cube-input"  id="i114" maxlength="1">

                                <br>Чаще всего ? хранение данных в разных системах хранения, либо в системе хранения и облаке, используют для архивирования или с целью соответствия требованиям регуляторов<br>

                            </div>
                            <br><br>


                            <div style="display:inline-block" class="word1">
                                <label>2. </label>
                                <input type="text" class="cube-input"  id="i21" maxlength="1">
                                <input type="text" class="cube-input"  id="i22" maxlength="1">
                                <input type="text" class="cube-input"  id="i23" maxlength="1">
                                <input type="text" class="cube-input"  id="i24" maxlength="1">
                                <input type="text" class="cube-input"  id="i25" maxlength="1">
                                <input type="text" class="cube-input"  id="i26" maxlength="1">
                                <br> Степень масштабируемости таких компонентов, как процессор, ?, сетевые адаптеры и система хранения, зависит от типа используемой архитектуры NAS<br>
                            </div>
                            <br><br>



                            <div style="display:inline-block" class="word1">
                                <label>3. </label>
                                <input type="text" class="cube-input"  id="i31" maxlength="1">
                                <input type="text" class="cube-input"  id="i32" maxlength="1">
                                <input type="text" class="cube-input"  id="i33" maxlength="1">
                                <input type="text" class="cube-input"  id="i34" maxlength="1">
                                <input type="text" class="cube-input"  id="i35" maxlength="1">
                                <br>Cервер общего назначения можно использовать для размещения ? приложения, поскольку он работает под управлением операционной системы общего назначения<br>
                            </div>
                            <br><br>

                            <div style="display:inline-block" class="word1">
                                <label>4. </label>
                                <input type="text" class="cube-input"  id="i41" maxlength="1">
                                <input type="text" class="cube-input"  id="i42" maxlength="1">
                                <input type="text" class="cube-input"  id="i43" maxlength="1">
                                <input type="text" class="cube-input"  id="i44" maxlength="1">
                                <input type="text" class="cube-input"  id="i45" maxlength="1">
                                <input type="text" class="cube-input"  id="i46" maxlength="1">
                                <input type="text" class="cube-input"  id="i47" maxlength="1">
                                <input type="text" class="cube-input"  id="i48" maxlength="1">
                                <input type="text" class="cube-input"  id="i49" maxlength="1">
                                <input type="text" class="cube-input"  id="i410" maxlength="1">
                                <br>Система NAS состоит из двух компонентов — ? и системы хранения<br>
                            </div>

                            <br><br>
                            <div style="display:inline-block" class="word1">
                                <label>5. </label>
                                <input type="text" class="cube-input"  id="i51" maxlength="1">
                                <input type="text" class="cube-input"  id="i52" maxlength="1">
                                <input type="text" class="cube-input"  id="i53" maxlength="1">
                                <input type="text" class="cube-input"  id="i54" maxlength="1">
                                <input type="text" class="cube-input"  id="i55" maxlength="1">
                                <input type="text" class="cube-input"  id="i56" maxlength="1">
                                <input type="text" class="cube-input"  id="i57" maxlength="1">
                                <input type="text" class="cube-input"  id="i58" maxlength="1">
                                <input type="text" class="cube-input"  id="i59" maxlength="1">
                                <input type="text" class="cube-input"  id="i510" maxlength="1">
                                <br> HSM — это концепция мобильности файлов, в рамках которой система политик, представляющая собой программное или ? обеспечение, в котором выполняется настройка политик, упрощает перемещение файлов из основной многоуровневой системы хранения во вторичную многоуровневую СХД в соответствии с предварительно настроенными политиками<br>

                            </div>
                            <br><br>
                            <div style="display:inline-block" class="word1">
                                <label>6. </label>
                                <input type="text" class="cube-input"  id="i61" maxlength="1">
                                <input type="text" class="cube-input"  id="i62" maxlength="1">
                                <input type="text" class="cube-input"  id="i63" maxlength="1">
                                <input type="text" class="cube-input"  id="i64" maxlength="1">
                                <input type="text" class="cube-input"  id="i65" maxlength="1">
                                <input type="text" class="cube-input"  id="i66" maxlength="1">
                                <input type="text" class="cube-input"  id="i67" maxlength="1">
                                <br> Многоуровневое хранение работает по принципу иерархического управления ? хранения<br>


                            </div>
                            <br><br>
                            <div style="display:inline-block" class="word1">
                                <label>7. </label>
                                <input type="text" class="cube-input"  id="i71" maxlength="1">
                                <input type="text" class="cube-input"  id="i72" maxlength="1">
                                <input type="text" class="cube-input"  id="i73" maxlength="1">
                                <input type="text" class="cube-input"  id="i74" maxlength="1">
                                <input type="text" class="cube-input"  id="i75" maxlength="1">
                                <input type="text" class="cube-input"  id="i76" maxlength="1">
                                <input type="text" class="cube-input"  id="i77" maxlength="1">
                                <input type="text" class="cube-input"  id="i78" maxlength="1">
                                <input type="text" class="cube-input"  id="i79" maxlength="1">
                                <input type="text" class="cube-input"  id="i710" maxlength="1">
                                <br> Виртуализация на уровне файлов создаёт ? пул ресурсов хранения, предоставляя пользователям возможность использовать ? путь для доступа к файлам<br>
                            </div>

                            <button style="display:none;" type="button" onclick="check();" class="btn btn-warning btn-lg">Жми сюда, чтобы проверить!</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection