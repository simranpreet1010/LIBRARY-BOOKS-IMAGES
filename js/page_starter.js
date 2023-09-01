const door = document.getElementById('door');
const btnAccess = document.getElementById('btnAccess');
const mainContent = document.getElementById('main-content');

btnAccess.addEventListener('click', () => {
  door.style.transform = 'rotateY(-90deg)';
  door.style.width = 0;
  door.style.height = 'auto';
  mainContent.classList.remove('startup-hidden');
  setTimeout(() => {
    mainContent.style.opacity = 1;
    mainContent.style.transform = 'translateY(0)';
  }, 500);
});
