document.getElementById('startRace').addEventListener('click', startRace);

function startRace() {
    const betAmount = parseInt(document.getElementById('betAmount').value);
    const chosenHorse = parseInt(document.getElementById('horse').value);
    
    let horses = [
        { id: 1, element: document.getElementById('horse1'), position: 0 },
        { id: 2, element: document.getElementById('horse2'), position: 0 },
        { id: 3, element: document.getElementById('horse3'), position: 0 }
    ];
    
    const raceInterval = setInterval(() => {
        horses.forEach(horse => {
            horse.position += Math.random() * 10;
            horse.element.style.left = horse.position + 'px';
        });
        
        const winner = horses.find(horse => horse.position >= window.innerWidth - 100);
        if (winner) {
            clearInterval(raceInterval);
            displayResult(winner.id, chosenHorse, betAmount);
        }
    }, 100);
}

function displayResult(winningHorse, chosenHorse, betAmount) {
    const resultDiv = document.getElementById('result');
    if (winningHorse === chosenHorse) {
        resultDiv.textContent = `Congratulations! Horse ${winningHorse} won! You won $${betAmount * 2}!`;
    } else {
        resultDiv.textContent = `Sorry, Horse ${winningHorse} won. You lost $${betAmount}.`;
    }
}
