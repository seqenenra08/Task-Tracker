# Task Tracker CLI

**Task Tracker** is a simple command-line interface (CLI) application designed to help you track and manage your tasks. You can add, update, delete, and list tasks with varying statuses (to-do, in-progress, and done). Tasks are stored in a JSON file that is automatically created if it does not already exist.

This project allows you to practice programming skills, including working with the filesystem, handling user inputs, and building a basic CLI application.

## Features

- **Add Tasks**: Add new tasks with a description.
- **Update Tasks**: Update the description of an existing task.
- **Delete Tasks**: Remove a task using its ID.
- **Change Status**: Mark tasks as "in-progress" or "done".
- **List Tasks**: 
  - List all tasks.
  - Filter tasks by their status (`to do`, `in-progress`, `done`).
  
Tasks are stored in a `task.json` file in the project directory.

## Task Properties

Each task includes the following properties:
- `id`: A unique identifier for the task.
- `description`: A short description of the task.
- `status`: The current status of the task (`to do`, `in-progress`, or `done`).
- `createdAt`: The date and time when the task was created.
- `updatedAt`: The date and time when the task was last updated.

---

## Requirements

- PHP 8.0 or higher (for the provided example).
- A programming language of your choice (e.g., Python, JavaScript, PHP).
- The program should accept user inputs as command-line arguments.
- The tasks are stored in a `task.json` file, which should be created automatically if it doesn't exist.
- **No external libraries or frameworks** should be used.

---

## Available Commands

### 1. `add`
Add a new task by providing a description. The task will be assigned a unique ID and a status of `to do`.

**Usage:**
```bash
add "Task description"
```

**Example:**
```bash
add "Buy groceries"
```
Output:
```
Task added successfully (ID: 1)
```

---

### 2. `update`
Update an existing task using its ID. You can modify the description of the task.

**Usage:**
```bash
update <id> "New task description"
```

**Example:**
```bash
update 1 "Buy groceries and cook dinner"
```

---

### 3. `delete`
Delete a task by its ID.

**Usage:**
```bash
delete <id>
```

**Example:**
```bash
delete 1
```

---

### 4. `mark-in-progress`
Mark a task as "in-progress".

**Usage:**
```bash
mark-in-progress <id>
```

**Example:**
```bash
mark-in-progress 1
```

---

### 5. `mark-done`
Mark a task as "done".

**Usage:**
```bash
mark-done <id>
```

**Example:**
```bash
mark-done 1
```

---

### 6. `list`
List all tasks. You can filter the tasks by their status (all, done, in-progress, or to-do).

**Usage:**
```bash
list [status]
```

**Examples:**
```bash
list
list done
list in-progress
list todo
```

---

### 7. `exit`
Exit the program.

**Usage:**
```bash
exit
```

---

## How to Run the Program

1. Ensure PHP is installed on your system (for the PHP version).
2. Download the program as `taskTracker.php` (or the file in your chosen language).
3. Run the program from the terminal:
   ```bash
   php taskTracker.php
   ```
4. Interact with the program by entering the desired commands.

---

## JSON File (`task.json`)

- The program stores tasks in a JSON file called `task.json`.
- If the file does not exist, it will be created automatically.
- The file will contain an array of task objects, each with the following structure:

```json
[
  {
    "id": 1,
    "description": "Buy groceries",
    "status": "to do",
    "createdAt": "2025-01-08T00:00:00Z",
    "updatedAt": "2025-01-08T00:00:00Z"
  }
]
```

---

## Getting Started

### Set Up Your Development Environment

1. Choose a programming language (e.g., Python, JavaScript, PHP).
2. Install a code editor (e.g., VSCode, PyCharm).
3. Create a project directory for your Task Tracker CLI.

### Implement Features

Start by implementing one feature at a time:
- Implement task addition first.
- Then, implement listing tasks.
- Proceed with updating, marking as in progress, and finally deleting tasks.

### Testing

Test each feature individually:
- Ensure tasks are added and stored correctly.
- Verify the task list updates correctly when tasks are marked as in-progress or done.
- Test deleting and updating tasks.

---

## Conclusion

By completing this project, you will have developed a simple and effective tool to manage tasks. It will also provide a solid foundation for more complex CLI applications and programming projects.

Happy coding! 🚀