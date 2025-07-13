from flask import Flask

app = Flask(__name__)

@app.route("/")
def hello():
    return """
    <html>
    <head>
    <style>
    .jump {
        display: inline-block;
        font-size: 2em;
        animation: jump 1s infinite;
    }
    @keyframes jump {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-30px); }
    }
    </style>
    </head>
    <body>
        <span class="jump">Hello World</span>
    </body>
    </html>
    """

if __name__ == "__main__":
    app.run(debug=True)
