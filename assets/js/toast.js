function showToast(status, message, duration=5) {
    let prevToast = document.querySelectorAll('.toast')
    if (prevToast) {

        prevToast.forEach(t => {
            if (!t.timed) {
                t.timed = true
                t.style.animation = `slide-up .5s ease forwards`
                setTimeout(() => t.remove(), 500);
            }
        })
    }

    let toast = document.createElement('div')
    let left = document.createElement('div')
    let text = document.createElement('div')
    let timer = document.createElement('div')
    toast.style.animation = `slide-right .3s ease`
    timer.style.animation = `move-right ${duration}s linear forwards`

    timer.classList.add('timer')
    toast.classList.add('toast')
    toast.classList.add(status)

    left.classList.add('left')
    let logo = document.createElement('i')
    if (status == 'success') logo.classList.add('fa-solid', 'fa-check')
    else logo.classList.add('fa-solid', 'fa-triangle-exclamation')
    
    text.classList.add('text')
    text.innerText = message

    let close = document.createElement('i')
    close.classList.add('fa-solid', 'fa-xmark')
    close.onclick = () => closeToast()

    left.appendChild(logo)
    left.appendChild(text)
    
    toast.appendChild(left)
    toast.appendChild(close)
    toast.appendChild(timer)

    document.body.appendChild(toast)

    let timeout =  setTimeout(closeToast, duration*1000);

    function closeToast() {
        clearTimeout(timeout)
        toast.style.animation = `slide-left .3s ease forwards`
        setTimeout(() => toast.remove(), 300)
    }
}