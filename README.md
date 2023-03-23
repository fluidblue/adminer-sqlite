# adminer-sqlite

With adminer-sqlite you can use [adminer](https://www.adminer.org) with a local [sqlite](https://sqlite.org) database.

## Usage

Hint: The following usage instructions are written for macOS and Linux. On Windows, the commands must be adapted.

1. Download and install [Docker](https://www.docker.com/).

2. Download adminer-sqlite
```
git clone https://github.com/fluidblue/adminer-sqlite.git
cd adminer-sqlite
```

3. Copy your database to `db` directory -or- create a symbolic link to the database
```
# Option 1
cp /path/to/db.sqlite3 ./db/db.sqlite3

# Option 2
ln -s /path/to/db.sqlite3 ./db/db.sqlite3
```

4. Set a new password in `docker-compose.yml` (environment variable `ADMINER_PASSWORD`).
Note: You can't use an empty password.

5. Use Docker compose to start the container
```
docker-compose up -d
```

6. Go to http://localhost:8080 and enter the following
```
System: SQLite 3
Username: <empty>
Password: <your password>
Database: /db/db.sqlite3
```
