from flask import Flask, render_template
from flask_mysqldb import MySQL

app = Flask(__name__)

# MySQL configurations
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'club_portal'

mysql = MySQL(app)

@app.route('/')
def index():
    try:
        # Connect to MySQL database using Flask-MySQL extension
        cursor = mysql.connection.cursor()

        # Execute a query to retrieve data
        cursor.execute('SELECT * FROM mchs_organizations')  # Replace with your table name
        club_data = cursor.fetchall()

        # Close the cursor
        cursor.close()

        # Render HTML template with data
        return render_template('index.html', club_data=club_data)

    except Exception as e:
        print(f"Error: {e}")
        return "Error connecting to MySQL"

if __name__ == '__main__':
    app.run(host='localhost', port=5000)