import './bootstrap';
import '../css/app.css';
import axios from 'axios';

const qs = (s) => document.querySelector(s);
const escapeHtml = (str) => String(str)
  .replace(/&/g, '&amp;')
  .replace(/</g, '&lt;')
  .replace(/>/g, '&gt;');

function createTaskElement(task) {
  const li = document.createElement('li');
  li.className = 'p-4 bg-surface-800 rounded flex items-start gap-4';
  li.dataset.id = task.id;

  const checkbox = document.createElement('input');
  checkbox.type = 'checkbox';
  checkbox.checked = task.completed;
  checkbox.className = 'mt-1';

  const content = document.createElement('div');
  const desc = task.description ? `<div class="text-sm text-muted">${escapeHtml(task.description)}</div>` : '';
  content.innerHTML = `<div class="font-medium">${escapeHtml(task.title)}</div>${desc}`;

  const deleteBtn = document.createElement('button');
  deleteBtn.className = 'ml-auto text-sm text-red-400';
  deleteBtn.textContent = 'Verwijder';

  checkbox.addEventListener('change', async (e) => {
    await axios.patch(`/tasks/${task.id}`, { completed: e.target.checked });
  });

  deleteBtn.addEventListener('click', async () => {
    if (!confirm('Verwijder taak?')) return;
    await axios.delete(`/tasks/${task.id}`);
    li.remove();
  });

  li.appendChild(checkbox);
  li.appendChild(content);
  li.appendChild(deleteBtn);
  return li;
}

async function loadTasks() {
  try {
    const res = await axios.get('/tasks');
    const list = qs('#tasks-list');
    list.innerHTML = '';
    res.data.forEach(task => list.appendChild(createTaskElement(task)));
  } catch (error) {
    console.error('Error loading tasks:', error);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const form = qs('#new-task-form');
  const titleInput = qs('#new-task-title');

  form?.addEventListener('submit', async (ev) => {
    ev.preventDefault();
    const title = titleInput.value.trim();
    if (!title) return;

    try {
      const res = await axios.post('/tasks', { title });
      titleInput.value = '';
      qs('#tasks-list').prepend(createTaskElement(res.data));
    } catch (error) {
      console.error('Error creating task:', error);
    }
  });

  loadTasks();
});

