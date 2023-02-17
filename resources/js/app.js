import './bootstrap';
import './sidebar'

// dark mode
import './darkmode'

import * as bootstrap from 'bootstrap'

// tooltips
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
