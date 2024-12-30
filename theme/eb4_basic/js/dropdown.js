const categoryData = {
    "Electronics": {
        "Home Appliances": ["Electric Iron", "Refrigerator", "Television"],
        "Kitchen Appliances": ["Electric Kettle", "Hot Plate", "Rice Cooker"],
        "Other Appliances": ["Wi-Fi", "Stabilizer", "Decoder"]
    },
    "Clothing": {
        "Men's Wear": ["Trousers", "Men's Suit", "Tie"],
        "Women's Wear": ["Bikini", "Palazzo", "Dress"],
        "Unisex": ["Hoodie", "Socks", "Sweater"]
    },
    "Accessories": {
        "Watches": ["G-Shock", "I-Watch", "Givendi"],
        "Bags": ["Gucci", "Fendi", "D&G"],
        "Jewelry": ["Ring", "Necklace", "Bracelet"]
    }
};

document.addEventListener('DOMContentLoaded', function() {
    const parentList = document.getElementById('parent-categories');
    const childList = document.getElementById('child-categories');
    const grandchildList = document.getElementById('grandchild-categories');

    // Initialize categories
    // Modified JavaScript for parent categories
    function initializeCategories() {
        // Load parent categories
        Object.keys(categoryData).forEach((parent, index) => {
            const li = document.createElement('li');
            li.innerHTML = `
            <a href="javascript:void(0);" class="category-link">
                <span class="category-text">${parent}</span>
                <i class="fas fa-angle-right"></i>
            </a>
        `;
            li.dataset.category = parent;
            if (index === 0) li.classList.add('active');
            parentList.appendChild(li);
        });

        // Load initial child categories
        loadChildCategories(Object.keys(categoryData)[0]);

        // Set up event listeners
        setupEventListeners();
    }

    function loadChildCategories(parent) {
        childList.innerHTML = '';
        const children = categoryData[parent];

        Object.keys(children).forEach((child, index) => {
            const li = document.createElement('li');
            li.innerHTML = `
            <a href="javascript:void(0);" class="category-link">
                <span class="category-text">${child}</span>
                <i class="fas fa-angle-right"></i>
            </a>
        `;
            li.dataset.category = child;
            if (index === 0) {
                li.classList.add('active');
                loadGrandchildCategories(parent, child);
            }
            childList.appendChild(li);
        });
    }

    function loadGrandchildCategories(parent, child) {
        grandchildList.innerHTML = '';
        const grandchildren = categoryData[parent][child];

        grandchildren.forEach(grandchild => {
            const li = document.createElement('li');
            li.innerHTML = `
            <a href="javascript:void(0);" class="category-link">
                <span class="category-text">${grandchild}</span>
            </a>
        `;
            grandchildList.appendChild(li);
        });
    }

    function setupEventListeners() {
        // Parent category selection
        parentList.addEventListener('click', (e) => {
            const listItem = e.target.closest('li');
            if (!listItem) return;

            parentList.querySelectorAll('li').forEach(li => li.classList.remove('active'));
            listItem.classList.add('active');
            loadChildCategories(listItem.dataset.category);
        });

        // Child category selection
        childList.addEventListener('click', (e) => {
            const listItem = e.target.closest('li');
            if (!listItem) return;

            childList.querySelectorAll('li').forEach(li => li.classList.remove('active'));
            listItem.classList.add('active');
            const parent = parentList.querySelector('.active').dataset.category;
            loadGrandchildCategories(parent, listItem.dataset.category);
        });

        grandchildList.addEventListener('click', (e) => {
            const listItem = e.target.closest('li');
            if (!listItem) return;

            // Remove active class from all grandchild items
            grandchildList.querySelectorAll('li').forEach(li => li.classList.remove('active'));
            // Add active class to clicked item
            listItem.classList.add('active');

            // Get the selected category hierarchy
            const selectedParent = parentList.querySelector('.active .category-text').textContent;
            const selectedChild = childList.querySelector('.active .category-text').textContent;
            const selectedGrandchild = listItem.querySelector('.category-text').textContent;

            console.log('Selected category path:', {
                parent: selectedParent,
                child: selectedChild,
                grandchild: selectedGrandchild
            });

            const categoryText = listItem.querySelector('.category-text').textContent;
            console.log('Selected:', categoryText);
        });
    }

    // Initialize the navigation
    initializeCategories();
});