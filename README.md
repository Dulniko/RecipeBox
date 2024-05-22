# Baza
Aplikacja domyślmie łączy się z bazą postgresql na localhost:5432, z bazą o nazwie "php- postgres", użytkownikiem "postgres" z hasłem admin.

Przykładowa komenda do uruchomienia bazy:
```bash
docker run --name php-postgres -e POSTGRES_PASSWORD=admin -p 5432:5432 -d postgres
```