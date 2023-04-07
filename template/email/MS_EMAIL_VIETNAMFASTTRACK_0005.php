<form action="" class="form country-booking-form" method="get">
    <div class="form-group">
        <div>
            <script src = "./plugin/country/countries.js"></script>
            <select id="country" name ="country"></select> </br></br>
        </div>

        <script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
            populateCountries("country2");
        </script>
        <button type="submit" id="front-page-price-btn" class="cta1 booking-button">BOOK NOW</button>
        <a id="front-page-book-btn" href="" class="cta2">ORDER BY E-MAIL</a>
    </div>
</form>