<section id="reports-section" class="doc-section">
    <h2 class="section-title">Reports</h2>
    <div class="section-block" style="">
        <p>All requests are tracked as reports.</p>
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
                    <td>Associated report</td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>int</td>
                    <td>Gender of the reporter</td>
                </tr>
                <tr>
                    <td>location</td>
                    <td>string</td>
                    <td>Location of the reporter</td>
                </tr>
                <tr>
                    <td>message</td>
                    <td>text</td>
                    <td>Reported problem</td>
                </tr>
                <tr>
                    <td>created_at</td>
                    <td>timestamp</td>
                    <td>Time when the report was added</td>
                </tr>
                <tr>
                    <td>updated_at</td>
                    <td>timestamp</td>
                    <td>Time when the report details were last updated</td>
                </tr>
            </tbody>
          </table>
        </div><!--//table-responsive-->
    </div><!-- //section block -->

    <div id="listing-reports"  class="section-block">
        <h3 class="block-title">Listing reports</h3>
<pre class="language-javascript">
<code>GET /api/reports?api_token={YOUR_TOKEN_KEY}
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
                  <td>Your <strong>API TOKEN KEY</strong></td>
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
<code>GET /api/reports?limit=1&api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

        <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 200 OK
Connection: Keep-Alive
Content-Length: 908
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
    "reports":
    [
        {
            "id": 10,
            "gender": "Female",
            "location": "Schaefermouth",
            "message": "Duchess, 'as pigs have to beat them off, and had just succeeded in getting its body tucked away, comfortably enough, under her arm, with its mouth and yawned once or twice, half hoping that they.",
            "created_at": "2017-08-16 07:44:01",
            "updated_at": "2017-08-16 07:44:01"
        }
    ]
}
</code>
</pre>
    </div><!--//section-block-->

    <div id="getting-report"  class="section-block">
        <h3 class="block-title">Getting a single report</h3>
<pre class="language-javascript">
<code>GET /api/reports/id?api_token={YOUR_API_TOKEN_KEY}
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
                  <td>Your <strong>API TOKEN KEY</strong></td>
              </tr>
          </tbody>
          </table>
        </div><!--//table-responsive-->

        <h4>Sample Request</h4>
<pre class="language-javascript">
<code>GET /api/reports/10?api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

        <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 200 OK
Connection: Keep-Alive
Content-Length: 423
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
    "report":
    {
        "id": 10,
        "gender": "Female",
        "location": "Schaefermouth",
        "message": "Duchess, 'as pigs have to beat them off, and had just succeeded in getting its body tucked away, comfortably enough, under her arm, with its mouth and yawned once or twice, half hoping that they.",
        "created_at": "2017-08-16 07:44:01",
        "updated_at": "2017-08-16 07:44:01"
    }
}
</code>
</pre>
    </div><!--//section-block-->

    <div id="updating-report"  class="section-block">
        <h3 class="block-title">Updating report</h3>
<pre class="language-javascript">
<code>PUT /api/reports/id?api_token={YOUR_API_TOKEN_KEY}
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
                    <td>gender</td>
                    <td>no</td>
                    <td>Set of characters representing reporter gender</td>
                </tr>
                <tr>
                    <td>location</td>
                    <td>no</td>
                    <td>Set of characters representing reporter location</td>
                </tr>
                <tr>
                    <td>message</td>
                    <td>no</td>
                    <td>Set of characters representing reporter message</td>
                </tr>
            </tbody>
            </table>
        </div><!--//table-responsive-->

        <h4>Sample Request</h4>
<pre class="language-javascript">
<code>
PUT /api/reports/10?api_token={YOUR_API_TOKEN_KEY}
Content-Type: application/json;
</code>
<hr />
<code>{
    "gender":"Male",
    "location":"Temeke",
    "message":"Duka la dawa namba ab457c linauza dawa zilizoisha muda wa kutumika"
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
    "report":
    {
        "id": 10,
        "gender": "Male",
        "location": "Temeke",
        "message": "Duka la dawa namba ab457c linauza dawa zilizoisha muda wa kutumika",
        "created_at": "2017-08-16 07:44:01",
        "updated_at": "2017-08-16 12:55:22"
    }
}
</code>
</pre>
    </div><!--//section-block-->

    <div id="creating-report"  class="section-block">
        <h3 class="block-title">Creating a new report</h3>
<pre class="language-javascript">
<code>POST /api/reports?api_token={YOUR_API_TOKEN_KEY}
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
                    <td>gender</td>
                    <td>yes</td>
                    <td>Set of characters representing reporter gender</td>
                </tr>
                <tr>
                    <td>location</td>
                    <td>yes</td>
                    <td>Set of characters representing reporter location</td>
                </tr>
                <tr>
                    <td>message</td>
                    <td>yes</td>
                    <td>Set of characters representing reporter message</td>
                </tr>
            </tbody>
          </table>
        </div><!--//table-responsive-->

        <h4>Sample Request</h4>
<pre class="language-javascript">
<code>
POST /api/v1/posts
Content-Type: application/json;
</code>
<hr />
<code>{
    "gender":"Female",
    "location":"Kyela",
    "message":"Madawa yanauzwa bila vipimo kwenye duka namba 45sed23"
}
</code>
</pre>

      <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 200 OK
Connection: Keep-Alive
Content-Length: 656
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
    "report":
    {
        "gender": "Female",
        "location": "Kyela",
        "message": "Madawa yanauzwa bila vipimo kwenye duka namba 45sed23",
        "updated_at": "2017-08-16 13:01:47",
        "created_at": "2017-08-16 13:01:47",
        "id": 11
    }
}
</code>
</pre>
    </div><!--//section-block-->

    <div id="removing-report"  class="section-block">
        <h3 class="block-title">Removing report</h3>
<pre class="language-javascript">
<code>DELETE /api/reports/id?api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

        <h4>Sample Request</h4>
<pre class="language-javascript">
<code>
DELETE /api/reports/11?api_token={YOUR_API_TOKEN_KEY}
</code>
</pre>

        <h4>It's response</h4>
<pre class="language-javascript">
<code>
Status Code: 200 OK
Connection: Keep-Alive
Content-Length: 728
Content-Type: application/json; charset=utf-8
</code>
<hr />
<code>{
    
}
</code>
</pre>
    </div><!--//section-block-->
</section><!--//doc-section-->