<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin/booklist') ?>" ></a>
        <img  height="40" class="my-3" src="<?= base_url('images/logo3.png')?>"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home') ?>">Dashboard</a>
                </li>
                
            </ul>
            <ul class="navbar-nav">
                <!-- <li>
                    <a class="btn btn-secondary" href="<?php echo site_url('pdfbooklist/generate') ?>">  Download PDF  </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/booklist/create') ?>" class="btn btn-warning mr-3">Input List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/setting') ?>">Setting</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>