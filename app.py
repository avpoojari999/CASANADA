from flask import Flask, render_template
import os

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

if __name__ == '__main__':
    # Adjusted app.run to avoid reloader and debug issues in restricted environments
    app.run(use_reloader=False)