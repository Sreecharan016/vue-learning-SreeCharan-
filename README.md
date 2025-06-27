Date:27/06/2025
work on basic vue cdn way ,component and props,lists and conditional examples

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3"></script>
</head>
<body>
    <div id="app">

        {{name}}
    </div>
    <script>
        Vue.createApp({
            data()
            {
                return {
                    name:"charan"
                }
            }

        }).mount('#app')


    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Vue CDN - Components and Props</title>
  <script src="https://unpkg.com/vue@3"></script>
</head>
<body>
  <div id="app">
    <!-- Passing props to the child component -->
    <user-card name="Alice" age="25"></user-card>
    <user-card name="Bob" age="30"></user-card>
  </div>

  <script>
    const { createApp } = Vue;

    // Define a component
    const UserCard = {
      props: ['name', 'age'],
      template: `
        <div style="border: 1px solid #ccc; padding: 10px; margin: 5px;">
          <h3>User Info</h3>
          <p>Name: {{ name }}</p>
          <p>Age: {{ age }}</p>
        </div>
      `
    };

    // Create Vue app
    const app = createApp({});

    // Register the component
    app.component('user-card', UserCard);

    // Mount the app
    app.mount('#app');
  </script>
</body>
</html>
<div id="app">
  <h3>My Tasks</h3>
  <ul>
    <li v-for="task in tasks" :key="task.id">
      <span v-if="task.done">✅</span>
      <span v-else>⬜</span>
      {{ task.name }}
    </li>
  </ul>
</div>

<script>
const { createApp } = Vue;

createApp({
  data() {
    return {
      tasks: [
        { id: 1, name: 'Learn Vue', done: true },
        { id: 2, name: 'Build App', done: false },
        { id: 3, name: 'Deploy App', done: false }
      ]
    };
  }
}).mount('#app');
</script>


# vue-learning-SreeCharan-
