# adminer-sqlite

Use [adminer](https://www.adminer.org) with an [sqlite3](https://sqlite.org) database.

## Usage

1. Copy database to `db` directory -or- create symbolic link to database
```
# Option 1
cp /path/to/db.sqlite3 ./db/db.sqlite3

# Option 2
ln -s /path/to/db.sqlite3 ./db/db.sqlite3
```

2. Set a new password in `docker-compose.yml` (environment variable `ADMINER_PASSWORD`).
Note: You can't use an empty password.

3. Docker compose
```
docker-compose up -d
```

4. Go to http://localhost:8080 and enter the following
```
System: SQLite 3
Username: <empty>
Password: <your password>
Database: /db/db.sqlite3
```
