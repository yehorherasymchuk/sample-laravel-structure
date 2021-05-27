# Cities


## Get all cities Data




> Example request:

```bash
curl -X GET \
    -G "http://sockets.test/api/v1/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sockets.test/api/v1/cities"
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


> Example response (200):

```json

[{
  "id": 1,
  "country_code": "RU",
  "name": "Moscow",
}]
```
<div id="execution-results-GETapi-v1-cities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-cities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-cities"></code></pre>
</div>
<div id="execution-error-GETapi-v1-cities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-cities"></code></pre>
</div>
<form id="form-GETapi-v1-cities" data-method="GET" data-path="api/v1/cities" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-cities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-cities" onclick="tryItOut('GETapi-v1-cities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-cities" onclick="cancelTryOut('GETapi-v1-cities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-cities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/cities</code></b>
</p>
</form>


## Show city Data




> Example request:

```bash
curl -X GET \
    -G "http://sockets.test/api/v1/cities/placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sockets.test/api/v1/cities/placeat"
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


> Example response (200):

```json

{
  "id": 1,
  "country_code": "RU",
  "name": "Moscow",
}
```
<div id="execution-results-GETapi-v1-cities--city-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-cities--city-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-cities--city-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-cities--city-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-cities--city-"></code></pre>
</div>
<form id="form-GETapi-v1-cities--city-" data-method="GET" data-path="api/v1/cities/{city}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-cities--city-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-cities--city-" onclick="tryItOut('GETapi-v1-cities--city-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-cities--city-" onclick="cancelTryOut('GETapi-v1-cities--city-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-cities--city-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/cities/{city}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="GETapi-v1-cities--city-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update city




> Example request:

```bash
curl -X POST \
    "http://sockets.test/api/v1/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sockets.test/api/v1/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
  "id": 1,
  "country_code": "RU",
  "name": "Moscow",
}
```
<div id="execution-results-POSTapi-v1-cities" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-cities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-cities"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-cities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-cities"></code></pre>
</div>
<form id="form-POSTapi-v1-cities" data-method="POST" data-path="api/v1/cities" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-cities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-cities" onclick="tryItOut('POSTapi-v1-cities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-cities" onclick="cancelTryOut('POSTapi-v1-cities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-cities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/cities</code></b>
</p>
</form>


## Update City Data




> Example request:

```bash
curl -X PUT \
    "http://sockets.test/api/v1/cities/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://sockets.test/api/v1/cities/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
  "id": 1,
  "country_code": "RU",
  "name": "Moscow",
}
```
<div id="execution-results-PUTapi-v1-cities--city-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-cities--city-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-cities--city-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-cities--city-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-cities--city-"></code></pre>
</div>
<form id="form-PUTapi-v1-cities--city-" data-method="PUT" data-path="api/v1/cities/{city}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-cities--city-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-cities--city-" onclick="tryItOut('PUTapi-v1-cities--city-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-cities--city-" onclick="cancelTryOut('PUTapi-v1-cities--city-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-cities--city-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/cities/{city}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="PUTapi-v1-cities--city-" data-component="url" required  hidden>
<br>

</p>
</form>



