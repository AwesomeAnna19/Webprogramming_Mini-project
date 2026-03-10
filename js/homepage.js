// I watched this video to know how to make tabs: https://youtu.be/5L6h_MrNvsk?si=-IscZ1Q4G3Sr1wjp
const tabs = document.querySelectorAll('[data-tab-target]');
const tabContents = document.querySelectorAll('[data-tab-content]');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget);
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active');
        });
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });
        target.classList.add('active');
        tab.classList.add('active');
    });
});