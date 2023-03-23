# adminer-sqlite

Use [adminer](https://www.adminer.org) with a local [sqlite](https://sqlite.org) database.

## Usage

1. Download adminer-sqlite
```
git clone https://github.com/fluidblue/adminer-sqlite.git
cd adminer-sqlite
```

2. Copy database to `db` directory -or- create symbolic link to database
```
# Option 1
cp /path/to/db.sqlite3 ./db/db.sqlite3

# Option 2
ln -s /path/to/db.sqlite3 ./db/db.sqlite3
```

3. Set a new password in `docker-compose.yml` (environment variable `ADMINER_PASSWORD`).
Note: You can't use an empty password.

4. Docker compose
```
docker-compose up -d
```

5. Go to http://localhost:8080 and enter the following
```
System: SQLite 3
Username: <empty>
Password: <your password>
Database: /db/db.sqlite3
```
