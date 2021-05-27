# Companies


## Store Company Data Companies




> Example request:

```bash
curl -X POST \
    "http://sockets.test/api/v1/companies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"city_id":"quis","name":"sit","description":{}}'

```

```javascript
const url = new URL(
    "http://sockets.test/api/v1/companies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "city_id": "quis",
    "name": "sit",
    "description": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-companies" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-companies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-companies"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-companies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-companies"></code></pre>
</div>
<form id="form-POSTapi-v1-companies" data-method="POST" data-path="api/v1/companies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-companies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-companies" onclick="tryItOut('POSTapi-v1-companies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-companies" onclick="cancelTryOut('POSTapi-v1-companies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-companies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/companies</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>city_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city_id" data-endpoint="POSTapi-v1-companies" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-companies" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-v1-companies" data-component="body"  hidden>
<br>

</p>

</form>



