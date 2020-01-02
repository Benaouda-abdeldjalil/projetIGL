---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_781d9dd18915b781b412a8f6cf14bd2e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/ensg/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ensg/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/ensg/add`


<!-- END_781d9dd18915b781b412a8f6cf14bd2e -->

<!-- START_05869dc0fe651caca22936fcfc4f9c91 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/etudiant/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/etudiant/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/etudiant/add`


<!-- END_05869dc0fe651caca22936fcfc4f9c91 -->

<!-- START_551da87187657555319a862580d988df -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/note" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/note"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/note`


<!-- END_551da87187657555319a862580d988df -->

<!-- START_fc4b6ae244ae158e33e19e0d56b80711 -->
## api/notes
> Example request:

```bash
curl -X POST \
    "http://localhost/api/notes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/notes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/notes`


<!-- END_fc4b6ae244ae158e33e19e0d56b80711 -->

<!-- START_4355a3502eedf55b0211cba0066f210b -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/admin/login`


<!-- END_4355a3502eedf55b0211cba0066f210b -->

<!-- START_e9aa8e9cecac4d07efa45f1b2d470efb -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/admin/login`


<!-- END_e9aa8e9cecac4d07efa45f1b2d470efb -->

<!-- START_61bc1d2b5aeb20d4ff8c62fefdc26c96 -->
## api/admin/home
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/admin/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/admin/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/admin/home`


<!-- END_61bc1d2b5aeb20d4ff8c62fefdc26c96 -->

<!-- START_36566cb6345b91f25dcaa82890d54dc5 -->
## api/SauvEtud
> Example request:

```bash
curl -X POST \
    "http://localhost/api/SauvEtud" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/SauvEtud"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/SauvEtud`


<!-- END_36566cb6345b91f25dcaa82890d54dc5 -->

<!-- START_4e8485dc3fb95e0b0f0912282aed66b2 -->
## api/ajouteretud
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/ajouteretud" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ajouteretud"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/ajouteretud`


<!-- END_4e8485dc3fb95e0b0f0912282aed66b2 -->

<!-- START_c9e80385d09eb7f9deff4dc9a1d1c324 -->
## api/Sauvprof
> Example request:

```bash
curl -X POST \
    "http://localhost/api/Sauvprof" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/Sauvprof"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/Sauvprof`


<!-- END_c9e80385d09eb7f9deff4dc9a1d1c324 -->

<!-- START_eed8ff148a55bac15db5d0aa36163c1a -->
## api/ajouterprof
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/ajouterprof" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/ajouterprof"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/ajouterprof`


<!-- END_eed8ff148a55bac15db5d0aa36163c1a -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_dd21cd681b65ce11793ab07f29bc652a -->
## deconnexion
> Example request:

```bash
curl -X GET \
    -G "http://localhost/deconnexion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/deconnexion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET deconnexion`


<!-- END_dd21cd681b65ce11793ab07f29bc652a -->


