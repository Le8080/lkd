<body>
    
    <h2 class="mdc-typography--display2">Hello, Material Components!</h2>


    <div class="mdc-card">
        <section class="mdc-card__primary">
            <h1 class="mdc-card_title mdc-card__title--large">Login</h1>
            <h2 class="mdc-card__subtitle">Authenticate User</h2>
        </section>
        <div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
            <input type="text" class="mdc-textfield__input" id="username">
            <label for="demo-input" class="mdc-textfield__label">Username</label>
        </div>
        
        <div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
            <input type="password" class="mdc-textfield__input" id="password">
            <label for="demo-input" class="mdc-textfield__label">Password</label>
        </div>
        <button class ="mdc-button mdc-button-raised mdc-ripple-upgrade">Login</button>

    </div>
    
</body>
<footer>
    <script src="<?php echo base_url();?>assets/node_modules/material-components-web/dist/material-components-web.js"></script>
    <script>mdc.autoInit()</script>
</footer>