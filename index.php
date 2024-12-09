<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Information Management System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
}

main {
    padding: 2rem;
}

.form-section, .table-section {
    margin-bottom: 2rem;
    background-color: #fff;
    padding: 1rem;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin: 0.5rem 0 0.2rem;
}

form input, form button {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
}

form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 0.8rem;
    text-align: left;
}

table th {
    background-color: #007bff;
    color: #fff;
}

table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
    const drugForm = document.getElementById('drugForm');
    const drugTableBody = document.querySelector('#drugTable tbody');
    let recordCounter = 1;

    drugForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const drugName = document.getElementById('drugName').value;
        const drugCategory = document.getElementById('drugCategory').value;
        const quantity = document.getElementById('quantity').value;
        const price = document.getElementById('price').value;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${recordCounter++}</td>
            <td>${drugName}</td>
            <td>${drugCategory}</td>
            <td>${quantity}</td>
            <td>${price}</td>
        `;

        drugTableBody.appendChild(row);
        drugForm.reset();
    });
});

            </script>
</head>
<body>
    <header>
        <h1>Drug Information Management System</h1>
    </header>
    <main>
        <section class="form-section">
            <h2>Add Drug Information</h2>
            <form id="drugForm">
                <label for="drugName">Drug Name:</label>
                <input type="text" id="drugName" name="drugName" required>

                <label for="drugCategory">Category:</label>
                <input type="text" id="drugCategory" name="drugCategory" required>

                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>

                <label for="price">Price (USD):</label>
                <input type="text" id="price" name="price" required>

                <button type="submit">Add Drug</button>
            </form>
        </section>

        <section class="table-section">
            <h2>Drug Records</h2>
            <table id="drugTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Drug Name</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be dynamically added here -->
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
