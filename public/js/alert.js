function showToast() {
    const toast = document.getElementById('toast');
    toast.classList.remove('hidden');

    setTimeout(() => {
        toast.classList.add('hidden');
    }, 3000);
}

function closeToast() {
    document.getElementById('toast').classList.add('hidden');
}

showToast()
