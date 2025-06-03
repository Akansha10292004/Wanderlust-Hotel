document.addEventListener('DOMContentLoaded', () => {
  const addBtn = document.getElementById('addPropertyBtn');
  const user = JSON.parse(localStorage.getItem('user'));
  const welcomed = localStorage.getItem('welcomed');

  if (user && !welcomed) {
    showNotification(`Welcome to Wanderlust, ${user.name}`);
    localStorage.setItem('welcomed', 'true');
  }

  if (addBtn) {
    addBtn.onclick = () => {
      const user = JSON.parse(localStorage.getItem('user'));
      if (!user) {
        alert('Please login first to add property!');
        window.location.href = 'login.html';
      } else {
        window.location.href = 'add-property.html';
      }
    };
  }

  const properties = JSON.parse(localStorage.getItem('properties')) || [];
  const list = document.getElementById('propertyList');

  if (list) {
    list.innerHTML = ''; // clear duplicates
    properties.forEach((p, index) => {
      const div = document.createElement('div');
      div.className = 'property-card';
      div.innerHTML = `
        <img src="${p.image}" alt="Property">
        <div class="content">
          <h3>${p.name}</h3>
          <p>${p.desc}</p>
          <p><strong>Price:</strong> $${p.price}</p>
          <p><strong>Location:</strong> ${p.location}, ${p.country}</p>
          <button onclick="alert('Booking request sent to ${p.owner}')">Book Now</button>
          ${user && user.name === p.owner ? `
            <button onclick="editProperty(${index})">Edit</button>
            <button onclick="deleteProperty(${index})">Delete</button>
          ` : ''}
        </div>
      `;
      list.appendChild(div);
    });
  }
});

function showNotification(msg) {
  const note = document.getElementById('notification');
  if (!note) return;
  note.textContent = msg;
  note.style.display = 'block';
  setTimeout(() => (note.style.display = 'none'), 3000);
}

function logout() {
  localStorage.removeItem('user');
  localStorage.removeItem('welcomed');
  location.reload();
}

// 🔐 Auth prompt for Edit/Delete
function promptAuth(callback) {
  const email = prompt("Enter your email:");
  const password = prompt("Enter your password:");
  const user = JSON.parse(localStorage.getItem('user'));

  if (user && email === user.email && password === user.password) {
    callback();
  } else {
    alert("Invalid email or password!");
  }
}

// ✏️ Edit Property
function editProperty(index) {
  promptAuth(() => {
    const properties = JSON.parse(localStorage.getItem('properties')) || [];
    const p = properties[index];

    const newName = prompt("Edit property name:", p.name);
    const newDesc = prompt("Edit description:", p.desc);
    const newPrice = prompt("Edit price:", p.price);

    if (newName && newDesc && newPrice) {
      p.name = newName;
      p.desc = newDesc;
      p.price = newPrice;
      properties[index] = p;
      localStorage.setItem('properties', JSON.stringify(properties));
      alert("Property updated successfully!");
      location.reload();
    }
  });
}

// 🗑️ Delete Property
function deleteProperty(index) {
  promptAuth(() => {
    const properties = JSON.parse(localStorage.getItem('properties')) || [];
    if (confirm("Are you sure you want to delete this property?")) {
      properties.splice(index, 1);
      localStorage.setItem('properties', JSON.stringify(properties));
      alert("Property deleted successfully!");
      location.reload();
    }
  });
}
