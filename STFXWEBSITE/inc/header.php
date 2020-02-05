<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-white">
        <a class="navbar-brand" href="/"><img src="images/swift/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php if(isset($page) and $page=='home'){ ?>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=$TOP?>/#intro">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$TOP?>/#premium">Premium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$TOP?>/#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$TOP?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$TOP?>/contact">Get in touch</a>
                    </li>

                    <li class="m-auto header-btn">
                        <?php if($logged_in){ ?>
                            <a class="btn-large btn-rounded text-bold mr-2" href="<?=$TOP?>/dashboard">Dashboard</a>
                        <?php }else if(isset($page) and $page=='register'){ ?>
                            <a class="btn-large btn-rounded text-bold mr-2" href="<?=$TOP?>/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                        <?php } else if(isset($page) and $page=='login'){ ?>
                            <a href="<?=$TOP?>/register" class="btn-large btn-rounded text-bold mr-2">Register</a>
                        <?php }else{ ?>
                            <a href="<?=$TOP?>/login" class="btn-large btn-rounded text-bold mr-2"><i class="fas fa-sign-in-alt"></i> Login</a>
                        <?php } ?>

                    </li>

                </ul>
            <?php }else{ ?>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=$TOP?>/#intro">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$TOP?>/#premium">Premium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$TOP?>/#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($page) and $page=='about'){ echo 'active'; } ?>" href="<?=$TOP?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($page) and $page=='contact'){ echo 'active'; } ?>" href="<?=$TOP?>/contact">Get in touch</a>
                    </li>
                    <li class="m-auto header-btn">
                        <?php if(isset($page) and $page=='register'){ ?>
                            <a class="btn-large btn-rounded text-bold mr-2" href="<?=$TOP?>/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                        <?php }else if(isset($page) and $page=='login'){ ?>
                            <a href="<?=$TOP?>/register" class="btn-large btn-rounded text-bold mr-2">Register</a>
                        <?php }else{ ?>
                            <a href="<?=$TOP?>/login" class="btn-large btn-rounded text-bold mr-2"><i class="fas fa-sign-in-alt"></i> Login</a>
                        <?php } ?>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </nav>
</div>