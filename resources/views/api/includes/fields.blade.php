<!-- Field filtering section -->
<section id="field-filtering-section" class="doc-section">
    <h2 class="section-title">Column Filtering</h2>
    <div class="section-block" style="">
        <p>All responses from the API can limit fields to only the fields you need. Just pass in a columns query parameter with a comma separated list of fields you need</p>
        <p>For example:</p>
<pre class="language-javascript">
<code>GET /api/pharmacies?columns=registration_number,pharmacist&api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

        <p>Would have the following response body:</p>
<pre class="language-javascript">
<code>[
  {
    "registration_number": "543abc",
    "pharmacist:": "John"
  },
  {
    "registration_number": "543add",
    "pharmacist:": "Bob"
  }
]
</code>
</pre>
    </div>
</section><!--//doc-section-->
<!-- Field filtering section ends here -->