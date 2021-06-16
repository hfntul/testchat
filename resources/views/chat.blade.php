@extends('layouts.master')

@section('content')

    <div class="page-section">
        <div class="container">
            <div class="chat">
                <div class="inbox_msg">
                    <div class="kolom-kiri">
                        <div class="heading_kiri">
                            <button class=" btn new-conv">
                                People in this conversation
                            </button>
                        </div>
                        <div class="box-listchat"> 
                            <!--
                            <div class="list-chat">
                                
                                <div class="kontak">
                                    <div class="profil">
                                    <img src="{{url('/images/profil.png')}}"/>        
                                    </div>                         
                                    <div class="informasi">
                                        <h5>Dr. Laszlo Kreizler</h5>
                                        <p>You: Lorem Ipsum</p>
                                    </div>
                            
                                </div>
                                
                            </div>

                            <div class="list-chat active-chat">
                                <div class="kontak">
                                    <div class="profil">
                                    <img src="{{url('/images/profil.png')}}"/>        
                                    </div>                         
                                    <div class="informasi aktif">
                                        <h5>Dr. Alwi</h5>
                                        <p>You: Lorem Ipsum</p>
                                    </div>

                                </div>
                            </div>
                            -->
                        </div>
                    </div>

                    <div class="kolom-kanan">
                        <div class="heading-kanan">
                            <!--
                            <div class="heading-profil">
                                
                                <div class="profil">
                                <img src="{{url('/images/profil.png')}}"/>        
                                </div> 
                                
                            </div>                     
                            <div class="informasi">
                                <h5>Dr. Alwi</h5>
                                <p>Lorem Ipsum</p>
                            </div>
                            -->
                            <button class="btn setting-button" type="button">
                                <i class="fa fa-ellipsis-v"> </i>       
                            </button>
                        </div>
                        <div class="isi-msg" style="overflow-y:scroll" v-chat-scroll>
                            <chat-messages :messages="messages"></chat-messages>
                        </div>
                        <div class="kotak-tulis">
                            <chat-form
                                v-on:messagesent="addMessage"
                                :user="{{ Auth::user() }}"
                            ></chat-form>
                        </div>
                </div>
            </div>
        </div>
    </div>  
               

                

</div>
@endsection