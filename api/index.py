from flask import Flask, render_template, send_from_directory

app = Flask(__name__, static_folder='../static', template_folder='../templates')

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/static/<path:filename>')
def static_files(filename):
    return send_from_directory(app.static_folder, filename)

# Vercel handler
def handler(environ, start_response):
    return app(environ, start_response) 