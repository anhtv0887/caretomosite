@extends('demo.Default')
@section('title','介護・	福祉の学生就職サイトケアガク－学生登録フォーム')
@section('externalfile')
    <script type="text/javascript" src="{{asset('js/validation.js')}}"></script>
@endsection
@section('content')
    <div id="content">
            <h3>ケアガク2011学生登録フォーム</h3>
            <h3>「ケアガク2010」に既にご登録の方へ</h3>
            <p><span>ケアガク2010に既にご登録いただいている方</span>は、ケアガク2011でもケアガク2010のID・パスワードをそのまま<br />
                お使いいただけます。引き続きご利用いただく場合でも<span>再登録の必要はありません。</span></p>
            <p>必要事項をご記入の上、「登録内容確認へ」ボタンを押してください。（*は必須入力項目です）</p>
        </div>
        <form method="POST" action="{{route('createUser')}}">
            {{csrf_field()}}
            <table border=1>
                <tr>
                    <th colspan=3>プロフィール</th>
                </tr>
                <tr>
                    <td class="tleft">お名前<span>*</span></td>
                    <td colspan=2><input type="text" name="name" id="name" value="" /></td>
                </tr>
                <tr>
                    <td class="tleft">フリガナ<span>*</span></td>
                    <td colspan=2><input type="text" name="kana" id="kana_name" value="" /></td>
                </tr>
                <tr>
                    <td class="tleft">性別<span>*</span></td>
                    <td colspan=2>
                        <input type="radio" value="1" name="sex" id="male"/>
                        男　
                        <input type="radio" value="0" name="sex" id="female"/>
                        女</td>
                </tr>
                <tr>
                    <td class="tleft">生年月日<span>*</span></td>
                    <td colspan=2><input type="text" name="year" id="year" value=""  size=4/>
                        年
                        <input type="text" name="month" value="" id="month" size=4/>
                        月
                        <input type="text" name="day" value="" id="day" size=4/>
                        日 </td>
                </tr>
                <tr>
                    <td class="tleft">郵便番号</td>
                    <td colspan=2><input type="text" name="billCode1" id="billCode1" value="" size=3/>
                        -
                        <input type="text" name="billCode2" value="" id="billCode2" size=3/></td>
                </tr>
                <tr>
                    <td class="tleft">都道府県<span>*</span></td>
                    <td colspan=2><select name="pref" id="pref" size=1>
                            <option value="">--------</option>
                            <option value="1">北海道</option>
                            <option value="2">青森県</option>
                            <option value="3">岩手県</option>
                            <option value="4">宮城県</option>
                            <option value="5">秋田県</option>
                            <option value="6">山形県</option>
                            <option value="7">福島県</option>
                            <option value="8">茨城県</option>
                            <option value="9">栃木県</option>
                            <option value="10">群馬県</option>
                            <option value="11">埼玉県</option>
                            <option value="12">千葉県</option>
                            <option value="13">東京都</option>
                            <option value="14">神奈川県</option>
                            <option value="15">新潟県</option>
                            <option value="16">富山県</option>
                            <option value="17">石川県</option>
                            <option value="18">福井県</option>
                            <option value="19">山梨県</option>
                            <option value="20">長野県</option>
                            <option value="21">岐阜県</option>
                            <option value="22">静岡県</option>
                            <option value="23">愛知県</option>
                            <option value="24">三重県</option>
                            <option value="25">滋賀県</option>
                            <option value="26">京都府</option>
                            <option value="27">大阪府</option>
                            <option value="28">兵庫県</option>
                            <option value="29">奈良県</option>
                            <option value="30">和歌山県</option>
                            <option value="31">鳥取県</option>
                            <option value="32">島根県</option>
                            <option value="33">岡山県</option>
                            <option value="34">広島県</option>
                            <option value="35">山口県</option>
                            <option value="36">徳島県</option>
                            <option value="37">香川県</option>
                            <option value="38">愛媛県</option>
                            <option value="39">高知県</option>
                            <option value="40">福岡県</option>
                            <option value="41">佐賀県</option>
                            <option value="42">長崎県</option>
                            <option value="43">熊本県</option>
                            <option value="44">大分県</option>
                            <option value="45">宮崎県</option>
                            <option value="46">鹿児島県</option>
                            <option value="47">沖縄県</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="tleft">住所（市区町村以下）<span>*</span></td>
                    <td colspan=2><input type="text" name="city" id="city" value="" size=60/></td>
                </tr>
                <tr>
                    <td class="tleft">メールアドレス<span>*</span></td>
                    <td colspan=2><input type="text" name="Tel_mail" id="Tel_mail" value=""/></td>
                </tr>
                <tr>
                    <td class="tleft">携帯メールアドレス</td>
                    <td colspan=2><input type="text" name="MB_mail" id="MB_mail" value=""/></td>
                </tr>
                <tr>
                    <td class="tleft">電話番号<span>**</span></td>
                    <td >
                        <input type="text" name="TelNo1" value="" id="TelNo1" size=3/> -
                        <input type="text" name="TelNo2" value="" id="TelNo2" size=3/> -
                        <input type="text" name="TelNo3" value="" id="TelNo3" size=3/></td>
                    <td rowspan=2>**どちらか必須<br />（連絡の取れる<br />電話番号をご記入ください）</td>
                </tr>
                <tr>
                    <td class="tleft">携帯電話番号<span>**</span></td>
                    <td >
                        <input type="text" name="MBNo1" value="" id="MBNo1" size=3/> -
                        <input type="text" name="MBNo2" value="" id="MBNo2" size=3/> -
                        <input type="text" name="MBNo3" value="" id="MBNo3" size=3/>
                    </td>
                </tr>
            </table>
            <br />
            {{--<table>--}}
                {{--<tr>--}}
                    {{--<th colspan=2>学歴・希望就職先</th>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td class="tleft">学校種別<span>*</span></td>--}}
                    {{--<td>--}}
                        {{--<select name="scl_type" size=1>--}}
                            {{--<option value="">----------</option>--}}
                            {{--<option value="1">四年制大学</option>--}}
                            {{--<option value="2">短期大学</option>--}}
                            {{--<option value="3">専門学校</option>--}}
                            {{--<option value="4">大学院</option>--}}
                            {{--<option value="5">高等学校</option>--}}
                            {{--<option value="6">海外の学校</option>--}}
                            {{--<option value="7">その他</option>--}}
                        {{--</select>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td class="tleft">学校名<span>*</span></td>--}}
                    {{--<td><input type="text" name="scl_name" size=35/></td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td class="tleft">学部/専攻</td>--}}
                    {{--<td><input type="text" name="senko" size=35/></td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td class="tleft">学年<span>*</span></td>--}}
                    {{--<td>--}}
                        {{--<select name="Gakunen"size=1>--}}
                            {{--<option value="1">1年生</option>--}}
                            {{--<option value="2">2年生</option>--}}
                            {{--<option value="3" selected>3年生</option>--}}
                            {{--<option value="4">4年生</option>--}}
                            {{--<option value="5">5年生</option>--}}
                            {{--<option value="10">卒業</option>--}}
                            {{--<option value="11">中退</option>--}}
                            {{--<option value="0">その他</option>--}}
                        {{--</select>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td class="tleft">卒業年<span>*</span></td>--}}
                    {{--<td>--}}
                        {{--<select name="St_year" size=1>--}}
                            {{--<option value="2001">2001</option>--}}
                            {{--<option value="2002">2002</option>--}}
                            {{--<option value="2003">2003</option>--}}
                            {{--<option value="2004">2004</option>--}}
                            {{--<option value="2005">2005</option>--}}
                            {{--<option value="2006">2006</option>--}}
                            {{--<option value="2007">2007</option>--}}
                            {{--<option value="2008">2008</option>--}}
                            {{--<option value="2009">2009</option>--}}
                            {{--<option value="2010">2010</option>--}}
                            {{--<option value="2011" selected>2011</option>--}}
                            {{--<option value="2012">2012</option>--}}
                            {{--<option value="2013">2013</option>--}}
                            {{--<option value="2014">2014</option>--}}
                            {{--<option value="2015">2015</option>--}}
                            {{--<option value="2016">2016</option>--}}
                            {{--<option value="2017">2017</option>--}}
                        {{--</select>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td rowspan=2 class="tleft">卒業時取得資格</td>--}}
                    {{--<td>--}}
                        {{--<input type="checkbox" name="shikaku" /> ヘルパー1級--}}
                        {{--<input type="checkbox" name="shikaku" /> ヘルパー2級--}}
                        {{--<input type="checkbox" name="shikaku" /> ヘルパー3級--}}
                        {{--<input type="checkbox" name="shikaku" /> 介護支援専門員<br />--}}
                        {{--<input type="checkbox" name="shikaku" /> 正看護師--}}
                        {{--<input type="checkbox" name="shikaku" /> 准看護師--}}
                        {{--<input type="checkbox" name="shikaku" /> 介護福祉士--}}
                        {{--<input type="checkbox" name="shikaku" /> 社会福祉士<br />--}}
                        {{--<input type="checkbox" name="shikaku" /> 管理栄養士--}}
                        {{--<input type="checkbox" name="shikaku" /> 作業療法士--}}
                        {{--<input type="checkbox" name="shikaku" /> 理学療法士--}}
                        {{--<input type="checkbox" name="shikaku" /> 社会福祉主事任用--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>その他の資格をお持ちの方はこちらに入力してください。<br />--}}
                        {{--<textarea name="other" cols=25 rows=3></textarea>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td class="tleft">希望就職先種別<span>*</span></td>--}}
                    {{--<td><select name="kiboSaki" size=1>--}}
                            {{--<option value="1">在宅系介護職</option>--}}
                            {{--<option value="2">施設系介護職</option>--}}
                            {{--<option value="4">総合職</option>--}}
                            {{--<option value="5">営業職</option>--}}
                            {{--<option value="6">事務職</option>--}}
                            {{--<option value="3">その他</option>--}}
                        {{--</select>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td class="tleft">希望就職先</td>--}}
                    {{--<td><input type="text" name="senko" size=35/><br />--}}
                        {{--(例：特別養護老人ホーム／デイサービスセンター etc.)--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--</table>--}}
            {{--<br />--}}
            {{--<table>--}}
                {{--<tr>--}}
                    {{--<th colspan=2>ケアガクID</th>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td colspan=2>企業へのエントリー、ケアガク合同就職説明会へのエントリー等の際に使用するIDです</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td class="tleft">規模ケアガクID</td>--}}
                    {{--<td><input type="text" name="CareID" />  （_［アンダースコア］または半角英数6～12文字）</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td rowspan=2 class="tleft">希望パスワード</td>--}}
                    {{--<td><input type="password" name="CarePass1" /></td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td><input type="password" name="CarePass2" /></td>--}}
                {{--</tr>--}}
            {{--</table>--}}
            <div id="cfooter">
                <input type="checkbox" name="agree" id="agree" />
                <label for="agree">私はケアガクご利用規約を理解し同意します。 </label><br />
                <a href="#">利用規約はこちら</a><br />
                <input type="submit" name="submit" value="登録内容確認へ" onclick="return validate()" style="border:3px double #666;width:25%"/>
            </div>
        </form>
    @endsection