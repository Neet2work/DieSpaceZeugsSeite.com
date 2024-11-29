// scripts.js

function openGitHubLink(event) {
    // Prevent the default form submission
    event.preventDefault();

    // GitHub URL
    const githubURL = "https://github.com/Neet2work/DieSpaceZeugsSeite.com.git";

    // Popup window content
    const popupContent = `
        <html>
            <head>
                <title>GitHub Link</title>
                <style>
                    body {
                        background-image : url('./assets/image/space.jpg');
                        background-size: cover;
                        background-repeat: no repeat;
                        background-position: center;
                        height: 300;
                        font-family: Arial, sans-serif;
                        margin: 20px;
                        text-align: center;
                    }
                    a {
                        color: #007bff;
                        text-decoration: none;
                        font-weight: bold;
                    }
                    a:hover {
                        text-decoration: underline;
                    }
                    button {
                        margin-top: 20px;
                        padding: 10px 20px;
                        background-color: gold;
                        border: none;
                        border-radius: 5px;
                        font-weight: bold;
                        cursor: pointer;
                    }
                </style>
            </head>
            <body>
                <h2>Besuche das GitHub Repository</h2>
                <p>
                    <a href="${githubURL}" target="_blank">${githubURL}</a>
                </p>
                <button onclick="window.close()">Schließen</button>
            </body>
        </html>
    `;

    // Open the popup window
    const popupWindow = window.open("", "GitHubLinkPopup", "width=500,height=400");

    // Write the content into the popup window
    popupWindow.document.open();
    popupWindow.document.write(popupContent);
    popupWindow.document.close();
}
