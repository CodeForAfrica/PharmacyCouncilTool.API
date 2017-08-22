<section id="pharmacies-section" class="doc-section">
    <h2 class="section-title">Pharmacies</h2>
    <div class="section-block" style="">
      <p>
      All requests are tracked as pharmacies.
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
                  <th>Field</th>
                  <th>Type</th>
                  <th>Notes</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>id</td>
                  <td>int</td>
                  <td>Associated pharmacy</td>
              </tr>
              <tr>
                  <td>registration_number</td>
                  <td>string</td>
                  <td>Pharmacy registration number</td>
              </tr>
              <tr>
                  <td>name</td>
                  <td>string</td>
                  <td>Pharmacy name</td>
              </tr>
              <tr>
                  <td>pharmacist</td>
                  <td>string</td>
                  <td>Pharmacist name</td>
              </tr>
              <tr>
                  <td>address</td>
                  <td>string</td>
                  <td>Pharmacy address</td>
              </tr>
              <tr>
                  <td>location</td>
                  <td>string</td>
                  <td>Pharmacy location</td>
              </tr>
              <tr>
                  <td>ward</td>
                  <td>string</td>
                  <td>Pharmacy ward</td>
              </tr>
              <tr>
                  <td>district</td>
                  <td>string</td>
                  <td>Pharmacy district</td>
              </tr>
              <tr>
                  <td>region</td>
                  <td>string</td>
                  <td>Pharmacy region</td>
              </tr>
              <tr>
                  <td>date_registered</td>
                  <td>string</td>
                  <td>The date when pharmacy was registered by TFDA</td>
              </tr>
              <tr>
                  <td>created_at</td>
                  <td>timestamp</td>
                  <td>Time when the pharmacy was added.</td>
              </tr>
              <tr>
                  <td>updated_at</td>
                  <td>timestamp</td>
                  <td>Time when the pharmacy details were last updated</td>
              </tr>
          </tbody>
        </table>
      </div><!--//table-responsive-->
    </div><!-- //section-block -->

    <div id="listing-pharmacies"  class="section-block">
        <h3 class="block-title">Listing pharmacies</h3>
<pre class="language-javascript">
<code>GET /api/pharmacies
</code>
</pre>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
                  <th>Query Parameter</th>
                  <th>Notes</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>api_token</td>
                  <td><strong>NOT REQUIRED</strong></td>
              </tr>
              <tr>
                  <td>page</td>
                  <td>Page number, starting from 1</td>
              </tr>
              <tr>
                  <td>limit</td>
                  <td>Any integer between 0 and 100, inclusive</td>
              </tr>
              <tr>
                  <td>order_by</td>
                  <td>See <a href="#sorting-section">Sorting</a></td>
              </tr>
              <tr>
                  <td>columns</td>
                  <td>See <a href="#field-filtering-section">Column Filtering</a></td>
              </tr>
          </tbody>
        </table>
      </div><!--//table-responsive-->

      <h4>Sample Request</h4>
<pre class="language-javascript">
<code>GET /api/pharmacies?limit=1&order_by=date_registered,asc
</code>
</pre>

      <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 200 OK
Connection: Keep-Alive
Content-Length: 564
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
    "pharmacies":
    [
        {
            "id": 11,
            "registration_number": "222XX",
            "name": "Pharmacy1XX",
            "pharmacist": "DaktariXX",
            "address": "33 MlandiziXX",
            "location": "MlandiziXX",
            "ward": "Kibaha VijijiniXX",
            "district": "KibahaXX",
            "region": "PwaniXX",
            "date_registered": "13 August 2014XX",
            "created_at": "2017-08-16 07:54:34",
            "updated_at": "2017-08-16 07:54:34"
        }
    ]
}
</code>
</pre>
    </div><!--//section-block-->

    <div id="getting-pharmacy"  class="section-block">
        <h3 class="block-title">Getting a single pharmacy</h3>
<pre class="language-javascript">
<code>GET /api/pharmacies/id
</code>
</pre>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
                  <th>Query Parameter</th>
                  <th>Notes</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>api_token</td>
                  <td><strong>NOT REQUIRED</strong></td>
              </tr>
          </tbody>
        </table>
      </div><!--//table-responsive-->

      <h4>Sample Request</h4>
<pre class="language-javascript">
<code>GET /api/pharmacies/11
</code>
</pre>

      <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 200 OK
Connection: Keep-Alive
Content-Length: 272
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
    "pharmacy":
    {
        "id": 11,
        "registration_number": "222XX",
        "name": "Pharmacy1XX",
        "pharmacist": "DaktariXX",
        "address": "33 MlandiziXX",
        "location": "MlandiziXX",
        "ward": "Kibaha VijijiniXX",
        "district": "KibahaXX",
        "region": "PwaniXX",
        "date_registered": "13 August 2014XX",
        "created_at": "2017-08-16 07:54:34",
        "updated_at": "2017-08-16 07:54:34"
    }
}</code>
</pre>
    </div><!--//section-block-->

    <div id="updating-pharmacy"  class="section-block">
        <h3 class="block-title">Updating pharmacy</h3>
<pre class="language-javascript">
<code>PUT /api/pharmacies/id?api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
                  <th>Field</th>
                  <th>Required</th>
                  <th>Notes</th>
              </tr>
          </thead>
          <tbody>
            <tr>
                <td>pharmacist</td>
                <td>no</td>
                <td>Set of characters representing pharmacist name</td>
            </tr>
            <tr>
                <td>location</td>
                <td>no</td>
                <td>Set of characters representing pharmacy location</td>
            </tr>
            <tr>
                <td>name</td>
                <td>no</td>
                <td>Set of characters representing pharmacy name</td>
            </tr>
            <tr>
                <td>address</td>
                <td>no</td>
                <td>Set of characters representing pharmacy address</td>
            </tr>
            <tr>
                <td>registration_number</td>
                <td>no</td>
                <td>Set of characters representing pharmacy registration number</td>
            </tr>
            <tr>
                <td>ward</td>
                <td>no</td>
                <td>Set of characters representing pharmacy ward</td>
            </tr>
            <tr>
                <td>district</td>
                <td>no</td>
                <td>Set of characters representing pharmacy district</td>
            </tr>
            <tr>
                <td>region</td>
                <td>no</td>
                <td>Set of characters representing pharmacy region</td>
            </tr>
          </tbody>
        </table>
      </div><!--//table-responsive-->

      <h4>Sample Request</h4>
<pre class="language-javascript">
<code>
PUT /api/pharmacies/11?api_token={YOUR_API_TOKEN_KEY}
Content-Type: application/json;
</code>
<hr />
<code>{
    "registration_number":"222YY",
    "name":"Pharmacy1YY",
    "pharmacist":"DaktariYY",
    "address":"33 MlandiziYY",
    "location":"MlandiziYY"
}
</code>
</pre>

      <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 200 OK
Connection: Keep-Alive
Content-Length: 180
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
    "pharmacy":
    {
        "id": 11,
        "registration_number": "222YY",
        "name": "Pharmacy1YY",
        "pharmacist": "DaktariYY",
        "address": "33 MlandiziYY",
        "location": "MlandiziYY",
        "ward": "Kibaha VijijiniXX",
        "district": "KibahaXX",
        "region": "PwaniXX",
        "date_registered": "13 August 2014XX",
        "created_at": "2017-08-16 07:54:34",
        "updated_at": "2017-08-16 11:54:18"
    }
}
</code>
</pre>
    </div><!--//section-block-->

    <div id="creating-pharmacy"  class="section-block">
        <h3 class="block-title">Creating a new pharmacy</h3>
<pre class="language-javascript">
<code>POST /api/pharmacies?api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
                  <th>Field</th>
                  <th>Required</th>
                  <th>Notes</th>
              </tr>
          </thead>
          <tbody>
            <tr>
                <td>pharmacist</td>
                <td>yes</td>
                <td>Set of characters representing pharmacist name</td>
            </tr>
            <tr>
                <td>location</td>
                <td>yes</td>
                <td>Set of characters representing pharmacy location</td>
            </tr>
            <tr>
                <td>name</td>
                <td>yes</td>
                <td>Set of characters representing pharmacy name</td>
            </tr>
            <tr>
                <td>address</td>
                <td>yes</td>
                <td>Set of characters representing pharmacy address</td>
            </tr>
            <tr>
                <td>registration_number</td>
                <td>yes</td>
                <td>Set of characters representing pharmacy registration number</td>
            </tr>
            <tr>
                <td>ward</td>
                <td>yes</td>
                <td>Set of characters representing pharmacy ward</td>
            </tr>
            <tr>
                <td>district</td>
                <td>yes</td>
                <td>Set of characters representing pharmacy district</td>
            </tr>
            <tr>
                <td>region</td>
                <td>yes</td>
                <td>Set of characters representing pharmacy region</td>
            </tr>
          </tbody>
        </table>
      </div><!--//table-responsive-->

      <h4>Sample Request</h4>
<pre class="language-javascript">
<code>
POST /api/pharmacies?api_token={YOUR_API_TOKEN_KEY}
Content-Type: application/json;
</code>
<hr />
<code>{
    "registration_number":"222XX",
    "name":"Pharmacy1XX",
    "pharmacist":"DaktariXX",
    "address":"33 MlandiziXX",
    "location":"MlandiziXX",
    "ward":"Kibaha VijijiniXX",
    "district":"KibahaXX",
    "region":"PwaniXX",
    "date_registered":"13 August 2014XX"
}
</code>
</pre>

        <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 201 Created
Connection: Keep-Alive
Content-Length: 467
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
    "pharmacy":
    {
        "registration_number": "222XX",
        "name": "Pharmacy1XX",
        "pharmacist": "DaktariXX",
        "address": "33 MlandiziXX",
        "location": "MlandiziXX",
        "ward": "Kibaha VijijiniXX",
        "district": "KibahaXX",
        "region": "PwaniXX",
        "date_registered": "13 August 2014XX",
        "updated_at": "2017-08-16 12:16:45",
        "created_at": "2017-08-16 12:16:45",
        "id": 12
    }
}
</code>
</pre>
    </div><!--//section-block-->

    <div id="removing-pharmacy"  class="section-block">
        <h3 class="block-title">Removing pharmacy</h3>
<pre class="language-javascript">
<code>DELETE /api/pharmacies/id?api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

        <h4>Sample Request</h4>
<pre class="language-javascript">
<code>
DELETE /api/pharmacies/11?api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

        <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 200 OK
Connection: Keep-Alive
Content-Length: 643
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
  
}
</code>
</pre>
    </div><!--//section-block-->
</section><!--//doc-section-->