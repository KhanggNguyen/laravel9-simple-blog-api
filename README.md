# A simple Laravel 9 blog api 

## AVAILABLE ROUTES 

```bash
curl -X POST localhost:8000/api/register \
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -d "{\"name\": \"tototo\", \"email\": \"x@test.com\", \"password\": \"abc123\", \"password_confirmation\": \"abc123\" }"
```

```bash
curl -X POST localhost:8000/api/login \
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -d "{\"email\": \"toto@test.com\", \"password\": \"toto123\" }"
```