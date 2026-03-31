# Тестовое задание (Junior PHP Developer)

## Задача: Разработка простого API для управления задачами

Требуется реализовать **REST API** для управления списком задач (**To-Do List**) на **PHP** с
использованием **Laravel**.

## Требования к реализации:

1. **Создать Laravel-проект** (если нет опыта с Laravel, можно на чистом PHP).
2. Реализовать API с CRUD-операциями для задач:
   * **Создание задачи**: <span style="color:#188038">POST /tasks</span> (поля: <span style="color:#188038">title, description, status</span>).
   * **Просмотр списка задач**: <span style="color:#188038">GET /tasks</span> (возвращает все задачи).
   * **Просмотр одной задачи**: <span style="color:#188038">GET /tasks/{id}</span>.
   * **Обновление задачи**: <span style="color:#188038">PUT /tasks/{id}</span>.
   * **Удаление задачи**: <span style="color:#188038">DELETE /tasks/{id}</span>.
3. Валидация данных (например, <span style="color:#188038">title</span> не должен быть пустым).
4. Использовать **SQLite** или **MySQL** в качестве базы данных.
5. Код должен быть загружен в **GitHub/GitLab/Bitbucket**.
