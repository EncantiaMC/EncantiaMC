async function fetchServerStatus() {
    const url = 'https://api.mcstatus.io/v2/status/java/encantia.lat';
    const statusElement = document.getElementById('server-status');

    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();

        if (data.online) {
            statusElement.innerHTML = `
                <p><strong>Estado:</strong> En línea</p>
                <p><strong>Jugadores en línea:</strong> ${data.players.online} / ${data.players.max}</p>
                <p><strong>Versión:</strong> ${data.version.name_clean}</p>
                <p><strong>Descripción:</strong> ${data.motd.clean}</p>
                <p><strong>Lista blanca:</strong> Activo</p>
                <div class="player-list">
                    <strong>Jugadores:</strong>
                    ${data.players.list.length > 0 ? 
                        data.players.list.map(player => `<p>${player.name_clean}</p>`).join('') :
                        '<p>No hay jugadores en línea.</p>'}
                </div>
            `;
        } else {
            statusElement.innerHTML = `
                <p><strong>Estado:</strong> Fuera de línea</p>
                <p>El servidor está apagado o en mantenimiento.</p>
            `;
        }
    } catch (error) {
        console.error('Error:', error);
        statusElement.innerHTML = `
            <p><strong>Estado:</strong> Error</p>
            <p>Error al conectar con la API o el servidor está inactivo.</p>
        `;
    }
}

// Llama a la función al cargar la página y luego actualiza cada 10 segundos
fetchServerStatus();
setInterval(fetchServerStatus, 10000); // 10000 ms = 10 segundos