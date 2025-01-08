# Task Manager

A simple task manager built with PHP that allows you to add, list, update, delete, and change the status of tasks. Tasks are stored in a JSON file (`task.json`).

## Features

- **Add Tasks**: Add tasks with a description.
- **List Tasks**: Display all tasks or filter them by status (`to do`, `in-progress`, `done`).
- **Update Tasks**: Update the description of a specific task.
- **Delete Tasks**: Delete a task using its ID.
- **Change Status**: 
  - `mark-in-progress`: Mark a task as "in-progress".
  - `mark-done`: Mark a task as "done".
- **File Support**: Automatically creates the `task.json` file if it doesn't exist.

---

## Requirements

- PHP 8.0 or higher.
- The `task.json` file will be created automatically if it doesn't exist.

---

## Available Commands

### 1. `add` 
Add a new task. The description must be enclosed in double quotes.

**Usage:**
```bash
add "Task description"
```

**Example:**
```bash
add "Buy milk"
```

---

### 2. `list`
List tasks. You can filter by status (`to do`, `in-progress`, `done`).

**Usage:**
```bash
list [status]
```

**Example:**
```bash
list
list done
list in-progress
```

---

### 3. `update`
Update a task's description using its ID.

**Usage:**
```bash
update <id> "New description"
```

**Example:**
```bash
update 123 "Buy bread"
```

---

### 4. `delete`
Delete a task by its ID.

**Usage:**
```bash
delete <id>
```

**Example:**
```bash
delete 123
```

---

### 5. `mark-in-progress`
Mark a task as "in-progress".

**Usage:**
```bash
mark-in-progress <id>
```

**Example:**
```bash
mark-in-progress 123
```

---

### 6. `mark-done`
Mark a task as "done".

**Usage:**
```bash
mark-done <id>
```

**Example:**
```bash
mark-done 123
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

1. Make sure PHP is installed on your system.
2. Save the program as `taskManager.php`.
3. Run the program from the terminal:
   ```bash
   php taskManager.php
   ```

---

## Additional Notes

- If the `task.json` file does not exist, the program will create it automatically.
- Use valid commands; otherwise, you'll receive an "Invalid command" message.

---

Enjoy organizing your tasks! 🚀