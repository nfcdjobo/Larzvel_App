{{-- <ererrere> --}}
    @extends('layouts.main')
    @section('content')
  
    
    <div class="details-edite">
        <div class="recentOrders-info">
            <div class="-info">
                <div class="cardHeader">
                    <h1>Apperçu Globale de Contact</h1>
                </div>
                <div class="title-date">
                    <div class="info"><span class="label">Nom & Prénom  </span>: <span>DJOBO </span></div>
                    <div class="info"><span class="label">Adresse E-mail </span>: <span>EMAIL</span></div>
                    <div class="info"><span class="label">Adresse Téléphonqie </span>: <span>PHONE</span></div>
                    <div class="detail-user">
                        <div class="info-use"><span>Créer par : </span> <span><a href=''>'Date'</a></span> <span>Date :</span> <span></span>GHGGH </div>
                        <div class="info-use"><span>Modifier par : </span> <span><a href=''>'Date'</a></span> <span>Date :</span> <span> OIIII</span></div>
                    </div>
                </div>
            </div>
            <div class="-info">
                <div class="cardHeader">
                </div>
                <div class="title-date">
                    <button ><a href="/contact">Modifier</a></button>
                </div>
            </div>
        </div>
        
    </div>
    <div class="details-edite" id="details-message">
        <div class="recentOrders">
            <div class="cardHeader">
                <h1>Modifier Contact</h1>
            </div>
            <div class="content-form">
                <form class="forms"  id="form-contact" onSubmit={handleSubmit(onSubmit)}>
                    <div class="group-input">
                        <label htmlFor="fullname" class="label-form">Nom et Prénom(s)</label>
                        
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nom et Prénom(s)"  required/>
                    </div>
    
                    <div class="group-input">
                        <label htmlFor="phone" class="label-form">Adresse téléphonque</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Adresse téléphonque"  required />
                    </div>
    
                    <div class="group-input">
                        <label htmlFor="photo" class="label-form">Changer Photo de profile</label>
                        <input type="file" class="form-control" name="photo" id="photo" />
                    </div>
    
                    <div class="group-action">
                        <button type="reset" id="reset-contact"> Annuler</button>
                        <button type="submit" id="submit-contact"> Confirmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
    