@extends('layouts.lakomso_layout')
@section('content')


@include('partials.lakomso_menu_contacts')
<main role="main" class="container-fluid" >
        
<section id="contacts" class="sections">
        <div class="container">
    
                        <div class="display-4 text-center">Kontakti</div>
                <div class="row">
                        <div class="col-lg-4">
            
                                <p> Tālrunis: +371 26825505<br>
                                E-pasts: lakomso@inbox.lv<br>                            
                                Rekvizīti:<br>                        
                                SIA "Lakomso" <br>                            
                                Reģ.nr.: 40203078379<br>                            
                                Bankas konts: SEB Banka, LV74UNLA0055000176374</p>

                        </div>

                        <div class="col-lg-8">
                                <form name="contactform" method="post" action="send_form_email.php">
                                        <table width="450px">
                                        <tr>
                                        <td valign="top">
                                        <label for="first_name">First Name *</label>
                                        </td>
                                        <td valign="top">
                                        <input  type="text" name="first_name" maxlength="50" size="30">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td valign="top">
                                        <label for="last_name">Last Name *</label>
                                        </td>
                                        <td valign="top">
                                        <input  type="text" name="last_name" maxlength="50" size="30">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td valign="top">
                                        <label for="email">Email Address *</label>
                                        </td>
                                        <td valign="top">
                                        <input  type="text" name="email" maxlength="80" size="30">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td valign="top">
                                        <label for="telephone">Telephone Number</label>
                                        </td>
                                        <td valign="top">
                                        <input  type="text" name="telephone" maxlength="30" size="30">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td valign="top">
                                        <label for="comments">Comments *</label>
                                        </td>
                                        <td valign="top">
                                        <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td colspan="2" style="text-align:center">
                                        <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
                                        </td>
                                        </tr>
                                        </table>
                                </form>
                        </div><!--col end-->
                </div><!--row end-->


    </div><!--container end-->

</section>
<!-- <section id="random" class="section"></section>-->
</main>



@endsection