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

# vue-learning-SreeCharan-
