# A simple Laravel 9 blog api 

## Deployed 
[https://laravel-blog-api-example.herokuapp.com/]https://laravel-blog-api-example.herokuapp.com/api/articles

## AVAILABLE ROUTES 

```bash
curl -X POST https://laravel-blog-api-example.herokuapp.com/api/register \
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -d "{\"name\": \"tototo\", \"email\": \"x@test.com\", \"password\": \"abc123\", \"password_confirmation\": \"abc123\" }"
```

```bash
curl -X POST https://laravel-blog-api-example.herokuapp.com/api/login \
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -d "{\"email\": \"toto@test.com\", \"password\": \"toto123\" }"
```

```bash
curl -X GET https://laravel-blog-api-example.herokuapp.com/api/articles
```

```bash
curl -X GET https://laravel-blog-api-example.herokuapp.com/api/articles/{id}
```

```bash
curl -X POST https://laravel-blog-api-example.herokuapp.com/api/articles
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -d "{\"title\": \"an article title\", \"body\": \"lorem ipsum\" }"
```

```bash
curl -X PUT https://laravel-blog-api-example.herokuapp.com/api/articles
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -d "{\"title\": \"another article title\", \"body\": \"lorem ipsum\" }"
```

```bash
curl -X DELETE https://laravel-blog-api-example.herokuapp.com/api/articles/{id}
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
```