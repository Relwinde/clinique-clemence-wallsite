<div class="specialites-header-section" style="background: url('https://images.unsplash.com/photo-1579684453423-f84349ef60b0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
    <div class="specialites-header-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="specialites-header-content-wrapper">
                    <div class="specialites-header-content">
                        <h1>{{ $title }}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li>{{ $subtitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
     /* En-tête */
    .specialites-header-section {
        padding: 150px 0;
        position: relative;
    }
    
    .specialites-header-overlay {
        background: linear-gradient(135deg, rgba(42, 127, 98, 0.85) 0%, rgba(26, 82, 61, 0.9) 100%);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .specialites-header-content-wrapper {
        min-height: 100px;
        display: flex;
        align-items: center;
    }
    
    .specialites-header-content {
        color: white;
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    
    .specialites-header-content h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        font-weight: 700;
    }
    
    .specialites-header-content .breadcrumb {
        background: transparent;
        justify-content: center;
        font-size: 1.1rem;
    }
    
    .specialites-header-content .breadcrumb a {
        color: rgba(255,255,255,0.8);
    }
    
    .specialites-header-content .breadcrumb li:before {
        color: rgba(255,255,255,0.6);
    }

</style>