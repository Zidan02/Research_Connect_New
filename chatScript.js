const chatbotToggler = document.querySelector(".chatbot-toggler");
const closeBtn = document.querySelector(".close-btn");
const chatInput = document.querySelector(".chat-input textarea");
const sendChatbtn = document.querySelector(".chat-input span");
const chatbox = document.querySelector(".chatbox");

let userMessage = null; // Variable to store user's message
const API_KEY = ""; // Paste API key her
const inputInitHeight = chatInput.scrollHeight;

const createChatLi = (message, className) => {
    //Create a chat <li> element with passed message and class name
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    let chatContent = className === "outgoing" ? `<p></p>` : `<span class="material-symbols-outlined">smart_toy</span><p></p>`;
    chatLi.innerHTML = chatContent;
    chatLi.querySelector("p").textContent = message;
    return chatLi; // return chat <li> element
};

const generateResponse = incomingChatli => {
    const messageElement = incomingChatli.querySelector("p");

    // Manually handling chat messages
    const chatList = [
        { input: "Hi", output: "Hi" },
        { input: "Hey", output: "Hi" },
        { input: "Hello", output: "Hi" },
        { input: "How are you?", output: "I'm good. How about you?" },
        { input: "I am good", output: "Nice. What about you?" },
        { input: "I am good. What about you?", output: "I'm good. How about you?" },
        { input: "I am interested in research papers", output: "Sure, what kind of research papers do you want to read?" },
        { input: "I want to read research papers", output: "Great. What subject do you want to read?" },
        { input: "I am interested in physics", output: "Great. What subject do you want to read?" },
        { input: "I am interested in physics research", output: "Great. What subject do you want to read?" },
        { input: "I am interested in chemistry", output: "Great. What subject do you want to read?" },
        { input: "I am interested in chemistry research", output: "Great. What subject do you want to read?" },
    ];

    // Check if the list contains any regex matches
    const matchChat = chatList.find(chat => {
        // Do case insensitive matching
        const regex = new RegExp(chat.input, "gi");
        return regex.test(userMessage);
    });

    if (matchChat) {
        messageElement.textContent = matchChat.output;
    } else {
        messageElement.classList.add("error");
        messageElement.textContent = "I'm sorry, I don't have an answer for that.";
    }

    // Scroll to the bottom of the chatbox
    chatbox.scrollTo(0, chatbox.scrollHeight);
};

const handleChat = () => {
    userMessage = chatInput.value.trim(); // Get user entered message and remove extra whitespace
    if (!userMessage) return;

    // Clear the input textarea and set its height to default
    chatInput.value = "";
    chatInput.style.height = `${inputInitHeight}px`;

    // Append the user's message to the chatbox
    const outgoingChatli = createChatLi(userMessage, "outgoing");
    chatbox.appendChild(outgoingChatli);
    chatbox.scrollTo(0, chatbox.scrollHeight);

    setTimeout(() => {
        // Display "Typing..." message while waiting for the response
        const incomingChatli = createChatLi("Typing...", "incoming");
        chatbox.appendChild(incomingChatli);
        generateResponse(incomingChatli);
    }, 600);
};

chatInput.addEventListener("input", () => {
    // Adjust the height of the input textarea based on its content
    chatInput.style.height = `${inputInitHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});

chatInput.addEventListener("keydown", e => {
    // If Enter key is pressed without the Shift key and the window
    // width is greater than 800px, handle the chat
    if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
        e.preventDefault();
        handleChat();
    }
});

sendChatbtn.addEventListener("click", handleChat);
closeBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));
