const categoryData = {
    "뷰티/피부": {
        "Home Appliances": ["Electric Iron", "Refrigerator", "Television"],
        "Kitchen Appliances": ["Electric Kettle", "Hot Plate", "Rice Cooker"],
        "Other Appliances": ["Wi-Fi", "Stabilizer", "Decoder"]
    },
    "스킨케어": {
        "남성전용 화장품": ["Trousers", "Men's Suit", "Tie"],
        "에센스/세럼": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"],
        "디지털 가전": ["Hoodie", "Socks", "Sweater"],
        "향수": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"],
        "크림/오일": ["Bikini", "Palazzo", "Dress"],
        "생활/건강": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"]
    },
    "클렌징": {
        "Watches": ["G-Shock", "I-Watch", "Givendi"],
        "Bags": ["Gucci", "Fendi", "D&G"],
        "Jewelry": ["Ring", "Necklace", "Bracelet"]
    },
    "신선푸드": {
        "남성전용 화장품": ["Trousers", "Men's Suit", "Tie"],
        "에센스/세럼": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"],
        "디지털 가전": ["Hoodie", "Socks", "Sweater"],
        "향수": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"],
        "크림/오일": ["Bikini", "Palazzo", "Dress"],
        "생활/건강": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"]
    },
    "메이크업": {
        "Men's Wear": ["Trousers", "Men's Suit", "Tie"],
        "Women's Wear": ["Bikini", "Palazzo", "Dress"],
        "Unisex": ["Hoodie", "Socks", "Sweater"]
    },
    "스킨/토너/미스트": {
        "Watches": ["G-Shock", "I-Watch", "Givendi"],
        "Bags": ["Gucci", "Fendi", "D&G"],
        "Jewelry": ["Ring", "Necklace", "Bracelet"]
    },
    "가공푸드": {
        "Home Appliances": ["Electric Iron", "Refrigerator", "Television"],
        "Kitchen Appliances": ["Electric Kettle", "Hot Plate", "Rice Cooker"],
        "Other Appliances": ["Wi-Fi", "Stabilizer", "Decoder"]
    },
    "헤어/바디": {
        "남성전용 화장품": ["Trousers", "Men's Suit", "Tie"],
        "에센스/세럼": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"],
        "디지털 가전": ["Hoodie", "Socks", "Sweater"],
        "향수": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"],
        "크림/오일": ["Bikini", "Palazzo", "Dress"],
        "생활/건강": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"]
    },
    "로션/에멀젼": {
        "Watches": ["G-Shock", "I-Watch", "Givendi"],
        "Bags": ["Gucci", "Fendi", "D&G"],
        "Jewelry": ["Ring", "Necklace", "Bracelet"]
    },
    "패션잡화": {
        "남성전용 화장품": ["Trousers", "Men's Suit", "Tie"],
        "에센스/세럼": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"],
        "디지털 가전": ["Hoodie", "Socks", "Sweater"],
        "향수": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"],
        "크림/오일": ["Bikini", "Palazzo", "Dress"],
        "생활/건강": ["뷰티기기/소품", "마스크/팩/스틱제품", "가구/인테리어","선케어(자외선차단)", "자동차/공구", "화장품세트","취미/여행", "추석선물"]
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