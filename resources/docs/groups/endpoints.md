# Endpoints


## api/v1/user




> Example request:

```bash
curl -X GET \
    -G "http://sockets.test/api/v1/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sockets.test/api/v1/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user"></code></pre>
</div>
<div id="execution-error-GETapi-v1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user"></code></pre>
</div>
<form id="form-GETapi-v1-user" data-method="GET" data-path="api/v1/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-user" onclick="tryItOut('GETapi-v1-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-user" onclick="cancelTryOut('GETapi-v1-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/user</code></b>
</p>
</form>


## api/v1/cities/{city}




> Example request:

```bash
curl -X DELETE \
    "http://sockets.test/api/v1/cities/autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sockets.test/api/v1/cities/autem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-cities--city-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-cities--city-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-cities--city-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-cities--city-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-cities--city-"></code></pre>
</div>
<form id="form-DELETEapi-v1-cities--city-" data-method="DELETE" data-path="api/v1/cities/{city}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-cities--city-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-cities--city-" onclick="tryItOut('DELETEapi-v1-cities--city-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-cities--city-" onclick="cancelTryOut('DELETEapi-v1-cities--city-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-cities--city-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/cities/{city}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="DELETEapi-v1-cities--city-" data-component="url" required  hidden>
<br>

</p>
</form>



